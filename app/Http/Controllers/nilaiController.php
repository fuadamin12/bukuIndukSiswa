<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\nilai;

class nilaiController extends Controller
{
    public function tambahNilai(Request $request)
    {
        $nilai = new nilai;
        $nilai->siswa_id        = $request->idSiswa;
        $nilai->kelas           = $request->kelas;
        $nilai->semester        = $request->semester;
        $nilai->mataPelajaran   = $request->mataPelajaran;
        $nilai->nilai           = $request->nilai;
        $nilai->save();

    }

    public function editNilai(Request $request)
    {
        $id = $request->idSiswaUbah;

        $nilaiEdit = nilai::find($id);
        $nilaiEdit->kelas           = $request->kelasUbah;
        $nilaiEdit->semester        = $request->semesterUbah;
        $nilaiEdit->mataPelajaran   = $request->mataPelajaranUbah;
        $nilaiEdit->nilai           = $request->nilaiUbah;
        $nilaiEdit->save();
    }

    public function hapusNilai(Request $request)
    {
        nilai::find($request->id)->delete();
    }
}
