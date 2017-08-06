<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RunFeeling extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description'
    ];

    /**
    * Define the relationships
    *
    */
    public function runningLogs()
    {
        $this->hasMany('App\Models\RunningLog');
    }
}
