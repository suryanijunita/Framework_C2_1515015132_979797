<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosenmatakuliah extends Model
{
    protected $table ='dosenmatakuliah';
    protected $fillable = ['dosen_id','matakuliah_id'];

     public function dosen()
    {
    	return $this->belongsTo(dosen::class); 
    }

    public function matakuliah() 
    {
    	return $this->belongsTo(matakuliah::class); 
    }

    public function jadwalmatakuliah() 
    {
        return $this->hasMany(jadwalmatakuliah::class);
    } 
    
    public function listDosenDanMatakuliah(){
      $out =[];
      foreach ($this->all() as $dosenmatakuliah){
        $out[$dosenmatakuliah->id] = "{$dosenmatakuliah->dosen->nama} (matakuliah {$dosenmatakuliah->matakuliah->title})";
      }
      return $out;
    }
}
