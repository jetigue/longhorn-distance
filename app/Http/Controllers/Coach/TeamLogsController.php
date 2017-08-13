<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\User\RunningLog;
use App\Repositories\RunningLogs;
use Illuminate\Http\Request;

class TeamLogsController extends Controller
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
        $teamLogs = RunningLog::all()->sortByDesc('run_date');


        return view('coach.team_logs.index', compact('teamLogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RunningLog  $runningLog
     * @return \Illuminate\Http\Response
     */
    public function show(RunningLog $runningLog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RunningLog  $runningLog
     * @return \Illuminate\Http\Response
     */
    public function edit(RunningLog $runningLog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RunningLog  $runningLog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RunningLog $runningLog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RunningLog  $runningLog
     * @return \Illuminate\Http\Response
     */
    public function destroy(RunningLog $runningLog)
    {
        //
    }
}
