<nav class="nav" id="guest-navbar">
  <div class="container is-fluid level">
    <div class="level-left">

    <div class="level-item" id="logo-container"><a href="{{url('/')}}"></a></div>

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
  <a class="nav-item is-hidden-mobile" href="{{url('admin/dashboard')}}">Admin Dashboard</a>
  </p>
      <p class="level-item">
        <a href="">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</a>
      </p>
      <p class="level-item">
        <a href="{{ url('/logout') }}"
        onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            Logout <i class="fa fa-sign-out" aria-hidden="true"></i></a>

      </p>
      <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
      {{ csrf_field() }}
      </form>
  </div>
@endif
  </div>
</nav>