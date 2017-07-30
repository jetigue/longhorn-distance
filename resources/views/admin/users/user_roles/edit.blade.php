@extends('layouts.user')

@section('menu')
	@include('layouts.menus.admin_menu')
@endsection

@section('title')
	User Roles
@endsection

@section('button')
	<button-return 
		label="Return to User Roles"
		href="/admin/user_roles">
	</button-return>
@endsection

@section('content')

<div class="column is-8 is-offset-2">
	<div class="card">
	  	<header class="card-header form-header">
    		<p class="card-header-title">
      			Edit a User Role
    		</p>
  		</header>

		<div class="card-content">

			<form 
				class="form" 
				action="/admin/user_roles/{{$userRole->id}}" 
				method="POST" 
				role="form">
				{{ method_field ('PATCH') }}
				@include('admin.users.user_roles.form', [
					'submitButtonText' => 'Update User Role'
				])
			</form>
		</div>
	</div>
</div>

@stop
