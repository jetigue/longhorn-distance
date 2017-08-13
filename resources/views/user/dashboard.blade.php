@extends('layouts.user')

@section('title')
	Dashboard
@endsection

@section('content')

<div class="dashboard">

<div class="tile is-ancestor">
  <div class="tile is-parent">
  <div class="tile is-child">
	<div class="level box">
	  <div class="level-item has-text-centered">
	    <div>
	      <p class="heading">Total Mileage</p>
	      <p class="title">{{$totalMileage}}</p>
	    </div>
	  </div>
	  <div class="level-item has-text-centered">
	    <div>
	      <p class="heading">Summer Mileage</p>
	      <p class="title">{{$totalSummerMileage}}</p>
	    </div>
	  </div>
	  <div class="level-item has-text-centered">
	    <div>
	      <p class="heading">Mileage this Week</p>
	      <p class="title">{{$totalMileageThisWeek}}</p>
	    </div>
	  </div>
	  <div class="level-item has-text-centered">
	    <div>
	      <p class="heading">Mileage this Month</p>
	      <p class="title">{{$totalMileageThisMonth}}</p>
	    </div>
	  </div>
	  <div class="level-item has-text-centered">
	    <div>
	      <p class="heading">Mileage this Year</p>
	      <p class="title">{{$totalMileageThisYear}}</p>
	    </div>
	  </div>
	</div>
	</div>
  </div>
</div>

<div class="tile is-ancestor">
  <div class="tile is-vertical is-9">
    <div class="tile">
      <div class="tile is-parent is-vertical">
        <div class="tile is-child box">
			<bar-graph
				:labels="[1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]"
				:values="{{$weeklySummerMileage->values()}}"
				:color="'#333'"
				:title="'Summer Mileage per Week'">
			</bar-graph>
        </div>
      </div>
      <div class="tile is-parent">
        <div class="tile is-child box">
			<bar-graph
				:labels="{{$mileageLastWeek->keys()}}"
				:values="{{$mileageLastWeek->values()}}"
				:color="'#73000A'"
				:title="'Mileage the Last 7 Days'">
			</bar-graph>
		</div>
      </div>
    </div>

    <div class="tile">
      <div class="tile is-parent is-vertical">
        <div class="tile is-child box">
			<pie-chart
				:labels="{{$percentRunType->keys()}}"
				:values="{{$percentRunType->values()}}"
				:colors="['#66B032', '#347C98', '#0247FE', '#4424D6', '#8601AF', '#C21460', '#FE2712', '#FC600A', '#FB9902']"
				:title="'Percent of each Run Type'">
			</pie-chart>
        </div>
      </div>
      <div class="tile is-parent">
        <div class="tile is-child box">
			<pie-chart
				:labels="{{$percentTerrainType->keys()}}"
				:values="{{$percentTerrainType->values()}}"
				:colors="['#F89021', '#FFC114', '#F7EE23', '#9CCC3C', '#16A98F']"
				:title="'Percent of each Terrain Type'">
			</pie-chart>
		</div>
      </div>
    </div>

    <div class="tile">
      <div class="tile is-parent is-vertical">
        <div class="tile is-child box">
			<pie-chart
				:labels="{{$percentRunEffort->keys()}}"
				:values="{{$percentRunEffort->values()}}"
				:colors="['#6666ff', '#66b3ff', '#66ffff', '#66ffb3', '#66ff8c']"
				:title="'Percent of each Run Effort'">
			</pie-chart>
        </div>
      </div>
      <div class="tile is-parent">
        <div class="tile is-child box">
			<pie-chart
				:labels="{{$percentRunFeeling->keys()}}"
				:values="{{$percentRunFeeling->values()}}"
				:colors="['Blue', 'Red', 'Green', 'Purple', 'Yellow']"
				:title="'Percent of each Run Feeling'">
			</pie-chart>
		</div>
      </div>
    </div>
</div>
  <div class="tile is-parent">
    <div class="tile is-child box">
		<div class="content">
<!-- 			<p class="has-text-centered is-marginless"><strong>Top 10</strong></p>
			<p class="has-text-centered"><strong>Summer Mileage Leaders</strong></p>
			<hr>
			@foreach($totalSummerMileagePerRunner as $totalSummer)
			<div class="box">
				<p class="has-text-centered is-marginless"><strong>{{$totalSummer->user->first_name}} {{$totalSummer->user->last_name}}</strong></p>
				<p class="has-text-centered">{{$totalSummer->distance}}</p>
			</div>
			@endforeach -->
		</div>
    </div>
  </div>
  </div>

</div>
@endsection