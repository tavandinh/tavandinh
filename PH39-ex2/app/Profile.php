<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'address','tel','user_id','province'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
