@extends('layouts.user')

@section('menu')
	@include('layouts.menus.admin_menu')
@endsection

@section('title')
	Seasons
@endsection

@section('button')
	<button-return 
		label="Return to Seasons"
		href="/admin/seasons">
	</button-return>
@endsection

@section('content')

<div class="column is-8 is-offset-2">
	<div class="card">
	  	<header class="card-header form-header">
    		<p class="card-header-title">
      			Add a Season
    		</p>
  		</header>

		<div class="card-content">

			<form 
				class="form" 
				action="/admin/seasons" 
				method="POST" 
				role="form">
				@include('admin.seasons.form')
			</form>
		</div>
	</div>
</div>

@stop