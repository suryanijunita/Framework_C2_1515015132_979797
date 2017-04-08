<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    protected $table = 'pengguna';

    public function dosen(){
    	return $this->hasOne(dosen::class,'pengguna_id');                          
    }

    protected $fillable = ['username','password'];

    public function mahasiswa()
	{
		return $this->hasOne(mahasiswa::class);                           
	}
	
	public function peran(){
		return $this->belongsToMany(peran::class);
	}
}
