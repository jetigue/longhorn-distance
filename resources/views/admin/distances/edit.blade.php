@extends('layouts.user')

@section('menu')
	@include('layouts.menus.admin_menu')
@endsection

@section('title')
	Distances
@endsection

@section('button')
	<button-return 
		label="Return to Distances"
		href="/admin/distances">
	</button-return>
@endsection

@section('content')

<div class="column is-8 is-offset-2">
	<div class="card">
	  	<header class="card-header form-header">
    		<p class="card-header-title">
      			Edit Distance
    		</p>
  		</header>

		<div class="card-content">

			<form 
				class="form" 
				action="/admin/distances/{{$distance->id}}" 
				method="POST" 
				role="form">
				{{ method_field ('PATCH') }}
				@include('admin.distances.form', [
					'submitButtonText' => 'Update Distance'
				])
			</form>
		</div>
	</div>
</div>

@stop
