<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\siswa;

class siswaController extends Controller
{
    public function tambahSiswa(Request $request)
    {
        $namaSiswa          = $request->namaSiswa;
        $nisn               = $request->nisn;
        $tanggalLahir       = $request->tanggalLahir; 
        $tempatLahir        = $request->tempatLahir;
        $jenisKelamin       = $request->jenisKelamin;
        $alamat             = $request->alamat;
        $namaOrangTua       = $request->namaOrangTua;
        $pekerjaanOrangTua  = $request->pekerjaanOrangTua;
        $alamatOrangTua     = $request->alamatOrangTua;
        $asalSekolah        = $request->asalSekolah;

        // proses store
        $siswa                      = new siswa;
        $siswa->namaSiswa           = $namaSiswa;
        $siswa->nisn                = $nisn;
        $siswa->tanggalLahir        = $tanggalLahir;
        $siswa->tempatLahir         = $tempatLahir;
        $siswa->jenisKelamin        = $jenisKelamin;
        $siswa->alamat              = $alamat;
        $siswa->namaOrangTua        = $namaOrangTua;
        $siswa->pekerjaanOrangTua   = $pekerjaanOrangTua;
        $siswa->alamatOrangTua      = $alamatOrangTua;
        $siswa->asalSekolah         = $asalSekolah;
        $siswa->save();
    }

    public function hapusSiswa(Request $request)
    {
        $id = $request->id;

        siswa::find($id)->delete();
    }

    public function editSiswa(Request $request)
    {
        $idSiswa            = $request->idSiswaEdit;

        $namaSiswa          = $request->namaSiswaEdit;
        $nisn               = $request->nisnEdit;
        $tanggalLahir       = $request->tanggalLahirEdit; 
        $tempatLahir        = $request->tempatLahirEdit;
        $jenisKelamin       = $request->jenisKelaminEdit;
        $alamat             = $request->alamatEdit;
        $namaOrangTua       = $request->namaOrangTuaEdit;
        $pekerjaanOrangTua  = $request->pekerjaanOrangTuaEdit;
        $alamatOrangTua     = $request->alamatOrangTuaEdit;
        $asalSekolah        = $request->asalSekolahEdit;

        // proses store
        $siswa                      = siswa::find($idSiswa);
        $siswa->namaSiswa           = $namaSiswa;
        $siswa->nisn                = $nisn;
        $siswa->tanggalLahir        = $tanggalLahir;
        $siswa->tempatLahir         = $tempatLahir;
        $siswa->jenisKelamin        = $jenisKelamin;
        $siswa->alamat              = $alamat;
        $siswa->namaOrangTua        = $namaOrangTua;
        $siswa->pekerjaanOrangTua   = $pekerjaanOrangTua;
        $siswa->alamatOrangTua      = $alamatOrangTua;
        $siswa->asalSekolah         = $asalSekolah;
        $siswa->save();
    }
}
