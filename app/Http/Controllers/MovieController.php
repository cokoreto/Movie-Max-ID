<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('home', compact('movies'));
    }

    public function library()
    {
        $movies = Movie::with('genre')->get();
        return view('librarymovie.librarymovie', compact('movies'));
    }

    public function show($id)
    {
        $movie = Movie::with('genre')->findOrFail($id);
        return view('librarymovie.showmovies', compact('movie'));
    }
}
