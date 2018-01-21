<?php

namespace App\Models\Admin;

use App\Models\User\RunningLog;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'user_role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role()
    {
        return $this->belongsTo(\App\Models\Admin\UserRole::class, 'user_role_id');
    }

    public function runningLogs()
    {
        return $this->hasMany(\App\Models\User\RunningLog::class);
    }

    public function log(RunningLog $runningLog)
    {
        $this->runningLogs()->save($runningLog);
    }
}
