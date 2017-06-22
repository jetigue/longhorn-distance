@extends('layouts.user')

@section('menu')
	@include('layouts.menus.admin_menu')
@endsection

@section('title')
	Run Efforts
@endsection

@section('button')
	<button-create 
		label="Add Effort Type"
		href="/admin/running_log/run_efforts/create">
	</button-create>
@endsection

@section('content')

<table class="table">
  	<thead class="table-header">
    	<tr>
	      <th style="color: #fff;">id</th>
	      <th style="color: ##fff;">Name</th>
	      <th style="color: ##fff;">Description</th>
	      <th></th>
	      <th></th>
    	</tr>
  	</thead>
  	<tbody class="table-body">
  	@foreach($efforts as $effort)
  		<tr>
	      <td width="5%">{{$effort->id}}</td>
	      <th width="20%">{{$effort->name}}</th>
	      <td width="65%">{{$effort->description}}</td>
	      <td>
	      	<button-edit
	      		href="{{ route('run_efforts.edit', $effort->id) }}">
	      	</button-edit>
		  </td>
		  <td>
		  	<button-delete
		  		action="/admin/running_log/run_efforts/{{$effort->id}}"
				token="{{csrf_token()}}">
		  	</button-delete>
    	  </td>
		</tr>
	@endforeach
	</tbody>
</table>


@stop