<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noti extends Model
{
    //
    
	protected $table = 'request-noti';
	// Primary Key
	protected $primaryKey = 'id';
	// Timestamps
	public $timestamps = true;
	
	public function request(){
		
		return $this->belongsTo('App\Request_');
	}
}
