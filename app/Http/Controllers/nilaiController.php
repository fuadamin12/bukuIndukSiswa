<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\nilai;
use App\Models\siswa;
use Dompdf\Dompdf;
use App\Exports\nilaiExport;


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

    public function nilaiPdf()
    {
        $nilai = nilai::all();
        $siswa = siswa::leftJoin('nilai', 'nilai.siswa_id', '=', 'siswa.id')->get();

        $html = view('contents.nilaiPdf',compact('nilai','siswa'));
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A5', 'Portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream();
    }

    public function nilaiExport()
    {
        return (new nilaiExport)->download('nilai.xlsx');
    }
}
