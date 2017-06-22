@extends('layouts.main')

@section('content')

<div class="column is-8 is-offset-2">
    <div class="card">
        <header class="card-header form-header">
            <p class="card-header-title">
                Log In
            </p>
        </header>

        <div class="card-content">
            <form class="form" role="form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">E-mail Address</label>
                </div>
                <div class="field-body">
                  <div class="field">
                    <p class="control is-expanded">
                      <input
                        name="email"
                        id="email"
                        class="input is-medium" 
                        type="email"
                        value="{{old('email')}}"
                        required autofocus>
                    </p>
                  </div>
                </div>
            </div>

            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">Password</label>
                </div>
                <div class="field-body">
                  <div class="field">
                    <p class="control is-expanded">
                      <input
                        name="password"
                        id="password"
                        class="input is-medium" 
                        type="password"
                        value="{{old('password')}}"
                        required>
                    </p>
                  </div>
                </div>
            </div>

            <div class="field is-horizontal">
                <div class="field-label">
                    <label class="label"></label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <div class="control">
                            <label class="checkbox">
                            <input 
                                type="checkbox" 
                                name="remember" {{ old('remember') ? 'checked' : '' }}> &nbsp; Remember Me
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="field">
                <p class="control">
                    <button type="submit" class="button  is-primary form-button">
                        Login
                    </button>
                </p>
            </div>
                <a href="{{ route('password.request') }}">
                    Forgot Your Password?
                </a>
            

                @include('layouts.errors')
                
            </form>
        </div>
    </div>
</div>

@endsection
