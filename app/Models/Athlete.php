<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Athlete extends Model
{
    
	/**
	* Fillable fields for an athlete.
	*
	*@var array
	*/
    protected $fillable = [
	    'first_name',
	    'last_name',
	    'sex',
	    'grad_year',
	    'status'
	    ];

	public function trialResults()
	{
		
	}

    public function getStatusAttribute($value)
	{
		if ($value == "a") { return "Active"; }
			
		return "Inactive";
	}

	public function getSexAttribute($value)
	{
		if ($value == "f") { return "Female"; }
			
		return "Male";
	}
}
