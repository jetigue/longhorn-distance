<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

        /**
    * Define the relationships
    *
    */
    public function timeTrials()
    {
        $this->hasMany(\App\Models\Coach\TimeTrial::class);
    }
}
