<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Mahasiswa;

use App\Pengguna;

class MahasiswaController extends Controller
{
    public function awal()
{
	return view('mahasiswa.awal', ['data'=>Mahasiswa::all()]); //return "Hello dari MahasiswaController";
}
	public function tambah()
{
	return view('mahasiswa.tambah'); //return $this->simpan();
}
	public function simpan(Requests $input) //public function simpan()
{
	$mahasiswa = new Mahasiswa;
	$mahasiswa->nama = $input->nama;
	$mahasiswa->nim = $input->nim;
	$mahasiswa->alamat = $input->alamat;
	$informasi = $mahasiswa->save() ? "Berhasil simpan data" : "Gagal simpan data";
	return redirect('mahasiswa')->with(['informasi'=>$informasi]);
	//$Mahasiswa->save();
	//return "data dengan username ($Mahasiswa->username) telah disimpan";
}
	public function edit($id)
{
	$mahasiswa = Mahasiswa::find($id);
	return view('mahasiswa.edit')->with(array('mahasiswa'=>$mahasiswa));
}
	public function lihat($id)
{
	$mahasiswa = Mahasiswa::find($id);
	return view('mahasiswa.lihat')->with(array('mahasiswa'=>$mahasiswa));
}
	public function update($id, Request $input)
{
	$mahasiswa = new Mahasiswa;
	$mahasiswa->nama = $input->nama;
	$mahasiswa->nim = $input->nim;
	$mahasiswa->alamat = $input->alamat;
	$informasi = $mahasiswa->save() ? "Berhasil simpan data" : "Gagal simpan data";
	return redirect('mahasiswa')->with(['informasi'=>$informasi]);
}
	public function hapus($id)
{
	$mahasiswa = Mahasiswa::find($id);
	$informasi = $mahasiswa->delete() ? "Berhasil hapus data" : "Gagal hapus data";
	return redirect('mahasiswa')->with(['informasi'=>$informasi]);
}
	}