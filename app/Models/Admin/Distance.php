<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Distance extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    public function timeTrials()
    {
        return $this->hasMany('App\Model\Coach\TimeTrial', 'distance_id');
    }
}
