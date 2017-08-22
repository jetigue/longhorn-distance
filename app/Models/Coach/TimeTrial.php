<?php

namespace App\Models\Coach;

use Illuminate\Database\Eloquent\Model;

class TimeTrial extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'trial_date',
        'gender_id', 
        'season_id', 
        'distance_id', 
        'terrain_type_id', 
        'timing_method_id', 
        'notes'
    ];

    public function distance()
	{
		return $this->belongsTo('App\Models\Admin\Distance', 'distance_id');
	}

    public function gender()
	{
		return $this->belongsTo('App\Models\Admin\Gender', 'gender_id');
	}

    public function season()
	{
		return $this->belongsTo('App\Models\Admin\Season', 'season_id');
	}

	public function timingMethod()
	{
		return $this->belongsTo('App\Models\Admin\TimingMethod', 'timing_method_id');
	}

	public function terrainType()
	{
		return $this->belongsTo('App\Models\Admin\TerrainType', 'terrain_type_id');
	}
}
