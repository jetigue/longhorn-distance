@extends('layouts.user')

@section('title')
	Running Log
@endsection

@section('button')
	<button-return 
		label="Return to Running Log"
		href="/running_log">
	</button-return>
@endsection

@section('content')

<div class="column is-8 is-offset-2">
	<div class="card">
	  	<header class="card-header form-header">
    		<p class="card-header-title">
      			Edit a Run
    		</p>
  		</header>

		<div class="card-content">

			<form 
				class="form" 
				action="/running_log/{{$runningLog->id}}" 
				method="POST" 
				role="form">
				{{ method_field ('PATCH') }}
				{{ csrf_field() }}

				<div class="field is-horizontal">
  					<div class="field-label is-normal">
    					<label class="label">Date</label>
  					</div>

	  				<div class="field-body">
	  				  <div class="field">
	      				<p class="control is-expanded">
					      <input
					    	name="run_date"
					    	class="input is-medium" 
					    	type="date"
					    	value="{{old('run_date', $runningLog->run_date)}}"
					    	required>
	      				</p>
	      			  </div>
	      			</div>
				</div>

				<div class="field is-horizontal">
					<div class="field-label is-normal">
				  		<label class="label">Time of Day</label>
				  	</div>

				  	<div class="field-body">
						<div class="field">
				  			<div class="control">
				    			<div class="select is-medium is-fullwidth">
						      	<select 
						        	name="day_time_id"
						        	required>

				        			<option value="{{ old('day_time_id', $runningLog->day_time_id)}}">
				        				{{ $runningLog->dayTime->name }}
				       				</option>

				        			@foreach ($dayTimes as $dayTime)
				        				<option value="{{$dayTime->id}}">{{ $dayTime->name }}</option>
				        			@endforeach

						      	</select>
				    	    	</div>
				  		 	</div>
						</div>
					</div>
				</div>

				<hr>


				<div class="field is-horizontal">
					<div class="field-label is-normal">
				  		<label class="label">Distance</label>
				  	</div>

					<div class="field-body">
						<div class="field has-addons">
				      		<p class="control is-expanded">
					    		<input
							      name="distance"
							      class="input is-medium" 
							      type="number"
							      min="1"
							      max="100"
							      step=".1"
							      value="{{old('distance', $runningLog->distance)}}"
							      required>
					  		</p>
					  		<p class="control">
    							<a class="button is-static is-medium">
      								in miles
    							</a>
  							</p>
				    	</div>
					</div>
				</div>

				<div class="field is-horizontal">
					<div class="field-label is-normal">
				  		<label class="label">Time</label>
				  	</div>

				  	<div class="field-body">
				    <div class="field is-grouped">
				    <div class="field has-addons">
				      <p class="control is-expanded">
				        <input
					      name="minutes"
					      value="{{old('minutes', $runningLog->minutes)}}"
					      class="input is-medium " 
					      type="number"
					      min="1"
					      max="240"
					      step="1"
					      placeholder="minutes"
					      required>
				      </p>
				        <p class="control">
    						<a class="button is-static is-medium ">
      							:
    						</a>
  						</p>

				      <p class="control is-expanded">
				        <input
				          name="seconds"
				          value="{{old('seconds', $runningLog->seconds)}}"
					      class="input is-medium" 
					      type="number"
					      min="1"
					      max="59"
					      step="1"
					      placeholder="seconds"
					      required>
				      </p>
				    </div>
				  </div>
				</div>
</div>
				<hr>

				<div class="field is-horizontal">
					<div class="field-label is-normal">
				  		<label class="label">Run Type</label>
				  	</div>

				  	<div class="field-body">
						<div class="field">
				  			<div class="control">
				    			<div class="select is-medium is-fullwidth">
						      	<select 
						        	name="run_type_id"
						        	required>

				        			<option value="{{ old('run_type_id', $runningLog->run_type_id)}}">
				        				{{ $runningLog->runType->name }}
				       				</option>

				        			@foreach ($runTypes as $runType)
				        				<option value="{{$runType->id}}">{{ $runType->name }}</option>
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
				    			<div class="select is-medium is-fullwidth">
						      	<select 
						        	name="terrain_type_id" required>

				        			<option value="{{ old('terrain_type_id', $runningLog->terrain_type_id)}}">
				        				{{ $runningLog->terrainType->name }}
				       				</option>

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
				  		<label class="label">Run Effort</label>
				  	</div>

				  	<div class="field-body">
						<div class="field">
				  			<div class="control">
				    			<div class="select is-medium is-fullwidth">
						      	<select 
						        	name="run_effort_id" required>

				        			<option value="{{ old('run_effort_id', $runningLog->run_effort_id)}}">
				        				{{ $runningLog->runEffort->name }}
				       				</option>

				        			@foreach ($runEfforts as $runEffort)
				        				<option value="{{$runEffort->id}}">{{ $runEffort->name }}</option>
				        			@endforeach

						      	</select>
				    	    	</div>
				  		 	</div>
						</div>
					</div>
				</div>

				<div class="field is-horizontal">
					<div class="field-label is-normal">
				  		<label class="label">Run Feeling</label>
				  	</div>

				  	<div class="field-body">
						<div class="field">
				  			<div class="control">
				    			<div class="select is-medium is-fullwidth">
						      	<select 
						        	name="run_feeling_id" required>

				        			<option value="{{ old('run_feeling_id', $runningLog->run_feeling_id)}}">
				        				{{ $runningLog->runFeeling->name }}
				       				</option>

				        			@foreach ($runFeelings as $runFeeling)
				        				<option value="{{$runFeeling->id}}">{{ $runFeeling->name }}</option>
				        			@endforeach
						      	</select>
				    	    	</div>
				  		 	</div>
						</div>
					</div>
				</div>

				<div class="field">
					<p class="control ">
						<button type="submit" class="button  is-primary form-button">
							Save Changes
						</button>
					</p>
				</div>

				@include('layouts.errors')
				
			</form>
		</div>
	</div>
</div>


@stop