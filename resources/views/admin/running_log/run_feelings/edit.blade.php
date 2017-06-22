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
      			Edit a Run Feeling
    		</p>
  		</header>

		<div class="card-content">

			<form 
				class="form" 
				action="/admin/running_log/run_feelings/{{$runFeeling->id}}" 
				method="POST" 
				role="form">
				{{ method_field ('PATCH') }}
				@include('admin.running_log.run_feelings.form', [
					'submitButtonText' => 'Update Run Feeling'
				])
			</form>
		</div>
	</div>
</div>

@stop