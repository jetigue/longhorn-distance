<?php

namespace App\Models;

use Auth;
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

	// *
	// * A RunningLog is owned by a user.
	// *
	// * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	
	// public function owner()
	// {
	// 	return $this->belongsTo('App\Models\User', 'user_id');
	// }

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

/**************************************************
DEFINE SCOPES
**************************************************/

    /**
     * Scope a query to only include cuurent user.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeCurrentUser($query)
    {
        return $query->where('user_id', Auth::user()->id);
    }



    /**
     * Scope a query to only include summer mileage.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSummerMileage($query)
    {
        return $query->where('run_date', '>=', '2017-05-14');
    }

    /**
     * Scope a query to only include mileage this week.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeThisWeek($query)
    {
    	$start = Carbon::now()->startOfWeek()->subDay();
		$end = Carbon::now()->endOfWeek()->subDay();

        return $query
        	->where('run_date', '>=', $start)
        	->where('run_date', '<=', $end);
    }

}
