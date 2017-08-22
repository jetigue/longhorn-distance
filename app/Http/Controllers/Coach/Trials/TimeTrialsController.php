<?php

namespace App\Http\Controllers\Coach\Trials;

use App\Models\Admin\Distance;
use App\Models\Admin\Gender;
use App\Models\Admin\Season;
use App\Models\Admin\TerrainType;
use App\Models\Admin\TimingMethod;
use App\Models\Coach\Athlete;
use App\Models\Coach\TimeTrial;
use App\Models\Results\Individual\TimeTrialResult;
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
        $timeTrials = TimeTrial::all()->sortByDesc('trial_date');

        return view('coach.time_trials.index', compact('timeTrials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(TimeTrial $timeTrial)
    {
        $genders = Gender::all();
        $seasons = Season::all();
        $distances = Distance::all();
        $terrainTypes = TerrainType::all();
        $timingMethods = TimingMethod::all();

        return view('coach.time_trials.create', compact(
            'timeTrial', 
            'genders', 
            'seasons', 
            'distances', 
            'terrainTypes', 
            'timingMethods'
            ));
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
            'distance_id',
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
        $genders = Gender::all();
        $seasons = Season::all();
        $distances = Distance::all();
        $terrainTypes = TerrainType::all();
        $timingMethods = TimingMethod::all();

        return view('coach.time_trials.edit', compact(
            'timeTrial', 
            'genders', 
            'seasons', 
            'distances', 
            'terrainTypes', 
            'timingMethods'
            ));
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

    public function addResult(TimeTrialResult $timeTrialresult, TimeTrial $timeTrial)
    {
        TimeTrialResult::create([
            'athlete_id' => request('athlete_id'),
            'place' => request('place'),
            'total_seconds' => request('total_seconds'),
            'milliseconds' => request('milliseconds'),
            'time_trial_id' => $timeTrial->id
            ]);

        return redirect();
    }
}
