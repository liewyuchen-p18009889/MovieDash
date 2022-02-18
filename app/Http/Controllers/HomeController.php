<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class HomeController extends Controller
{
    //
    function displayAllMovies(){
        // retreive all movies data form database
        $movData = Movie::all();

        return view('home', ['movies' => $movData]);
    }

    function searchMovies(Request $req){
        $searchInput = $req->input('search');

        $movData = Movie::where('title', 'like', '%'.$searchInput.'%')
                    ->orWhere('genre', 'like', '%'.$searchInput.'%')
                    ->orderByDesc('created_at')->get();
        
        return view('home', ['movies' => $movData]);
    }
}
