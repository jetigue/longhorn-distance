{{ csrf_field() }}

<div class="field">
  <label class="label">Name</label>
  <p class="control">
    <input
    	name="name"
    	class="input is-medium" 
    	type="text"
    	value="{{old('name', $dayTime->name)}}"
    	placeholder="Name of Day Time"
    	required>
  </p>
</div>

<div class="field">
  <label class="label">Description</label>
	<p class="control">
	<textarea name="description" rows="2" class="textarea is-medium" placeholder="Describe the Day Time here." required>{{old('description', $dayTime->description)}}</textarea>
  </p>
</div>

<div class="field">
	<p class="control ">
		<button type="submit" class="button  is-primary form-button">
			{{$submitButtonText ?? 'Add Day Time'}}
		</button>
	</p>
</div>

@include('layouts.errors')