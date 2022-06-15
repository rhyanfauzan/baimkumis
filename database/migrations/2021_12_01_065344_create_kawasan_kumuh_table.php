<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKawasanKumuhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kawasan_kumuh', function (Blueprint $table) {
            $table->id();
            $table->string('nama_area');
            $table->string('foto_lokasi')->nullable(true);
            $table->unsignedBigInteger('kecamatan_id');
            $table->unsignedBigInteger('desa_id');
            $table->json('koordinat')->nullable(true);
            $table->string('jenis_koordinat');
            $table->integer('luas_area')->nullable(true);
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
        Schema::dropIfExists('kawasan_kumuh');
    }
}
