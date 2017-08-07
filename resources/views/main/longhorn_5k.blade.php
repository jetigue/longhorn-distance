@extends('layouts.main')

@section('content')

<div class="content main-content-header">
Longhorn 5k
</div>

<div class="columns">
  <div class="column is-6 content">
	<h3 class="has-text-centered">Saturday, August 12th @ Lambert High School Stadium</h3>
	<hr>
	<p>The <strong>5k begins at 8:00am</strong> and the <strong>1 Mile Fun Run begins at 9:15am</strong>. Race day registration begins at 7:00am. All proceeds contribute to the success of the Lambert Cross Country Team!</p>
	<hr>
	<div class="flex content">
	    <p><strong><a href="https://drive.google.com/open?id=0B8Ca2oFHpw8HTjJqOG9janQwalk">Registration Form</a></strong></p>
	    <p><strong><a href="https://runsignup.com/Race/GA/Suwanee/Longhorn5K">Online Registration</a></strong></p>
	    <p><strong><a href="https://drive.google.com/open?id=0B8Ca2oFHpw8HMHZmYWQwRGRjZVE">Course Maps</a></strong></p>
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