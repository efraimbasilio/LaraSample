<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Article;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::all();

        return view('articles.index',compact('articles'));
    }

    public function show($id)
    {
        $article = Article::findorfail($id);

        return view('articles.show',compact('article'));
    }

    public function create()
    {
        return view('articles.create');
    }
}
