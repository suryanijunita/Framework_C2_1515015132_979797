<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
  public function pengguna()
  {
    return $this->belongsTo(pengguna::class);
  }
  
    protected $table = 'mahasiswa';
    protected $fillable = ['nama','nim','alamat','pengguna_id'];

    public function jadwalmatakuliah() 
    {
      return $this->hasMany(jadwalmatakuliah::class,'mahasiswa_id');
    }
    public function getUsernameAttribute(){
      return $this->pengguna->username;
    }

    public function listMahasiswaDanNim(){
      $out =[];
      foreach ($this->all() as $mahasiswa){
        $out[$mahasiswa->id] = "{$mahasiswa->nama} ({$mahasiswa->nim})";
      }
      return $out;
    }
}

