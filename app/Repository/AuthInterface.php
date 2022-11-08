<?php

namespace App\Repository;


interface AuthInterface
{
    public function register($request);
    public function login($request);
    public function logout($request);
    public function createPengaduan($request);
    public function getPengaduan($id);
}
