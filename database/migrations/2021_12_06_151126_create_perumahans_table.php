<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerumahansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perumahans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_perumahan');
            $table->string('no_imb');
            $table->string('tanggal_imb');
            $table->string('tahun');
            $table->string('pengembang');
            $table->string('perusahaan');
            $table->string('alamat_perusahaan');
            $table->unsignedInteger('jumlah_rumah_komersil');
            $table->unsignedInteger('jumlah_rumah_mbr');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perumahans');
    }
}
