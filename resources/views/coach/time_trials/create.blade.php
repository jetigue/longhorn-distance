@extends('layouts.user')

@section('menu')
	@include('layouts.menus.coach_menu')
@endsection

@section('title')
	Time Trial
@endsection

@section('button')
	<button-return 
		label="Return to time Trials"
		href="/coach/time_trials">
	</button-return>
@endsection

@section('content')

<div class="column is-8 is-offset-2">
	<div class="card">
	  	<header class="card-header form-header">
    		<p class="card-header-title">
      			Add a Time Trial
    		</p>
  		</header>

		<div class="card-content">

			<form 
				class="form" 
				action="/coach/time_trials" 
				method="POST" 
				role="form">
				
				{{ csrf_field() }}
				@include('layouts.errors')

				<div class="field is-horizontal">
					<div class="field-label is-normal">
				  		<label class="label">Name</label>
				  	</div>

					<div class="field-body">
						<div class="field">
				      		<p class="control is-expanded">
					    		<input
							      name="name"
							      class="input" 
							      type="text"
							      value="{{old('name', $timeTrial->name)}}"
							      required>
					  		</p>
				    	</div>
					</div>
				</div>

				<div class="field is-horizontal">
  					<div class="field-label is-normal">
    					<label class="label">Date</label>
  					</div>

	  				<div class="field-body">
	  				  <div class="field">
	      				<p class="control is-expanded">
					      <input
					    	name="trial_date"
					    	class="input" 
					    	type="date"
					    	value="{{old('trial_date', $timeTrial->trial_date)}}"
					    	required>
	      				</p>
	      			  </div>
	      			</div>
				</div>

				<div class="field is-horizontal">
					<div class="field-label is-normal">
				  		<label class="label">Season</label>
				  	</div>

				  	<div class="field-body">
						<div class="field">
				  			<div class="control">
				    			<div class="select is-fullwidth">
						      	<select 
						        	name="season_id" required>
							        <option value="">Select a season...</option>
							        @foreach ($seasons as $season)
							        	<option value="{{$season->id}}">{{ $season->name }}</option>
							        @endforeach
						      	</select>
				    	    	</div>
				  		 	</div>
						</div>
					</div>
				</div>

				<div class="field is-horizontal">
					<div class="field-label is-normal">
				  		<label class="label">Gender</label>
				  	</div>

				  	<div class="field-body">
						<div class="field">
				  			<div class="control">
				    			<div class="select is-fullwidth">
						      	<select 
						        	name="gender_id" required>
							        <option value="">Select a gender...</option>
							        @foreach ($genders as $gender)
							        	<option value="{{$gender->id}}">{{ $gender->name }}</option>
							        @endforeach
						      	</select>
				    	    	</div>
				  		 	</div>
						</div>
					</div>
				</div>

				<div class="field is-horizontal">
					<div class="field-label is-normal">
				  		<label class="label">Distance</label>
				  	</div>

				  	<div class="field-body">
						<div class="field">
				  			<div class="control">
				    			<div class="select is-fullwidth">
						      	<select 
						        	name="distance_id" required>
							        <option value="">Select a distance...</option>
							        @foreach ($distances as $distance)
							        	<option value="{{$distance->id}}">{{ $distance->name }}</option>
							        @endforeach
						      	</select>
				    	    	</div>
				  		 	</div>
						</div>
					</div>
				</div>

				<div class="field is-horizontal">
					<div class="field-label is-normal">
				  		<label class="label">Terrain Type</label>
				  	</div>

				  	<div class="field-body">
						<div class="field">
				  			<div class="control">
				    			<div class="select is-fullwidth">
						      	<select 
						        	name="terrain_type_id" required>
							        <option value="">Select a terrain type...</option>
							        @foreach ($terrainTypes as $terrainType)
							        	<option value="{{$terrainType->id}}">{{ $terrainType->name }}</option>
							        @endforeach
						      	</select>
				    	    	</div>
				  		 	</div>
						</div>
					</div>
				</div>

				<div class="field is-horizontal">
					<div class="field-label is-normal">
				  		<label class="label">Timing Method</label>
				  	</div>

				  	<div class="field-body">
						<div class="field">
				  			<div class="control">
				    			<div class="select is-fullwidth">
						      	<select 
						        	name="timing_method_id" required>
							        <option value="">Select a timing method...</option>
							        @foreach ($timingMethods as $timingMethod)
							        	<option value="{{$timingMethod->id}}">{{ $timingMethod->name }}</option>
							        @endforeach
						      	</select>
				    	    	</div>
				  		 	</div>
						</div>
					</div>
				</div>

				<div class="field is-horizontal">
				  <div class="field-label is-normal">
				    <label class="label">Notes (optional)</label>
				  </div>
				  <div class="field-body">
				    <div class="field">
				      <div class="control">
				        <textarea class="textarea" name="notes" placeholder="Add more details about the time trial."></textarea>
				      </div>
				    </div>
				  </div>
				</div>


				<div class="field">
					<p class="control ">
						<button type="submit" class="button  is-primary form-button">
							Add Time Trial
						</button>
					</p>
				</div>
				
			</form>
		</div>
	</div>
</div>

@stop