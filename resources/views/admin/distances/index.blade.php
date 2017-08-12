@extends('layouts.user')

@section('menu')
	@include('layouts.menus.admin_menu')
@endsection

@section('title')
	Distances
@endsection

@section('button')
	<button-create 
		label="Add a Distance"
		href="/admin/distances/create">
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
  	@foreach($distances as $distance)
  		<tr>
	      <td width="5%">{{$distance->id}}</td>
	      <th width="85%">{{$distance->name}}</th>
	      <td>
	      	<button-edit
	      		href="{{ route('distances.edit', $distance->id) }}">
	      	</button-edit>
		  </td>
		  <td>
<!-- 		  	<button-delete
		  		action="/admin/distances/{{$distance->id}}"
		  		token="{{csrf_token()}}">
		  	</button-delete> -->
    	  </td>
		</tr>
	@endforeach
	</tbody>
</table>


@stop