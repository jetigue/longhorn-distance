<?php

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

Route::get('/', 'PagesController@home');
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



Auth::routes();

Route::get('admin/dashboard', 'DashboardsController@admin');
Route::get('athlete/dashboard', 'DashboardsController@athlete');
Route::get('coach/dashboard', 'DashboardsController@coach');
Route::get('user/dashboard', 'DashboardsController@user');

Route::resource('coach/team_announcements', 'TeamAnnouncementsController');
Route::resource('coach/team_events', 'TeamEventsController');

Route::resource('admin/running_log/day_times', 'DayTimesController');
Route::resource('admin/running_log/run_efforts', 'RunEffortsController');
Route::resource('admin/running_log/run_feelings', 'RunFeelingsController');
Route::resource('admin/running_log/run_types', 'RunTypesController');
Route::resource('admin/running_log/terrain_types', 'TerrainTypesController');
Route::resource('admin/users/user_roles', 'UserRolesController');
Route::resource('admin/users/users', 'UsersController');

Route::resource('/running_log', 'RunningLogsController');
