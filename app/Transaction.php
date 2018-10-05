<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Transaction extends Model
{
  protected $guarded = 'id';
    //

  public static function storePinjam($data){

      $available = DB::table('books')->where('id',$data['id_buku'])->where('status','1')->first();

      if($available == true){

        $data['tanggal_pinjam'] = date('Y-m-d H:i:s');
        $data['tanggal_kembali'] =  date('Y-m-d H:i:s',strtotime('+2 weeks'));

        DB::table('transaction')->insert($data);
        DB::table('books')->where('id',$data['id_buku'])->where('status','1')->update(['status'=>'0']);

        return true;
      }else{
        return false;
      }

  }
}
