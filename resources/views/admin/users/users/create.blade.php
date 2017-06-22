@extends('layouts.user')

@section('menu')
	@include('layouts.menus.admin_menu')
@endsection

@section('title')
	Users
@endsection

@section('button')
	<button-return 
		label="Return to Users"
		href="/admin/users/users">
	</button-return>
@endsection

@section('content')

<div class="column is-8 is-offset-2">
	<div class="card">
	  	<header class="card-header form-header">
    		<p class="card-header-title">
      			Add a User
    		</p>
  		</header>

		<div class="card-content">

			<form 
				class="form" 
				action="/admin/users/users" 
				method="POST" 
				role="form">
				
				{{ csrf_field() }}

				<div class="field">
				  <label class="label">First name</label>
				  <p class="control">
				    <input
				    	name="first_name"
				    	class="input is-medium" 
				    	type="text"
				    	value="{{old('first_name', $user->first_name)}}"
				    	required>
				  </p>
				</div>

				<div class="field">
				  <label class="label">Last Name</label>
				  <p class="control">
				    <input
				      name="last_name"
				      class="input is-medium" 
				      type="text"
				      value="{{old('last_name', $user->last_name)}}"
				      required>
				  </p>
				</div>

				<div class="field">
				  <label class="label">E-mail Address</label>
				  <p class="control">
				    <input
				      name="email"
				      class="input is-medium" 
				      type="email"
				      value="{{old('email', $user->email)}}"
				      required>
				  </p>
				</div>

				<div class="field">
				  <label class="label">Password</label>
				  <p class="control">
				    <input
				      id="password"
				      name="password"
				      class="input is-medium" 
				      type="password"
				      required>
				  </p>
				</div>

				<div class="field">
				  <label class="label">Confirm Password</label>
				  <p class="control">
				    <input
				      id="password-confirm"
				      name="password_confirmation"
				      class="input is-medium" 
				      type="password"
				      required>
				  </p>
				</div>

				<div class="field">
				  <label class="label">User Role</label>
				  <p class="control is-expanded">
				    <span class="select is-medium is-fullwidth">
				      <select 
				        name="user_role_id"
				        required>
				        <option value="">Select a role...</option>
				        @foreach ($userRoles as $userRole)
				        <option value="{{$userRole->id}}">{{ $userRole->name }}</option>
				        @endforeach
				      </select>
				    </span>
				  </p>
				</div>

				<div class="field">
					<p class="control ">
						<button type="submit" class="button  is-primary form-button">
							Add User
						</button>
					</p>
				</div>

				@include('layouts.errors')
				
			</form>
		</div>
	</div>
</div>

@stop