<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidik extends Model
{
    use HasFactory;
    protected $table = "tbl_pendidik";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nuptk_nip', 'nama_lengkap',
        'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin',
        'nomor_hp', 'email',
        'penugasan_jbtn', 'alamat', 'upload_img'
    ];
}
