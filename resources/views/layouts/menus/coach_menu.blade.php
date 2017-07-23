<aside class="menu" id="coach-menu">

  <p class="menu-label">
    General
  </p>
  <ul class="menu-list">
    <li><a href="{{url('coach/dashboard')}}">Dashboard</a></li>
  </ul>

  <p class="menu-label">
    Running Log
  </p>
  <ul class="menu-list">
    <li ><a href="{{ url('coach/team_logs') }}">Team Logs</a></li>
    <!-- <li ><a href="{{ url('coach/team_events') }}">Events</a></li> -->
  </ul>
  <p class="menu-label">
    Administrative
  </p>
  <ul class="menu-list">
    <li ><a href="{{ url('coach/team_announcements') }}">Announcements</a></li>
    <li ><a href="{{ url('coach/team_events') }}">Events</a></li>
  </ul>


</aside>