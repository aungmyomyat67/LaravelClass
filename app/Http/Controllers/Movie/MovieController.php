<?php

namespace App\Http\Controllers\Movie;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    // public function index()
    // {
    //     $movies = [
    //         [ "title" => "Eternal Sunshine", "director" => "Michel Gondry", "years"=> 2004 ],
    //         [ "title" => "Pride & Prejudice", "director" => "Joe wright", "years"=> 2005 ],
    //         [ "title" => "The Notebook", "director" => "Nick", "years"=> 2004 ],
    //        [ "title" => "Gone With The Wind", "director" => "V.Fleming", "years"=> 1939 ],
    //    ];

    //   return view('movies.index', ['movies' => $movies]);
    //}
    public function index()
    {
        $moviess = Movie::all();
        // dd($movies);  // Debug all movies

        return view('movies.index', compact('movies'));
    }

    // Show create form
    public function create()
    {
        return view('movies.create');
    }

     // Store new movie
    public function store(Request $request)
    {
        $movie = Movie::create($request->all());
        dd($movie);  // Debug newly created movie

        return redirect()->route('movies.index');
    }

    // Show edit form
    public function edit($id)
    {
        $movie = Movie::find($id);
        return view('movies.edit', compact('movie'));
    }
// Update movie
    public function update(Request $request, $id)
    {
        $movie = Movie::find($id);
        $movie->update($request->all());
        dd($movie);  // Debug updated movie

        return redirect()->route('movies.index');
    }

    // Delete movie
    public function destroy($id)
    {
        $movie = Movie ::find($id);
        $movie ->delete();
        dd("Movie  $id deleted");  // Debug deletion

        return redirect()->route('movies.index');
    }

}