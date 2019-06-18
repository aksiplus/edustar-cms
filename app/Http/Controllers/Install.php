<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Master\Sekolah;

use Soumen\Agent\Agent;

class Install extends Controller
{
    public function init(Request $request)
    {
        $info_sekolah = Sekolah::first();

        return view('install.check');

        if(!$info_sekolah)
        {
            return 'Installation Page';
        }
        else
        {
            return view('install.done');

        }
    }

    public function check()
    {
        $results = DB::select( DB::raw("select version()") );
        $mysql_version =  $results[0]->{'version()'};
        $mariadb_version = '';

        if (strpos($mysql_version, 'Maria') !== false) {
            $mariadb_version = $mysql_version;
            $mysql_version = '';
        }

        return $mariadb_version;
    }
}
