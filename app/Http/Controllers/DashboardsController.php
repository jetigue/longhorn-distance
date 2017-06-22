<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardsController extends Controller
{
    public function admin()
    {
    	return view('admin.dashboard');
    }

    public function athlete()
    {
    	return view('athlete.dashboard');
    }

    public function coach()
    {
    	return view('coach.dashboard');
    }
}
