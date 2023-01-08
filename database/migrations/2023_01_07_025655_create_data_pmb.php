<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pmb', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('alamat');
            $table->string('kota');
            $table->string('kabupaten');
            $table->string('provinsi');
            $table->integer('tlp');
            $table->integer('wa');
            $table->string('email');
            $table->string('status_camaba');
            $table->string('asal_sekolah');
            $table->string('alamat_sekolah');
            $table->string('nilai');
            $table->string('thn_lulus');
            $table->string('jenjang_yang_dipilih');
            $table->string('pilih_prodi1');
            $table->string('pilih_prodi2');
            $table->string('pilih_prodi3');
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
        Schema::dropIfExists('data_pmb');
    }
};
