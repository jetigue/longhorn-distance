@extends('layouts.user')

@section('menu')
	@include('layouts.menus.coach_menu')
@endsection

@section('title')
	Announcements
@endsection

@section('button')
	<button-return 
		label="Return to Announcements"
		href="/coach/team_announcements">
	</button-return>
@endsection

@section('content')

<div class="column is-8 is-offset-2">
	<div class="card">
	  	<header class="card-header form-header">
    		<p class="card-header-title">
      			Add an Announcement
    		</p>
  		</header>

		<div class="card-content">

			<form 
				class="form" 
				action="/coach/team_announcements/{{$teamAnnouncement->id}}" 
				method="POST" 
				role="form">
				{{ method_field ('PATCH') }}
				@include('coach.announcements.form', [
					'submitButtonText' => 'Update Announcement'
				])
			</form>
		</div>
	</div>
</div>

@stop