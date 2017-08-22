<?php

namespace App\Models\Results\Individual;

use Illuminate\Database\Eloquent\Model;

class TimeTrialResult extends Model
{
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'time_trial_results';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'time_trial_id',
        'athlete_id',
        'total_seconds',
        'milliseconds',
        'place'
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

    public function getVdotAttribute($vdot)
    {
     $time = $this->total_seconds;
     $minutes = $time / 60;
     $distance = $this->timeTrial->distance->meters;
     $velocity = $distance / $minutes; // meters per minute
     $v2 = $velocity * $velocity;
     $percentVO2max = (.8 + .189439 * exp(-.01278 * $minutes)) + (.2989558 * exp(-.1932605 * $minutes));
     $vdot = round((-4.6 + .182258 * $velocity + .000104 * $v2)/$percentVO2max, 1);

     return ($vdot);

    }
}
