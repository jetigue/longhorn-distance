@extends('layouts.user')

@section('menu')
	@include('layouts.menus.coach_menu')
@endsection

@section('title')
	Time Trial
@endsection

@section('button')
	<button-return 
		label="Return to all Time Trials"
		href="/coach/time_trials">
	</button-return>
@endsection

@section('content')
<div class="content">
<h2>{{$timeTrial->name}}</h2>
<hr>

<nav class="level">
  <div class="level-item has-text-centered">
    <div>
      <p class="heading">Date</p>
      <h3 class="is-marginless">{{date('F j, Y', strtotime($timeTrial->trial_date))}}</h3>
    </div>
  </div>
  <div class="level-item has-text-centered">
    <div>
      <p class="heading">Gender</p>
      <h3 class="is-marginless">{{$timeTrial->gender->name}}</h3>
    </div>
  </div>
  <div class="level-item has-text-centered">
    <div>
      <p class="heading">Distance</p>
      <h3 class="is-marginless">{{$timeTrial->distance->name}}</h3>
    </div>
  </div>
  <div class="level-item has-text-centered">
    <div>
      <p class="heading">Terrain</p>
      <h3 class="is-marginless">{{$timeTrial->terrain->name}}</h3>
    </div>
  </div>
  <div class="level-item has-text-centered">
    <div>
      <p class="heading">Season</p>
      <h3 class="is-marginless">{{$timeTrial->season->name}}</h3>
    </div>
  </div>
  <div class="level-item has-text-centered">
    <div>
      <p class="heading">Timing</p>
      <h3 class="is-marginless">{{$timeTrial->timing->name}}</h3>
    </div>
  </div>
</nav>
<p>{{$timeTrial->notes}}</p>
</div>
<hr>

<div class="columns">
	<div class=" content column is-6">
		<h3>Results</h3>
		<table class="table">
		  	<thead class="table-header">
		    	<tr>
		    	  <th style="color: #fff;">Name</th>
			      <th style="color: #fff;">Time</th>
			      <th style="color: #fff;">Place</th>
			      <th></th>
		    	</tr>
		  	</thead>
		  	<tbody>
		@foreach($athleteResults as $result)
		  		<tr class="table-body">
				  <td width="50%"><a href="">{{$result->athlete->last_name}}, {{$result->athlete->first_name}}</a></td>
			      <td width="20%">{{$result->duration}}</td>
			      <td width="20%">{{$result->place}}</td>
			      <td>
			      	<button-edit
			      		href="">
			      	</button-edit>
				  </td>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div>
	<div class="content column is-offset-1">

			<form 
				class="form" 
				action="coach/time_trials/{{$timeTrial->id}}/results" 
				method="POST" 
				role="form">
				{{ csrf_field() }}
				@include('layouts.errors')
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