{{ csrf_field() }}

<div class="field">
  <label class="label">Name</label>
  <p class="control">
    <input
    	name="name"
    	class="input is-medium" 
    	type="text"
    	value="{{old('name', $season->name)}}"
    	placeholder="Name of Season"
    	required>
  </p>
</div>

<div class="field">
	<p class="control ">
		<button type="submit" class="button  is-primary form-button">
			{{$submitButtonText ?? 'Add Season'}}
		</button>
	</p>
</div>

@include('layouts.errors')