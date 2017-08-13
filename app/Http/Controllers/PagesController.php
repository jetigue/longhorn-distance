<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coach\Athlete;
use App\Models\Coach\TeamAnnouncement;
use App\Models\Coach\TeamEvent;
use App\Repositories\Athletes;

class PagesController extends Controller
{
    public function home()
    {
        // $announcements = Announcement::current()->latest()->get();
        $announcements = TeamAnnouncement::all();
        $events = TeamEvent::all();

        return view('welcome', compact('announcements', 'events'));
    }

    public function boys_roster(Athletes $athletes)
    {
        $seniors = $athletes->activeSeniorBoys()->sortBy('last_name');
        $juniors = $athletes->activeJuniorBoys()->sortBy('last_name');
        $sophomores = $athletes->activeSophomoreBoys()->sortBy('last_name');
        $freshmen = $athletes->activeFreshmenBoys()->sortBy('last_name');

    	return view('main.boys_roster', compact('seniors', 'juniors', 'sophomores', 'freshmen'));
    }

    public function girls_roster(Athletes $athletes)
    {
        $seniors = $athletes->activeSeniorGirls()->sortBy('last_name');
        $juniors = $athletes->activeJuniorGirls()->sortBy('last_name');
        $sophomores = $athletes->activeSophomoreGirls()->sortBy('last_name');
        $freshmen = $athletes->activeFreshmenGirls()->sortBy('last_name');

    	return view('main.girls_roster', compact('seniors', 'juniors', 'sophomores', 'freshmen'));
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

    public function our_team()
    {
        return view('main.our_team');
    }
}
