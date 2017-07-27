
<div class="menu is-hidden-tablet">
@if (Auth::guest())
  <ul class="menu-list">
    <li><a href="{{ url('/login') }}">Login &nbsp;<i class="fa fa-sign-in" aria-hidden="true"></i></a></li>
    <li><a href="{{ url('/register') }}">Register &nbsp;<i class="fa fa-user" aria-hidden="true"></i></a></li>
  </ul>
  <hr>
@else
  <h4 class="menu-label">
    {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
  </h4>
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
    <li>
      <div v-on:click="show = !show" class="submenu-toggle">
        <a href="{{url('/our_team')}}">Our Team</a>
          <i v-if="show" class="fa fa-plus" style="font-size:12px;" aria-hidden="true" @click="$emit('open')"></i>
          <i v-else="!show" class="fa fa-minus" style="font-size:12px;" aria-hidden="true" @click="$emit('close')"></i>
      </div>

      <ul v-if="!show">
        <li><a href="{{url('/coaches')}}">Coaches</a></li>
        <li><a href="{{url('/boys_roster')}}">Boy's Roster</a></li>
        <li><a href="{{url('/girls_roster')}}">Girl's Roster</a></li>
        <li><a href="{{url('/booster club')}}">Booster Club</a></li>
      </ul>
    </li>
    <li>
      <div class="submenu-toggle">
        <a href="{{url('/our_team')}}">Our Events</a>
          <i class="fa fa-plus" style="font-size:12px;" aria-hidden="true"></i>
          <i class="fa fa-minus" style="font-size:12px;" aria-hidden="true"></i>
      </div>
      <ul>
        <li><a href="{{url('/longhorn_5k')}}">Longhorn 5k</a></li>
        <li><a href="{{url('/river_run')}}">Lambert River Run</a></li>
        <li><a href="{{url('/team_camp')}}">Team Camp</a></li>
      </ul>
    </li>
    <li><a href="{{url('/forms_handouts')}}">Forms and Handouts</a></li>
  </ul>
</div>
