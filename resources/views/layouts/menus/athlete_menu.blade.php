<aside class="menu" id="athlete-menu">
  <div class="has-text-centered notification is-primary user-box">
    <p>{{Auth::user()->first_name}} {{Auth::user()->last_name}}</p>
    <p>{{Auth::user()->role->name}}</p>
  </div>

  <ul class="menu-list">
    <li><a href="{{url('athlete/dashboard')}}">Dashboard</a></li>
  </ul>
  <p class="menu-label">
    Running Log
  </p>
  <ul class="menu-list">
    <li ><a href="{{ url('/running_log/create') }}">Log a Run</a></li>
    <li ><a href="{{ url('/running_log') }}">View Your Runs</a></li>
    
  </ul>
  <p class="menu-label">

  </p>
  <ul class="menu-list">

  </ul>
</aside>