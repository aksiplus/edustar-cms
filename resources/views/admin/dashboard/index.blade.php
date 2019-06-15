@extends('admin.layout')

@section('title')
Halaman Dashboard
@endsection

@section('subtitle')
Halaman Dashboard
@endsection

@section('content')
<div class="main-card mb-3 card">
    <div class="no-gutters row">
        <div class="col-md-4">
            <div class="widget-content">
                <div class="widget-content-wrapper">
                    <div class="widget-content-right ml-0 mr-3">
                        <div class="widget-numbers text-success">1896</div>
                    </div>
                    <div class="widget-content-left">
                        <div class="widget-heading">Jumlah Guru</div>
                        <div class="widget-subheading">Status Aktif Guru: Y</div>
                        <a href="">Lihat Semua</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="widget-content">
                <div class="widget-content-wrapper">
                    <div class="widget-content-right ml-0 mr-3">
                        <div class="widget-numbers text-warning">$ 14M</div>
                    </div>
                    <div class="widget-content-left">
                        <div class="widget-heading">Jumlah Guru</div>
                        <div class="widget-subheading">Status Aktif Guru: Y</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="widget-content">
                <div class="widget-content-wrapper">
                    <div class="widget-content-right ml-0 mr-3">
                        <div class="widget-numbers text-danger">45.9%</div>
                    </div>
                    <div class="widget-content-left">
                        <div class="widget-heading">Jumlah Guru</div>
                        <div class="widget-subheading">Status Aktif Guru: Y</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">

    {{-- Col Informasi Sekolah --}}
    <div class="col-md-6 mb-3 ">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Identitas Sekolah
            </div>

            <div class="card-body">
                <table class="mb-0 table">
                    <tbody>
                        <tr>
                            <th>Nama Sekolah</th>
                            <th>:</th>
                            <td>SMK Darussalam Tarogong Kaler</td>
                        </tr>
                        <tr>
                            <th>Kepala Sekolah</th>
                            <th>:</th>
                            <td>Muhammad Allejar, S.Pd.I, M.Si</td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
    {{-- /Col Informasi Sekolah --}}

    {{-- Col PPDB --}}
    <div class="col-md-6 mb-3 ">
        <div class="card">
            <div class="card-header bg-dark text-white">
                Pelaksanaan Penerimaan Peserta Didik Baru (PPDB)
            </div>
            <div class="card-body">

                <div class="card mb-2 widget-content bg-success">
                    <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                            <div class="widget-heading">Pendaftar Hari Ini</div>
                            <div class="widget-subheading"><strong>Siswa/i</strong></div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-white"><span>12</span></div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3 widget-content bg-success">
                    <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                            <div class="widget-heading">Total Pendaftar</div>
                            <div class="widget-subheading"><strong>Siswa/i</strong></div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-white"><span>121</span></div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <a href="" class="btn btn-block btn-primary btn-lg mt-3">Selengkapnya</a>
    </div>
    {{-- /Col PPDB --}}

</div>
@endsection
