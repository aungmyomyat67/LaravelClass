<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:3',
            'body' => 'required|min:10',
            'category_id' => 'required|integer',
        ]);

        Article::create($validated);

        return redirect()
            ->route('articles.create')
            ->with('success', 'Article created successfully!');
    }
}