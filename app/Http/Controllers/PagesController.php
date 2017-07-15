<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeamAnnouncement;
use App\Models\TeamEvent;

class PagesController extends Controller
{
    public function home()
    {
        // $announcements = Announcement::current()->latest()->get();
        $announcements = TeamAnnouncement::all();
        $events = TeamEvent::all();

        return view('welcome', compact('announcements', 'events'));
    }

    public function boys_roster()
    {
    	return view('main.boys_roster');
    }

    public function girls_roster()
    {
    	return view('main.girls_roster');
    }    

    public function coaches()
    {
    	return view('main.coaches');
    }

    public function booster_club()
    {
    	return view('main.booster_club');
    }

    public function team_camp()
    {
    	return view('main.team_camp');
    }

    public function longhorn_5k()
    {
    	return view('main.longhorn_5k');
    }

    public function river_run()
    {
    	return view('main.river_run');
    }

    public function forms_handouts()
    {
    	return view('main.forms_handouts');
    }

    public function sponsors()
    {
    	return view('main.sponsors');
    }
}
