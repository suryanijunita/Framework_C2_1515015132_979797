<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matakuliah extends Model
{
    protected $table = 'matakuliah';
    protected $fillable = ['title','keterangan'];
    public function dosen_matakuliah() 
    	return $this->hasMany(dosenmatakuliah::class,'matakuliah_id');                                              matakuliah_id adalah nama field yang berfungsi sebagai foreign key.
    }
    public function listMatakuliahdanDosen(){
      $out =[];
      foreach ($this->all() as $matakuliah){
        $out[$matakuliah->id] = "{$matakuliah->title}";
      }
      return $out;
    }
}
