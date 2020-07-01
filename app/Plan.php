<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = ['user_id', 'condition','condition_detail',"plan",'plan_detail'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
