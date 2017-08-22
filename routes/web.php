<?php

use App\Http\Middleware\Admin;
use App\Http\Middleware\Coach;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@home')->name('home');
Route::get('booster_club', 'PagesController@booster_club');
Route::get('boys_roster', 'PagesController@boys_roster');
Route::get('coaches', 'PagesController@coaches');
Route::get('forms_handouts', 'PagesController@forms_handouts');
Route::get('girls_roster', 'PagesController@girls_roster');
Route::get('longhorn_5k', 'PagesController@longhorn_5k');
Route::get('river_run', 'PagesController@river_run');
Route::get('team_camp', 'PagesController@team_camp');
Route::get('sponsors', 'PagesController@sponsors');
Route::get('our_team', 'PagesController@our_team');

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function()
{
	Route::resource('running_log/day_times', 'DayTimesController');
	Route::resource('running_log/run_efforts', 'RunEffortsController');
	Route::resource('running_log/run_feelings', 'RunFeelingsController');
	Route::resource('running_log/run_types', 'RunTypesController');
	Route::resource('running_log/terrain_types', 'TerrainTypesController');
	Route::resource('user_roles', 'UserRolesController');
	Route::resource('users', 'UsersController');
	Route::resource('seasons', 'SeasonsController');
	Route::resource('genders', 'GendersController');
	Route::resource('timing_methods', 'TimingMethodsController');
	Route::resource('distances', 'DistancesController');
	Route::get('dashboard', 'DashboardsController@admin');
});

Route::group(['prefix' => 'coach', 'middleware' => 'coach'], function()
{
	Route::resource('/athletes', 'Coach\AthletesController');
	Route::get('dashboard', 'DashboardsController@coach');
	Route::resource('team_announcements', 'TeamAnnouncementsController');
	Route::resource('team_events', 'TeamEventsController');
	Route::resource('team_logs', 'TeamLogsController');
	// Route::get('time_trials/{$timeTrial}/results', 'Coach\Trials\TimeTrialsController@addResult')->name('trial_results');
	Route::resource('time_trials', 'Coach\Trials\TimeTrialsController');
	// Route::get('/trial_results/{$timeTrial}/create', 'Coach\Trials\ResultsController@create')->name('trial_result.create');
	Route::resource('trial_results', 'Coach\Trials\ResultsController');

});

Auth::routes();


Route::get('athlete/dashboard', 'DashboardsController@athlete');

Route::get('user/dashboard', 'DashboardsController@user');


Route::resource('/running_log', 'RunningLogsController');


