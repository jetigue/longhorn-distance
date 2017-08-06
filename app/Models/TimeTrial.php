<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TimeTrial extends Model
{
    public function distance()
	{
		return $this->belongsTo('App\Models\Distance', 'distance_id');
	}

    public function gender()
	{
		return $this->belongsTo('App\Models\Gender', 'gender_id');
	}

    public function season()
	{
		return $this->belongsTo('App\Models\Season', 'season_id');
	}

	public function timing()
	{
		return $this->belongsTo('App\Models\TimingMethod', 'timing_method_id');
	}

	public function terrain()
	{
		return $this->belongsTo('App\Models\TerrainType', 'terrain_type_id');
	}
}
