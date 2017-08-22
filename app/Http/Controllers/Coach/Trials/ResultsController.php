<?php

namespace App\Http\Controllers\Coach\Trials;

use App\Models\Results\Individual\TimeTrialResult;
use App\Models\Coach\TimeTrial;
use App\Models\Coach\Athlete;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResultsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $results = TimeTrialResult::all();

        return view('coach.results.time_trials.index', compact('results', 'timeTrial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(TimeTrialResult $result)
    {
        $timeTrials = TimeTrial::all();

        $athletes = Athlete::where('status', 'a')->orderBy('last_name')->get();

        return view('coach.results.time_trials.create', compact('result', 'timeTrials', 'athletes'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TimeTrial $timeTrial)
    {
        TimeTrialResult::create([
            'athlete_id' => request('athlete_id'),
            'place' => request('place'),
            'total_seconds' => request('total_seconds'),
            'milliseconds' => request('milliseconds'),
            'time_trial_id' => $timeTrial->id
            ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
