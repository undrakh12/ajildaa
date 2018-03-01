<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
	protected $table = "companies";
    protected $fillable = [
    	'company_name','company_size','company_phone','company_location','employer_id'
    ];

    public function jobs() {
    	return $this->hasMany('App\Job');
    }
    public function employer() {
    	return $this->belongsTo('App\User');
    }
}
