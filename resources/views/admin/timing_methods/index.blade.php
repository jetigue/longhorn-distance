@extends('layouts.user')

@section('menu')
	@include('layouts.menus.admin_menu')
@endsection

@section('title')
	Timing Methods
@endsection

@section('button')
	<button-create 
		label="Add a Timing Method"
		href="/admin/timing_methods/create">
	</button-create>
@endsection

@section('content')

<table class="table">
  	<thead class="table-header">
    	<tr>
	      <th style="color: #fff;">id</th>
	      <th style="color: #fff;">Name</th>
	      <th></th>
	      <th></th>
    	</tr>
  	</thead>
  	<tbody class="table-body">
  	@foreach($timingMethods as $timingMethod)
  		<tr>
	      <td width="5%">{{$timingMethod->id}}</td>
	      <th width="85%">{{$timingMethod->name}}</th>
	      <td>
	      	<button-edit
	      		href="{{ route('timing_methods.edit', $timingMethod->id) }}">
	      	</button-edit>
		  </td>
		  <td>
		  	<button-delete
		  		action="/admin/timing_methods/{{$timingMethod->id}}"
		  		token="{{csrf_token()}}">
		  	</button-delete>
    	  </td>
		</tr>
	@endforeach
	</tbody>
</table>


@stop