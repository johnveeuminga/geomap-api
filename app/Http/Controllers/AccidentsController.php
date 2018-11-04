<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accidents;

class AccidentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $accidents = Accidents::all();

        return view('accidents.index', ['accidents' => $accidents]);
    }
}
