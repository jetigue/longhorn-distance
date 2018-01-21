<?php

namespace App\Http\Controllers;

use App\Models\Admin\Gender;
use Illuminate\Http\Request;

class GendersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genders = Gender::all();

        return view('admin.genders.index', compact('genders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Models\Gender  $gender
     * @return \Illuminate\Http\Response
     */
    public function create(Gender $gender)
    {
        return view('admin.genders.create', compact('gender'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gender  $gender
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Gender $gender)
    {
        $this->validate(request(), [
            'name'        => 'required',
            ]);

        Gender::create(request([
            'name',
            ]));

        session()->flash(
            'message',
            'Gender Created!'
        );

        return redirect('/admin/genders');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gender  $gender
     * @return \Illuminate\Http\Response
     */
    public function show(Gender $gender)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gender  $gender
     * @return \Illuminate\Http\Response
     */
    public function edit(Gender $gender)
    {
        return view('admin.genders.edit', compact('gender'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gender  $gender
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gender $gender)
    {
        $gender->update($request->all());

        session()->flash(
            'message',
            'Gender Updated!'
        );

        return redirect('/admin/genders');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gender  $gender
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gender $gender)
    {
        $gender->delete();

        session()->flash(
            'message',
            'Gender Deleted!'
        );

        return redirect('admin/genders');
    }
}
