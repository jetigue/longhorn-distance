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
				action="/coach/team_events/{{$teamEvent->id}}" 
				method="POST" 
				role="form">
				{{ method_field ('PATCH') }}
				@include('coach.events.form', [
					'submitButtonText' => 'Update Event'
				])
			</form>
		</div>
	</div>
</div>

@stop