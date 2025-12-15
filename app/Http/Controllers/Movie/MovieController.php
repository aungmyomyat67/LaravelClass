<?php

namespace App\Http\Controllers\Movie;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = [
            [ "title" => "Eternal Sunshine", "director" => "Michel Gondry", "years"=> 2004 ],
            [ "title" => "Pride & Prejudice", "director" => "Joe wright", "years"=> 2005 ],
            [ "title" => "The Notebook", "director" => "Nick", "years"=> 2004 ],
            [ "title" => "Gone With The Wind", "director" => "V.Fleming", "years"=> 1939 ],
        ];

        return view('movies.index', ['movies' => $movies]);
    }
}