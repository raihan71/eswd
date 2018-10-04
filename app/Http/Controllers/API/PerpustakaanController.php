<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Book;

class PerpustakaanController extends Controller
{
    public function index()
    {
    	return view('perpustakaan.index');
    }

    public function getBuku(Request $request){
      $data = $request->all();
      $buku = Book::getBuku($data);

      return response()->json($buku);

    }

    public function getBukuDetail(){

    }

    public function storeBuku(){

    }

    public function storePinjam(){

    }

}
