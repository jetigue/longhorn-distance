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
			      <th></th>
			      <th></th>
		    	</tr>
		  	</thead>
		  	<tbody>
		@foreach($timeTrials as $trial)
		  		<tr class="table-body">
				  <td width="25%"><a href="/coach/time_trials/{{$trial->id}}">{{$trial->name}}</a></td>
			      <td width="12%">{{date('n.j.y', strtotime($trial->trial_date))}}</td>
			      <td width="12%">{{$trial->gender->name}}</td>
			      <td width="12%">{{$trial->distance->name}}</td>
			      <td width="12%">{{$trial->timing->name}}</td>
			      <td width="12%">{{$trial->terrain->name}}</td>
			      <td width="12%">{{$trial->season->name}}</td>
			      <td>
			      	<button-edit
			      		href="{{ route('time_trials.edit', $trial->id) }}">
			      	</button-edit>
				  </td>
				  <td>
<!-- 				  	<button-delete
				  		@click.prevent="confirm"
				  		action="/time_trials/{{$trial->id}}"
				  		token="{{csrf_token()}}">
				  	</button-delete> -->
		    	  </td>
				</tr>
			@endforeach
			</tbody>
		</table>
@stop