@extends('layouts.user')

@section('menu')
	@include('layouts.menus.admin_menu')
@endsection

@section('title')
	Users
@endsection

@section('button')
	<button-create 
		label="Add a User"
		href="/admin/users/users/create">
	</button-create>
@endsection

@section('content')

<table class="table">
  	<thead class="table-header">
    	<tr>
	      <th style="color: #fff;">id</th>
	      <th style="color: #fff;">Name</th>
	      <th style="color: #fff;">email</th>
	      <th style="color: #fff;">Role</th>
	      <th></th>
	      <th></th>
    	</tr>
  	</thead>
  	<tbody>
  	@foreach($users as $user)
  		<tr class="table-body">
	      <td width="10%">{{$user->id}}</td>
	      <th width="30%">{{$user->last_name}}, {{$user->first_name}}</th>
	      <td width="30%">{{$user->email}}</td>
	      <td width="20%">{{$user->role->name}}</td>
	      <td>
	      	<button-edit
	      		href="{{ route('users.edit', $user->id) }}">
	      	</button-edit>
		  </td>
		  <td>
		  	<button-delete
		  		action="/admin/users/users/{{$user->id}}"
		  		token="{{csrf_token()}}">
		  	</button-delete>
    	  </td>
		</tr>
	@endforeach
	</tbody>
</table>


@stop