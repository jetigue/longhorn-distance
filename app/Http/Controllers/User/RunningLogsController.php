<?php

namespace App\Http\Controllers;

use App\Http\Requests\RunningLogRequest;
use App\Models\Admin\DayTime;
use App\Models\Admin\RunEffort;
use App\Models\Admin\RunFeeling;
use App\Models\Admin\RunType;
use App\Models\Admin\TerrainType;
use App\Models\User\RunningLog;
use Auth;
use Illuminate\Http\Request;

class RunningLogsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $runningLogs = RunningLog::where('user_id', Auth::user()->id)
            ->orderBy('run_date', 'desc')
            ->get();

        return view('user.running_log.index', compact('runningLogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(RunningLog $runningLog)
    {
        $runTypes = RunType::all();
        $terrainTypes = TerrainType::all();
        $dayTimes = DayTime::all();
        $runEfforts = RunEffort::all();
        $runFeelings = RunFeeling::all();

        return view('user.running_log.create', compact(
            'runningLog',
            'runTypes',
            'terrainTypes',
            'runEfforts',
            'runFeelings',
            'dayTimes'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\RunningLogRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(RunningLogRequest $request)
    {
        
        auth()->user()->log(
            new RunningLog(request([
            'run_date',
            'day_time_id',
            'distance',
            'total_seconds',
            'run_type_id',
            'terrain_type_id',
            'run_effort_id',
            'run_feeling_id',
            'notes']))
        );

        session()->flash(
            'message',
            'Run Logged!'
        );

        return redirect('/running_log');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RunningLog  $runningLog
     * @return \Illuminate\Http\Response
     */
    public function show(RunningLog $runningLog)
    {
        return view('user.running_log.show', compact('runningLog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RunningLog  $runningLog
     * @return \Illuminate\Http\Response
     */
    public function edit(RunningLog $runningLog)
    {
        $runTypes = RunType::all();
        $terrainTypes = TerrainType::all();
        $dayTimes = DayTime::all();
        $runEfforts = RunEffort::all();
        $runFeelings = RunFeeling::all();

        return view('user.running_log.edit', compact(
            'runningLog',
            'runTypes',
            'terrainTypes',
            'dayTimes',
            'runFeelings',
            'runEfforts'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User\RunningLog  $runningLog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RunningLog $runningLog)
    {
        $runningLog->update($request->all());

        session()->flash(
            'message',
            'Log Updated!'
        );

        return redirect('/running_log');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RunningLog  $runningLog
     * @return \Illuminate\Http\Response
     */
    public function destroy(RunningLog $runningLog)
    {
        $runningLog->delete();

        return redirect('running_log');
    }
}
