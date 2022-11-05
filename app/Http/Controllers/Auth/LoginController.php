<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function index()
    {
        return view('pages.login');
    }

    public function store(LoginRequest $request)
    {
        $this->authBase->login($request);

        return redirect()->intended(route('masyarakat.index'), 302);
    }

    public function logout(Request $request)
    {
        $this->authBase->logout($request);

        return redirect(route('login.index'))->with('success', 'Anda Berhasil Logout!');
    }
}
