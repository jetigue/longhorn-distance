@extends('layouts.user')

@section('menu')
	@include('layouts.menus.admin_menu')
@endsection

@section('title')
	Genders
@endsection

@section('button')
	<button-return 
		label="Return to Genders"
		href="/admin/genders">
	</button-return>
@endsection

@section('content')

<div class="column is-8 is-offset-2">
	<div class="card">
	  	<header class="card-header form-header">
    		<p class="card-header-title">
      			Edit Gender
    		</p>
  		</header>

		<div class="card-content">

			<form 
				class="form" 
				action="/admin/genders/{{$gender->id}}" 
				method="POST" 
				role="form">
				{{ method_field ('PATCH') }}
				@include('admin.genders.form', [
					'submitButtonText' => 'Update Gender'
				])
			</form>
		</div>
	</div>
</div>

@stop
