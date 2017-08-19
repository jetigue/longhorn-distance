<?php

namespace App\Http\Controllers\Coach\Trials;

use App\Models\Coach\Athlete;
use App\Models\Results\Individual\TimeTrialResult;
use App\Models\Coach\TimeTrial;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TimeTrialsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('coach');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $timeTrials = TimeTrial::all();

        return view('coach.time_trials.index', compact('timeTrials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(TimeTrial $timeTrial)
    {
        return view('coach.time_trials.create', compact('timeTrial'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'name'              => 'required',
            'trial_date'        => 'required|date',
            'gender_id'         => 'required|integer',
            'distance_id'       => 'required|integer',
            'season_id'         => 'required|integer',
            'timing_method_id'  => 'required|integer',
            'terrain_type_id'   => 'required|integer',
            ]);

        TimeTrial::create(request([
            'name',
            'trial_date',
            'gender_id',
            'season_id',
            'timing_method_id',
            'terrain_type_id',
            'notes']));

        session()->flash(
            'message', 'Time trial successfully created!'
        );

        return redirect('/coach/time_trials');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TimeTrial  $timeTrial
     * @return \Illuminate\Http\Response
     */
    public function show(TimeTrial $timeTrial)
    {
        $athleteResults = TimeTrialResult::where('time_trial_id', $timeTrial->id)->orderBy('place')->get();

        $athletes = Athlete::where('status', 'a')->orderBy('last_name')->get();

        return view('coach.time_trials.show', compact('timeTrial', 'athleteResults', 'athletes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TimeTrial  $timeTrial
     * @return \Illuminate\Http\Response
     */
    public function edit(TimeTrial $timeTrial)
    {
        return view('time_trials.edit', compact('timeTrial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TimeTrial  $timeTrial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TimeTrial $timeTrial)
    {
        $timeTrial->update($request->all());

        session()->flash(
            'message', 'Time Trial Updated!'
        );

        return redirect('/coach/time_trials');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TimeTrial  $timeTrial
     * @return \Illuminate\Http\Response
     */
    public function destroy(TimeTrial $timeTrial)
    {
        //
    }
}
