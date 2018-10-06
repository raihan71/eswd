<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Articles;
use Auth;


class ArticlesController extends Controller
{
    public function index()
    {
    	$articles = Articles::all();
    	// dd($auth);
    	return $articles;
    }

    public function store(Request $request)
    {
    	$auth 	  = Auth::user()->id;

    	$article 			= new Articles;
    	$article->title 	= $request->title;
    	$article->desc 		= $request->desc;
    	$article->user_id 	= $auth;
    	$article->save();
    	return $article;
    	// return response()->json($article);
    }
}
