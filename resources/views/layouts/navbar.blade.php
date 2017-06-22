<nav class="nav" id="guest-navbar">
  <div class="container is-fluid level">
    <div class="level-left">

      <a href="{{url('/')}}">
        <div class="level-item" id="logo-container"></div>
      </a>

    <p class="level-item">
      <a class="link">Lambert River Run</a>
    </p>

    <p class="level-item">
      <a class="link">Longhorn 5k</a>
    </p>

    <p class="level-item">
      <a class="link">Our Team</a>
    </p>

    <p class="level-item">
      <a class="link">Forms and Handouts</a>
    </p>

  </div>


@if (Auth::guest())
  <div class="level-right">
      <p class="level-item">
        <a href="{{ url('/login') }}">Login <i class="fa fa-sign-in" aria-hidden="true"></i></a>
      </p>
      <p class="level-item">
        <a href="{{ url('/register') }}">Register <i class="fa fa-user" aria-hidden="true"></i></a>
      </p>
  </div>

@else
  <div class="level-right">

      <p class="level-item">
        <a href="{{ url('/logout') }}"
        onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            Logout <i class="fa fa-sign-out is-small" aria-hidden="true"></i></a>
      </p>
      <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
      {{ csrf_field() }}
      </form>
  </div>
@endif
  </div>
</nav>
<!-- <nav class="nav has-shadow">
  <div class="container is-fluid">


      <a class="nav-item" href="{{url('/')}}">
        <img src="images/small_logo_transparent.png" id="navbar-logo">
      </a>

      <a class="nav-item is-hidden-mobile" href="{{url('river_run')}}">Lambert River Run</a>
      <a class="nav-item is-hidden-mobile" href="{{url('longhorn_5k')}}">Longhorn 5k</a>
      <a class="nav-item is-hidden-mobile" href="{{url('')}}">Our Team</a>

      <a class="nav-item is-hidden-mobile" href="{{url('admin/dashboard')}}">Admin Dashboard</a>

      <a class="nav-item is-hidden-mobile" href="{{url('coach/dashboard')}}">Coach Dashboard</a>

      <a class="nav-item is-hidden-mobile" href="{{url('athlete/dashboard')}}">Athlete Dashboard</a>


    <div class="nav-right nav-menu"> -->
          <!-- Authentication Links -->
 <!--    @if (Auth::guest())
        <a class="nav-item" href="{{ url('/login') }}">Login <i class="fa fa-sign-in" aria-hidden="true"></i></a>
        <a class="nav-item" href="{{ url('/register') }}">Register <i class="fa fa-user" aria-hidden="true"></i></a>

    @else
      <li class="nav-item dropdown">
        <a class="nav-item dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{url('/logout')}}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
              Logout
          </a>
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
            </form>
        </div>
      </li>
      @endif
    </div>
  </div>
</nav> -->