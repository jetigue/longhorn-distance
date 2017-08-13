<?php

namespace App\Http\Controllers;

use App\Models\Coach\AthleteTrialResult;
use Illuminate\Http\Request;

class AthleteTrialResultsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = AthleteTrialResult::all();

        return view('athlete.trial_results.index', compact('results'));
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
     * @param  \App\Models\AthleteTrialResult  $athleteTrialResult
     * @return \Illuminate\Http\Response
     */
    public function show(AthleteTrialResult $athleteTrialResult)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AthleteTrialResult  $athleteTrialResult
     * @return \Illuminate\Http\Response
     */
    public function edit(AthleteTrialResult $athleteTrialResult)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AthleteTrialResult  $athleteTrialResult
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AthleteTrialResult $athleteTrialResult)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AthleteTrialResult  $athleteTrialResult
     * @return \Illuminate\Http\Response
     */
    public function destroy(AthleteTrialResult $athleteTrialResult)
    {
        //
    }
}
