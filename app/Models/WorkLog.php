<?php

namespace App\models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\CanResetPassword

class WorkLog extends Model {
	protected $table = 'worklog';
	
	public function user() {
		return $this->belongsTo('App\Models\User', 'user_id');
	}
	public function workLog() {
		return $this->hasMany('App\Models\WL_Project', 'worklog_id');
	}
}