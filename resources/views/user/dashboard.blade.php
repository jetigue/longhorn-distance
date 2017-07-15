@extends('layouts.user')

@section('title')
	Dashboard
@endsection


@section('content')
	
<div class="column is-4">
	<graph
		:labels="[1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]"
		:values="{{$weeklyMileage->values()}}"
		:colors="'green'"
		:title="'Summer Weekly Mileage'">
	</graph>
</div>

	
@endsection