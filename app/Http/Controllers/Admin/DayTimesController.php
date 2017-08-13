<?php

namespace App\Http\Controllers;

use App\Models\Admin\DayTime;
use Illuminate\Http\Request;

class DayTimesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dayTimes = DayTime::all();

        return view('admin.running_log.day_times.index', compact('dayTimes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param \App\Models\DayTime $dayTime
     * @return \Illuminate\Http\Response
     */
    public function create(DayTime $dayTime)
    {
        return view('admin.running_log.day_times.create', compact('dayTime'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Models\DayTime $dayTime
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, DayTime $dayTime)
    {
        $this->validate(request(), [
            'name'        => 'required',
            'description' => 'required',
            ]);

        DayTime::create(request([
            'name', 
            'description'
            ]));

        session()->flash(
            'message', 'Day Time Created!'
        );

        return redirect('/admin/running_log/day_times');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DayTime  $dayTime
     * @return \Illuminate\Http\Response
     */
    public function show(DayTime $dayTime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DayTime  $dayTime
     * @return \Illuminate\Http\Response
     */
    public function edit(DayTime $dayTime)
    {
        return view('admin/running_log/day_times.edit', compact('dayTime'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DayTime  $dayTime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DayTime $dayTime)
    {
        $dayTime->update($request->all());

        session()->flash(
            'message', 'Day Time Updated!'
        );

        return redirect('admin/running_log/day_times');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DayTime  $dayTime
     * @return \Illuminate\Http\Response
     */
    public function destroy(DayTime $dayTime)
    {
        $dayTime->delete();

        return redirect('admin/running_log/day_times');
    }
}
