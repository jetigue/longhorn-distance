@extends('layouts.user')

@section('title')
	Coach Dashboard
@endsection


@section('content')

<div class="content">
	<p class="has-text-centered is-marginless"><strong>Top 10</strong></p>
	<p class="has-text-centered"><strong>Summer Mileage Leaders</strong></p>
	<hr>
	@foreach($totalSummerMileagePerRunner as $totalSummer)
	<div class="box">
		<p class="has-text-centered is-marginless"><strong>{{$totalSummer->user->first_name}} {{$totalSummer->user->last_name}}</strong></p>
		<p class="has-text-centered">{{$totalSummer->distance}}</p>
	</div>
	@endforeach
</div>

@endsection