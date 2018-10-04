<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PerpustakaanController extends Controller
{
    public function index()
    {
    	return view('perpustakaan.index');
    }

    public function getBuku(){

    }
    public function getBukuDetail(){

    }
    
    public function storeBuku(){

    }
    
    public function storePinjam(){

    }
    
}
