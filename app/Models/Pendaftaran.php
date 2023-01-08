<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{

    protected $table = 'data_pmb';


    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'agama',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'kota',
        'kabupaten',
        'provinsi',
        'tlp',
        'wa',
        'email',
        'status_camaba',
        'asal_sekolah',
        'alamat_sekolah',
        'nilai',
        'thn_lulus',
        'jenjang_yang_dipilih',
        'pilih_prodi1',
        'pilih_prodi2',
        'pilih_prodi3'
    ];

}