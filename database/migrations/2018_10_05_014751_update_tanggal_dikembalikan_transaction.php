<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTanggalDikembalikanTransaction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('transaction', function (Blueprint $table) {
          $table->datetime('tanggal_dikembalikan')->nullable();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('transaction', function (Blueprint $table) {
          $table->dropColumn('tanggal_dikembalikan');
      });
    }
}
