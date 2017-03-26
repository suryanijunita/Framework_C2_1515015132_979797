<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('pengguna/lihat/{pengguna}','PenggunaController@lihat');
Route::post('pengguna/simpan','PenggunaController@simpan');
Route::get('pengguna/edit/{pengguna}','PenggunaController@edit');
Route::post('pengguna/edit/{pengguna}','PenggunaController@eupdate');
Route::get('pengguna/hapus/{pengguna}','PenggunaController@hapus');

Route::get('matakuliah/lihat/{matakuliah}','MatakuliahController@lihat');
Route::post('matakuliah/simpan','MatakuliahController@simpan');
Route::get('matakuliah/edit/{matakuliah}','MatakuliahController@edit');
Route::post('matakuliah/edit/{matakuliah}','MatakuliahController@update');
Route::get('matakuliah/hapus/{matakuliah}','MatakuliahController@hapus');

Route::get('ruangan/lihat/{ruangan}','RuanganController@lihat');
Route::post('ruangan/{simpan}','RuanganController@simpan');
Route::get('ruangan/edit/{ruangan}','RuanganController@edit');
Route::post('ruangan/edit/{ruangan}','RuanganController@update');
Route::get('ruangan/hapus/{ruangan}','RuanganController@hapus');

Route::get('mahasiswa/lihat/{mahasiswa}','MahasiswaController@lihat');
Route::post('mahasiswa/{simpan}','MahasiswaController@simpan');
Route::get('mahasiswa/edit/{mahasiswa}','MahasiswaController@edit');
Route::post('mahasiswa/edit/{mahasiswa}','MahasiswaController@update');
Route::get('mahasiswa/hapus/{mahasiswa}','MahasiswaController@hapus');

Route::get('dosen/lihat/{dosen}','DosenController@lihat');
Route::post('dosen/{simpan}','DosenController@simpan');
Route::get('dosen/edit/{dosen}','DosenController@edit');
Route::post('dosen/edit/{dosen}','DosenController@update');
Route::get('dosen/hapus/{dosen}','DosenController@hapus');

Route::get('jadwal_matakuliah/lihat/{jadwal_matakuliah}','JadwalmatakuliahController@lihat');
Route::post('jadwal_matakuliah/{simpan}','JadwalmatakuliahController@simpan');
Route::get('jadwal_matakuliah/edit/{jadwal_matakuliah}','JadwalmatakuliahController@edit');
Route::post('jadwal_matakuliah/edit/{jadwal_matakuliah}','JadwalmatakuliahController@update');
Route::get('jadwal_matakuliah/hapus/{jadwal_matakuliah}','JadwalmatakuliahController@hapus');

Route::get('dosen_matakuliah/lihat/{dosen_matakuliah}','DosenmatakuliahContorller@lihat');
Route::post('dosen_matakuliah/{simpan}','DosenmatakuliahContorller@simpan');
Route::get('dosen_matakuliah/edit/{dosen_matakuliah}','DosenmatakuliahContorller@edit');
Route::post('dosen_matakuliah/edit/{dosen_matakuliah}','DosenmatakuliahContorller@update');
Route::get('dosen_matakuliah/hapus/{dosen_matakuliah}','DosenmatakuliahContorller@hapus');

Route::get('pengguna/tambah','PenggunaController@tambah'); 
Route::get('pengguna','PenggunaController@awal'); 
Route::get('/public', function () {
    return ('Nama saya : Suryani Junita Patandianan');

});	

Route::get('ruangan/tambah','RuanganController@tambah'); 
Route::get('ruangan','RuanganController@awal'); 
Route::get('/public', function () {
    return ('Nama saya : Suryani Junita Patandianan');
});

Route::get('matakuliah/tambah','MatakuliahController@tambah'); 
Route::get('matakuliah','MatakuliahController@awal'); 
Route::get('/public', function () {
    return ('Nama saya : Suryani Junita Patandianan');
});

Route::get('dosen/tambah','DosenController@tambah'); 
Route::get('dosen','DosenController@awal'); 
Route::get('/public', function () {
    return ('Nama saya : Suryani Junita Patandianan');
});

Route::get('mahasiswa/tambah','MahasiswaController@tambah');
Route::get('mahasiswa','MahasiswaController@awal');
Route::get('public', function(){
return 'Nama Saya = Suryani Junita Patandianan';

});

Route::get('dosenmatakuliah/tambah','DosenmatakuliahController@tambah');
Route::get('dosenmatakuliah','DosenmatakuliahController@awal');
Route::get('public', function(){
return 'Nama Saya = Suryani Junita Patandianan';

});

Route::get('jadwalmatakuliah/tambah','JadwalmatakuliahController@tambah');
Route::get('jadwalmatakuliah','JadwalmatakuliahController@awal');
Route::get('public', function(){
return 'Nama Saya = Suryani Junita Patandianan';

});

Route::get('/', function () {
    return view('welcome');
});	