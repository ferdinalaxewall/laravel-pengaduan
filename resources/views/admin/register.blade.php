@extends('index')

@section('content')
    <marquee direction="left" hspace="30%">
        <h1 align="center">Curhatan Masyarakat - Halaman Register Petugas</h1>
    </marquee>
    <table align="center" cellpadding="15">
        <tr>
            <td>
                <table align="center">
                    <form action="" method="POST">
                        @csrf
                        <tr align="left">
                            <th>Nama Petugas :</th>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="nama_petugas" id="nama_petugas-input" placeholder="Masukan Nama Lengkap Petugas.." value="{{ old('nama_petugas') }}" required autofocus>
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
                        <tr align="left">
                            <th>Level :</th>
                        </tr>
                        <tr>
                            <td>
                                <div>
                                    <input type="radio" name="level" value="admin" id="admin-radio">
                                    <label for="admin-radio">Admin</label>
                                </div>
                                <div>
                                    <input type="radio" name="level" value="petugas" id="petugas-radio">
                                    <label for="petugas-radio">Petugas</label>
                                </div>
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
