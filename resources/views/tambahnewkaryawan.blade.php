@extends('template')
@section('content')
<head>
    <title>Tambah New Karyawan</title>
</head>

    <h3>Tambah Data Karyawan</h3>

    <a href="/eas"> Kembali</a>
    <br />
    <br />
    {{-- action mengarah ke pegawai/store untuk dilakukan routing --}}
    <form action="/eas/store" method="post">
        {{ csrf_field() }}
        <div class="row mb-2">
            <div class="col-2">
                <label class="control-label">NIP</label>
            </div>
            <div class="col-6">
                <input type="text" class="form-control @error('NIP') is-invalid @enderror" id="NIP" name="NIP" value="{{ old('NIP') }}">
                 @error('NIP')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-2">
                <label class="control-label">Nama</label>
            </div>
            <div class="col-6">
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
                 @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-2">
                <label class="control-label">Pangkat</label>
            </div>
            <div class="col-6">
                <input type="text" class="form-control @error('pangkat') is-invalid @enderror" id="pangkat" name="pangkat" value="{{ old('pangkat') }}">
                 @error('pangkat')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-2">
                <label class="control-label">Gaji</label>
            </div>
            <div class="col-6">
                <input type="text" class="form-control @error('gaji') is-invalid @enderror" id="gaji" name="gaji" value="{{ old('gaji') }}">
                 @error('gaji')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>
@endsection
