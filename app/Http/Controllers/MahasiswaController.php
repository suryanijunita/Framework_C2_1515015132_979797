<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function awal()
{
	return "Hello dari MahasiswaController";
}
	public function tambah()
{
	return $this->simpan();
}
	public function simpan()
{
	$mahasiswa = new Mahasiswa();
	$mahasiswa-> nama = 'Juni'; 
	$mahasiswa-> nim = '1515015132'; 
	$mahasiswa-> alamat = 'Tenggarong'; 
	$mahasiswa-> pengguna_id = 1; 
	$mahasiswa-> save();
	return "data dengan nama {$mahasiswa->nama} dengan nim {$mahasiswa->nim} dengan alamat {$mahasiswa->alamat} dengan pengguna_id {$mahasiswa->pengguna_id} telah disimpan";
}
}
