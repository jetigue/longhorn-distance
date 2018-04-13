@extends('layouts.user')

@section('menu')
	@include('layouts.menus.admin_menu')
@endsection

@section('title')
	Genders
@endsection

@section('button')
	<button-create 
		label="Add a Gender"
		href="/admin/genders/create">
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
  	@foreach($genders as $gender)
  		<tr">
	      <td width="5%">{{$gender->id}}</td>
	      <th width="85%">{{$gender->name}}</th>
	      <td>
	      	<button-edit
	      		href="{{ route('genders.edit', $gender->id) }}">
	      	</button-edit>
		  </td>
		  <td>
		  	<button-delete
		  		action="/admin/genders/{{$gender->id}}"
		  		token="{{csrf_token()}}">
		  	</button-delete>
    	  </td>
		</tr>
	@endforeach
	</tbody>
</table>


@stop