<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserResume extends Model
{
    protected $table = "user_resumes";

    protected $fillable = ['id','basic_info_id','work_exp_id','education_id','skill_id','additional'];

    public function experience() {

        return $this->hasMany('App\Resume\Experience','work_exp_id');
    }
}
