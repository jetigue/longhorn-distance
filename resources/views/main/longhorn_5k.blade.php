@extends('layouts.main')

@section('content')

<div class="content main-content-header">
Longhorn 5k
</div>

<div class="columns">
  <div class="column is-6 content">
	<h3 class="has-text-centered">Saturday, August 12th @ Lambert High School Stadium</h3>
	<hr>
	<p>Thank you to everyone that made the 9th Annual Longhorn 5k a success!</p>
	<hr>
	<div class="flex content">
                
                <p class="has-text-centered"><strong><a href="http://www.coolrunning.com/results/17/ga/Aug12_9thAnn_set1.shtml">2017 Longhorn 5k Results</a></strong></p>
    </div>
    <hr>
  </div>

  <div class="column is-offset-2">
	<div class="card">
	  <div class="card-image">
	    <figure class="image is-16by9">
	      <img src="{{url('images/longhorn_5k/Longhorn5k2016.png')}}" alt="Longhorn5k">
	    </figure>
	  </div>
	  <div class="card-content">
		2016 Longhorn 5k
	  </div>
	</div>
</div>
</div>
@endsection