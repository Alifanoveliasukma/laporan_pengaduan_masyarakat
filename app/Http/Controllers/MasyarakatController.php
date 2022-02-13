<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MasyarakatController extends Controller
{
    public function profilsaya()
    {
        $tanggapans = Tanggapan::all();
        $adu = Pengaduan::all();
        $adu = auth()->user()->masyarakat;
        return view('masyarakat.profile_saya',compact(['adu', 'tanggapans']));
    }
}
