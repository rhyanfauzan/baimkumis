<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTahunNominalToPenerimaBantuans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('penerima_bantuan', function (Blueprint $table) {
            //
            $table->unsignedSmallInteger('rencana_tahun_penanganan')->nullable();
            $table->unsignedBigInteger('nominal')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('penerima_bantuan', function (Blueprint $table) {
            //
            $table->dropColumn('rencana_tahun_penanganan');
            $table->dropColumn('nominal');
        });
    }
}
