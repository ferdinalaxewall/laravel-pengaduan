@extends('index')
@section('content')
    <marquee direction="left" hspace="30%">
        <h1 align="center">Curhatan Masyarakat - Halaman Form Pengaduan</h1>
    </marquee>

    <table width="500" align="center">
        <td>
            <fieldset>
                <legend>Form Pengaduan</legend>
                <br>
                <form action="" method="POST">
                    @csrf
                    @if (Route::currentRouteName() == "pengaduan.index")
                        @method('POST')                        
                    @else   
                        @method('PUT')                        
                    @endif
                    <table>
                        <tr align="left">
                            <th>Isi Pengaduan :</th>
                        </tr>
                        <tr>
                            <td>
                                <textarea name="isi_laporan" id="isi-pengaduan" cols="65" rows="5">{{ Route::currentRouteName() == "pengaduan.index" ? old('isi_laporan') : $data->isi_laporan }}</textarea>
                            </td>
                        </tr>
                        <tr align="right">
                            <td>
                                <button type="submit" name="kirim">Kirim Pengaduan</button>
                            </td>
                        </tr>
                    </table>
                </form>
                <br>
            </fieldset>
        </td>
    </table>
@endsection