@extends('layouts.user')

@section('menu')
	@include('layouts.menus.coach_menu')
@endsection

@section('title')
	Team Announcements
@endsection

@section('button')
	<button-create 
		label="Create Announcement"
		href="/coach/team_announcements/create">
	</button-create>
@endsection

@section('content')

@foreach($announcements as $announcement)
<div class="column is-10 is-offset-1">
<div class="content box">
	<div class="columns">
	<div class="column is-10">
		<h3><a href="/coach/team_announcements/{{$announcement->id}}">{{$announcement->title}}</a></h3>
	</div>

	<div class="column has-text-right">
		<button class="button is-small is-white">
			<a href="{{route('team_announcements.edit', $announcement->id)}}">
				<i class="fa fa-pencil-square-o" id="edit-icon" aria-hidden="true"></i>
			</a>
		</button>
	</div>
	</div>
	<h4>{{$announcement->body}}</h4>
	<a href="{{$announcement->link}}">{{$announcement->link_text}}</a>
	<hr>

	<div class="columns">
		<div class="column">
			<span style="color:#73000a">Active:</span> {{date('F d, Y', strtotime($announcement->begin_date))}} - {{date('F d, Y', strtotime($announcement->end_date))}}
		</div>
		<div class="column has-text-right">
			<small><span style="color:#73000a">Created:</span> {{$announcement->created_at->diffForHumans()}}</small>
		</div>
	</div>

	</div>
</div>

@endforeach



@stop