<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Library\DataUmum;

class CreateTenagaPendidiksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenaga_pendidik', function (Blueprint $table) {

            //Identitas Pribadi
            $table->bigIncrements('id');
            $table->string('nik')->unique()->nullable();
            $table->string('nama');
            $table->enum('agama', DataUmum::agama());
            $table->enum('jenis_kelamin', array_keys(DataUmum::jenisKelamin()));

            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();

            //Alamat Tenaga Pendidik
            $table->string('kelurahan_id')->nullable();
            $table->string('kecamatan_id')->nullable();
            $table->string('kabupaten_id')->nullable();
            $table->string('provinsi_id')->nullable();

            //Identitas Login
            $table->string('email')->unique()->nullable();
            $table->string('telephone')->unique()->nullable();
            $table->string('password');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tenaga_pendidik');
    }
}
