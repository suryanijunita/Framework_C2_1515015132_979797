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