<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    //protected $table = 'mahasiswa';
    // protected $fillable = ['nama','nim','alamat','pengguna_id'];
    protected $table = 'mahasiswa'

    public function pengguna()
    {
		return $this->belongsTo(Pengguna::class);
	}
	public function jadwal_matakuliah()
	{
		return $this->hasMany(JadwalMatakuliah)
	}

}
