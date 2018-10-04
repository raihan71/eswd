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

      $limit = ['id','judul','penulis','gambar','deskripsi'];

      $buku = Book::getBuku($data,$limit);

      return response()->json($buku);

    }

    public function getBukuDetail(Request $request){
      $data = $request->all();
      $limit = [
        'id','judul','penulis','gambar','deskripsi',
        'subjudul','penerbit','status','created_at',
        'updated_at'
      ];

      $buku = Book::getBuku($data,$limit);

      return response()->json($buku);
    }

    public function storeBuku(Request $request){
      $data = $request->all();

      $response = Book::storeBuku($data);

      return response()->json($response);
    }

    public function storePinjam(){

    }

}
