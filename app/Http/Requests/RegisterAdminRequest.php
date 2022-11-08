<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterAdminRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama_petugas' => 'required|min:2',
            'username' => 'required|min:3',
            'password' => 'required|min:8',
            'telp' => 'required|min:11|max:13',
            'level' => 'required'
        ];
    }

    public function messages(){
        return [
            'required' => 'Data Tidak Boleh Kosong',
            'nama_petugas.min' => 'Nama Petugas Tidak boleh kurang dari 2 huruf',
            'username.min' => 'Username tidak boleh kurang dari 3 karakter',
            'password.min' => 'Password tidak boleh kurang dari 8 karakter',
            'telp.min' => 'Nomor Telp Tidak boleh kurang dari 11 digit',
            'telp.max' => 'Nomor Telp Tidak boleh lebih dari 13 digit',
        ];
    }
}
