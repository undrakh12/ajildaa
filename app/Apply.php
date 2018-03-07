<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    protected $table = "applies";

    protected $guarded = [];

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }

    public function job(){
        return $this->belongsTo('App\Job','job_id');
    }
}