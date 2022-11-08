@extends('index')

@section('content')
    <marquee direction="left" hspace="30%">
        <h1 align="center">Curhatan Masyarakat - Halaman Beranda</h1>
    </marquee>

    <h4 align="center">
        <a href="/pengaduan">[+] Laporkan Pengaduan</a>
    </h4>

    <h4 align="center">
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
            <th>Aksi</th>
        </tr>
        @foreach ($pengaduans as $pengaduan)
            <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>{{ $pengaduan->isi_laporan }}</td>
                <td> - </td>
                <td>{{ $pengaduan->created_at }}</td>
                <td> - </td>
                <td>
                    <a href="/pengaduan/{{ $pengaduan->id_pengaduan }}">Ubah</a>
                    &nbsp; 
                    <a href="/pengaduan/{{ $pengaduan->id_pengaduan }}">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
