@extends('admin.layout')

@section('title')
Informasi Sekolah
@endsection

@section('subtitle')
Silahkan lengkapi Profile SMK Darussalam Tarogong Kaler
@endsection

@section('content')
<div class="row">

    <div class="col-md-8">
        <div class="card">
            <div class="card-body">

                <div class="form-group">
                    <label for="nama_sekolah">Nama Sekolah</label>
                    <input type="text" class="form-control" name="nama_sekolah" value="{{ $data->nama_sekolah }}" required>
                </div>

                <div class="form-group">
                    <label for="nama_sekolah">NPSN</label>
                    <input type="number" class="form-control" name="npsn" value="{{ $data->npsn }}">
                </div>


                <div class="form-group">
                    <label for="nama_sekolah">Nama Sekolah</label>
                    <input type="text" class="form-control" name="nama_sekolah" value="{{ $data->nama_sekolah }}">
                </div>

                <div class="form-group">
                    <label for="nama_sekolah">Nama Sekolah</label>
                    <input type="text" class="form-control" name="nama_sekolah" value="{{ $data->nama_sekolah }}">
                </div>

            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card bg-info text-white mb-2">
            <div class="card-body">
                <ul>
                    <li>asd</li>
                    <li>ada</li>
                    <li>assda</li>
                    <li>asd</li>
                    <li>asasd</li>
                </ul>
            </div>
        </div>

        <button class="btn btn-block btn-warning text-white"><i class="fa fa-times"></i> Batal</button>
        <button class="btn btn-block btn-primary"><i class="fa fa-save"></i> Simpan</button>
    </div>
</div>
@endsection
