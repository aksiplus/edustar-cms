<?php

namespace App\Master;

use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    protected $table = 'identitas_sekolah';

    public $timestamps = false;

    protected $fillable = [
        'logo', 'nama_sekolah', 'npsn'
    ];
}
