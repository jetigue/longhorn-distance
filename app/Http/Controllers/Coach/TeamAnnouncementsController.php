<?php

namespace App\Http\Controllers;

use App\Models\Coach\TeamAnnouncement;
use Illuminate\Http\Request;

class TeamAnnouncementsController extends Controller
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
        $announcements = TeamAnnouncement::all();

        return view('coach.announcements.index', compact('announcements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(TeamAnnouncement $teamAnnouncement)
    {
        return view('coach.announcements.create', compact('teamAnnouncement'));
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
            'begin_date'    => 'required|date',
            'end_date'      => 'required|date|after:begin_date',
            'title'         => 'required',
            'body'          => 'required'
            ]);

        TeamAnnouncement::create(request([
            'begin_date', 
            'end_date',
            'title',
            'body',
            'link',
            'link_text'
            ]));

        session()->flash(
            'message', 'Announcement successfully created!'
        );

        return redirect('/coach/team_announcements');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TeamAnnouncement  $teamAnnouncement
     * @return \Illuminate\Http\Response
     */
    public function show(TeamAnnouncement $teamAnnouncement)
    {
        return view('coach.announcements.show', compact('teamAnnouncement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TeamAnnouncement  $teamAnnouncement
     * @return \Illuminate\Http\Response
     */
    public function edit(TeamAnnouncement $teamAnnouncement)
    {
        return view('coach.announcements.edit', compact('teamAnnouncement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TeamAnnouncement  $teamAnnouncement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeamAnnouncement $teamAnnouncement)
    {
        $teamAnnouncement->update($request->all());

        session()->flash(
            'message', 'Announcement Updated!'
        );

        return redirect('/coach/team_announcements');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TeamAnnouncement  $teamAnnouncement
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeamAnnouncement $teamAnnouncement)
    {
        //
    }
}
