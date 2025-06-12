<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanDBController extends Controller
{

    public function index()
    {

        $karyawan = DB::table('karyawan')->orderBy('kodepegawai', 'asc')->paginate(10);

        return view('indexkaryawan', ['karyawan' => $karyawan]);
    }


    public function tambah()
    {
        return view('tambahkaryawan');
    }


    public function store(Request $request)
    {
        $request->validate([
            'kodepegawai' => 'required|size:5|unique:karyawan,kodepegawai',
            'namalengkap' => 'required|max:50',
            'divisi' => 'required|max:5',
            'departemen' => 'required|max:10',
        ]);

        DB::table('karyawan')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi'      => $request->divisi,
            'departemen'  => $request->departemen
        ]);

        return redirect('/karyawan')->with('success', 'Data karyawan berhasil ditambahkan!');
    }

    public function hapus($kodepegawai)
    {
        DB::table('karyawan')->where('kodepegawai', $kodepegawai)->delete();

        return redirect('/karyawan')->with('success', 'Data karyawan berhasil dihapus!');
    }
}
