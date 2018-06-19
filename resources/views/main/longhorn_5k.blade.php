@extends('layouts.main')

@section('content')

<div class="content main-content-header">
Longhorn 5k
</div>

<div class="columns">
  <div class="column is-6 content">
	<h3 class="has-text-centered">Saturday, August 11th @ Chattahoochee Pointe Park</h3>
	<hr>
	  <p>The 10th annual Longhorn 5k will take place on Saturday, August 11. The 5k will start at 8:00
		  am and the 1-mile fun run will take place at 9:15 am.</p>
	  <p>This year's race will take place at Chattahoochee Pointe Park due to the construction going
		  on at the school.</p>
	  <p class="has-text-centered has-text-weight-bold"><a
				  href="{{url('https://runsignup.com/Race/GA/Suwanee/Longhorn5K')}}">
			  Longhorn 5k Online Registration</a>
	  </p>
	  <p class="has-text-centered has-text-weight-bold"><a
				  href="{{url('https://drive.google.com/open?id=1vdxY6OMp8YRLTLprdzApXo5hrRuehrnl')}}">2018 Longhorn 5k Registration</a>
	  </p>
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