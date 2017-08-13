<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class RunType extends Model
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
        $this->hasMany('App\Models\User\RunningLog', 'run_type_id');
    }

    
}
