@extends('layouts.user')

@section('title')
    Coach Dashboard
@endsection


@section('content')

    <div class="content dashboard">
        <div class="tabs is-medium is-boxed">
            <ul>
                <li class="is-active"><a>Pictures</a></li>
                <li><a>Music</a></li>
                <li><a>Videos</a></li>
                <li><a>Documents</a></li>
            </ul>
        </div>

        <div class="columns">
            <div class="column is-3">
                <p class="has-text-centered is-marginless"><strong>Top 10</strong></p>
                <p class="has-text-centered"><strong>Summer Mileage Leaders</strong></p>
                <hr>
                @foreach($totalSummerMileagePerRunner as $totalSummer)
                    <div class="box">
                        <p class="has-text-centered is-marginless">
                            <strong>{{$totalSummer->user->first_name}} {{$totalSummer->user->last_name}}</strong>
                        </p>
                        <p class="has-text-centered is-marginless">{{$totalSummer->distance}} miles</p>
                        <p class="has-text-centered is-marginless">{{ltrim(gmdate('i:s', $totalSummer->total_seconds/$totalSummer->distance), 0)}}
                            per mile</p>
                    </div>
                @endforeach
            </div>
            <div class="column is-3">
                @foreach($runnersWeeklySummerMileage as $weeklyMileage)
                    <div class="box">
                        <p class="has-text-centered is-marginless">
                            <strong>{{$weeklyMileage->user->first_name}} {{$weeklyMileage->user->last_name}}</strong>
                        <p>{{ $weeklyMileage->week->value }}</p>
                    </div>


                <bar-graph
                        :labels="[1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]"
                        :values="{{$runnersWeeklySummerMileage->values()}}"
                        :color="'#333'"
                        :title="'Summer Mileage per Week'">
                </bar-graph>
                @endforeach
            </div>
            </div>


        </div>

    </div>

@endsection