<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosenmatakuliah extends Model
{
    protected $table = 'dosen_matakuliah';
    // protected $fillable = ['dosen_id','matakuliah_id'];
    public function jadwal_matakuliah()
	{
		return $this->hasMany(JadwalMatakuliah)
	}
	public function dosen()
	{
		return $this->belongsTo(Dosen::class);
	}
	public function matakuliah()
	{
		return $this->belongsTo(Matakuliah::class);
	}

}
