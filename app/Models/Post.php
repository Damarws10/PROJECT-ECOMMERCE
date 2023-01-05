<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
	protected $table = '';

    public function addAccess($data)
	{
		DB::table('users')->insert($data);
	}

	public function updateAccess($id, $data){
		DB::table('users')->where('id', $id)->update($data);
	}

	public function deleteAccess($id){
		DB::table('users')->where('id', $id)->delete();
	}

}
