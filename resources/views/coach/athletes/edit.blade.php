@extends('layouts.user')

@section('menu')
	@include('layouts.menus.coach_menu')
@endsection

@section('title')
	Athletes
@endsection

@section('button')
	<button-return 
		label="Return to Athtetes"
		href="/coach/athletes">
	</button-return>
@endsection

@section('content')

<div class="column is-8 is-offset-2">
	<div class="card">
	  	<header class="card-header form-header">
    		<p class="card-header-title">
      			Edit Athlete
    		</p>
  		</header>

		<div class="card-content">

			<form 
				class="form" 
				action="/coach/athletes/{{$athlete->id}}" 
				method="POST" 
				role="form">
				{{ method_field ('PATCH') }}
				@include('coach.athletes.form', [
					'submitButtonText' => 'Update Athlete'
				])
			</form>
		</div>
	</div>
</div>

@stop