<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Masyarakat extends Authenticatable
{
    use HasFactory, Notifiable;

    public $autoincrements = false;

    protected $primaryKey = 'nik';

    protected $guarded = [];

    protected $table = 'masyarakat';
}
