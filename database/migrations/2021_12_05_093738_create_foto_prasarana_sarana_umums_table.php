<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFotoPrasaranaSaranaUmumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foto_prasarana_sarana_umums', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('prasarana_sarana_umum_id');
            $table->string('jenis');
            $table->string('foto');
            $table->text('keterangan');
            $table->softDeletes();
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
        Schema::dropIfExists('foto_prasarana_sarana_umums');
    }
}
