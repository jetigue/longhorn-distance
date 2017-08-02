@extends('layouts.user')

@section('menu')
	@include('layouts.menus.coach_menu')
@endsection

@section('title')
	Athletes
@endsection

@section('button')
	<button-return 
		label="Return to Athtetes"
		href="/coach/athletes">
	</button-return>
@endsection

@section('content')

<div class="column is-8 is-offset-2">
	<div class="card">
	  	<header class="card-header form-header">
    		<p class="card-header-title">
      			Edit Athlete
    		</p>
  		</header>

		<div class="card-content">

			<form 
				class="form" 
				action="/coach/athletes/{{$athlete->id}}" 
				method="POST" 
				role="form">
        {{ csrf_field() }}
				{{ method_field ('PATCH') }}

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
			Update Athlete
		</button>
	</p>
</div>

      </form>
    </div>
  </div>
</div>

@stop