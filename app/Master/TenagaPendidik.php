<?php

namespace App\Master;

use Illuminate\Database\Eloquent\Model;

class TenagaPendidik extends Model
{
    protected $table = 'tenaga_pendidik';

    protected $fillable = [
        'name', 'email', 'password'
    ];

}
