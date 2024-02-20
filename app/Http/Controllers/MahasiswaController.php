<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function view_data(Request $request) {
        $data = Mahasiswa::all();
        return view('view' ,compact('data'));
    }

    public function data_baru(Request $request) {
        DB::table('mahasiswas')
        ->insert([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'prodi' => $request->prodi,
            'fakultas' => $request->fakultas,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);
        return redirect('/');
    }

}
