@extends('layouts.user')

@section('menu')
	@include('layouts.menus.admin_menu')
@endsection

@section('title')
	Terrain Types
@endsection

@section('button')
	<button-return 
		label="Return to Terrain Types"
		href="/admin/running_log/terrain_types">
	</button-return>
@endsection

@section('content')

<div class="column is-8 is-offset-2">
	<div class="card">
	  	<header class="card-header form-header">
    		<p class="card-header-title">
      			Edit a Terrain Type
    		</p>
  		</header>

		<div class="card-content">

			<form 
				class="form" 
				action="/admin/running_log/terrain_types/{{$terrainType->id}}" 
				method="POST" 
				role="form">
				{{ method_field ('PATCH') }}
				@include('admin.running_log.terrain_types.form', [
					'submitButtonText' => 'Update Terrain Type'
				])
			</form>
		</div>
	</div>
</div>

@stop
