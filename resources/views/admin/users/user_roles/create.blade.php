@extends('layouts.user')

@section('menu')
	@include('layouts.menus.admin_menu')
@endsection

@section('title')
	Users Roles
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
      			Add a User Role
    		</p>
  		</header>

		<div class="card-content">

			<form 
				class="form" 
				action="/admin/user_roles" 
				method="POST" 
				role="form">
				@include('admin.users.user_roles.form')
			</form>
		</div>
	</div>
</div>

@stop