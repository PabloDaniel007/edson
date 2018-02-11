<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recinto extends Model
{
	protected $table = "recintos";
	protected $connection = "capillas";

	public function status(){
		return $this->hasOne('App\Statu', 'id', 'status_id');
	}
}
