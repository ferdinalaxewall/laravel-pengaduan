@extends('index')

@section('content')
    <marquee direction="left" hspace="30%">
        <h1 align="center">Curhatan Masyarakat - Halaman Beranda</h1>
    </marquee>

    <h4 align="center">
        <a href="/form-pengaduan">[+] Laporkan Pengaduan</a>
        <a href="{{ route('logout.masyarakat') }}">Logout</a>
    </h4>

    <h4 align="center">
        Wahai Sang Pengadu - {{ $nama }}
    </h4>

    <h3 align="center">Pengaduan & Tanggapan Pengaduan Anda:</h3>
    <table align="center" border="2" cellpadding="15">
        <tr>
            <th>No.</th>
            <th>Pengaduan</th>
            <th>Tanggapan</th>
            <th>Pengaduan Dibuat</th>
            <th>Tanggapan Diberikan</th>
        </tr>
    </table>
@endsection
