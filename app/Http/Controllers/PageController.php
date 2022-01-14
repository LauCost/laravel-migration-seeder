<?php

namespace App\Http\Controllers;

use App\Models\Trip;

class PageController extends Controller
{
    //

    public function index()
    {

        //ddd(Trip::all());

        $trips = Trip::all();
        return view('home', compact('trips'));
    }
}
