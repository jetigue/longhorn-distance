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

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/dashboard', 'DashboardsController@admin');
Route::get('athlete/dashboard', 'DashboardsController@athlete');
Route::get('coach/dashboard', 'DashboardsController@coach');

Route::resource('admin/running_log/day_times', 'DayTimesController');
Route::resource('admin/running_log/run_efforts', 'RunEffortsController');
Route::resource('admin/running_log/run_feelings', 'RunFeelingsController');
Route::resource('admin/running_log/run_types', 'RunTypesController');
Route::resource('admin/running_log/terrain_types', 'TerrainTypesController');
Route::resource('admin/users/user_roles', 'UserRolesController');
Route::resource('admin/users/users', 'UsersController');

Route::resource('/running_log', 'RunningLogsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
