<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaritimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maritims', function (Blueprint $table) {
            $table->id();
            $table->string('foto');
            $table->string('nama_kapal');
            $table->string('jenis_kapal');
            $table->string('nomor_seri');
            $table->year('tahun_dibuat');
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
        Schema::dropIfExists('maritims');
    }
}
