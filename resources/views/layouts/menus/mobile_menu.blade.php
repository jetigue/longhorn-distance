<div class="notification is-primary is-hidden-tablet">
<aside class="menu">
@if (Auth::guest())
  <ul class="menu-list">
    <li><a href="{{ url('/login') }}">Login &nbsp;<i class="fa fa-sign-in" aria-hidden="true"></i></a></li>
    <li><a href="{{ url('/register') }}">Register &nbsp;<i class="fa fa-user" aria-hidden="true"></i></a></li>
  </ul>
  <hr>
@else
  <p class="menu-label">
    {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
  </p>
  <ul class="menu-list">
    <li><a href="{{url('/user/dashboard')}}">My Dashboard</a></li>
    <li><a class="navbar-item submenu-item" href="{{ url('/logout') }}"
           onclick="event.preventDefault();
           document.getElementById('logout-form').submit();">
           Logout &nbsp;<i class="fa fa-sign-out" aria-hidden="true"></i>
        </a>
        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
        </form>
    </li>
  </ul>
<hr>
@endif
  <ul class="menu-list">
    <li><a href="{{url('/our_team')}}">Our Team</a></li>
    <li><a href="{{url('/longhorn_5k')}}">Longhorn 5k</a></li>
    <li><a href="{{url('/river_run')}}">Lambert River Run</a></li>
    <li><a href="{{url('/forms_handouts')}}">Forms and Handouts</a></li>
  </ul>
</aside>
</div>