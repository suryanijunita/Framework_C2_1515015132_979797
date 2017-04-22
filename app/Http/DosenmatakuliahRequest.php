<?php

namespace App\Http\Request;
use App\Http\Request\Request;
/**
* 
*/
class DosenmatakuliahRequest extends Request
{
	
	function authorize()
	{
		return true;
	}
	public function rules()
	{
		$validasi = [
		'nama'=>'required',
		'nim'=>'required|integer',
		'alamat'=>'required'
		'username'=>'required'
		];
		if ($this->is('dosenmatakuliah/tambah')){
			$validasi['password'] = 'required';
			# code...
		}
		return $validasi;
	}
}