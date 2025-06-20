<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class NewkaryawanController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	// $pegawai = DB::table('pegawai')->get(); //returnya array all record
    	$newkaryawan = DB::table('newkaryawan')->get();

    	// mengirim data pegawai ke view index
    	return view('newkaryawan',['newkaryawan' => $newkaryawan]);

    }

    public function tambah()
{

	// memanggil view tambah
	return view('tambahnewkaryawan');

}
// method untuk insert data ke table pegawai
public function store(Request $request)
{
	// insert data ke table pegawai
	DB::table('newkaryawan')->insert([
		'NIP' => $request->NIP,
		'nama' => $request->nama,
		'pangkat' => $request->pangkat,
		'gaji' => $request->gaji
	],[
            // Pesan error custom yang user-friendly sesuai permintaan soal
            'NIP.required' => 'NIP wajib diisi.',
            'NIP.size' => 'NIP harus terdiri dari 9 karakter.',
            'NIP.unique' => 'NIP ini sudah terdaftar. Silakan gunakan NIP lain.',
            'gaji.integer' => 'Gaji harus berupa angka.'
        ]);

	// alihkan halaman ke halaman pegawai
	return redirect('/eas')->with(  'status', 'Data pegawai berhasil ditambahkan!');

}


// method untuk hapus data pegawai
public function hapus($NIP)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('newkaryawan')->where('NIP',$NIP)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/eas')->with('status', 'Data pegawai berhasil dihapus!'); // menambahkan pesan sukses
}


}
