@extends('layouts.user')

@section('menu')
	@include('layouts.menus.admin_menu')
@endsection

@section('title')
	Seasons
@endsection

@section('button')
	<button-create 
		label="Add a Season"
		href="/admin/seasons/create">
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
  	@foreach($seasons as $season)
  		<tr>
	      <td width="5%">{{$season->id}}</td>
	      <th width="85%">{{$season->name}}</th>
	      <td>
	      	<button-edit
	      		href="{{ route('seasons.edit', $season->id) }}">
	      	</button-edit>
		  </td>
		  <td>
		  	<button-delete
		  		action="/admin/seasons/{{$season->id}}"
		  		token="{{csrf_token()}}">
		  	</button-delete>
    	  </td>
		</tr>
	@endforeach
	</tbody>
</table>


@stop