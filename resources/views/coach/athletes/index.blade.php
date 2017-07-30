@extends('layouts.user')

@section('menu')
	@include('layouts.menus.coach_menu')
@endsection

@section('title')
	Athletes
@endsection

@section('button')
	<button-create 
		label="Create an Athlete"
		href="/coach/athletes/create">
	</button-create>
@endsection

@section('content')

<table class="table">
  	<thead class="table-header">
    	<tr>
	      <th style="color: #fff;">id</th>
	      <th style="color: #fff;">Name</th>
	      <th style="color: #fff;">Sex</th>
	      <th style="color: #fff;">Grad Year</th>
	      <th style="color: #fff;">Status</th>
	      <th></th>
	      <th></th>
    	</tr>
  	</thead>
  	<tbody>
@foreach($athletes as $athlete)
  		<tr class="table-body">
	      <td width="5%">{{$athlete->id}}</td>
	      <th width="25%">{{$athlete->last_name}}, {{$athlete->first_name}}</th>
	      <td width="10%">{{$athlete->sex}}</td>
	      <td width="15%">{{$athlete->grad_year}}</td>
	      <td width="15%">{{$athlete->status}}</td>
	      <td>
	      	<button-edit
	      		href="{{ route('athletes.edit', $athlete->id) }}">
	      	</button-edit>
		  </td>
		  <td>
		  	<button-delete
		  		@click.prevent="confirm"
		  		action="/athletes/{{$athlete->id}}"
		  		token="{{csrf_token()}}">
		  	</button-delete>
    	  </td>
		</tr>
	@endforeach
	</tbody>
</table>

@stop