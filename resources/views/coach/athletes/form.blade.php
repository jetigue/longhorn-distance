{{ csrf_field() }}

<div class="field">
  <label class="label">First name</label>
  <p class="control">
    <input
    	name="first_name"
    	class="input" 
    	type="text"
    	value="{{old('first_name', $athlete->first_name)}}"
    	required>
  </p>
</div>

<div class="field">
  <label class="label">Last Name</label>
  <p class="control">
    <input
      name="last_name"
      class="input" 
      type="text"
      value="{{old('last_name', $athlete->last_name)}}"
      required>
  </p>
</div>

<div class="field">
  <label class="label">Sex</label>
  <p class="control is-expanded">
    <span class="select is-fullwidth">
      <select 
        name="sex"
        required>
        @if (count($athlete) === 0)
          <option value="">Select One</option>
          <option value="f">Female</option>
          <option value="m">Male</option>
        @else
          <option value="f" @if (old('sex', $athlete->sex) == "Female") selected="selected" @endif>Female</option>
          <option value="m" @if (old('sex', $athlete->sex) == "Male") selected="selected" @endif>Male</option>
        @endif
      </select>
    </span>
  </p>
</div>

<div class="field">
  <label class="label">Graduation Year</label>
  <p class="control">
    <input
      id="grad_year"
      name="grad_year"
      class="input" 
      type="number"
      min="2009" max="2023" 
      placeholder="YYYY"
      value="{{old('grad_year', $athlete->grad_year)}}"
      required>
  </p>
</div>

<div class="field">
  <label class="label">Status</label>
  <p class="control is-expanded">
    <span class="select is-fullwidth">
      <select 
        name="status"
        required>
          <option value=""></option>
          <option value="a" @if (old('status', $athlete->status) == "Active")) selected="selected" @endif>Active</option>
          <option value="i" @if (old('status', $athlete->status) == "Inactive")) selected="selected" @endif>Inactive</option>
      </select>
    </span>
  </p>
</div>

<div class="field">
	<p class="control ">
		<button type="submit" class="button  is-primary form-button">
			{{$submitButtonText ?? 'Add Athlete'}}
		</button>
	</p>
</div>

@include('layouts.errors')