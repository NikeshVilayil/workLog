<?php

namespace App\models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\CanResetPassword

class Project extends Model {
	protected $table = 'project';

	public function category() {
		return $this->belongsTo('App\Models\ProjectCategory', 'cat_id');
		
	public function workLog() {
		return $this->hasMany('App\Models\WorkLog', 'project_id');
	}
}
	
}