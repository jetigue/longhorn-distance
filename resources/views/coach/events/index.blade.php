@extends('layouts.user')

@section('menu')
	@include('layouts.menus.coach_menu')
@endsection

@section('title')
	Team Events
@endsection

@section('button')
	<button-create 
		label="Create Event"
		href="/coach/team_events/create">
	</button-create>
@endsection

@section('content')

@foreach($events as $event)
<div class="column is-10 is-offset-1">
<div class="content box">
	<div class="columns">
		<div class="column is-10 event-title">
			<h3><a href="/coach/team_events/{{$event->id}}">{{$event->event}}</a></h3>
		</div>
		<div class="column has-text-right">
			<button class="button is-small is-white">
				<a href="{{route('team_events.edit', $event->id)}}">
					<i class="fa fa-pencil-square-o" id="edit-icon" aria-hidden="true"></i>
				</a>
			</button>
		</div>
	</div>
	<div class="columns event-detail-row">
		<div class="column is-2 event-detail-label has-text-right">Date:</div>
	 	<div class="column event-detail-output">{{date('F d, Y', strtotime($event->event_date))}}</div>
	</div>
	<div class="columns event-detail-row">
		<div class="column is-2 event-detail-label has-text-right">Time:</div>
	 	<div class="column event-detail-output">{{$event->event_time}}</div>
	</div>
	<div class="columns event-detail-row">
		<div class="column is-2 event-detail-label has-text-right">Location:</div>
	 	<div class="column event-detail-output">{{$event->location}}</div>
	</div>
	<div class="columns event-detail-row">
		<div class="column is-2 event-detail-label has-text-right">Details:</div>
	 	<div class="column event-detail-output">{{$event->details}}</div>
	</div>
	<div class="columns event-detail-row">
		<div class="column is-2 event-detail-label has-text-right">Link:</div>
	 	<div class="column event-detail-output"><a href="{{$event->link}}">{{$event->link_text}}</a></div>
	</div>

	<div class="column event-detail-row has-text-right">
		<small><span style="color:#73000a;">Created:</span> {{$event->created_at->diffForHumans()}}</small>
	</div>

	</div>
</div>

@endforeach



@stop