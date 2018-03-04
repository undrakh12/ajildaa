<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
	protected $table = "companies";

    protected $fillable = [
    	'company_name','company_size','company_phone','company_location','user_id'
    ];

    public function job() {
    	return $this->hasMany('App\Job');
    }

    public function user() {
    	return $this->belongsTo('App\User','user_id');
    }
}
