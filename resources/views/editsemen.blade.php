@extends('template')
@section('content')

    <head>
        <title>Edit Data Semen</title>
    </head>

    <h3>Edit Data Semen</h3>

    <a href="/semen"> Kembali</a>

    <br />
    <br />

    {{-- Perulangan @foreach DIKEMBALIKAN untuk menangani data koleksi --}}
    @foreach ($semen as $s)
    <form action="/semen/update" method="post">
        {{ csrf_field() }}

        {{-- PERBAIKAN: 'name' diubah dari "id" menjadi "ID" agar cocok dengan controller --}}
        <input type="hidden" name="ID" value="{{ $s->ID }}">

        <div class="row mb-2">
            <div class="col-2">
                <label for="merkInput" class="control-label">Merk Semen</label>
            </div>
            <div class="col-6">
                <input type="text" name="merksemen" id="merkInput" required="required" class="form-control" value="{{ $s->merksemen }}">
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-2">
                <label for="hargaInput" class="control-label">Harga Semen</label>
            </div>
            <div class="col-6">
                <input type="number" name="hargasemen" id="hargaInput" required="required" class="form-control" value="{{ $s->hargasemen }}">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-2">
                <label for="ketersediaanSelect" class="col-form-label">Ketersediaan</label>
            </div>
            <div class="col-6">
                <select name="tersedia" id="ketersediaanSelect" required="required" class="form-select">
                    {{-- Logika untuk memilih status yang sesuai dengan data --}}
                    <option value="1" {{ $s->tersedia == 1 ? 'selected' : '' }}>Tersedia</option>
                    <option value="0" {{ $s->tersedia == 0 ? 'selected' : '' }}>Tidak Tersedia</option>
                </select>
            </div>
        </div>

        <div class="row mb-3">
             <div class="col-2">
                <label for="beratInput" class="col-form-label">Berat Semen (Kg)</label>
             </div>
             <div class="col-6">
                <input type="number" step="0.01" name="berat" id="beratInput" required="required" class="form-control" value="{{ $s->berat }}">
            </div>
        </div>

        <div class="row">
            <div class="offset-2 col-6">
                <input type="submit" value="Simpan Perubahan" class="btn btn-success">
            </div>
        </div>

    </form>
    @endforeach

@endsection
