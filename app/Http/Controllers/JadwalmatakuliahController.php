<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Jadwalmatakuliah;

use App\Dosenmatakuliah;

use App\Ruangan;

use App\Mahasiswa;

class jadwalmatakuliahController extends Controller
{
    public function awal()
{
	return view('jadwalmatakuliah.awal', ['data'=>Jadwalmatakuliah::all()]); //return "Hello dari MahasiswaController";
}
	public function tambah()
{
	return view('jadwalmatakuliah.tambah'); //return $this->simpan();
}
	public function simpan(Request $input) //public function simpan()
{
	$jadwalmatakuliah = new Jadwalmatakuliah;
	$jadwalmatakuliah->mahasiswa_id= $input->mahasiswa_id;
	$jadwalmatakuliah->ruangan_id= $input->ruangan_id;
	$jadwalmatakuliah->dossenmatakuliah_id= $input->dosenmatakuliah_id;
	$informasi = $jadwalmatakuliah->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
	return redirect('jadwalmatakuliah')->with(['informasi'=>$informasi]);
	//$Jadwalmatakuliah->jadwalmatakuliah();
	//return "data dengan username ($Jadwalmatakuliah->username) telah disimpan";
}
	public function edit($id)
{
	$jadwalmatakuliah = Jadwalmatakuliah::find($id);
	return view('jadwalmatakuliah.edit')->with(array('jadwalmatakuliah'=>$jadwalmatakuliah));
}
	public function lihat($id)
{
	$jadwalmatakuliah = Jadwalmatakuliah::find($id);
	return view('Jadwalmatakuliah.lihat')->with(array('jadwalmatakuliah'=>$jadwalmatakuliah));
}
	public function update($id, Request $input)
{
	$jadwalmatakuliah = Jadwalmatakuliah::find($id);
	$jadwalmatakuliah->mahasiswa_id = $input->mahasiswa_id;
	$jadwalmatakuliah->ruangan_id = $input->ruangan_id;
	$jadwalmatakuliah->dosenmatakuliah_id = $input->dosenmatakuliah_id;
	$informasi = $jadwalmatakuliah->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
	return redirect('jadwalmatakuliah')->with(['informasi'=>$informasi]);
}
	public function hapus($id)
{
	$jadwalmatakuliah = Jadwalmatakuliah::find($id);
	$informasi = $jadwalmatakuliah->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
	return redirect('jadwalmatakuliah')->with(['informasi'=>$informasi]);
}
	}