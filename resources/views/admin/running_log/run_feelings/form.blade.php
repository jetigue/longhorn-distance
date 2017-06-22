{{ csrf_field() }}

<div class="field">
  <label class="label">Name</label>
  <p class="control">
    <input
    	name="name"
    	class="input is-medium" 
    	type="text"
    	value="{{old('name', $runFeeling->name)}}"
    	placeholder="Name of Feeling Type"
    	required>
  </p>
</div>

<div class="field">
  <label class="label">Description</label>
	<p class="control">
	<textarea name="description" rows="2" class="textarea is-medium" placeholder="Describe the Feeling Type here." required>{{old('description', $runFeeling->description)}}</textarea>
  </p>
</div>

<div class="field">
	<p class="control ">
		<button type="submit" class="button is-primary">
			{{$submitButtonText ?? 'Add Feeling Type'}}
		</button>
	</p>
</div>

@include('layouts.errors')