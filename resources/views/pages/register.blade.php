@extends('index')

@section('content')
    <marquee direction="left" hspace="30%">
        <h1 align="center">Curhatan Masyarakat - Halaman Register</h1>
    </marquee>
    <table align="center" cellpadding="15">
        <tr>
            <td>
                <table align="center">
                    <form action="" method="POST">
                        @csrf
                        <tr align="left">
                            <th>Nama Lengkap :</th>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="nama" id="nama-input" placeholder="Masukan Nama Lengkap.." value="{{ old('nama') }}" required autofocus>
                                <br><br>
                            </td>
                        </tr>
                        <tr align="left">
                            <th>NIK:</th>
                        </tr>
                        <tr>
                            <td>
                                <input type="number" name="nik" id="nik-input" placeholder="Masukan NIK.." value="{{ old('nik') }}" required>
                                <br><br>
                            </td>
                        </tr>
                        <tr align="left">
                            <th>Nomor Telepon :</th>
                        </tr>
                        <tr>
                            <td>
                                <input type="number" name="telp" id="telp-input" placeholder="Masukan Nomor Telepon.." value="{{ old('telp') }}" required>
                                <br><br>
                            </td>
                        </tr>
                        <tr align="left">
                            <th>Nama Pengguna :</th>
                        </tr>
                        <tr>
                            <td>
                                <input tpe="text" name="username" id="username-input" placeholder="Masukan Nama Pengguna.. " value="{{ old('username') }}" required>
                                <br><br>
                            </td>
                        </tr>
                        <tr align="left">
                            <th>Kata Sandi :</th>
                        </tr>
                        <tr>
                            <td>
                                <input type="password" name="password" id="password-input" placeholder="Masukan Kata Sandi.. " required>
                                <br><br>
                            </td>
                        </tr>
                        <tr align="center">
                            <td>
                                <br>
                                <button type="submit" name="register">Register</button>
                            </td>
                        </tr>
                    </form>
                </table>
            </td>
            <td>
                <fieldset>
                    <legend>Keterangan :</legend>
                    @foreach($errors->all() as $message)
                    <ul>
                        <li>{{ $message }}</li>
                    </ul>
                    @endforeach
                </fieldset>
            </td>
        </tr>
    </table>
@endsection
