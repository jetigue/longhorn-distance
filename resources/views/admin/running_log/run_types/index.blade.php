@extends('layouts.user')

@section('menu')
	@include('layouts.menus.admin_menu')
@endsection

@section('title')
	Run Types
@endsection

@section('button')
	<button-create 
		label="Add a Run Type"
		href="/admin/running_log/run_types/create">
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
  	@foreach($types as $type)
  		<tr>
	      <td width="5%">{{$type->id}}</td>
	      <th width="20%">{{$type->name}}</th>
	      <td width="65%">{{$type->description}}</td>
	      <td>
	      	<button-edit
	      		href="{{ route('run_types.edit', $type->id) }}">
	      	</button-edit>
		  </td>
		  <td>
		  	<button-delete
		  		action="/admin/running_log/run_types/{{$type->id}}"
		  		token="{{csrf_token()}}">
		  	</button-delete>
    	  </td>
		</tr>
	@endforeach
	</tbody>
</table>


@stop