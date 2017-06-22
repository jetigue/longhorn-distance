{{ csrf_field() }}

<div class="field">
  <label class="label">Name</label>
  <p class="control">
    <input
    	name="name"
    	class="input is-medium" 
    	type="text"
    	value="{{old('name', $userRole->name)}}"
    	placeholder="Name of User Role"
    	required>
  </p>
</div>

<div class="field">
	<p class="control ">
		<button type="submit" class="button  is-primary form-button">
			{{$submitButtonText ?? 'Add User Role'}}
		</button>
	</p>
</div>

@include('layouts.errors')