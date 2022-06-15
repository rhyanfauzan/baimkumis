<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsulanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usulan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hunian_id');
            $table->unsignedBigInteger('sumber_dana_bantuan_id');
            $table->unsignedBigInteger('verifikator_id');
            $table->string('pesan');
            $table->date('rencana_penanganan');
            $table->unsignedBigInteger('pengusul_id');
            $table->integer('status')->default(0);
            $table->string('rencana_tahun_penanganan')->nullable();
            $table->string('foto_hunian')->nullable();
            $table->string('foto_mck')->nullable();
            $table->unsignedBigInteger('nominal')->default(0);
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
        Schema::dropIfExists('usulan');
    }
}
