<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Accident;
use App\Http\Resources\Accident as AccidentResource;
use Carbon\Carbon;

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

           $accident->user_id = 1;
           $accident->name = $request->name;
           $accident->description = $request->description;
           $accident->lat = $request->lat;
           $accident->lng = $request->lng;
           $accident->created_at = $request->date ? Carbon::parse($request->date) : Carbon::now();
           

           if ($accident->save()) {
               return new AccidentResource($accident);
           }
            // if ($request->isMethod('POST')) {
            //     $accident = new Accident;

            //     $accident->user_id = 1;
            //     $accident->name = $request->name;
            //     $accident->description = $request->description;
            //     $accident->lng = $request->lng;
            //     $accident->lat = $request->lat;
            //     $accident->save();
            //     return new AccidentResource($accident);
            //     // dd($request->all());
            // }else if($request->isMethod('PUT')){
            //     $accident = Accident::findOrFail($request->id);
            //     dd($accident);
            // }else{
            //     return json('Error');
            // }
       // if (request()->wantsJson()) {
           // $accident = $request->isMethod('put') ? Accident::findOrFail($request->id) : new Accident;      // Check if PUT OR POST

           // $accident->user_id = auth()->user()->id;
           // $accident->name = "asfasf";
           // $accident->description = $request->description;
           // $accident->lat = $request->lat;
           // $accident->lng = $request->lng;

           // if ($accident->save()) {
           //     return new AccidentResource($accident);
           // }
       // }else{

       // }
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
