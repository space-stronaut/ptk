<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $table = "tbl_kelas";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'kode_kelas', 'nama_kelas'
    ];
}
