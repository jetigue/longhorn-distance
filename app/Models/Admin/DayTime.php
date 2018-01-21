<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class DayTime extends Model
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
        $this->hasMany('App\Models\User\RunningLog');
    }
}
