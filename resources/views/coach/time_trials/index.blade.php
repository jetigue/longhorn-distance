@extends('layouts.user')

@section('menu')
	@include('layouts.menus.coach_menu')
@endsection

@section('title')
	Time Trials
@endsection

@section('button')
	<button-create 
		label="Add a Time Trial"
		href="/coach/time_trials/create">
	</button-create>
@endsection

@section('content')
		<table class="table">
		  	<thead class="table-header">
		    	<tr>
		    	  <th style="color: #fff;">Name</th>
			      <th style="color: #fff;">Date</th>
			      <th style="color: #fff;">Gender</th>
			      <th style="color: #fff;">Distance</th>
			      <th style="color: #fff;">Timing</th>
			      <th style="color: #fff;">Terrain</th>
			      <th style="color: #fff;">Season</th>
			      <th><th>
			      <th></th>
			      <th></th>
		    	</tr>
		  	</thead>
		  	<tbody>
		@foreach($timeTrials as $timeTrial)
		  		<tr class="table-body">
				  <td width="25%"><a href="/coach/time_trials/{{$timeTrial->id}}">{{$timeTrial->name}}</a></td>
			      <td width="12%">{{date('n.j.y', strtotime($timeTrial->trial_date))}}</td>
			      <td width="10%">{{$timeTrial->gender->name}}</td>
			      <td width="10%">{{$timeTrial->distance->name}}</td>
			      <td width="10%">{{$timeTrial->timingMethod->name}}</td>
			      <td width="10%">{{$timeTrial->terrainType->name}}</td>
			      <td width="10%">{{$timeTrial->season->name}}</td>
			      <td width="8%"><small><a href="/coach/trial_results/{{$timeTrial->id}}/create">Add Results</a></small></td>
			      <td>
			      	<button-edit
			      		href="{{ route('time_trials.edit', $timeTrial->id) }}">
			      	</button-edit>
				  </td>
				  <td>
<!-- 				  	<button-delete
				  		@click.prevent="confirm"
				  		action="/time_trials/{{$timeTrial->id}}"
				  		token="{{csrf_token()}}">
				  	</button-delete> -->
		    	  </td>
				</tr>
			@endforeach
			</tbody>
		</table>
@stop