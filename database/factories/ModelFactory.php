<?php

use App\Models\Athlete;
use App\Models\DayTime;
use App\Models\RunEffort;
use App\Models\RunFeeling;
use App\Models\RunType;
use App\Models\TerrainType;
use App\Models\User;
use App\Models\UserRole;
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
$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
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

$factory->define(App\Models\UserRole::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->unique()->randomElement($array = array (
            'Viewer', 'Athlete', 'Coach', 'Admin')),
    ];
});

$factory->define(App\Models\DayTime::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->unique()->randomElement($array = array (
            'Early Morning', 'Late Morning', 'Noon', 'Early Afternoon', 'Late Afternoon', 'Evening'
        )),
        'description' => $faker->sentence($nbWords = 15, $variableNbWords = true),
    ];
});

$factory->define(App\Models\RunEffort::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->unique()->randomElement($array = array (
        	'Hard', 'Relaxed', 'All-Out', 'Reserved', 'Medium'
        )),
        'description' => $faker->sentence($nbWords = 15, $variableNbWords = true),
    ];
});

$factory->define(App\Models\RunFeeling::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->unique()->randomElement($array = array (
        	'Great', 'Good', 'Okay', 'Bad', 'Awful'
        )),
        'description' => $faker->sentence($nbWords = 15, $variableNbWords = true),
    ];
});

$factory->define(App\Models\RunType::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->unique()->randomElement($array = array (
        	'Easy Run', 'Tempo Run', 'Intervals', 'Hill Repeats', 'Fartlek'
        )),
        'description' => $faker->sentence($nbWords = 15, $variableNbWords = true),
    ];
});

$factory->define(App\Models\TerrainType::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->unique()->randomElement($array = array (
        	'Ashpalt', 'Concrete', 'Grass', 'Rubber Track', 'Crushed gravel'
        )),
        'description' => $faker->sentence($nbWords = 15, $variableNbWords = true),
    ];
});

$factory->define(App\Models\RunningLog::class, function (Faker\Generator $faker) {
    
    return [
        'user_id'           =>User::all()->random()->id,
        'run_date'         => $faker->dateTimeBetween(
                              $startDate = '-1 year', $endDate = 'now', $timezone = date_default_timezone_get()
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

$factory->define(App\Models\TeamAnnouncement::class, function (Faker\Generator $faker) {
    
    return [
        'begin_date' => $faker->date,
        'end_date' => $faker->date,
        'title' => $faker->sentence($nbWords = 4, $variableNbWords = true),
        'body'  => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
    ];
});

$factory->define(App\Models\TeamEvent::class, function (Faker\Generator $faker) {
    return [
        'event'         => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'event_date'    => $faker->date($format = 'Y-m-d', $min = 'now'),
        'event_time'    => $faker->randomDigitNotNull . ' ' . 'am',
        'location'      => 'Lambert High School',
        'details'       => $faker->sentence($nbWords = 5, $variableNbWords = true),
    ];
});

$factory->define(App\Models\Athlete::class, function (Faker\Generator $faker) {
    return [
        'first_name'      => $faker->firstName,
        'last_name'       => $faker->lastName,
        'sex'             => $faker->randomElement($array = array ('m', 'f')),
        'grad_year'       => $faker->randomElement($array = array (2016, 2017, 2018, 2019, 2020, 2021)),
        'status'          => $faker->randomElement($array = array ('a', 'i')),
    ];
});

$factory->define(App\Models\Season::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->randomElement($array = array ('Cross Country', 'Outdoor Track', 'Indoor Track', 'Summer', 'Winter'))
    ];
});

$factory->define(App\Models\Gender::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->randomElement($array = array ('Boys', 'Girls', 'Mixed'))
    ];
});

$factory->define(App\Models\TimingMethod::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->randomElement($array = array ('Hand Held', 'FAT'))
    ];
});

$factory->define(App\Models\Distance::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->randomElement($array = array ('1600m', '1 Mile', '2 Mile', '5k', '3200m'))
    ];
});

$factory->define(App\Models\TimeTrial::class, function (Faker\Generator $faker) {
    
    return [
        'name'             => $faker->sentence($nbWords = 4, $variableNbWords = true),
        'gender_id'        => App\Models\Gender::all()->random()->id,
        'trial_date'       => $faker->dateTimeBetween(
                              $startDate = '-1 year', $endDate = 'now', $timezone = date_default_timezone_get()
                              ),
        'season_id'        => App\Models\Season::all()->random()->id,
        'distance_id'      => App\Models\Distance::all()->random()->id,
        'terrain_type_id'  => App\Models\TerrainType::all()->random()->id,
        'timing_method_id' => App\Models\TimingMethod::all()->random()->id,
        'notes'            => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
    ];
});

$factory->define(App\Models\AthleteTrialResult::class, function (Faker\Generator $faker) {
    
    return [
        'time_trial_id'    => App\Models\TimeTrial::all()->random()->id,
        'athlete_id'       => App\Models\Athlete::all()->random()->id,
        'place'            => $faker->numberBetween($min = 1, $max = 50),
        'total_seconds'    => $faker->numberBetween($min = 300, $max = 1800),
        'milliseconds'     => $faker->numberBetween($min = 1, $max = 99),
    ];
});