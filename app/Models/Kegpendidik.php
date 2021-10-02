<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegpendidik extends Model
{
    use HasFactory;
    protected $table = "tbl_keg-pendidik";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'tanggal', 'jam_mulai', 'jam_selesai', 'user_id',
        'aktifitas', 'kegiatan', 'volume_laporan', 'status','alasan','keterangan'
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
