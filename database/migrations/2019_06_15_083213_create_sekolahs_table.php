<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Library\DataSekolah;

class CreateSekolahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identitas_sekolah', function (Blueprint $table) {
            $table->increments('id');
            $table->string('logo')->nullable();
            $table->string('nama_sekolah');
            $table->string('foto_kepapa_sekolah')->nullable();
            $table->string('npsn')->nullable();
            $table->enum('bentuk_pendidikan',
                array_keys(DataSekolah::bentukPendidikan())
            );

            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('alamat')->nullable();
            $table->string('desa_id')->nullable();
            $table->string('kecamatan_id')->nullable();
            $table->string('kota_id')->nullable();
            $table->string('provinsi_id')->nullable();
            $table->string('kode_pos')->nullable();
            $table->string('sk_pendirian_sekolah')->nullable();
            $table->date('tanggal_sk_pendirian')->nullable();
            $table->string('sk_izin_operasional')->nullable();
            $table->date('tanggal_sk_izin_operasional')->nullable();

            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('identitas_sekolah');
    }
}
