<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    use HasFactory;
    protected $table = 'tanggapan';
    protected $primaryKey = 'id_tanggapan';
    protected $fillable = ['id_tanggapan', 'id_pengaduan', 'tgl_tanggapan', 'tanggapan', 'id_petugas'];

    public function pengaduan()
    {
        return $this->belongsToMany(Pengaduan::class)->withPivot(['id_pengaduan']);
    }
}
