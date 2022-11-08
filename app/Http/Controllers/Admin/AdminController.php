<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    protected $getAuth;

    public function index(){
        dd(Auth::guard('admin'));
        return view('admin.home');
    }
}
