<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $table = "resumes";

    protected $guarded = [];

    public function user() {
    	return $this->belongsTo('App\User', 'user_id');
    }
}
