@extends('layouts.user')

@section('menu')
	@include('layouts.menus.admin_menu')
@endsection

@section('title')
	Run feelings
@endsection

@section('button')
	<button-create 
		label="Add a Feeling Type"
		href="/admin/running_log/run_feelings/create">
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
  	@foreach($runFeelings as $runFeeling)
  		<tr>
	      <td width="5%">{{$runFeeling->id}}</td>
	      <th width="20%">{{$runFeeling->name}}</th>
	      <td width="65%">{{$runFeeling->description}}</td>
	      <td>
	      	<button-edit
	      		href="{{ route('run_feelings.edit', $runFeeling->id) }}">
	      	</button-edit>
		  </td>
		  <td>
			<button-delete 
				action="/admin/running_log/run_feelings/{{$runFeeling->id}}"
				token="{{csrf_token()}}">
			</button-delete>
    	  </td>
		</tr>
	@endforeach
	</tbody>
</table>


@stop