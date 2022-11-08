<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;

class LoginAdminController extends Controller
{
    public function index(){
        return view('admin.login');
    }

    public function store(LoginRequest $request){
        $this->authBase->loginAdmin($request);
        return redirect()->intended(route('admin.index'), 302);
    }

    public function logout(){
        
    }
}
