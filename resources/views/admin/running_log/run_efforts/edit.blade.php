@extends('layouts.user')

@section('menu')
	@include('layouts.menus.admin_menu')
@endsection

@section('title')
	Run Efforts
@endsection

@section('button')
	<button-return 
		label="Return to Run Efforts"
		href="/admin/running_log/run_efforts">
	</button-return>
@endsection

@section('content')

<div class="column is-8 is-offset-2">
	<div class="card">
	  	<header class="card-header form-header">
    		<p class="card-header-title">
      			Edit a Run Effort
    		</p>
  		</header>

		<div class="card-content">

			<form 
				class="form" 
				action="/admin/running_log/run_efforts/{{$runEffort->id}}" 
				method="POST" 
				role="form">
				{{ method_field ('PATCH') }}
				@include('admin.running_log.run_efforts.form', [
					'submitButtonText' => 'Update Run Effort'
				])
			</form>
		</div>
	</div>
</div>

@stop
