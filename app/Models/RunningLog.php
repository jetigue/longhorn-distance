<?php

namespace App\Models;

use DB;
use carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class RunningLog extends Model
{
	  /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'user_id',
        'run_date', 
        'day_time_id',
        'distance',
        'total_seconds',
        'terrain_type_id',
        'run_type_id',
        'run_feeling_id',
        'run_effort_id',
        'notes'
    ];


    public function runType()
	{
		return $this->belongsTo('App\Models\RunType', 'run_type_id');
	}

	public function terrainType()
	{
		return $this->belongsTo('App\Models\TerrainType', 'terrain_type_id');
	}

	public function runEffort()
	{
		return $this->belongsTo('App\Models\RunEffort', 'run_effort_id');
	}

	public function runFeeling()
	{
		return $this->belongsTo('App\Models\RunFeeling', 'run_feeling_id');
	}

	public function dayTime()
	{
		return $this->belongsTo('App\Models\DayTime', 'day_time_id');
	}

	public function user()
	{
		return $this->belongsTo('App\Models\User', 'user_id');
	}


	


/************************************************** 
DEFINE ACCESSORS AND MUTATORS
***************************************************/
	
	public function getAveragePaceAttribute($averagePace)
	{

		$total_seconds = $this->total_seconds;

		$distance = $this->distance;

		$averagePace = $total_seconds / $distance;

		$averagePace = ltrim(gmdate('i:s', $averagePace), 0);

		return($averagePace);

	}


	public function getDurationAttribute($duration)
	{

		$total_duration = $this->total_seconds;

		$duration = ltrim(gmdate('i:s', $total_duration), 0);

		return($duration);

	}

	public function getMillisecondsAttribute($milliseconds)
	{

		$milliseconds = sprintf("%02d", $milliseconds);

		return($milliseconds);

	}

	public function getMinutesAttribute($minutes)
	{
		$totalTime = $this->total_seconds;

		$minutes = floor($totalTime / 60);

		return($minutes);

	}

	public function getSecondsAttribute($seconds)
	{
		$totalTime = $this->total_seconds;

		$minutes = floor($totalTime / 60);

		$seconds = $totalTime - $minutes * 60;

		return($seconds);
	}


}
