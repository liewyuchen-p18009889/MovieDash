<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Movie;

class MovieController extends Controller
{
    //
    function displayMovieDetails(Request $req, $movID){
        $movDetails = Movie::where('id', $movID)->get();
        $movExist = Movie::where('id', $movID)->exists();

        return view('movie', ['movies' => $movDetails]);
    }
}
