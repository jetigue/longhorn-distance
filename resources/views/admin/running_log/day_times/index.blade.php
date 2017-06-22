@extends('layouts.user')

@section('menu')
	@include('layouts.menus.admin_menu')
@endsection

@section('title')
	Day Times
@endsection

@section('button')
	<button-create 
		label="Add Day Time"
		href="/admin/running_log/day_times/create">
	</button-create>
@endsection

@section('content')

<table class="table">
  	<thead class="table-header">
    	<tr>
	      <th style="color: #fff;">id</th>
	      <th style="color: #fff;">Name</th>
	      <th style="color: #fff;">Description</th>
	      <th></th>
	      <th></th>
    	</tr>
  	</thead>
  	<tbody class="table-body">
  	@foreach($dayTimes as $dayTime)
  		<tr>
	      <td width="5%">{{$dayTime->id}}</td>
	      <th width="20%">{{$dayTime->name}}</th>
	      <td width="60%">{{$dayTime->description}}</td>
	      <td>
	      	<button-edit
	      		href="{{ route('day_times.edit', $dayTime->id) }}">
	      	</button-edit>
		  </td>
		  <td>
		  	<button-delete
		  		action="/admin/running_log/day_times/{{$dayTime->id}}"
				token="{{csrf_token()}}">
		  	</button-delete>
    	  </td>
		</tr>
	@endforeach
	</tbody>
</table>


@stop