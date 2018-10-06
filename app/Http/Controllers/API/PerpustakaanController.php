<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Book;
use App\Transaction;

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

    public function storePinjam(Request $request){
      $validator = Validator::make($request->all(),[
        'id_buku' => 'required',
        'nama_peminjam' => 'required|max:50',
        'alamat'  => 'required',
        'no_hp' => 'required|max:13',
      ]);

      if ($validator->fails()) {
        return response()->json(['error'=>$validator->errors()], 401);
      }

      $data = $request->all();
      $store = Transaction::storePinjam($data);

      if($store == true){
        $msg = 'Peminjaman telah dilakukan';
      }else{
        $msg = 'Buku tidak tersedia atau buku sudah ada yang meminjam.';
      }

      return response()->json(['success' => $msg], 200);
    }

    public function getJudulBuku(Request $request){

      $validator = Validator::make($request->all(),[
        'judul' => 'required',
      ]);

      if ($validator->fails()){
        return response()->json(['error' => $validator->error()],401);
      }

      $data = $request->all();

      $book = Book::getJudulBuku($data);

      return response()->json($book);


    }

}
