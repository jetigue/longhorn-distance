@extends('layouts.user')

@section('menu')
	@include('layouts.menus.athlete_menu')
@endsection

@section('title')
	Running Log
@endsection

@section('button')
	<button-return 
		label="Return to my Logs"
		href="/running_log">
	</button-return>
@endsection

@section('content')

<div class="column is-8 is-offset-2">
	<div class="card">
	  	<header class="card-header form-header">
    		<p class="card-header-title">
      			Log a run
    		</p>
  		</header>

		<div class="card-content">

			<form 
				class="form" 
				action="/running_log" 
				method="POST" 
				role="form">
				
				{{ csrf_field() }}
				@include('layouts.errors')
				<div class="field is-horizontal">
  					<div class="field-label is-normal">
    					<label class="label">Date</label>
  					</div>

	  				<div class="field-body">
	  				  <div class="field">
	      				<p class="control is-expanded">
					      <input
					    	name="run_date"
					    	class="input" 
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
				    			<div class="select is-fullwidth">
						      	<select 
						        	name="day_time_id" required>
							        <option value="">Select a time of day...</option>
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
							      class="input" 
							      type="number"
							      min="1"
							      max="100"
							      step=".1"
							      value="{{old('distance', $runningLog->distance)}}"
							      required>
					  		</p>
					  		<p class="control">
    							<a class="button is-static">
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
				          id="minutes_input"
				          oninput="totalSeconds()"
					      name="minutes"
					      class="input" 
					      type="number"
					      min="1"
					      max="240"
					      step="1"
					      placeholder="minutes"
					      required>
				      </p>
				        <p class="control">
    						<a class="button is-static">
      							:
    						</a>
  						</p>

				      <p class="control is-expanded">
				        <input
				          id="seconds_input"
				          oninput="totalSeconds()"
				          name="seconds"
					      class="input" 
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
				<input id="total_seconds" type="hidden" name="total_seconds" value="">	
				<script>
			    function totalSeconds() {
			        var minutes = Number(document.getElementById('minutes_input').value);
			        var seconds = Number(document.getElementById('seconds_input').value);

			        document.getElementById('total_seconds').value = (minutes * 60) + seconds;
			    }
				</script>			
			</div>
				<hr>

				<div class="field is-horizontal">
					<div class="field-label is-normal">
				  		<label class="label">Run Type</label>
				  	</div>

				  	<div class="field-body">
						<div class="field">
				  			<div class="control">
				    			<div class="select is-fullwidth">
						      	<select 
						        	name="run_type_id" required>
							        <option value="">Select a run type...</option>
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
				  		<label class="label">Run Effort</label>
				  	</div>

				  	<div class="field-body">
						<div class="field">
				  			<div class="control">
				    			<div class="select is-fullwidth">
						      	<select 
						        	name="run_effort_id" required>
							        <option value="">Select a run effort...</option>
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
				    			<div class="select is-fullwidth">
						      	<select 
						        	name="run_feeling_id" required>
							        <option value="">Select how you felt...</option>
							        @foreach ($runFeelings as $runFeeling)
							        	<option value="{{$runFeeling->id}}">{{ $runFeeling->name }}</option>
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
				    <label class="label">Notes (optional)</label>
				  </div>
				  <div class="field-body">
				    <div class="field">
				      <div class="control">
				        <textarea class="textarea" name="notes" placeholder="Add more details about your run."></textarea>
				      </div>
				    </div>
				  </div>
				</div>


				<div class="field">
					<p class="control ">
						<button type="submit" class="button  is-primary form-button">
							Log the Run
						</button>
					</p>
				</div>
				
			</form>
		</div>
	</div>
</div>

@stop