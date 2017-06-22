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
        <option value=""><--Select one--></option>
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
			{{$submitButtonText ?? 'Add User'}}
		</button>
	</p>
</div>

@include('layouts.errors')