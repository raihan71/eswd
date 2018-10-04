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
    	$auth 	  = Auth::user()->id;
    	$articles = Articles::where('user_id',$auth)->get();
    	// dd($auth);
    	return response()->json($articles);
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
