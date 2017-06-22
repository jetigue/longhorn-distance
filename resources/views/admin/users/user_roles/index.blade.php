@extends('layouts.user')

@section('menu')
	@include('layouts.menus.admin_menu')
@endsection

@section('title')
	User Roles
@endsection

@section('button')
	<button-create 
		label="Add a Role"
		href="/admin/users/user_roles/create">
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
  	@foreach($userRoles as $userRole)
  		<tr>
	      <td width="5%">{{$userRole->id}}</td>
	      <th width="85%">{{$userRole->name}}</th>
	      <td>
	      	<button-edit
	      		href="{{ route('user_roles.edit', $userRole->id) }}">
	      	</button-edit>
		  </td>
		  <td>
		  	<button-delete
		  		action="/admin/users/user_roles/{{$userRole->id}}"
		  		token="{{csrf_token()}}">
		  	</button-delete>
    	  </td>
		</tr>
	@endforeach
	</tbody>
</table>


@stop