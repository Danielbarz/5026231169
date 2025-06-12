@extends('template')

@section('content')
    <div class="content-panel">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3>Data Karyawan</h3>
        </div>

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Kode Pegawai</th>
                        <th>Nama Lengkap</th>
                        <th>Divisi</th>
                        <th>Departemen</th>
                        <th style="width: 15%;">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($karyawan as $k)
                        <tr>
                            <td>{{ $k->kodepegawai }}</td>
                            <td>{{ Str::upper($k->namalengkap) }}</td>
                            <td>{{ $k->divisi }}</td>
                            <td>{{ Str::lower($k->departemen) }}</td>
                            <td>
                                <a href="/karyawan/hapus/{{ $k->kodepegawai }}" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Hapus</a>
                            </td>
                        </tr>
                    @empty
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-between align-items-center mt-4">
            <div class="text-muted">
                Halaman : {{ $karyawan->currentPage() }} |
                Jumlah Data : {{ $karyawan->total() }} |
                Data Per Halaman : {{ $karyawan->perPage() }}
            </div>
            <div>
                {{ $karyawan->links() }}
            </div>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-4">
            <a href="/karyawan/tambah" class="btn btn-primary">+ Tambah Karyawan Baru</a>
        </div>
    </div>
@endsection
