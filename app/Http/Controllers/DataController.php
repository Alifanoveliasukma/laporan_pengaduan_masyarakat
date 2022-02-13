<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class DataController extends Controller
{
    public function laporan()
    {  
        $pengaduan = Pengaduan::all();
        return view('laporan.masyarakat', compact(['pengaduan']));
    }

    public function pengaduan()
    {    
        $adu = Pengaduan::all();
        return view('pengaduan.masyarakat', compact(['adu']));
    }

    public function proses(Request $request)
    {
        
        $request['nik'] = Auth::user()->nik;
        // dd($request->all());
        $adu = Pengaduan::create($request->all());
        
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('images/', $request->file('foto')->getClientOriginalName());
            $adu->foto = $request->file('foto')->getClientOriginalName();
            $adu->save();
        }
       return redirect('/tulispengaduan');
      
    }

    public function profile($id_pengaduan)
    {
        $adu = Pengaduan::find($id_pengaduan);
        $tanggapans = Tanggapan::where('id_pengaduan', '=', $id_pengaduan)->get();
        return view('masyarakat.profile', compact(['adu','tanggapans']));
    }

    public function addtanggapan(Request $request, $id_pengaduan)
    {
        $adu = Tanggapan::create([
            'id_pengaduan' => $id_pengaduan, 
            'tgl_tanggapan' => now(), 
            'tanggapan' => $request->tanggapan,
            'id_petugas' => Auth::user()->id,
        ]);

        $updateStatus = Pengaduan::find($id_pengaduan)->update([ 'status' => 'proses' ]);

        
        return redirect('masyarakat/'.$id_pengaduan.'/profile');
        
    }

    

    public function lihat_laporan()
    {
        $pengaduan = Pengaduan::all();
        return view('laporan.lihat_laporan', compact(['pengaduan']));
    }

    public function cetak()
    {
    $pengaduan = Pengaduan::all();

    $pdf = PDF::loadview('pengaduan_pdf', compact(['pengaduan']));
    return $pdf->download('laporan-pengaduan.pdf');
    }
    
    }

