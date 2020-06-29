<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = ['plan', 'plan_detail','condition','condition_detail'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
