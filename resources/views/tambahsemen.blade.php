@extends('template')
@section('content')

    <head>
        <title>Tambah Data Semen Baru</title>
    </head>

    <h3>Data Semen</h3>

    <a href="/semen"> Kembali</a>

    <br />
    <br />

    <form action="/semen/store" method="post">
        {{ csrf_field() }}

        <div class="row mb-2">
            <div class="col-2">
                <label for="merkInput" class="control-label">Merk Semen</label>
            </div>
            <div class="col-6">
                <input type="text" name="merksemen" id="merkInput" required="required" class="form-control">
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-2">
                <label for="hargaInput" class="control-label">Harga Semen</label>
            </div>
            <div class="col-6">
                <input type="number" name="hargasemen" id="hargaInput" required="required" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-2">
                <label for="ketersediaanSelect" class="col-form-label">Ketersediaan</label>
            </div>
            <div class="col-6">
                <select name="tersedia" id="ketersediaanSelect" required="required" class="form-select">
                    <option value="" disabled selected>-- Pilih Status --</option>
                    <option value="1">Tersedia</option>
                    <option value="0">Tidak Tersedia</option>
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-2">
                <label for="beratInput" class="form-label">Berat (Kg)</label>
            </div>
            <div class="col-6">
                <input type="number" step="0.01" name="berat" id="beratInput" required="required" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="offset-2 col-6">
                <input type="submit" value="Simpan Data" class="btn btn-success">
            </div>
        </div>

    </form>
@endsection
