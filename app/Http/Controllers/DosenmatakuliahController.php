<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Dosenmatakuliah;

class DosenmatakuliahController extends Controller
{
     public function awal()
{
	return "Hello dari PenggunaController";
}
	public function tambah()
{
	return $this->simpan();
}
	public function simpan()
{
	$dosen_matakuliah = new Dosenmatakuliah();
	$dosen_matakuliah-> dosen_id = 1;
	$dosen_matakuliah-> matakuliah_id = 1;
	$dosen_matakuliah->save();
	return "dosen matakuliah dengan dosen_id {$dosen_matakuliah->dosen_id} dengan matakuliah_id {$dosen_matakuliah->matakuliah_id} telah disimpan";
}
}
