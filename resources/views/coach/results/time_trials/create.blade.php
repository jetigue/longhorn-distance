@extends('layouts.user')

@section('menu')
	@include('layouts.menus.coach_menu')
@endsection

@section('title')
	Time Trial Results
@endsection

@section('button')
	<button-return 
		label="Return to time Trials"
		href="/coach/time_trials">
	</button-return>
@endsection

@section('content')

<div class="column is-8 is-offset-2">
	<div class="box">
		<form 
			class="form" 
			action="/coach/trial_results" 
			method="POST" 
			role="form">
			{{ csrf_field() }}
			@include('layouts.errors')
			  <div class="column">
				<div class="field">
				  <label class="label">Time Trial</label>
				  <div class="control is-expanded">
				    	<div class="select">
					      	<select 
					        	name="time_trial_id" required>
						        <option value=""></option>
						        @foreach ($timeTrials as $timeTrial)
						        	<option value="{{$timeTrial->id}}">
						        		{{ $timeTrial->name }} | {{$timeTrial->trial_date}} | {{$timeTrial->gender->name}} | {{$timeTrial->distance->name}}
						        	</option>
						        @endforeach
					      	</select>
			    	    </div>
				  </div>
				</div>


			<div class="columns">
			  <div class="column">
				<div class="field">
				  <label class="label">Athlete</label>
				  <div class="control is-expanded">
				    	<div class="select">
					      	<select 
					        	name="athlete_id" required>
						        <option value=""></option>
						        @foreach ($athletes as $athlete)
						        	<option value="{{$athlete->id}}">{{ $athlete->last_name }}, {{$athlete->first_name}}</option>
						        @endforeach
					      	</select>
			    	    </div>
				  </div>
				</div>
				</div>
				<div class="column">
				<div class="field">
					<label class="label">Time</label>
						<div class="control">
			    			<div class="field is-grouped">
			    				<div class="field has-addons">
			      					<p class="control">
			        					<input id="minutes_input" oninput="totalSeconds()" name="minutes" class="input" 
			        					type="number" min="1" max="240" step="1" placeholder="mm" required>
			      					</p>
			        				<p class="control">
										<a class="button is-static">
  											:
										</a>
										</p>
										<p class="control">
										<input id="seconds_input" oninput="totalSeconds()" name="seconds" class="input" 
										type="number" min="1" max="59" step="1" placeholder="ss" required>
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
				</div>
				<div class="column is-2">
					<div class="field">
				  		<label class="label">Place</label>
				  		<div class="control">
				    		<input id="place_input" name="place" class="input" 
			        			   type="number" min="1" max="500" step="1" required>
				  		</div>
					</div>
				</div>

			</div>	

			<div class="field is-pulled-right">
				<p class="control">
					<button type="submit" class="button  is-primary form-button">
						Add Result
					</button>
				</p>
			</div>
		</form>
	</div>
</div>

@stop