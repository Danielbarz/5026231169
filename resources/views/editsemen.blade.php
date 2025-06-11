@extends('template')

@section('content')
<div class="content-panel">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3>Edit Data Semen</h3>
        <a href="/semen" class="btn btn-secondary"> &larr; Kembali</a>
    </div>

    @foreach ($semen as $s)
    <form action="/semen/update" method="post">
        {{ csrf_field() }}

        <input type="hidden" name="ID" value="{{ $s->ID }}">

        <div class="form-group row">
            <label for="merkInput" class="col-sm-3 col-form-label">Merk Semen</label>
            <div class="col-sm-9">
                <input type="text" name="merksemen" id="merkInput" required="required" class="form-control" value="{{ $s->merksemen }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="hargaInput" class="col-sm-3 col-form-label">Harga Semen</label>
            <div class="col-sm-9">
                <input type="number" name="hargasemen" id="hargaInput" required="required" class="form-control" value="{{ $s->hargasemen }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="ketersediaanSelect" class="col-sm-3 col-form-label">Ketersediaan</label>
            <div class="col-sm-9">
                <select name="tersedia" id="ketersediaanSelect" required="required" class="form-control">
                    <option value="1" {{ $s->tersedia == 1 ? 'selected' : '' }}>Tersedia</option>
                    <option value="0" {{ $s->tersedia == 0 ? 'selected' : '' }}>Tidak Tersedia</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="beratInput" class="col-sm-3 col-form-label">Berat Semen (Kg)</label>
            <div class="col-sm-9">
                <input type="number" step="0.01" name="berat" id="beratInput" required="required" class="form-control" value="{{ $s->berat }}">
            </div>
        </div>

        <div class="form-group row mt-4">
            <div class="col-sm-9 offset-sm-3">
                <input type="submit" value="Simpan Perubahan" class="btn btn-success">
            </div>
        </div>
    </form>
    @endforeach
</div>
@endsection
