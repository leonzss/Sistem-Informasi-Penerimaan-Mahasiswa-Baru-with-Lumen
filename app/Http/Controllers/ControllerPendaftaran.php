<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Pendaftaran;

class ControllerPendaftaran extends Controller
{
    public function create(Request $request)
    {
        $data = $request->all();
        $pendaftaran = Pendaftaran::create($data);

        return response()->json($pendaftaran);
    }

    public function index()
    {
        $pendaftaran = Pendaftaran::all();
        return response()->json($pendaftaran);
    }

    public function detail($id)
    {
        $pendaftaran = Pendaftaran::find($id);
        return response()->json($pendaftaran);
    }

    public function update(Request $request, $id)
    {
        $pendaftaran = Pendaftaran::whereId($id)->update([
            'nama' => $request->input('nama'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'agama' => $request->input('agama'),
            'tempat_lahir' => $request->input('tempat_lahir'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'alamat' => $request->input('alamat'),
            'kota' => $request->input('kota'),
            'kabupaten' => $request->input('kabupaten'),
            'provinsi' => $request->input('provinsi'),
            'tlp' => $request->input('tlp'),
            'wa' => $request->input('wa'),
            'email' => $request->input('email'),
            'status_camaba' => $request->input('status_camaba'),
            'asal_sekolah' => $request->input('asal_sekolah'),
            'alamat_sekolah' => $request->input('alamat_sekolah'),
            'nilai' => $request->input('nilai'),
            'thn_lulus' => $request->input('thn_lulus'),
            'jenjang_yang_dipilih' => $request->input('jenjang_yang_dipilih'),
            'pilih_prodi1' => $request->input('pilih_prodi1'),
            'pilih_prodi2' => $request->input('pilih_prodi2'),
            'pilih_prodi3' => $request->input('pilih_prodi3'),
        ]);

        if($pendaftaran){
            return response()->json([
                'success' => true,
                'message' => 'Data berhasil diupdate',
                'data'    => $pendaftaran
            ],201);
        } else{
            return response()->json([
                'success'   => false,
                'message'   => 'Data Gagal diupdate',
            ],400);
        }
    }

    public function delete($id)
    {
        $pendaftaran = Pendaftaran::whereId($id)->first();
        $pendaftaran->delete();

        if($pendaftaran)
        {
            return response()->json([
                'success' => true,
                'message' => 'Data berhasil dihapus'
            ],200);
        }
    }
}