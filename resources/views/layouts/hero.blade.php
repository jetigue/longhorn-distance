<section class="hero is-primary">
	<div class="hero-body">
    	<div class="container">
		<div class="columns">
			<div class="column">
	      		<h1 class="title is-2">
	        		Lambert High School
	      		</h1>
	      		<h3 class="subtitle is-4">
	      			Cross Country and Distance Running
	      		</h3>
	    	</div>
			<div class="column">
				<div class="notification is-primary" id="hero-right-container">
				@if(Auth::guest())
				<h1 class="title is-5">
					2016 AAAAAAA State Champions
				</h1>

				<h3>Join the Team! Click here to sign up: <strong><a href="https://goo.gl/forms/p5D9J2RusN9aYCNz1">2017 Sign-up Form</a></strong></h3>
				@else

				<h1 class="title is-4 is-marginless">
					 {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
				</h1>
				<!-- if administator -->
				@if(Auth::user()->user_role_id === 4) 
				<a class="button hero-button is-black" href="/admin/dashboard">Admin Dashboard</a>

				<!-- if coach -->
				@elseif(Auth::user()->user_role_id === 3)
				<a class="button hero-button is-black" href="/coach/dashboard">Coach's Dashboard</a>
			
				<!-- if athlete -->
				@elseif(Auth::user()->user_role_id === 2)
				<a class="button hero-button is-black" href="/athlete/dashboard">Go to My Dashboard</a>

				<!-- if user -->
				@else(Auth::user()->user_role_id === 1)
				<a class="button hero-button is-black" href="/user/dashboard">Go to My Dashboard</a>
				@endif
				@endif
				</div>
		</div>


  </div>
</section>