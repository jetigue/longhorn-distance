<?php

namespace App\Http\Controllers;

use App\Models\TimeTrial;
use Illuminate\Http\Request;

class TimeTrialsController extends Controller
{
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
     * @param  \App\Models\TimeTrial  $timeTrial
     * @return \Illuminate\Http\Response
     */
    public function show(TimeTrial $timeTrial)
    {
        //
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
        //
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
