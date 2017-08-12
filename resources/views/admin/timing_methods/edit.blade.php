@extends('layouts.user')

@section('menu')
	@include('layouts.menus.admin_menu')
@endsection

@section('title')
	Timing Methods
@endsection

@section('button')
	<button-return 
		label="Return to Timing Methods"
		href="/admin/timing_methods">
	</button-return>
@endsection

@section('content')

<div class="column is-8 is-offset-2">
	<div class="card">
	  	<header class="card-header form-header">
    		<p class="card-header-title">
      			Edit Timing Method
    		</p>
  		</header>

		<div class="card-content">

			<form 
				class="form" 
				action="/admin/timing_methods/{{$timingMethod->id}}" 
				method="POST" 
				role="form">
				{{ method_field ('PATCH') }}
				@include('admin.timing_methods.form', [
					'submitButtonText' => 'Update Timing Method'
				])
			</form>
		</div>
	</div>
</div>

@stop
