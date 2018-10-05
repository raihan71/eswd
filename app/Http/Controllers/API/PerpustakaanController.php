<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
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

      $validator = Validator::make($request->all(),[
        'judul' => 'required|max:100',
        'penulis' => 'required|max:50',
        'gambar' => 'required|max:50',
        'deskripsi' => 'required',
        'subjudul' => 'required|max:50',
        'penerbit' => 'required|max:30',
        'status' => 'required',
      ]);

      if ($validator->fails()) {
        return response()->json(['error'=>$validator->errors()], 401);
      }

        $data = $request->all();
        $store = Book::storeBuku($data);
        $msg = 'Buku Berhasil ditambahkan!';

        return response()->json(['success' => $msg], 200);

    }

    public function storePinjam(){
      
    }

}
