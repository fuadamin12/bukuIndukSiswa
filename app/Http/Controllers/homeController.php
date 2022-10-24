<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('contents.home');
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
}