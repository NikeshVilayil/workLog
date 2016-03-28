<?php

namespace App\models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\CanResetPassword

class Users extends Model {
	protected $table = 'users';
	
	public function workLog() {
		return $this->hasMany('App\Models\WorkLog', 'user_id');
	}
}