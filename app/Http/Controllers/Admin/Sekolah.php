<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Master\Sekolah as Info;

class Sekolah extends Controller
{

    protected $data_sekolah;

    function __construct()
    {
        $this->data_sekolah = Info::first();
    }

    public function index()
    {
        // return $this->data_sekolah;
        return view('admin.sekolah.index', [
            'data' => $this->data_sekolah
        ]);
    }
}
