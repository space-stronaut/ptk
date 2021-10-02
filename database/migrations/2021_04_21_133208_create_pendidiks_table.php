<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendidiksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_pendidik', function (Blueprint $table) {
            $table->id();
            $table->string('nuptk_nip')->nullable();
            $table->string('nama_lengkap');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('nomor_hp');
            $table->string('email');
            $table->string('penugasan_jbtn');
            $table->string('alamat');
            $table->string('upload_img')->nullable();
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
        Schema::dropIfExists('tbl_pendidik');
    }
}
