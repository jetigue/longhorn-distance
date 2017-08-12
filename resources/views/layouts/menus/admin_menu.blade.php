
<aside class="menu" id="admin-menu">
  <p class="menu-label">
    General
  </p>
  <ul class="menu-list">
    <li><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
  </ul>
  <p class="menu-label">
    Administration
  </p>
  <ul class="menu-list">
    <li>
      <div class="dropdown-label">
        <a>Users</a> 
          <i class="fa fa-plus" style="font-size:12px;" aria-hidden="true"></i>
          <i class="fa fa-minus" style="font-size:12px;" aria-hidden="true"></i>
      </div>
   
      <ul>
        <li><a href="{{ url('/admin/user_roles') }}">User Roles</a></li>
        <li><a href="{{ url('/admin/users') }}">Users</a></li>
      </ul>
    </li>

    <li>
      <div class="dropdown-label">
        <a>Running Log</a> 
<!--           <i class="fa fa-plus" style="font-size:12px;" aria-hidden="true"></i>
          <i class="fa fa-minus" style="font-size:12px;" aria-hidden="true"></i>  -->    
      </div>

      <ul>
        <li><a href="{{ url('/admin/running_log/day_times') }}">Day Times</a></li>
        <li><a href="{{ url('/admin/running_log/run_efforts') }}">Run Efforts</a></li>
        <li><a href="{{ url('/admin/running_log/run_feelings') }}">Run Feeling</a></li>
        <li><a href="{{ url('/admin/running_log/run_types') }}">Run Types</a></li>
        <li><a href="{{ url('/admin/running_log/terrain_types') }}">Terrain Types</a></li>
      </ul>
    </li>

        <li>
      <div class="dropdown-label">
        <a>Results</a> 
<!--           <i class="fa fa-plus" style="font-size:12px;" aria-hidden="true"></i>
          <i class="fa fa-minus" style="font-size:12px;" aria-hidden="true"></i>    -->  
      </div>

      <ul>
        <li><a href="{{ url('/admin/distances') }}">Distances</a></li>
        <li><a href="{{ url('/admin/genders') }}">Genders</a></li>
        <li><a href="{{ url('/admin/seasons') }}">Seasons</a></li>
        <li><a href="{{ url('/admin/timing_methods') }}">Timing Methods</a></li>
      </ul>
    </li>

</aside>