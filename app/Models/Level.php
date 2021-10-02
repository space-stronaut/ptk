<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;
    protected $table = "tbl_level";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'kode_tabel', 'nama_tabel'
    ];
}
