<?php

namespace App\Repository;


interface AuthInterface
{
    public function register($request);
    public function login($request);
    public function logout($request);
    public function createPengaduan($request);
    public function getPengaduanByNik($nik);
    public function getPengaduanById($id);
    public function updatePengaduan($id, $request);
    public function deletePengaduan($id);
}
