@extends('layouts.main')

@section('content')

<div class="content main-content-header">
	Longhorn 5k
</div>

<div class="columns">
	<div class="column is-6 content">
		<h3 class="has-text-centered">Saturday, August 11th @ Chattahoochee Pointe Park</h3>
		<hr>
		<h4 class="has-text-centered">2019 Longhorn 5k</h4>
		<hr class="my-2" style="border-top: 2px solid #73000A">
		<p>Join us for the 11th Annual Longhorn 5K with proceeds benefiting the Longhorn Cross Country team! This year's race will be held along the banks of the Chattahoochee River at Chattahoochee Pointe Park. Packet Pickup will be held on Friday August 9th from 11:00 am - 3:00 pm at North Georgia Running Co. in Cumming, GA, and at race day registration which will begin at 7:00am. Awards to be given include Overall Male/Female and Masters Male/Female, and Age group awards. T-shirts are guaranteed to all runners registering by August 2nd. </p>
		<p class="has-text-centered has-text-weight-bold"><a href="https://runsignup.com/Race/GA/Suwanee/Longhorn5K">Online Registration Page</p>

		<p class="has-text-centered has-text-weight-bold"><a href="https://drive.google.com/open?id=0B8Ca2oFHpw8HdUdQQzQ2bEFXZGRKZHZiVno1VkpaSldkYk9F">Registration Form</a></p>

		<hr class="my-2" style="border-top: 2px solid #73000A">
		<p class="has-text-centered has-text-weight-bold"><a href="https://runsignup.com/Race/Results/47756/#resultSetId-126278">
				2018 Longhorn 5k Results</a>
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