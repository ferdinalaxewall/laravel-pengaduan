@extends('index')

@section('content')    
    <marquee direction="left" hspace="30%">
        <h1 align="center">Curhatan Masyarakat - Halaman Login</h1>
    </marquee>

    <table align="center">
        <form action="">
            <tr align="left">
                <th>Nama Pengguna :</th>
            </tr>
            <tr>
                <td>
                    <input type="text" name="username" id="username-input" placeholder="Masukkan Nama Pengguna.." required autofocus>
                </td>
            </tr>
            <tr align="left">
                <th>Kata Sandi :</th>
            </tr>
            <tr>
                <td>
                    <input type="password" name="password" id="password-input" placeholder="Masukkan Kata Sandi.." required>
                </td>
            </tr>
            <tr align="center">
                <td>
                    <br>
                    <button type="submit" name="login">Login</button>
                </td>
            </tr>
        </form>
    </table>
@endsection