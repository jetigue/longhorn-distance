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

<div class="column is-8 is-offset-2">
	<div class="card">
	  	<header class="card-header form-header">
    		<p class="card-header-title">
      			Add a Team Event
    		</p>
  		</header>

		<div class="card-content">

			<form 
				class="form" 
				action="/coach/team_events" 
				method="POST" 
				role="form">
				@include('coach.events.form')
			</form>
		</div>
	</div>
</div>

@stop