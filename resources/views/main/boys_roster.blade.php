@extends('layouts.main')

@section('content')

<div class="content main-content-header">
Boys' Roster
</div>

<div class="columns content">
	<div class="column is-offset-1">
		<h3>Seniors</h3>
		<ul class="roster-list">
			@foreach($seniors as $senior)
			<li class="roster-name"><a href="">{{$senior->last_name}}, {{$senior->first_name}}</a></li>
			@endforeach
		</ul>
	</div>

	<div class="column">
		<h3>Juniors</h3>
		<ul class="roster-list">
			@foreach($juniors as $junior)
			<li class="roster-name"><a href="">{{$junior->last_name}}, {{$junior->first_name}}</a></li>
			@endforeach
		</ul>
	</div>

	<div class="column">
		<h3>Sophomores</h3>
		<ul class="roster-list">
			@foreach($sophomores as $sophomores)
			<li class="roster-name"><a href="">{{$sophomores->last_name}}, {{$sophomores->first_name}}</a></li>
			@endforeach
		</ul>
	</div>

	<div class="column">
		<h3>Freshmen</h3>
		<ul class="roster-list">
			@foreach($freshmen as $freshman)
			<li class="roster-name"><a href="">{{$freshman->last_name}}, {{$freshman->first_name}}</a></li>
			@endforeach
		</ul>
	</div>

</div>
@endsection