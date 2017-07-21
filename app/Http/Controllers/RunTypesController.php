<?php

namespace App\Http\Controllers;

use App\Models\RunType;
use Illuminate\Http\Request;

class RunTypesController extends Controller
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
        $types = RunType::all();

        return view('admin.running_log.run_types.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Models\RunType  $runType
     * @return \Illuminate\Http\Response
     */
    public function create(RunType $runType)
    {
        return view('admin.running_log.run_types.create', compact('runType'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, RunType $runType)
    {
        $this->validate(request(), [
            'name'        => 'required',
            'description' => 'required',
            ]);

        RunType::create(request([
            'name', 
            'description'
            ]));

        session()->flash(
            'message', 'Run Type Created!'
        );

        return redirect('/admin/running_log/run_types');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RunType  $runType
     * @return \Illuminate\Http\Response
     */
    public function edit(RunType $runType)
    {
        return view('admin/running_log/run_types.edit', compact('runType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RunType  $runType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RunType $runType)
    {
        $runType->update($request->all());

        session()->flash(
            'message', 'Run Type Updated!'
        );

        return redirect('/admin/running_log/run_types');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RunType  $runType
     * @return \Illuminate\Http\Response
     */
    public function destroy(RunType $runType)
    {
        $runType->delete();

        return redirect('admin/running_log/run_types');
    }
}
