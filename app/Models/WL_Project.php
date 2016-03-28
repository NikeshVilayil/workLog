<?php

namespace App\models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\CanResetPassword

class WL_Project extends Model {
	protected $table = 'worklogproject';

	public function workLog() {
		return $this->belongsTo('App\Models\User', 'worklog_id');
	}
	public function project() {
		return $this->belongsTo('App\Models\Project', 'project_id');
	}
	
}