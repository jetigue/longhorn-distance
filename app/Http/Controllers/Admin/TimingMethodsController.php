<?php

namespace App\Http\Controllers;

use App\Models\Admin\TimingMethod;
use Illuminate\Http\Request;

class TimingMethodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $timingMethods = TimingMethod::all();

        return view('admin.timing_methods.index', compact('timingMethods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Models\TimingMethod  $timingMethod
     * @return \Illuminate\Http\Response
     */
    public function create(TimingMethod $timingMethod)
    {
        return view('admin.timing_methods.create', compact('timingMethod'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TimingMethod  $timingMethod
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, TimingMethod $timingMethod)
    {
        $this->validate(request(), [
            'name'        => 'required',
            ]);

        TimingMethod::create(request([
            'name', 
            ]));

        session()->flash(
            'message', 'Timing Method Created!'
        );

        return redirect('/admin/timing_methods');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TimingMethod  $timingMethod
     * @return \Illuminate\Http\Response
     */
    public function show(TimingMethod $timingMethod)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TimingMethod  $timingMethod
     * @return \Illuminate\Http\Response
     */
    public function edit(TimingMethod $timingMethod)
    {
      return view('admin.timing_methods.edit', compact('timingMethod'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TimingMethod  $timingMethod
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TimingMethod $timingMethod)
    {
        $timingMethod->update($request->all());

        session()->flash(
            'message', 'Timing Method Updated!'
        );

        return redirect('/admin/timing_methods');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TimingMethod  $timingMethod
     * @return \Illuminate\Http\Response
     */
    public function destroy(TimingMethod $timingMethod)
    {
        //
    }
}
