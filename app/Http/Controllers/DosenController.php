<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Dosen;

class DosenController extends Controller
{
    public function awal()
{
	return "Hello dari DosenController";
}
	public function tambah()
{
	return $this->simpan();
}
	public function simpan()
{
	$dosen = new Dosen();
	$dosen-> nama = 'Suryani Junita Patandianan, M.Kom';
	$dosen-> nip = '1989123456789';
	$dosen-> alamat = 'Samarinda';
	$dosen-> pengguna_id = 1;
	$dosen-> save();
	return "dosen dengan nama {$dosen->nama} dengan nip {$dosen->nip} dengan alamat {$dosen->alamat} dengan pengguna_id {$dosen->pengguna_id} telah disimpan";
}
}
