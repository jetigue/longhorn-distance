<?php

use App\Models\Coach\Athlete;
use App\Models\Admin\DayTime;
use App\Models\Admin\RunEffort;
use App\Models\Admin\RunFeeling;
use App\Models\Admin\RunType;
use App\Models\Admin\TerrainType;
use App\Models\Admin\User;
use App\Models\Admin\UserRole;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Admin\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'first_name'      => $faker->firstName,
        'last_name'       => $faker->lastName,
        'email'           => $faker->unique()->safeEmail,
        'password'        => $password ?: $password = bcrypt('secret'),
        'remember_token'  => str_random(10),
        'user_role_id'    => 1,
    ];
});

$factory->define(App\Models\Admin\UserRole::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->unique()->randomElement($array = array (
            'Viewer', 'Athlete', 'Coach', 'Admin')),
    ];
});

$factory->define(App\Models\Admin\DayTime::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->unique()->randomElement($array = array (
            'Early Morning', 'Late Morning', 'Noon', 'Early Afternoon', 'Late Afternoon', 'Evening'
        )),
        'description' => $faker->sentence($nbWords = 15, $variableNbWords = true),
    ];
});

$factory->define(App\Models\Admin\RunEffort::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->unique()->randomElement($array = array (
            'Hard', 'Relaxed', 'All-Out', 'Reserved', 'Medium'
        )),
        'description' => $faker->sentence($nbWords = 15, $variableNbWords = true),
    ];
});

$factory->define(App\Models\Admin\RunFeeling::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->unique()->randomElement($array = array (
            'Great', 'Good', 'Okay', 'Bad', 'Awful'
        )),
        'description' => $faker->sentence($nbWords = 15, $variableNbWords = true),
    ];
});

$factory->define(App\Models\Admin\RunType::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->unique()->randomElement($array = array (
            'Easy Run', 'Tempo Run', 'Intervals', 'Hill Repeats', 'Fartlek'
        )),
        'description' => $faker->sentence($nbWords = 15, $variableNbWords = true),
    ];
});

$factory->define(App\Models\Admin\TerrainType::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->unique()->randomElement($array = array (
            'Ashpalt', 'Concrete', 'Grass', 'Rubber Track', 'Crushed gravel'
        )),
        'description' => $faker->sentence($nbWords = 15, $variableNbWords = true),
    ];
});

$factory->define(App\Models\User\RunningLog::class, function (Faker\Generator $faker) {
    
    return [
        'user_id'           =>User::all()->random()->id,
        'run_date'         => $faker->dateTimeBetween(
            $startDate = '-1 year',
            $endDate = 'now',
            $timezone = date_default_timezone_get()
        ),
        'day_time_id'      => DayTime::all()->random()->id,
        'distance'         => $faker->randomFloat($nbMaxDecimals = 1, $min = 2, $max = 10),
        'total_seconds'    => $faker->numberBetween($min = 1800, $max = 3600),
        'run_type_id'      => RunType::all()->random()->id,
        'terrain_type_id'  => TerrainType::all()->random()->id,
        'run_effort_id'    => RunEffort::all()->random()->id,
        'run_feeling_id'   => RunFeeling::all()->random()->id,
        'notes'            => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
    ];
});

$factory->define(App\Models\Coach\TeamAnnouncement::class, function (Faker\Generator $faker) {
    
    return [
        'begin_date' => $faker->date,
        'end_date' => $faker->date,
        'title' => $faker->sentence($nbWords = 4, $variableNbWords = true),
        'body'  => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
    ];
});

$factory->define(App\Models\Coach\TeamEvent::class, function (Faker\Generator $faker) {
    return [
        'event'         => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'event_date'    => $faker->date($format = 'Y-m-d', $min = 'now'),
        'event_time'    => $faker->randomDigitNotNull . ' ' . 'am',
        'location'      => 'Lambert High School',
        'details'       => $faker->sentence($nbWords = 5, $variableNbWords = true),
    ];
});

$factory->define(App\Models\Coach\Athlete::class, function (Faker\Generator $faker) {
    return [
        'first_name'      => $faker->firstName,
        'last_name'       => $faker->lastName,
        'sex'             => $faker->randomElement($array = array ('m', 'f')),
        'grad_year'       => $faker->randomElement($array = array (2016, 2017, 2018, 2019, 2020, 2021)),
        'status'          => $faker->randomElement($array = array ('a', 'i')),
    ];
});

$factory->define(App\Models\Admin\Season::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->randomElement($array = array ('Cross Country', 'Outdoor Track', 'Indoor Track', 'Summer', 'Winter'))
    ];
});

$factory->define(App\Models\Admin\Gender::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->randomElement($array = array ('Boys', 'Girls', 'Mixed'))
    ];
});

$factory->define(App\Models\Admin\TimingMethod::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->randomElement($array = array ('Hand Held', 'FAT'))
    ];
});

$factory->define(App\Models\Admin\Distance::class, function (Faker\Generator $faker) {
    return [
        'name' => '2 Mile',
        'meters' => '3218.688'
    ];
});

$factory->define(App\Models\Coach\TimeTrial::class, function (Faker\Generator $faker) {
    
    return [
        'name'             => $faker->sentence($nbWords = 4, $variableNbWords = true),
        'gender_id'        => App\Models\Admin\Gender::all()->random()->id,
        'trial_date'       => $faker->dateTimeBetween(
            $startDate = '-1 year',
            $endDate = 'now',
            $timezone = date_default_timezone_get()
        ),
        'season_id'        => App\Models\Admin\Season::all()->random()->id,
        'distance_id'      => App\Models\Admin\Distance::all()->random()->id,
        'terrain_type_id'  => App\Models\Admin\TerrainType::all()->random()->id,
        'timing_method_id' => App\Models\Admin\TimingMethod::all()->random()->id,
        'notes'            => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
    ];
});

$factory->define(App\Models\Results\Individual\TimeTrialResult::class, function (Faker\Generator $faker) {
    
    return [
        'time_trial_id'    => App\Models\Coach\TimeTrial::all()->random()->id,
        'athlete_id'       => App\Models\Coach\Athlete::all()->random()->id,
        'place'            => $faker->numberBetween($min = 1, $max = 50),
        'total_seconds'    => $faker->numberBetween($min = 300, $max = 1800),
        'milliseconds'     => $faker->numberBetween($min = 1, $max = 99),
    ];
});
