@extends('layouts.user')

@section('menu')
	@include('layouts.menus.coach_menu')
@endsection

@section('title')
	Athletes
@endsection

@section('button')
	<button-create 
		label="Add an Athlete"
		href="/coach/athletes/create">
	</button-create>
@endsection

@section('content')
<div class="columns">
	<div class="column is-8 is-offset-1">
		<table class="table">
		  	<thead class="table-header">
		    	<tr>
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
			      <th width="33%"><a href="">{{$athlete->last_name}}, {{$athlete->first_name}}</a></th>
			      <td width="17%">{{$athlete->sex}}</td>
			      <td width="17%">{{$athlete->grad_year}}</td>
			      <td width="17%">{{$athlete->status}}</td>
			      <td>
			      	<button-edit
			      		href="{{ route('athletes.edit', $athlete->id) }}">
			      	</button-edit>
				  </td>
				  <td>
		<!-- 		  	<button-delete
				  		@click.prevent="confirm"
				  		action="/athletes/{{$athlete->id}}"
				  		token="{{csrf_token()}}">
				  	</button-delete> -->
		    	  </td>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div>
	<div class="column is-offset-1">
		<aside class="menu box">
		  <ul class="menu-list">
		  	<li>
		    	Sort
		      <ul>
		        <li><a class="nav-link" href="{{ route('athletes.index', [
        			'sex' => request('sex'),
        			'status' => request('status'),
        			'sort' => 'asc'
        			]) }}">Ascending</a></li>
		        <li><a class="nav-link" href="{{ route('athletes.index', [
			        'sex' => request('sex'),
			        'status' => request('status'),
			        'sort' => 'desc'
			        ]) }}">Descending</a></li>
		      </ul>
		    </li>
		    <li>
		    	Gender
		      <ul>
		        <li><a href="/coach/athletes?sex=m">Boys</a></li>
		        <li><a href="/coach/athletes?sex=f">Girls</a></li>
		      </ul>
		    </li>
		    <li>
		    	Status
		      <ul>
		        <li><a href="/coach/athletes?status=a">Active</a></li>
		        <li><a href="/coach/athletes?status=i">Inactive</a></li>
		      </ul>
		    </li>
		    <li>
		    	Grade
		      <ul>
		        <li><a href="/coach/athletes?grad_year=2021">Freshmen</a></li>
		        <li><a href="/coach/athletes?grad_year=2020">Sophomores</a></li>
		        <li><a href="/coach/athletes?grad_year=2019">Juniors</a></li>
		        <li><a href="/coach/athletes?grad_year=2018">Seniors</a></li>
		      </ul>
		    </li>
		  </ul>
		  <ul>
		  	<li><a href="/coach/athletes">Reset Filter</a></li>
		  </ul>

		</aside>

	</div>
</div>
@stop