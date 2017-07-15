@extends('layouts.user')

@section('menu')
	@include('layouts.menus.coach_menu')
@endsection

@section('title')
	Team Events
@endsection

@section('button')
	<button-return 
		label="Return to Team Events"
		href="/coach/team_events">
	</button-return>
@endsection

@section('content')

<div class="column is-10 is-offset-1">
<div class="content box">
	<div class="columns">
		<div class="column is-10 event-title">
			<h3><a href="/coach/team_events/{{$teamEvent->id}}">{{$teamEvent->event}}</a></h3>
		</div>
		<div class="column has-text-right">
			<button class="button is-small is-white">
				<a href="{{route('team_events.edit', $teamEvent->id)}}">
					<i class="fa fa-pencil-square-o" id="edit-icon" aria-hidden="true"></i>
				</a>
			</button>
		</div>
	</div>
	<div class="columns event-detail-row">
		<div class="column is-2 event-detail-label has-text-right">Date:</div>
	 	<div class="column event-detail-output">{{date('F d, Y', strtotime($teamEvent->event_date))}}</div>
	</div>
	<div class="columns event-detail-row">
		<div class="column is-2 event-detail-label has-text-right">Time:</div>
	 	<div class="column event-detail-output">{{$teamEvent->event_time}}</div>
	</div>
	<div class="columns event-detail-row">
		<div class="column is-2 event-detail-label has-text-right">Location:</div>
	 	<div class="column event-detail-output">{{$teamEvent->location}}</div>
	</div>
	<div class="columns event-detail-row">
		<div class="column is-2 event-detail-label has-text-right">Details:</div>
	 	<div class="column event-detail-output">{{$teamEvent->details}}</div>
	</div>
	<div class="columns event-detail-row">
		<div class="column is-2 event-detail-label has-text-right">Link:</div>
	 	<div class="column event-detail-output"><a href="{{$teamEvent->link}}">{{$teamEvent->link_text}}</a></div>
	</div>

	<div class="column event-detail-row has-text-right">
		<small><span style="color:#73000a;">Created:</span> {{$teamEvent->created_at->diffForHumans()}}</small>
	</div>

	</div>
</div>

@stop