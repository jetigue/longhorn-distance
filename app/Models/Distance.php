<?php

namespace App\Models;

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
		return $this->hasMany('App\Model\TimeTrial', 'distance_id');
	}

	public function athleteTrialResults()
	{
		return $this->hasManyThrough('App\Model\AthleteTrialResult', 'App/Models/TimeTrials');
	}
}