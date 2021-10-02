<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKegtendiksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_keg-tendik', function (Blueprint $table) {
            $table->id();
            $table->string('tanggal');
            $table->string('jam_mulai');
            $table->string('jam_selesai');
            $table->string('aktifitas');
            $table->text('kegiatan');
            $table->string('volume_laporan');
            $table->string('keterangan');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('tbl_keg-tendik');
    }
}
