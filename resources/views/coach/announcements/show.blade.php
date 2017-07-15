@extends('layouts.user')

@section('menu')
	@include('layouts.menus.coach_menu')
@endsection

@section('title')
	Team Announcements
@endsection

@section('button')
	<button-return 
		label="Return to my Announcements"
		href="/coach/team_announcements">
	</button-return>
@endsection

@section('content')

<div class="column is-10 is-offset-1">
<div class="content box">
	<div class="columns">
	<div class="column is-10">
		<h3>{{$teamAnnouncement->title}}</h3>
	</div>

	<div class="column has-text-right">
		<button class="button is-small is-white">
			<a href="{{route('team_announcements.edit', $teamAnnouncement->id)}}">
				<i class="fa fa-pencil-square-o" id="edit-icon" aria-hidden="true"></i>
			</a>
		</button>
	</div>
	</div>
	<h4>{{$teamAnnouncement->body}}</h4>
	<a href="{{$teamAnnouncement->link}}">{{$teamAnnouncement->link_text}}</a>
	<hr>

	<div class="columns">
		<div class="column">
			<span style="color:#73000a">Active:</span> {{date('F d, Y', strtotime($teamAnnouncement->begin_date))}} - {{date('F d, Y', strtotime($teamAnnouncement->end_date))}}
		</div>
		<div class="column has-text-right">
			<small><span style="color:#73000a">Created:</span> {{$teamAnnouncement->created_at->diffForHumans()}}</small>
		</div>
	</div>

	</div>
</div>

@stop