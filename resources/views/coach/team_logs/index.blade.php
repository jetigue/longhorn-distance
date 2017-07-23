@extends('layouts.user')

@section('menu')
	@include('layouts.menus.coach_menu')
@endsection

@section('title')
	Team Log
@endsection

@section('button')
<!-- 	<button-create 
		label="Log a Run"
		href="running_log/create">
	</button-create> -->
@endsection

@section('content')

<table class="table">
  	<thead class="table-header">
    	<tr>
    	  <th style="color: #fff;">Name</th>
	      <th style="color: #fff;">Date</th>
	      <th style="color: #fff;">Time</th>
	      <th style="color: #fff;">Distance</th>
	      <th style="color: #fff;">Duration</th>
	      <th style="color: #fff;">Pace</th>
	      <th style="color: #fff;">Run Type</th>
	      <th style="color: #fff;">Terrain</th>
	      <th style="color: #fff;">Effort</th>
	      <th style="color: #fff;">Feeling</th>
	      <th></th>
    	</tr>
  	</thead>
  	<tbody class="table-body">
  	@foreach($teamLogs as $teamLog)
  		<tr>
  		  <td><a href="">{{$teamLog->user->last_name}}, {{$teamLog->user->first_name}}</a></td>
 		  <td><a href="">{{date('n/j/Y', strtotime($teamLog->run_date))}}</a></td>
	      <td>{{$teamLog->dayTime->name}}</td>
	      <td>{{$teamLog->distance}}</td>
	      <td>{{$teamLog->duration}}</td>
	      <td>{{$teamLog->averagePace}}</td>
	      <td>{{$teamLog->runType->name}}</td>
	      <td>{{$teamLog->terrainType->name}}</td>
	      <td>{{$teamLog->runEffort->name}}</td>
	      <td>{{$teamLog->runFeeling->name}}</td>

	      <td>
<!-- 	      	<button-edit
	      		href="{{ route('running_log.edit', $teamLog->id) }}">
	      	</button-edit> -->
		  </td>
		</tr>
	@endforeach
	</tbody>
</table>



@stop