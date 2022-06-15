<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableKawasanRawanBencana extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kawasan_rawan_bencana', function (Blueprint $table) {
            $table->id();
            $table->string('nama_area');
            $table->string('foto_lokasi')->nullable(true);
            $table->timestamp('estimasi_waktu_bencana')->nullable(true);
            $table->unsignedBigInteger('bencana_id');
            $table->unsignedBigInteger('kecamatan_id');
            $table->unsignedBigInteger('desa_id');
            $table->double('latitude');
            $table->double('longitude');
            $table->integer('luas_area')->nullable(true);
            $table->integer('jumlah_rumah_terdampak')->nullable(true);
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
        Schema::dropIfExists('table_kawasan_rawan_bencana');
    }
}
