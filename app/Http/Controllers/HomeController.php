<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class HomeController extends Controller
{
    //
    function show(){
        // retreive all movies data form database
        $movData = Movie::all();
        return view('home', ['movies' => $movData]);
    }
}
