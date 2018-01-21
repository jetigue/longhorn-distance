<?php

namespace App\Http\Controllers;

use App\Models\Admin\RunEffort;
use Illuminate\Http\Request;

class RunEffortsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $efforts = RunEffort::all();

        return view('admin.running_log.run_efforts.index', compact('efforts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param \App\Models\RunEffort $runEffort
     * @return \Illuminate\Http\Response
     */
    public function create(RunEffort $runEffort)
    {
        return view('admin.running_log.run_efforts.create', compact('runEffort'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, RunEffort $runEffort)
    {
        $this->validate(request(), [
            'name'        => 'required',
            'description' => 'required',
            ]);

        RunEffort::create(request([
            'name',
            'description'
            ]));

        session()->flash(
            'message',
            'Run Effort Created!'
        );

        return redirect('/admin/running_log/run_efforts');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RunEffort  $runEffort
     * @return \Illuminate\Http\Response
     */
    public function edit(RunEffort $runEffort)
    {
        return view('admin/running_log/run_efforts.edit', compact('runEffort'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RunEffort  $runEffort
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RunEffort $runEffort)
    {
        $runEffort->update($request->all());

        session()->flash(
            'message',
            'Run Effort Updated!'
        );

        return redirect('/admin/running_log/run_efforts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RunEffort  $runEffort
     * @return \Illuminate\Http\Response
     */
    public function destroy(RunEffort $runEffort)
    {
        $runEffort->delete();

        return redirect('admin/running_log/run_efforts');
    }
}
