@extends('layouts.main')

@section('content')
<div class="column is-8 is-offset-2">
    <div class="card">
        <header class="card-header form-header">
            <p class="card-header-title">
                Reset Password
            </p>
        </header>
        <div class="card-content">
        @if (session('status'))
            <div class="notification is-success">
                {{ session('status') }}
            </div>
        @endif

        <form class="form" role="form" method="POST" action="{{ route('password.request') }}">
            {{ csrf_field() }}

            <input type="hidden" name="token" value="{{ $token }}">

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
                        required>
                    </p>
                  </div>
                </div>
            </div>

            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">Confirm Password</label>
                </div>
                <div class="field-body">
                  <div class="field">
                    <p class="control is-expanded">
                      <input
                        name="password_confirmation"
                        id="password_confirmation"
                        class="input is-medium" 
                        type="password"
                        required>
                    </p>
                  </div>
                </div>
            </div>

            <div class="field">
                <p class="control">
                    <button type="submit" class="button  is-primary form-button">
                        Reset Password
                    </button>
                </p>
            </div>  
            @include('layouts.errors')
            </form>
        </div>
    </div>
</div>

@endsection
