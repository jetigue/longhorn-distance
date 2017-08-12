@extends('layouts.user')

@section('menu')
	@include('layouts.menus.admin_menu')
@endsection

@section('title')
	Genders
@endsection

@section('button')
	<button-return 
		label="Return to Run Types"
		href="/admin/genders">
	</button-return>
@endsection

@section('content')

<div class="column is-8 is-offset-2">
	<div class="card">
	  	<header class="card-header form-header">
    		<p class="card-header-title">
      			Add a Gender
    		</p>
  		</header>

		<div class="card-content">

			<form 
				class="form" 
				action="/admin/genders" 
				method="POST" 
				role="form">
				@include('admin.genders.form')
			</form>
		</div>
	</div>
</div>

@stop