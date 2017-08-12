<?php

namespace App\Http\Controllers;

use App\Models\Distance;
use Illuminate\Http\Request;

class DistancesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $distances = Distance::all();

        return view('admin.distances.index', compact('distances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Models\Distance  $distance
     * @return \Illuminate\Http\Response
     */
    public function create(Distance $distance)
    {
        return view('admin.distances.create', compact('distance'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Distance  $distance
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Distance $distance)
    {
        $this->validate(request(), [
            'name'        => 'required',
            ]);

        Distance::create(request([
            'name', 
            ]));

        session()->flash(
            'message', 'Distance Created!'
        );

        return redirect('/admin/distances');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Distance  $distance
     * @return \Illuminate\Http\Response
     */
    public function show(Distance $distance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Distance  $distance
     * @return \Illuminate\Http\Response
     */
    public function edit(Distance $distance)
    {
        return view('admin.distances.edit', compact('distance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Distance  $distance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Distance $distance)
    {
        $distance->update($request->all());

        session()->flash(
            'message', 'Distance Updated!'
        );

        return redirect('/admin/distances');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Distance  $distance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Distance $distance)
    {
        $distance->delete();

        session()->flash(
            'message', 'Distance Deleted!'
        );

        return redirect('admin/distances');
    }
}

