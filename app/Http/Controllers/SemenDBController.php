<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SemenDBController extends Controller
{
    public function index()
    {
        // mengambil data dari table semen
        $semen = DB::table('semen')->paginate(10);

        // mengirim data semen ke view index
        return view('indexsemen', ['semen' => $semen]);
    }

    public function tambah()
    {
        // memanggil view tambah
        return view('tambahsemen');
    }

    // method untuk insert data ke table semen
    public function store(Request $request)
    {
        // insert data ke table semen
        DB::table('semen')->insert([
            'merksemen' => $request->merksemen,
            'hargasemen' => $request->hargasemen,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);
        // alihkan halaman ke halaman semen
        return redirect('/semen');
    }

    // method untuk edit data semen
    public function edit($ID) //gapake request karena ada primary key
    {
        // mengambil data semen berdasarkan id yang dipilih
        $semen = DB::table('semen')
            ->where('ID', $ID) //khusus operator =
            ->get();
        // passing data semen yang didapat ke view edit.blade.php
        return view('editsemen', ['semen' => $semen]);
    }
    // update data semen
    public function update(Request $request)
    {
        // update data semen
        DB::table('semen')->where('ID', $request->ID)->update([
            'merksemen' => $request->merksemen,
            'hargasemen' => $request->hargasemen,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);
        // alihkan halaman ke halaman semen
        return redirect('/semen');
    }
    // method untuk hapus data semen
    public function hapus($ID)
    {
        // menghapus data semen berdasarkan ID
        DB::table('semen')->where('ID', $ID)->delete();
        // alihkan halaman ke halaman semen
        return redirect('/semen');
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;
        // mengambil data dari table semen sesuai pencarian
        $semen = DB::table('semen')
            ->where('merksemen', 'like', "%" . $cari . "%")
            ->paginate();
        // mengirim data semen ke view index
        return view('indexsemen', ['semen' => $semen]);
    }
}
