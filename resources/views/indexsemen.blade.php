@extends('template')

@section('content')
	<h3>Data Semen</h3>

	<a href="/semen/tambah" class="btn btn-primary"> + Tambah Data Semen Baru</a>
<br>
</br>
    <p> Cari Data Semen :</p>
    <form action="/semen/cari" method="GET">
        <input type="text" class="form-control" name="cari" placeholder="Cari Semen ..">
        <input type="submit" value="CARI" class="btn btn-info">
    </form>
	<br/>


	<table class="table table-striped table-hover">
		<tr>
			<th>Merk Semen</th>
			<th>Harga Semen</th>
			<th>Tersedia</th>
			<th>Berat</th>
			<th>Opsi</th>
		</tr>
		@foreach($semen as $p)
		<tr>
			<td>{{ $p->merksemen }}</td>
			<td>{{ $p->hargasemen }}</td>
			<td>{{ $p->tersedia }}</td>
			<td>{{ $p->berat }}</td>
			<td>
				<a href="/semen/edit/{{ $p->ID }}" class="btn btn-success">Edit</a>
				<a href="/semen/hapus/{{ $p->ID }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    <br/>
	Halaman : {{ $semen->currentPage() }} <br/>
	Jumlah Data : {{ $semen->total() }} <br/>
	Data Per Halaman : {{ $semen->perPage() }} <br/>

    {{ $semen->links() }}


@endsection
