@extends('layouts.user')

@section('menu')
	@include('layouts.menus.admin_menu')
@endsection

@section('title')
	Run Feelings
@endsection

@section('button')
	<button-return 
		label="Return to Run Feelings"
		href="/admin/running_log/run_feelings">
	</button-return>
@endsection

@section('content')

<div class="column is-8 is-offset-2">
	<div class="card">
	  	<header class="card-header form-header">
    		<p class="card-header-title">
      			Add a Terrain Type
    		</p>
  		</header>

		<div class="card-content">

			<form 
				class="form" 
				action="/admin/running_log/run_feelings" 
				method="POST" 
				role="form">
				@include('admin.running_log.run_feelings.form')
			</form>
		</div>
	</div>
</div>

@stop