@extends('layouts.user')

@section('title')
	Dashboard
@endsection


@section('content')
<div class="dashboard">


<div class="columns">
	<div class="column is-one-quarter">
		<div class="columns">
		    <div class="column">
				<stat-card title="Miles Week" stat="37"></stat-card>
			</div>

			<div class="column">
				<stat-card title="Miles Week" stat="37"></stat-card>
			</div>
		</div>			
		<div class="columns">
		    <div class="column">
				<stat-card title="Miles Week" stat="37"></stat-card>
			</div>
			<div class="column">
				<stat-card title="Miles Week" stat="37"></stat-card>
			</div>
		</div>

	</div>

	<div class="column is-one-half">

		<bar-graph
			:labels="{{$lastWeek->keys()}}"
			:values="{{$lastWeek->values()}}"
			:color="'#73000A'"
			:title="'Your Mileage Last 7 Days'">
		</bar-graph>

	</div>

	<div class="column is-one-quarter">

		<div class="columns">
		    <div class="column">
				<stat-card title="Miles Week" stat="37"></stat-card>
			</div>
			<div class="column">
				<stat-card title="Miles Week" stat="37"></stat-card>
			</div>
		</div>

	</div>
</div>

<div>
		<bar-graph
			:labels="{{$lastWeek->keys()}}"
			:values="{{$lastWeek->values()}}"
			:color="'#73000A'"
			:title="'Your Mileage Last 7 Days'">
		</bar-graph>

  </div>


<div class="columns">
	<div class="column is-3">
		<bar-graph
			:labels="['May', 'June', 'July', 'August']"
			:values="{{$monthlySummerMileage->values()}}"
			:color="'red'"
			:title="'Summer Mileage per Month'">
		</bar-graph>
	</div>

	<div class="column is-3 ">
		<bar-graph
			:labels="[1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]"
			:values="{{$weeklySummerMileage->values()}}"
			:color="'blue'"
			:title="'Summer Mileage per Week'">
		</bar-graph>
	</div>

	<div class="column is-4 ">
		<bar-graph
			:labels="{{$lastWeek->keys()}}"
			:values="{{$lastWeek->values()}}"
			:color="'#73000A'"
			:title="'Last Week'">
		</bar-graph>
	</div>
</div>

<div class="columns">

	<div class="column is-5">
		<bar-graph
			:labels="{{$lastWeek->keys()}}"
			:values="{{$lastWeek->values()}}"
			:color="'#73000A'"
			:title="'Last Week'">
		</bar-graph>
	</div>


</div>

<div class="columns">
	<div class="column">
		<pie-chart
			:labels="{{$percentRunType->keys()}}"
			:values="{{$percentRunType->values()}}"
			:colors="['Blue', 'Red', 'Green', 'Purple', 'Yellow']"
			:title="'Percent of each Run Type'">
		</pie-chart>
	</div>

	<div class="column">
		<pie-chart
			:labels="{{$percentTerrainType->keys()}}"
			:values="{{$percentTerrainType->values()}}"
			:colors="['Blue', 'Red', 'Green', 'Purple', 'Yellow']"
			:title="'Percent of each Terrain Type'">
		</pie-chart>
	</div>

	<div class="column">
		<pie-chart
			:labels="{{$percentRunEffort->keys()}}"
			:values="{{$percentRunEffort->values()}}"
			:colors="['Blue', 'Red', 'Green', 'Purple', 'Yellow']"
			:title="'Percent of each Run Effort'">
		</pie-chart>
	</div>

		<div class="column">
		<pie-chart
			:labels="{{$percentRunFeeling->keys()}}"
			:values="{{$percentRunFeeling->values()}}"
			:colors="['Blue', 'Red', 'Green', 'Purple', 'Yellow']"
			:title="'Percent of each Run Feeling'">
		</pie-chart>
	</div>
</div>


</div>
@endsection