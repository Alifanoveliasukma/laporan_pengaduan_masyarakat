<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');

    }

    public function postlogin(Request $request)
    {
        
    
        if (Auth::attempt($request->only('username', 'password'))) {
            $datas = Pengaduan::where('nik', '=', Auth::user()->nik)->get();
            // dd();
            return view('role.dashboard',compact('datas'));
        }
        

        return redirect('/login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registrasi_petugas()
    {
        return view('auth.registrasi_petugas');
    }

    public function postregister(Request $request)
    {
        //insert ke table users
        $user = new User;
        $user->role = 'masyarakat';
        $user->nik = $request->nik;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->telp = $request->telp;
        $user->password = bcrypt($request->password);
        $user->remember_token = str::random(60);
        $user->save();

        return redirect('/register');

    }

    public function postregister_petugas(Request $request)
    {
        //insert ke table users
        $user = new User;
        $user->role = 'petugas';
        $user->nik = $request->nik;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->telp = $request->telp;
        $user->password = bcrypt($request->password);
        $user->remember_token = str::random(60);
        $user->save();

        return redirect('/register');

    }

    
}
