<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\siswa;
use App\Models\nilai;

class homeController extends Controller
{

    public function index(Request $request)
    {
        return view('layouts.main');
    }

    public function tampilDashboard()
    {
        // count siswa query jumlah siswa

        $count_siswa_kelas = [];

        // count siswa Kelas VII
            $sql = "SELECT DISTINCT siswa.id, siswa.nisn, siswa.namaSiswa FROM siswa 
                    INNER JOIN nilai ON siswa.id = nilai.siswa_id WHERE nilai.kelas = 'VII'";
            $count_siswa_kelas['vii'] = count(DB::select($sql));

        // count siswa Kelas VIII
            $sql = "SELECT DISTINCT siswa.id, siswa.nisn, siswa.namaSiswa FROM siswa 
                    INNER JOIN nilai ON siswa.id = nilai.siswa_id WHERE nilai.kelas = 'VIII'";
            $count_siswa_kelas['viii'] = count(DB::select($sql));

        // count siswa Kelas IX
            $sql = "SELECT DISTINCT siswa.id, siswa.nisn, siswa.namaSiswa FROM siswa 
                    INNER JOIN nilai ON siswa.id = nilai.siswa_id WHERE nilai.kelas = 'IX'";
            $count_siswa_kelas['ix'] = count(DB::select($sql));
            
        // count siswa semua kelas
            $sql = "SELECT DISTINCT siswa.id, siswa.nisn, siswa.namaSiswa FROM siswa 
                    INNER JOIN nilai ON siswa.id = nilai.siswa_id";
            $count_siswa_kelas['all'] = count(DB::select($sql));

        return view('contents.home',compact('count_siswa_kelas'));
    }

    public function tampilSiswa()
    {
        $siswa = siswa::all(); 
        return view('contents.siswa',compact('siswa'));
    }
    
    public function tampilNilai()
    {
        $nilai = nilai::all();
        $siswa = siswa::leftJoin('nilai', 'nilai.siswa_id', '=', 'siswa.id')->get();
       
        return view('contents.nilai',compact('nilai','siswa'));
    }

    public function tampilCetak()
    {
        $siswa = siswa::all(); 
        $nilai = nilai::all();
        return view('contents.cetak',compact('siswa','nilai'));
    }

    public function vii()
    {
        $nilai = nilai::join('siswa','nilai.siswa_id','=','siswa.id')
        ->select('nilai.id','siswa.namaSiswa','siswa.nisn','nilai.kelas',
        'nilai.semester','nilai.mataPelajaran','nilai.nilai')
        ->where('kelas','vii')
        ->orderBy('namaSiswa', 'asc')
        ->get();
        $siswa = siswa::leftJoin('nilai', 'nilai.siswa_id', '=', 'siswa.id')
        ->get();

        return view('contents.kelasVii',compact('nilai','siswa'));
    }
    
    public function viii()
    {
        $nilai = nilai::join('siswa','nilai.siswa_id','=','siswa.id')
        ->select('nilai.id','siswa.namaSiswa','siswa.nisn','nilai.kelas',
        'nilai.semester','nilai.mataPelajaran','nilai.nilai')
        ->where('kelas','viii')
        ->orderBy('namaSiswa', 'asc')
        ->get();
        $siswa = siswa::leftJoin('nilai', 'nilai.siswa_id', '=', 'siswa.id')
        ->get();

        return view('contents.kelasViii',compact('nilai','siswa'));
    }

    public function ix()
    {
        $nilai = nilai::join('siswa','nilai.siswa_id','=','siswa.id')
        ->select('nilai.id','siswa.namaSiswa','siswa.nisn','nilai.kelas',
        'nilai.semester','nilai.mataPelajaran','nilai.nilai')
        ->where('kelas','ix')
        ->orderBy('namaSiswa', 'asc')
        ->get();
        $siswa = siswa::leftJoin('nilai', 'nilai.siswa_id', '=', 'siswa.id')
        ->get();

        return view('contents.kelasIx',compact('nilai','siswa'));
    }

    public function dataMaster()
    {
        $nilai = nilai::all();
        $siswa = siswa::leftJoin('nilai', 'nilai.siswa_id', '=', 'siswa.id')
        ->orderBy('namaSiswa', 'asc')
        ->get();
       
        return view('contents.dataMaster',compact('nilai','siswa'));
    }
}