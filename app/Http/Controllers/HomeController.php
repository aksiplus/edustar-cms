<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Master\Sekolah;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $sekolah = Sekolah::first();
        if (!$sekolah)
        {
            return redirect()->to('/install');
        }

        return view('welcome');
    }

    private function checkData()
    {

    }
}
