<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;
    protected $table = "tbl_jurusan";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'kode_jurusan', 'nama_jurusan'
    ];
}
