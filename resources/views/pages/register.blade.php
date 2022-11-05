@extends('index')

@section('content')    
    <marquee direction="left" hspace="30%">
        <h1 align="center">Curhatan Masyarakat - Halaman Register</h1>
    </marquee>
    <table align="center" cellpadding="15">
        <tr>
            <td>
                <table align="center">
                    <form action="">
                        <tr align="left">
                            <th>Nama Lengkap :</th>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="nama" id="nama-input" placeholder="Masukan Nama Lengkap.." required autofocus>
                                <br><br>
                            </td>
                        </tr>
                        <tr align="left">
                            <th>NIK:</th>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="nik" id="nik-input" placeholder="Masukan NIK.." required>
                                <br><br>
                            </td>
                        </tr>
                        <tr align="left">
                            <th>Nomor Telepon :</th>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="telp" id="telp-input" placeholder="Masukan Nomor Telepon.. " required>
                                <br><br>
                            </td>
                        </tr>
                        <tr align="left">
                            <th>Nama Pengguna :</th>
                        </tr>
                        <tr>
                            <td>
                                <input tpe="text" name="username" id="username-input" placeholder="Masukan Nama Pengguna.. " required>
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
                    <ul>
                        <li></li>
                    </ul>
                </fieldset>
            </td>
        </tr>
    </table>
@endsection