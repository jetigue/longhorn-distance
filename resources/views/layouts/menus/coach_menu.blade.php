<aside class="menu" id="coach-menu">

  <p class="menu-label">
    General
  </p>
  <ul class="menu-list">
    <li><a href="{{url('coach/dashboard')}}">Dashboard</a></li>
  </ul>

  <p class="menu-label">
    Team
  </p>
  <ul class="menu-list">
    <li ><a href="{{ url('coach/athletes') }}">Athletes</a></li>
    <li ><a href="{{ url('coach/time_trials') }}">Time Trials</a></li>
  </ul>

  <p class="menu-label">
    Running Log
  </p>
  <ul class="menu-list">
    <li ><a href="{{ url('coach/team_logs') }}">Team Logs</a></li>
    <li ><a href="{{ url('/running_log/create') }}">Log a Run</a></li>
    <li ><a href="{{ url('/running_log') }}">View Your Runs</a></li>
  </ul>
  <p class="menu-label">
    Administrative
  </p>
  <ul class="menu-list">
    <li ><a href="{{ url('coach/team_announcements') }}">Announcements</a></li>
    <li ><a href="{{ url('coach/team_events') }}">Events</a></li>
  </ul>


</aside>