<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Dosenmatakuliah;

use App\Dosen;

use App\Matakuliah;

class dosenmatakuliahController extends Controller
{
    public function awal()
{
	return view('dosenmatakuliah.awal', ['data'=>Dosenmatakuliah::all()]); //return "Hello dari MahasiswaController";
}
	public function tambah()
{
	return view('dosenmatakuliah.tambah'); //return $this->simpan();
}
	public function simpan(Request $input) //public function simpan()
{
	$dosenmatakuliah = new Dosenmatakuliah;
	$dosenmatakuliah->dosen_id = $input->dosen_id;
	$dosenmatakuliah->matakuliah_id= $input->matakuliah_id;
	$informasi = $dosenmatakuliah->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
	return redirect('dosenmatakuliah')->with(['informasi'=>$informasi]);
	//$dosenmatakuliah->save();
	//return "data dengan username ($dosenmatakuliah->username) telah disimpan";
}
	public function edit($id)
{
	$dosenmatakuliah = Dosenmatakuliah::find($id);
	return view('dosenmatakuliah.edit')->with(array('dosenmatakuliah'=>$dosenmatakuliah));
}
	public function lihat($id)
{
	$dosenmatakuliah = Dosenmatakuliah::find($id);
	return view('dosenmatakuliah.lihat')->with(array('dosenmatakuliah'=>$dosenmatakuliah));
}
	public function update($id, Request $input)
{
	$dosenmatakuliah = Dosenmatakuliah::find($id);
	$dosenmatakuliah->dosen_id = $input->dosen_id;
	$dosenmatakuliah->matakuliah_id = $input->matakuliah_id;
	$informasi = $dosenmatakuliah->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
	return redirect('dosenmatakuliah')->with(['informasi'=>$informasi]);
}
	public function hapus($id)
{
	$dosenmatakuliah = Dosenmatakuliah::find($id);
	$informasi = $dosenmatakuliah->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
	return redirect('dosenmatakuliah')->with(['informasi'=>$informasi]);
}
	}