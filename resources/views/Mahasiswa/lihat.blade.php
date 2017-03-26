@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('mahasiswa') }}"><i style+"color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data Mahasiswa</strong>		
	</div>
	<table class="table">
		<tr>
			<td>Nama Mahasiswa</td>
			<td>:</td>
			<td>{{ $mahasiswa->nama }}</td>
		</tr>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td>{{ $mahasiswa->nim }}</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>{{ $mahasiswa->alamat }}</td>
		</tr>
		<tr>
			<td>Pengguna ID</td>
			<td>:</td>
			<td>{{ $mahasiswa->pengguna_id}}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$mahasiswa->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diupdate tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$mahasiswa->updated_at}}</td>
		</tr>
	</table>
</div>
@stop
<!-- $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nama = $input->nama;
        $mahasiswa->nip = $input->nip;
        $mahasiswa->alamat = $input->alamat;
        $mahasiswa->pengguna_id = $input->pengguna_id;
        $informasi = $mahasiswa->save() ? 'Berhasil update data': 'Gagal update data';
        return redirect ('mahasiswa') -> with (['informasi'=>$informasi]);
    } -->