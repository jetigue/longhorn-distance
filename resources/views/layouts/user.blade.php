@include('layouts.header')

@include('layouts.navbar')

@if ($flash = session('message'))
	<div class="box" role="alert" id="flash-message">
		<i class="fa fa-thumbs-o-up fa-2x" aria-hidden="true"> &nbsp; {{ $flash }}</i>
	</div>
@endif
       
<div class="container site-content">

	<div class="header">
		@include('layouts.page_header')
	</div>

	<div class="columns">
  		<div class="column is-2 menu-container">

      		<section class="menu">
				<!-- if administator -->
				@if(Auth::user()->user_role_id === 4) 
					@include('layouts.menus.admin_menu')

				<!-- if coach -->
				@elseif(Auth::user()->user_role_id === 3)
					@include('layouts.menus.coach_menu')
			
				<!-- if athlete -->
				@elseif(Auth::user()->user_role_id === 2)
					@include('layouts.menus.athlete_menu')

				<!-- if user -->
				@else(Auth::user()->user_role_id === 1)
					@include('layouts.menus.user_menu')
				@endif
			</section>

  		</div>

  		<div class="column">

			<div class="user-content">
				@yield('content')
			</div>

  		</div>
	</div>
</div>


@include('layouts.footer')