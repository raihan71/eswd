<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Book extends Model
{
  protected $guarded = 'id';
    //

  public static function getBuku($search,$limit){

    $buku = DB::table('books')->select($limit);

    if(isset($search['id'])){
      $buku->where('id','LIKE','%'. $search['id'] .'%');
    }

    if(isset($search['judul'])){
      $buku->where('judul','LIKE','%'. $search['judul'] .'%');
    }

    if(isset($search['penulis'])){
      $buku->where('penulis','LIKE','%'. $search['penulis'] .'%');
    }

    if(isset($search['penerbit'])){
      $buku->where('penerbit','LIKE','%'. $search['penerbit'] .'%');
    }

    if(isset($search['subjudul'])){
      $buku->where('subjudul','LIKE','%'. $search['subjudul'] .'%');
    }

    if(isset($search['gambar'])){
      $buku->where('gambar','LIKE','%'. $search['gambar'] .'%');
    }

    if(isset($search['deskripsi'])){
      $buku->where('deskripsi','LIKE','%'. $search['deskripsi'] .'%');
    }

    if(isset($search['status'])){
      $buku->where('status','LIKE','%'. $search['status'] .'%');
    }

    if(isset($search['created_at'])){
      $buku->where('id','LIKE','%'. $search['id'] .'%');
    }

    if(isset($search['updated_at'])){
      $buku->where('id','LIKE','%'. $search['id'] .'%');
    }

    // foreach($search as $key => $s ){
    //     $buku->where($key,'LIKE','%'. $s .'%');
    // }

    return $buku->paginate(8);

  }

  public static function getJudulBuku($data){

    if(isset($data['judul']))
    return DB::table('books')->where('judul','LIKE','%'.$data['judul'].'%')->get();
    else
    return false;
  }

  public static function storeBuku($data){

    DB::table('books')->insert($data);

    return true;

  }
}
