@extends('layouts.user')

@section('menu')
	@include('layouts.menus.admin_menu')
@endsection

@section('title')
	Terrain Types
@endsection

@section('button')
	<button-create 
		label="Add a Terrain Type"
		href="/admin/running_log/terrain_types/create">
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
  	@foreach($terrains as $terrain)
  		<tr>
	      <td width="5%">{{$terrain->id}}</td>
	      <th width="20%">{{$terrain->name}}</th>
	      <td width="65%">{{$terrain->description}}</td>
	      <td>
	      	<button-edit
	      		href="{{ route('terrain_types.edit', $terrain->id) }}">
	      	</button-edit>
		  </td>
		  <td>
		  	<button-delete
		  		action="/admin/running_log/terrain_types/{{$terrain->id}}"
		  		token="{{csrf_token()}}">
		  	</button-delete>
    	  </td>
		</tr>
	@endforeach
	</tbody>
</table>


@stop