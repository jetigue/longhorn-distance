<?php

namespace App\Http\Controllers;

use App\Models\Coach\TeamEvent;
use Illuminate\Http\Request;

class TeamEventsController extends Controller
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
        $events = TeamEvent::all();

        return view('coach.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(TeamEvent $teamEvent)
    {
        return view('coach.events.create', compact('teamEvent'));
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
            'event_date'    => 'required|date',
            'event'         => 'required',
            'event_time'    => 'required',
            'location'      => 'required',
            'details'       => 'required'
            ]);

        TeamEvent::create(request([
            'event_date',
            'event',
            'event_time',
            'location',
            'details',
            'link',
            'link_text'
            ]));

        session()->flash(
            'message', 'Event successfully created!'
        );

        return redirect('/coach/team_events');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TeamEvent  $teamEvent
     * @return \Illuminate\Http\Response
     */
    public function show(TeamEvent $teamEvent)
    {
        return view('coach.events.show', compact('teamEvent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TeamEvent  $teamEvent
     * @return \Illuminate\Http\Response
     */
    public function edit(TeamEvent $teamEvent)
    {
        return view('coach.events.edit', compact('teamEvent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TeamEvent  $teamEvent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeamEvent $teamEvent)
    {
        $teamEvent->update($request->all());

        session()->flash(
            'message', 'Event Updated!'
        );

        return redirect('/coach/team_events');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TeamEvent  $teamEvent
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeamEvent $teamEvent)
    {
        //
    }
}
