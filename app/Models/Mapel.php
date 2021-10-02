<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;
    protected $table = "tbl_mapel";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'kode_mapel', 'nama_mapel'
    ];
}
