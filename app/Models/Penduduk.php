<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Penduduk extends Authenticatable
{
    use HasFactory, Notifiable;

protected $fillable = [
    'nik',
    'name',
    'username',
    'email',
    'telp',
];

protected $hidden = [
    'password',
    'remember_token',
];

}



