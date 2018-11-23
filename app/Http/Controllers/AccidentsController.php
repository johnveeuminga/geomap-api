<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Accident;
use App\Models\AccidentPhotos;
use App\Http\Resources\Accident as AccidentResource;
use Carbon\Carbon;
use Image;

class AccidentsController extends Controller
{
    public function __construct() {
        if (request()->wantsJson()) {
            $this->middleware('api');
        }else{
            $this->middleware('auth');
        }
    }
    public function index()
    {
        if (request()->wantsJson()) {
            $accidents = Accident::paginate(10);
            return AccidentResource::collection($accidents); 
        }else{
            $accidents = Accident::orderBy('created_at', 'desc')->paginate(10);
            return view('accidents.index')->withAccidents($accidents);
        }
    }
    public function store(Request $request){
           $accident = $request->isMethod('put') ? Accident::findOrFail($request->id) : new Accident;      // Check if PUT OR POST

           $accident->user_id = 1;                                                                         // Change upon deployment
           $accident->name = $request->name;
           $accident->description = $request->description;
           $accident->lat = $request->lat;
           $accident->lng = $request->lng;

           if ($request->hasFile('accident_image')) {
               $image = $request->file('accident_image');
               $fileName = time() . "." . $image->getClientOriginalExtension();
               $location = public_path('uploads/accidents/' . $fileName);
               Image::make($image)->resize(1000, 1200)->save($location);
               // Saving Single Image
               $newImage = new AccidentPhotos;
               $newImage->accident_id = $accident->id;
               $newImage->mime = $request->mime;
               $newImage->filename = $fileName;
               $newImage->save();
           }
           $accident->created_at = $request->date ? Carbon::parse($request->date) : Carbon::now();
           

           if ($accident->save()) {
               return new AccidentResource($accident);
           }
           
    }

    public function show($id){
        if (request()->wantsJson()) {                                                                   // check if it is an API call
            $accident = Accident::findOrFail($id);                                                      // Get a single Accident
            return new AccidentResource($accident);                                                     // pass it as a resource
        }else{
            $accident = Accident::findOrFail($id);                                                      // Get a single Accident
            return view('accidents.show')->withAccident($accident);
        }

    }
    public function destroy($id){
        if (request()->wantsJson()) {                                                                   // check if it is an API call
            $accident = Accident::findOrFail($id);                                                      // pass it as a resource
            if ($accident->delete()){                                                                   
                return new AccidentResource($accident);                                                 // Return the DELETED asJSON    
            }                                                        
        }
    }

}
