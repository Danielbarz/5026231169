@extends('template')

@section('content')
	<h3>Data Karyawan Baru</h3>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

	<a href="/eas/tambah" class="btn btn-primary"> + Tambah Data</a>
<br>

	<table class="table table-striped table-hover">
		<tr>
			<th>NIP</th>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Gaji</th>
			<th>Aksi</th>
		</tr>
		@foreach($newkaryawan as $n)
		<tr>
			<td>{{ $n->NIP }}</td>
			<td>{{ $n->nama }}</td>
			<td>{{ $n->pangkat }}</td>
            <td>Rp {{ number_format($n->gaji, 0, ',', '.') }}</td>
			<td>
				<a href="/eas/hapus/{{ $n->NIP }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection
