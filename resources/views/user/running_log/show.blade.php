@extends('layouts.user')

@section('menu')
	@include('layouts.menus.athlete_menu')
@endsection

@section('title')
	Running Log
@endsection

@section('button')
	<button-return 
		label="Return to my Logs"
		href="/running_log">
	</button-return>
@endsection

@section('content')
<div class="column is-10 is-offset-1">

<div class="card" id="running-log-card">

<div class="card-header">
	<div class="card-header-title" id="running-log-card-title">
		<div class="column">
			<p class="title is-2">{{$runningLog->runType->name}}</p>
		</div>
		<div class="column has-text-right">
			<p class="title is-4">{{date('l F j, Y', strtotime($runningLog->run_date))}}</p>
			<p class="subtitle is-6">{{$runningLog->dayTime->name}} Run</p>
		</div>
	</div>
</div>

	<div class="card-content">
		<div class="content">

			<div class="columns">
			    <div class="column">
				    <div class="card" id="distance-card">
				      <div class="card-header">
				      	<p class="card-header-title">Distance (miles)</p>
				      </div>
				      <div class="card-content">
				        <div class="content has-text-centered">
				        <h1 class="title is-1">{{$runningLog->distance}}</h1>
				        </div>
				      </div>
				    </div>
			    </div>
			    <div class="column">
				    <div class="card" id="duration-card">
				      <div class="card-header">
				      	<p class="card-header-title">Duration</p>
				      </div>
				      <div class="card-content">
				        <div class="content has-text-centered">
				        <h1 class="title is-1">{{$runningLog->duration}}</h1>
				        </div>
				      </div>
				    </div>
			    </div>
			    <div class="column">
				    <div class="card" id="pace-card">
				      <div class="card-header">
				      	<p class="card-header-title">Average Pace</p>
				      </div>
				      <div class="card-content">
				        <div class="content has-text-centered">
				        <h1 class="title is-1">{{$runningLog->averagePace}}</h1>
				        </div>
				      </div>
				    </div>
			    </div>
			</div>
			<div class="columns">
			    <div class="column">
				    <div class="card" id="terrain-card">
				      <div class="card-header">
				      	<p class="card-header-title">Terrain</p>
				      </div>
				      <div class="card-content">
				        <div class="content has-text-centered">
				        <h1 class="title is-1">{{$runningLog->terrainType->name}}</h1>
				        </div>
				      </div>
				    </div>
			    </div>
			    <div class="column">
				    <div class="card" id="effort-card">
				      <div class="card-header">
				      	<p class="card-header-title">Your Effort</p>
				      </div>
				      <div class="card-content">
				        <div class="content has-text-centered">
				        <h1 class="title is-1">{{$runningLog->runEffort->name}}</h1>
				        </div>
				      </div>
				    </div>
			    </div>
			    <div class="column">
				    <div class="card" id="feeling-card">
				      <div class="card-header">
				      	<p class="card-header-title">You Felt</p>
				      </div>
				      <div class="card-content">
				        <div class="content has-text-centered">
				        <h1 class="title is-1">{{$runningLog->runFeeling->name}}</h1>
				        </div>
				      </div>
				    </div>
			    </div>

			</div>
			<div class="column">
					<div class="card" id="notes-card">
				      <div class="card-header">
				      	<p class="card-header-title">Notes</p>
				      </div>
				      <div class="card-content">
				        <div class="content">
				        <p"p>{{$runningLog->notes}}</p>
				        </div>
				      </div>
				    </div>
			</div>
		</div>
	</div>

</div>

@stop