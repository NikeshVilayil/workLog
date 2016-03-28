<?php

namespace App\models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\CanResetPassword

class ProjectCategory extends Model {
	protected $table = 'projectcategory';
	
	public function project() {
		return $this->hasMany('App\Models\Project', 'cat_id');
	}
}