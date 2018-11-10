<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Accident;
use App\Http\Resources\Accident as AccidentResource;

class AccidentsController extends Controller
{
    // public function __construct() {
    //     $this->middleware('auth');
    // }
    public function index()
    {
        if (request()->wantsJson()) {
            $accidents = Accident::paginate(10);
            return AccidentResource::collection($accidents); 
        }else{
            $accidents = Accident::paginate(10);
            return view('accidents.index')->withAccidents($accidents);
        }
    }
    public function store(Request $request){
        if ($request->isMethod('POST')) {
            // $accident = new Accident;

            $accident->user_id = auth()->user()->id;
            $accident->name = auth()->user()->name;
            $accident->description = $request->description;
            $accident->lng = $request->lng;
            $accident->lat = $request->lat;
            $accident->save();
            return new AccidentResource($accident);
            // dd($request->all());
        }
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
