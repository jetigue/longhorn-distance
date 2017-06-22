@extends('layouts.user')

@section('menu')
	@include('layouts.menus.admin_menu')
@endsection

@section('title')
	Day Times
@endsection

@section('button')
	<button-return 
		label="Return to Day Times"
		href="/admin/running_log/day_times">
	</button-return>
@endsection

@section('content')

<div class="column is-8 is-offset-2">
	<div class="card">
	  	<header class="card-header form-header">
    		<p class="card-header-title">
      			Edit a Day Time
    		</p>
  		</header>

		<div class="card-content">

			<form 
				class="form" 
				action="/admin/running_log/day_times/{{$dayTime->id}}" 
				method="POST" 
				role="form">
				{{ method_field ('PATCH') }}
				@include('admin.running_log.day_times.form', [
					'submitButtonText' => 'Update Day Time'
				])
			</form>
		</div>
	</div>
</div>

@stop
