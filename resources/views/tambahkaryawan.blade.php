@extends('template')

@section('content')

<div class="content-panel">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3>Form Tambah Data Karyawan</h3>
        <a href="/karyawan" class="btn btn-secondary"> &larr; Kembali</a>
    </div>

    {{-- Menampilkan pesan error validasi jika ada --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Terjadi beberapa masalah dengan inputan Anda.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Form action mengarah ke /karyawan/store --}}
    <form action="/karyawan/store" method="post">
        {{ csrf_field() }}

        {{-- Setiap baris form sekarang memiliki div untuk label dan div untuk input --}}
        <div class="row mb-3">
            <div class="col-md-3">
                <label for="kodepegawai" class="form-label">Kode Pegawai</label>
            </div>
            <div class="col-md-9">
                <input type="text" class="form-control" name="kodepegawai" id="kodepegawai" placeholder="Contoh: K0123" required="required" maxlength="5" value="{{ old('kodepegawai') }}">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-3">
                <label for="namalengkap" class="form-label">Nama Lengkap</label>
            </div>
            <div class="col-md-9">
                <input type="text" class="form-control" name="namalengkap" id="namalengkap" placeholder="Masukkan nama lengkap" required="required" value="{{ old('namalengkap') }}">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-3">
                <label for="divisi" class="form-label">Divisi</label>
            </div>
            <div class="col-md-9">
                <input type="text" class="form-control" name="divisi" id="divisi" placeholder="Contoh: IT, HRD, FIN" required="required" maxlength="5" value="{{ old('divisi') }}">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-3">
                <label for="departemen" class="form-label">Departemen</label>
            </div>
            <div class="col-md-9">
                <input type="text" class="form-control" name="departemen" id="departemen" placeholder="Contoh: IT, Finance" required="required" maxlength="10" value="{{ old('departemen') }}">
            </div>
        </div>

        <div class="row">
            {{-- Tombol submit dipindahkan agar sejajar dengan input field --}}
            <div class="col-md-9 offset-md-3">
                <button type="submit" class="btn btn-primary">Simpan Data</button>
            </div>
        </div>

    </form>
</div>

@endsection
