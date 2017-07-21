<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Calendar;
use App\Models\RunningLog;
use App\Repositories\RunningLogs;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

class DashboardsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function admin()
    {
    	return view('admin.dashboard');
    }

    public function athlete()
    {

        // $weeklySummerMileage = RunningLog::summerMileage()
        //     ->select(DB::raw('calendar.week as week, ifnull(sum(distance), 0) as distance'))
        //     ->leftJoin('calendar', 'run_date', '=', 'calendar.calendar_date')
        //     ->orderBy('run_date')
        //     ->groupBy('week')
        //     ->pluck('distance');

        // $lastWeek = RunningLog::select(DB::raw('calendar.day as day, ifnull(sum(distance), 0) as distance'))
        //     ->groupBy('day', 'user_id')
        //     ->rightJoin('calendar', 'run_date', '=', 'calendar.calendar_date')
        //     ->orderBy('calendar.calendar_date')
        //     ->whereBetween('calendar.calendar_date', ['2017-05-14', '2017-08-01'])
        //     ->where('user_id', Auth::user()->id)
        //     ->pluck('distance', 'day');


        // $lastWeek = RunningLog::select(DB::raw('DATE_FORMAT(calendar.calendar_date, "%b%e") as day, ifnull(sum(distance), 0) as distance'))
        //     ->groupBy('calendar_date', 'user_id')
        //     ->rightJoin('calendar', function ($join) {
        //         $join->on('run_date', '=', 'calendar.calendar_date')
        //         ->where('user_id', Auth::user()->id);
        //         })
        //     ->orderBy('calendar.calendar_date')
        //      ->whereBetween('calendar.calendar_date', [Carbon::now()->subWeek(), Carbon::now()])
        //     ->pluck('distance', 'day');


        // $weeklySummerMileage = RunningLog::select(DB::raw('calendar.week as week, ifnull(sum(distance), 0) as distance'))
        //     ->groupBy('week', 'user_id')
        //     ->rightJoin('calendar', function ($join) {
        //         $join->on('run_date', '=', 'calendar.calendar_date')
        //         ->where('user_id', Auth::user()->id);
        //         })
        //     ->orderBy('calendar.calendar_date')
        //     ->whereBetween('calendar.calendar_date', ['2017-05-14', '2017-08-01'])
        //     ->pluck('distance', 'week');

        // $monthlySummerMileage = RunningLog::select(DB::raw('calendar.month as month, ifnull(sum(distance), 0) as distance'))
        //     ->rightJoin('calendar', function ($join) {
        //         $join->on('run_date', '=', 'calendar.calendar_date')
        //         ->where('user_id', Auth::user()->id);
        //         })
        //     ->groupBy('month', 'user_id')
        //     ->orderBy('calendar.calendar_date')
        //     ->whereBetween('calendar.calendar_date', ['2017-05-14', '2017-08-01'])
        //     ->pluck('distance', 'month');



            
    	return view('athlete.dashboard', compact(
            'monthlySummerMileage', 
            'weeklySummerMileage', 
            'percentRunType',
            'percentTerrainType',
            'percentRunEffort',
            'percentRunFeeling',
            'lastWeek'
            ));
    }

    public function coach()
    {
    	return view('coach.dashboard');
    }

    public function user(RunningLogs $runningLogs)
    {
        $weeklySummerMileage = $runningLogs->weeklySummerMileage();

        $mileageLastWeek = $runningLogs->mileageLastWeek();

        // $totalMileage = $runningLogs->all()->where('user_id', Auth::user()->id)->sum('distance');
        $totalMileage = $runningLogs->totalMileage();
        $totalSummerMileage = $runningLogs->totalSummerMileage();
        $totalMileageThisWeek = $runningLogs->totalMileageThisWeek();
        $totalMileageThisMonth = $runningLogs->totalMileageThisMonth();
        $totalMileageThisYear = $runningLogs->totalMileageThisYear();
        $percentRunType = $runningLogs->percentRunType();
        $percentTerrainType = $runningLogs->percentTerrainType();
        $percentRunFeeling = $runningLogs->percentRunFeeling();
        $percentRunEffort = $runningLogs->percentRunEffort();


        return view('user.dashboard', compact(
            'weeklySummerMileage',
            'mileageLastWeek',
            'percentRunType',
            'percentTerrainType',
            'percentRunEffort',
            'percentRunFeeling',
            'totalMileage',
            'totalSummerMileage',
            'totalMileageThisWeek',
            'totalMileageThisMonth',
            'totalMileageThisYear'
            ));
    }
}
