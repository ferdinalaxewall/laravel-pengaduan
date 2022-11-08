<?php

namespace App\Repository\Implements;

use Carbon\Carbon;
use App\Models\Pengaduan;
use App\Models\Masyarakat;
use App\Repository\AuthInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthImplements implements AuthInterface
{
    public function register($request)
    {
        $model = new Masyarakat();
        $model->nik = $request->nik;
        $model->nama = $request->nama;
        $model->username = $request->username;
        $model->password = Hash::make($request->password);
        $model->telp = $request->telp;
        $model->created_at = Carbon::now();
        $model->updated_at = Carbon::now();
        return $model->save();
    }

    public function login($request)
    {
        if(Auth::guard('warga')->attempt($request->validated())) {
            $request->session()->regenerate();
        } else {
            return response()->json(['errors' => 'Username / Password Salah'], 400);
        }

    }

    public function logout($request)
    {
        Auth::guard('warga')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
    }

    public function createPengaduan($request)
    {
        $model = new Pengaduan();
        $model->nik = $request->nik;
        $model->isi_laporan = $request->isi_laporan;
        $model->status = "proses"; 
        $model->created_at = Carbon::now();
        $model->updated_at = Carbon::now();
        return $model->save();
    }

    public function getPengaduan($id)
    {
        $data = Pengaduan::where('nik', $id)->get();
        return $data;
    }
}
