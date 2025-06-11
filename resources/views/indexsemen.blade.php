@extends('template')

@section('content')
<div class="content-panel">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3>Data Semen</h3>
        <a href="/semen/tambah" class="btn btn-primary">+ Tambah Data Semen Baru</a>
    </div>

    <form action="/semen/cari" method="GET" class="search-form mb-4">
        <input type="text" class="form-control" name="cari" placeholder="Cari merk semen..">
        <input type="submit" value="CARI" class="btn btn-info">
    </form>

    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Merk Semen</th>
                    <th>Harga Semen</th>
                    <th>Tersedia</th>
                    <th>Berat</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($semen as $p)
                <tr>
                    <td>{{ $p->merksemen }}</td>
                    <td>Rp {{ number_format($p->hargasemen, 0, ',', '.') }}</td>
                    <td>
                        @if($p->tersedia == 1)
                            <span class="status-badge status-tersedia">Tersedia</span>
                        @else
                            <span class="status-badge status-habis">Tidak Tersedia</span>
                        @endif
                    </td>
                    <td>{{ $p->berat }} Kg</td>
                    <td>
                        <a href="/semen/edit/{{ $p->ID }}" class="btn btn-success btn-sm">Edit</a>
                        <a href="/semen/hapus/{{ $p->ID }}" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-between align-items-center mt-4">
        <div class="text-muted">
            Halaman : {{ $semen->currentPage() }} |
            Jumlah Data : {{ $semen->total() }} |
            Data Per Halaman : {{ $semen->perPage() }}
        </div>
        <div>
            {{ $semen->links() }}
        </div>
    </div>
</div>
@endsection
