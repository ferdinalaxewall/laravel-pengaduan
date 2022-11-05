<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'nik' => 'required|integer|min:16',
            'nama' => 'required|min:2',
            'username' => 'required|min:3',
            'password' => 'required|min:8',
            'telp' => 'required|min:11|max:13',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Data Tidak Boleh Kosong',
            'nama.min' => 'Nama Tidak boleh kurang dari 2 huruf',
            'nik.min' => 'NIK tidak boleh kurang dari 16 digit',
            'username.min' => 'Username tidak boleh kurang dari 3 karakter',
            'password.min' => 'Password tidak boleh kurang dari 8 karakter',
            'telp.min' => 'Nomor Telp Tidak boleh kurang dari 11 digit',
            'telp.max' => 'Nomor Telp Tidak boleh lebih dari 13 digit',
        ];
    }
}
