<?php

namespace App\models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\CanResetPassword

class WL_Session extends Model {
	protected $table = 'worklogsessions';
	

	public function wlProject() {
		return $this->belongsTo('App\Models\WL_Project', 'worklog_project_id');
	}
}