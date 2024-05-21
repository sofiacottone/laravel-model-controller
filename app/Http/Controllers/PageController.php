<?php

namespace App\Http\Controllers;

use App\Models\Movie;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        $data = [
            'movies' => $movies,
        ];
        return view('home', $data);
    }
}
