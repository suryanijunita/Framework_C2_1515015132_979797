<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'pengguna';
    // protected $fillable = ['username','password'];
    public function Mahasiswa()
    {
    	return $this->hasOne(Mahasiswa::class);
    }
     public function Dosen()
    {
    	return $this->hasOne(Mahasiswa::class);
}
}