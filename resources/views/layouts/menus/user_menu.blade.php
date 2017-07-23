<aside class="menu" id="user-menu">

  <p class="menu-label">
    General
  </p>
  <ul class="menu-list">
    <li><a href="{{url('user/dashboard')}}">Dashboard</a></li>
  </ul>

  <p class="menu-label">
    Running Log
  </p>
  <ul class="menu-list">
    <li ><a href="{{ url('/running_log/create') }}">Log a Run</a></li>
    <li ><a href="{{ url('/running_log') }}">View Your Runs</a></li>
  </ul>


  </ul>
</aside>