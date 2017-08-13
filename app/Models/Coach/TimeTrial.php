<?php

namespace App\Models\Coach;

use Illuminate\Database\Eloquent\Model;

class TimeTrial extends Model
{
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

	public function timing()
	{
		return $this->belongsTo('App\Models\Admin\TimingMethod', 'timing_method_id');
	}

	public function terrain()
	{
		return $this->belongsTo('App\Models\Admin\TerrainType', 'terrain_type_id');
	}
}
