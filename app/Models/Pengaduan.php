<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;
    protected $table = 'pengaduan';
    protected $primaryKey = 'id_pengaduan';
    protected $fillable = ['id_pengaduan','tgl_pengaduan','waktu_kejadian','nik','nama', 'status','isi_laporan', 'foto'];

    public function tanggapan()
    {
        return $this->belongsToMany(Tanggapan::class)->withPivot(['id_pengaduan']);
    }

    public function ambilTanggapan()
    {
        return $this->belongsTo(Tanggapan::class, 'id_pengaduan', 'id_pengaduan');
    }
}
