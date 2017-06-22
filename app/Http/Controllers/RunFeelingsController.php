<?php

namespace App\Http\Controllers;

use App\Models\RunFeeling;
use Illuminate\Http\Request;

class RunFeelingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $runFeelings = RunFeeling::all();

        return view('admin.running_log.run_feelings.index', compact('runFeelings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param \App\Models\RunFeeling $runFeeling
     * @return \Illuminate\Http\Response
     */
    public function create(RunFeeling $runFeeling)
    {
        return view('admin.running_log.run_feelings.create', compact('runFeeling'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Models\RunFeeling $runFeeling
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, RunFeeling $runFeeling)
    {
        $this->validate(request(), [
            'name'        => 'required',
            'description' => 'required',
            ]);

        RunFeeling::create(request([
            'name', 
            'description'
            ]));

        session()->flash(
            'message', 'Run Feeling Created!'
        );

        return redirect('/admin/running_log/run_feelings');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RunFeeling  $runFeeling
     * @return \Illuminate\Http\Response
     */
    public function edit(RunFeeling $runFeeling)
    {
        return view('admin/running_log/run_feelings.edit', compact('runFeeling'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RunFeeling  $runFeeling
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RunFeeling $runFeeling)
    {
        $runFeeling->update($request->all());

        session()->flash(
            'message', 'Run Feeling Updated!'
        );

        return redirect('/admin/running_log/run_feelings');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RunFeeling  $runFeeling
     * @return \Illuminate\Http\Response
     */
    public function destroy(RunFeeling $runFeeling)
    {
        // RunFeeling::findorFail($runFeeling)->delete();

        $runFeeling->delete();

        return redirect('admin/running_log/run_feelings');
    }
}
