<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{

    protected $table = 'dosen';
    protected $fillable = ['nama','nip','alamat','pengguna_id'];
    public function pengguna(){ 
    	return $this->belongsTo(pengguna::class);

    }
    public function dosenmatakuliah(){
    	return $this->hasMany(dosenmatakuliah::class);
    }

    public function getUsernameAttribute(){
      return $this->pengguna->username;
    }

    public function listDosenDanNip(){
      $out =[];
      foreach ($this->all() as $dosen){
        $out[$dosen->id] = "{$dosen->nama} ({$dosen->nip})";
      }
      return $out;
    }
}
