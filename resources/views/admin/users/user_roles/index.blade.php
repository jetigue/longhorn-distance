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
		href="/admin/user_roles/create">
	</button-create>
@endsection

@section('content')
<div id="root">

<!-- 	<modal v-show="showDeleteModal" @close="showDeleteModal = false"></modal>
	<button @click="showDeleteModal = true">Show Modal</button> -->

</div>
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
			<delete-modal v-show="showDeleteModal" @close="showDeleteModal = false" @confirmed="onConfirmed"></delete-modal>
<!-- 			<button type="button" class="button is-small is-white" id="delete" @click="showDeleteModal = true"> 
				<i class="fa fa-trash-o" id="delete-icon" aria-hidden="true"></i>
			</button> -->
<!-- 		  	<button-delete
		  		@click="showDeleteModal = true"
		  		action="/admin/users/user_roles/{{$userRole->id}}"
		  		token="{{csrf_token()}}">
		  	</button-delete> -->
    	  </td>
		</tr>
	@endforeach
	</tbody>
</table>


@stop