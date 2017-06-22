@include('layouts.header')


@include('layouts.navbar')

@if ($flash = session('message'))
	<div role="alert" id="flash-message">
		{{ $flash }}
	</div>
@endif

@include('layouts.hero')

<div class="container">
    <section class="section page-content">
        @yield('content')
    </section>
</div>

@include('layouts.footer')