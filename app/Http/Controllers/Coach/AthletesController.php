<?php

namespace App\Http\Controllers\Coach;

use App\Models\Coach\Athlete;
use App\Repositories\Athletes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AthletesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Athletes $athletes)
    {
        // $athletes = $athletes->all()->sortBy('last_name');
        $athletes = Athlete::query();

        if (request()->has('sex')) {
            $athetes = $athletes->where('sex', request('sex'));
        }

        if (request()->has('status')) {
            $athetes = $athletes->where('status', request('status'));
        }

        if (request()->has('grad_year')) {
            $athetes = $athletes->where('grad_year', request('grad_year'));
        }

        if (request()->has('sort')) {
            $athletes = $athletes->orderBy('last_name', request('sort'));
        }

        $athletes = $athletes->orderBy('last_name')->paginate(500)->appends([
            'grad_year' => request('grad_year'),
            'sex'       => request('sex'),
            'sort'      => request('sort'),
            'status'    => request('status')
            ]);

        return view('coach.athletes.index', compact('athletes'));

        // return view('coach.athletes.index', compact('athletes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Athlete $athlete)
    {
        return view('coach.athletes.create', compact('athlete'));
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
            'first_name'    => 'required',
            'last_name'     => 'required',
            'sex'           => 'required',
            'grad_year'     => 'required|numeric',
            'status'        => 'required'
        ]);

        Athlete::create(request([
            'first_name',
            'last_name',
            'sex',
            'grad_year',
            'status',
            'user_id'
        ]));

        session()->flash(
            'message',
            'Athlete successfully created!'
        );

        return redirect('coach/athletes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Athlete  $athlete
     * @return \Illuminate\Http\Response
     */
    public function show(Athlete $athlete)
    {
        return view('coach.athletes.show', compact('athlete'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Athlete  $athlete
     * @return \Illuminate\Http\Response
     */
    public function edit(Athlete $athlete)
    {
        return view('coach.athletes.edit', compact('athlete'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Athlete  $athlete
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Athlete $athlete)
    {
        $athlete->update($request->all());

        session()->flash('message', 'Athlete Updated!');

        return redirect('coach/athletes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Athlete  $athlete
     * @return \Illuminate\Http\Response
     */
    public function destroy(Athlete $athlete)
    {
        //
    }
}
