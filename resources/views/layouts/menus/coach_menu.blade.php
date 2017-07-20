<aside class="menu" id="coach-menu">
<!--   <div class="has-text-centered notification is-primary user-box">
    <p>{{Auth::user()->first_name}} {{Auth::user()->last_name}}</p>
    <p>{{Auth::user()->role->name}}</p>
  </div> -->

  <ul class="menu-list">
    <li><a href="{{url('coach/dashboard')}}">Dashboard</a></li>
  </ul>
  <p class="menu-label">
    Running Log
  </p>
  <ul class="menu-list">
    <li ><a href="{{ url('coach/team_announcements') }}">Announcements</a></li>
    <li ><a href="{{ url('coach/team_events') }}">Events</a></li>
    
  </ul>
  <p class="menu-label">

  </p>
  <ul class="menu-list">

  </ul>
</aside>