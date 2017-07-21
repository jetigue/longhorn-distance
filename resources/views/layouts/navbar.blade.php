<nav class="navbar is-transparent" id="navbar">

<div class="navbar-brand">
	<a href="{{url('/')}}">
	 	<div class="navbar-item" id="logo-container"></div>      
	</a>

<div class="navbar-burger burger">
  <span></span>
  <span></span>
  <span></span>
</div>

</div>

<div class="navbar-menu">

	<div class="navbar-start">
		<div class="navbar-item has-dropdown is-hoverable">
		  <a class="nav-heading navbar-item"> 
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
		  <a class="nav-heading navbar-item">
		    Our Events
		  </a>

		  <div class="navbar-dropdown is-boxed">
		    <a class="navbar-item" href="{{url('/longhorn_5k')}}">Longhorn 5k</a>
		    <a class="navbar-item" href="{{url('/river_run')}}">Lambert River run</a>
		    <hr class="navbar-divider">
		    <a class="navbar-item" href="{{url('/team_camp')}}">Team Camp</a>
		  </div>
		</div>

		<a class="nav-heading navbar-item" href="{{url('/sponsors')}}">Our Sponsors</a>

		<a class="nav-heading navbar-item" href="{{url('/forms_handouts')}}">Forms & Handouts</a>



	</div>

	<div class="navbar-end">
@if (Auth::guest())

    <a class="navbar-item" href="{{ url('/login') }}">Login &nbsp;<i class="fa fa-sign-in" aria-hidden="true"></i></a>

    <a class="navbar-item" href="{{ url('/register') }}">Register &nbsp;<i class="fa fa-user" aria-hidden="true"></i></a>

@else

	<div class="navbar-item has-dropdown is-hoverable">
		<a class="navbar-item">
		    {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
		</a>

		<div class="navbar-dropdown is-boxed">

			<a class="navbar-item submenu-item" href="/user/dashboard">Dashboard</a>
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