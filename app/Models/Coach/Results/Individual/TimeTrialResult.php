<?php

namespace App\Models\Coach\Results\Individual;

use Illuminate\Database\Eloquent\Model;

class AthleteTrialResult extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        
    ];

    public function timeTrial()
    {
    	return $this->belongsTo('App\Models\Coach\TimeTrial', 'time_trial_id');
    }

    public function athlete()
    {
    	return $this->belongsTo('App\Models\Coach\Athlete', 'athlete_id');
    }

    public function distance()
    {
        return $this->belongsTo('App\Models\Admin\Distance', 'distance_id' );
    }

    public function getDurationAttribute($duration)
	{

		$total_duration = $this->total_seconds;

		if ($total_duration >= 3600) {
			$duration = ltrim(gmdate('g:i:s', $total_duration), 0);
		}

		else {
			$duration = ltrim(gmdate('i:s', $total_duration), 0);
		}

		return($duration);

	}

	public function getMillisecondsAttribute($milliseconds)
	{

		$milliseconds = sprintf("%02d", $milliseconds);

		return($milliseconds);

	}

    public function getVDOT($vdot)
    {
     

    }
}
