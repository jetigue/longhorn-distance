<?php

namespace App\Repositories;

use App\Models\Calendar;
use App\Models\RunningLog;
use Auth;
use Carbon\Carbon;
use DB;

class TeamLogs 
{

	public function all()
	{
		$allLogs = RunningLog::all()->sortByDesc('run_date');

		return $allLogs;
	}

}