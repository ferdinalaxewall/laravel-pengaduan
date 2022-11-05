<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function index()
    {
        return view('pages.register');
    }

    public function store(RegisterRequest $request)
    {
        $this->authBase->register($request);

        return redirect(route('login.index'))->withSuccess('Data berhasil dibuat!');
    }
}
