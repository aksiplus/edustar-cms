<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('npsn')->nullable();
            $table->enum('bentuk_pendidikan',
                ['sd', 'mi', 'smp', 'mts', 'sma', 'ma', 'mak']
            );
            $table->string('alamat');
            $table->string('desa_id');
            $table->string('kecamatan_id');
            $table->string('kota_id');
            $table->string('provinsi_id');
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
