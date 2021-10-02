<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKegtutasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_keg-tuta', function (Blueprint $table) {
            $table->id();
            $table->string('tanggal');
            $table->string('jam_mulai');
            $table->string('jam_selesai');
            $table->string('aktifitas');
            $table->text('kegiatan');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('volume_laporan');
            $table->string('keterangan');
            $table->string('status')->nullable();
            $table->string('alasan')->nullable();
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
        Schema::dropIfExists('tbl_keg-tuta');
    }
}
