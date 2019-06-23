<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Admin\TenagaPendidik as TP;

use App\Library\Konversi;

class TenagaPendidik extends Controller
{

    public function getData()
    {
        $tp = TP::all();
        $paginated = TP::paginate(8);
        // $paginated['last_page'] = 20;

        return $paginated;

        $data = [];

        foreach($tp as $list)
        {
            $temp = [
                'id' => $list->id,
                'nik' => $list->nik,
                'nama' => $list->nama,
                'agama' => $list->agama,
                'jenis_kelamin' => $list->jenis_kelamin,
                'kelurahan_id' => $list->kelurahan_id,
                'kecamatan_id' => $list->kecamatan_id,
                'kabupaten_id' => $list->kabupaten_id,
                'provinsi_id' => $list->provinsi_id,
                'email' => $list->email,
                'telephone' => $list->telephone,
                'ttl' => $list->tempat_lahir . ', ' . Konversi::tanggalIndo($list->tanggal_lahir),
            ];

            //Insert temp array to Data
            array_push($data, $temp);

            //Empty temp array
            unset($temp);
        }

        $collection = collect($data);

        return response()->json([
            'total' => TP::count(),
            // 'last_page' => 30,
            // 'data' => $tp
            $paginated
        ], 200);
    }

    public function index()
    {
        return view('admin.tenaga_pendidik.index');
    }

    public function store(Request $request)
    {
        $tp = new TP;
        $tp->nik = $request->input('nik');
        $tp->nama = $request->input('nama');
        $tp->agama = $request->input('agama');
        $tp->jenis_kelamin = $request->input('jenis_kelamin');
        $tp->kecamatan_id = $request->input('kecamatan_id');
        $tp->kabupaten_id = $request->input('kabupaten_id');
        $tp->provinsi_id = $request->input('provinsi_id');
        $tp->email = $request->input('email');
        $tp->telephone = $request->input('telephone');
        $tp->password = bcrypt($request->input('nik'));

        if($tp->save())
        {
            $data = [
                'status' => 'success',
                'message' => 'Berhasil menyimpan Data',
                'data' => $tp
            ];

            return response()->json($data, 200);
        }


    }

    public function detail($id)
    {
        $tp = TP::findOrFail($id);

        return view('admin.tenaga_pendidik.detail', [
            'tp' => $tp
        ]);
    }
}
