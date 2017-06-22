@extends('layouts.user')

@section('menu')
	@include('layouts.menus.admin_menu')
@endsection

@section('title')
	Run Types
@endsection

@section('button')
	<button-return 
		label="Return to Run Types"
		href="/admin/running_log/run_types">
	</button-return>
@endsection

@section('content')

<div class="column is-8 is-offset-2">
	<div class="card">
	  	<header class="card-header form-header">
    		<p class="card-header-title">
      			Add a Run Type
    		</p>
  		</header>

		<div class="card-content">

			<form 
				class="form" 
				action="/admin/running_log/run_types" 
				method="POST" 
				role="form">
				@include('admin.running_log.run_types.form')
			</form>
		</div>
	</div>
</div>

@stop