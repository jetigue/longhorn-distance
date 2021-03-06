@extends('layouts.user')

@section('menu')
	@include('layouts.menus.user_menu')
@endsection

@section('title')
	Running Log
@endsection

@section('button')
	<button-create 
		label="Log a Run"
		href="running_log/create">
	</button-create>
@endsection

@section('content')
<div class="column">
@if (count($runningLogs) === 0)
<div class="content has-text-centered">
<h1 class="title">Log your first Run!</h1>
<a class="button is-outlined is-primary" href="running_log/create">Log a Run</a>
</div>
@else
<table class="table">
  	<thead class="table-header">
    	<tr>
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
	      <th></th>
    	</tr>
  	</thead>
  	<tbody class="table-body">
  	@foreach($runningLogs as $runningLog)
  		<tr>
 		  <td><a href="/running_log/{{$runningLog->id}}">{{date('n/j/Y', strtotime($runningLog->run_date))}}</a></td>
	      <td>{{$runningLog->dayTime->name}}</td>
	      <td>{{$runningLog->distance}}</td>
	      <td>{{$runningLog->duration}}</td>
	      <td>{{$runningLog->averagePace}}</td>
	      <td>{{$runningLog->runType->name}}</td>
	      <td>{{$runningLog->terrainType->name}}</td>
	      <td>{{$runningLog->runEffort->name}}</td>
	      <td>{{$runningLog->runFeeling->name}}</td>

	      <td>
	      	<button-edit
	      		href="{{ route('running_log.edit', $runningLog->id) }}">
	      	</button-edit>
		  </td>
		  <td>
		  	<button-delete
		  		action="running_log/{{$runningLog->id}}"
				token="{{csrf_token()}}">
		  	</button-delete>
    	  </td>
		</tr>
	@endforeach
	</tbody>
</table>
@endif
</div>

@stop