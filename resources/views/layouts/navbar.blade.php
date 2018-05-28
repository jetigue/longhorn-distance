<nav class="navbar is-transparent" id="navbar">

<div class="navbar-brand">
	<a href="{{url('/')}}">
	 	<div class="navbar-item" id="logo-container"></div>      
	</a>

	<div class="navbar-burger burger" data-target="navMenu">
	  <span></span>
	  <span></span>
	  <span></span>
	</div>

</div>

<div class="navbar-menu" id="navMenu">

	<div class="navbar-start">

	@if (Auth::guest())

  <a class="navbar-item is-hidden-tablet" href="{{ url('/login') }}">Login</a>
	<a class="navbar-item is-hidden-tablet" href="{{ url('/register') }}">Register</a>
@else

	<div class="navbar-item has-dropdown is-hoverable is-hidden-tablet">
		<a class="nav-heading navbar-link">
		    {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
		</a>
		<div class="navbar-dropdown">
			<!-- if administator -->
			@if(Auth::user()->user_role_id === 4) 
			<a class="navbar-item" href="/admin/dashboard">Admin Dashboard</a>

			<!-- if coach -->
			@elseif(Auth::user()->user_role_id === 3)
			<a class="navbar-item" href="/coach/dashboard">Coach's Dashboard</a>
		
			<!-- if athlete -->
			@elseif(Auth::user()->user_role_id === 2)
			<a class="navbar-item" href="/athlete/dashboard">Go to My Dashboard</a>

			<!-- if user -->
			@else(Auth::user()->user_role_id === 1)
			<a class="navbar-item" href="/user/dashboard">Go to My Dashboard</a>
			@endif
		</div>
    </div>
@endif

		<div class="navbar-item has-dropdown is-hoverable">
		  <a class="nav-heading navbar-link"> 
		    Our Team
		  </a>

		  <div class="navbar-dropdown is-boxed">
		    <a class="navbar-item" href="{{url('/boys_roster')}}">Boys' Roster</a>
		    <a class="navbar-item" href="{{url('/girls_roster')}}">Girls' Roster</a>
		    <a class="navbar-item" href="{{url('/coaches')}}">Coaches</a>
		    <hr class="navbar-divider">
		    <a class="navbar-item" href="{{url('/booster_club')}}">Booster Club</a>
		  </div>
		</div>

		<div class="navbar-item has-dropdown is-hoverable">
		  <a class="nav-heading navbar-link">
		    Our Events
		  </a>

		  <div class="navbar-dropdown is-boxed">
		    <a class="navbar-item" href="{{url('/longhorn_5k')}}">Longhorn 5k</a>
		    <a class="navbar-item" href="{{url('/river_run')}}">Lambert River Run</a>
		    <hr class="navbar-divider">
		    <a class="navbar-item" href="{{url('/team_camp')}}">Team Camp</a>
		  </div>
		</div>

		<a class="nav-heading navbar-item" href="{{url('/sponsors')}}">Our Sponsors</a>

		<a class="nav-heading navbar-item" href="{{url('/forms_handouts')}}">Forms & Handouts</a>



	</div>

	<div class="navbar-end">
@if (Auth::guest())

    <a class="navbar-item is-hidden-mobile" href="{{ url('/login') }}">Login &nbsp;<i class="fa fa-sign-in" aria-hidden="true"></i></a>

    <a class="navbar-item is-hidden-mobile" href="{{ url('/register') }}">Register &nbsp;<i class="fa fa-user" aria-hidden="true"></i></a>

@else

	<div class="navbar-item has-dropdown is-hoverable">
		<a class="navbar-link is-hidden-mobile">
		    {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
		</a>

		<div class="navbar-dropdown is-boxed">
			<!-- <a class="navbar-item submenu-item" href="/user/dashboard">Dashboard</a> -->
        	<a class="navbar-item submenu-item" href="{{ url('/logout') }}"
        		onclick="event.preventDefault();
            	document.getElementById('logout-form').submit();">
            	Logout &nbsp;<i class="fa fa-sign-out" aria-hidden="true"></i>
        	</a>

      <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
      {{ csrf_field() }}
      </form>
  	</div>
  	</div>
@endif
  </div>

</div>

</nav>