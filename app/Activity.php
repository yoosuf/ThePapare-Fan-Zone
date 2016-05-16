<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{


    protected $guarded = [];
    /**
     * Get the user responsible for the given activity.
     *
     * @return User
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }




    /**
     * Get the subject of the activity.
     *
     * @return mixed
     */
    public function subject()
    {
        return $this->morphTo();
    }
}
