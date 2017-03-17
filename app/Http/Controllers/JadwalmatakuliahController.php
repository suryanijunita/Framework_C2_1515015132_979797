<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Jadwalmatakuliah;

class JadwalmatakuliahController extends Controller
{
    public function awal()
{
	return "Hello dari JadwalmatakuliahController";
}
	public function tambah()
{
	return $this->simpan();
}
	public function simpan()
{
	$jadwal_matakuliah = new Jadwalmatakuliah();
	$jadwal_matakuliah-> mahasiswa_id = 1;
	$jadwal_matakuliah-> ruangan_id = 1;
	$jadwal_matakuliah-> dosen_matakuliah_id = 1;
	$jadwal_matakuliah->save();
	return "jadwal matakuliah dengan mahasiswa_id {$jadwal_matakuliah->mahasiswa_id} dengan ruangan_id {$jadwal_matakuliah->ruangan_id} dengan dosen matakuliah {$jadwal_matakuliah->dosen_matakuliah_id} telah disimpan";
}
}
