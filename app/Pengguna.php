<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;


class pengguna extends Model implements AuthenticatableContract
{
	use Authenticatable;
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
