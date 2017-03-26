<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Dosen;

use App\Pengguna;

class DosenController extends Controller
{
    public function awal()
{
	return view('dosen.awal', ['data'=>Dosen::all()]); //return "Hello dari MahasiswaController";
}
	public function tambah()
{
	return view('dosen.tambah'); //return $this->simpan();
}
	public function simpan(Requests $input) //public function simpan()
{
	$dosen = new Dosen;
	$dosen->nama = $input->nama;
	$dosen->nimP= $input->nip;
	$dosen->alamat = $input->alamat;
	return redirect('dosen')->with(['informasi'=>$this->informasi]);
	//$dosen->save();
	//return "data dengan username ($dosen->username) telah disimpan";
}
	public function edit($id)
{
	$dosen = Dosen::find($id);
	return view('dosen.edit')->with(array('dosen'=>$dosen));
}
	public function lihat($id)
{
	$dosen = Dosen::find($id);
	return view('dosen.lihat')->with(array('dosen'=>$dosen));
}
	public function update($id, Request $input)
{
	$dosen = Dosen::find($id);
	$dosen->nama = $input->nama;
	$dosen->nip = $input->nip;
	$dosen->alamat = $input->alamat;
	$informasi = $dosen->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
	return redirect('dosen')->with(['informasi'=>$informasi]);
}
	public function hapus($id)
{
	$dosen = Dosen::find($id);
	$informasi = $dosen->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
	return redirect('dosen')->with(['informasi'=>$informasi]);
}
	}