<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Articles;
use App\Video;
use Auth;

class ArticlesController extends Controller
{
    public function index()
    {
    	return view('user.articles-index');
    }
}
