<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterAdminRequest;

class RegisterAdminController extends Controller
{
    public function index(){
        return view('admin.register');
    }

    public function store(RegisterAdminRequest $request){
        $this->authBase->registerAdmin($request);
        return redirect(route('login_admin.index'))->withSuccess('Data Berhasil Dibuat!');
    }
}
