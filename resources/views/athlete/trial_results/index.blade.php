@extends('layouts.user')

@section('menu')
	@include('layouts.menus.coach_menu')
@endsection

@section('title')
	Individual Time Trial Results
@endsection

@section('button')
<!-- 	<button-create 
		label="Add an Athlete"
		href="/coach/athletes/create">
	</button-create> -->
@endsection

@section('content')

<table class="table">
  	<thead class="table-header">
    	<tr>
	      <th style="color: #fff;">Athlete</th>
	      <th style="color: #fff;">Time Trial</th>
	      <th style="color: #fff;">Date</th>
	      <th style="color: #fff;">Distance</th>
	      <th style="color: #fff;">Time</th>
	      <th style="color: #fff;">Place</th>
	      <th style="color: #fff;">VDOT</th>
    	</tr>
  	</thead>
  	<tbody>
	@foreach($results as $result)
	  		<tr class="table-body">
	  		  <td width="20%"><a href="">{{$result->athlete->last_name}}, {{$result->athlete->first_name}}</a></td>
	  		  <td width="30%"><a href="">{{$result->timeTrial->name}}</a></td>
			  <td width="10%">{{date('n.d.y', strtotime($result->timeTrial->trial_date))}}</td>
			  <td width="10%">{{$result->timeTrial->distance->name}}</td>
			  <td width="10%">{{$result->duration}}</td>
			  <td width="10%">{{$result->place}}</td>
			  <td></td>
			</tr>
		@endforeach
		</tbody>
	</table>

@stop