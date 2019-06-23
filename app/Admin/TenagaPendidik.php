<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class TenagaPendidik extends Model
{
    protected $table = 'tenaga_pendidik';

    protected $fillable = [
        "nik",
        "nama",
        "agama",
        "jenis_kelamin",
        "kelurahan_id",
        "kecamatan_id",
        "kabupaten_id",
        "provinsi_id",
        "email",
        "telephone",
        "password",
    ];

}
