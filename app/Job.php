<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = "jobs";

    protected $fillable = [
    	'job_name','job_location','job_salary','job_slot','job_additional','company_id'
    ];

    public $timestamps = true;

    public function company() {
    	return $this->belongsTo('App\Company');
    }
}
