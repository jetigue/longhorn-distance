@extends('layouts.main')

@section('content')

<div class="column is-9 is-offset-1">
    <div class="card">
        <header class="card-header form-header">
            <p class="card-header-title">
                Register
            </p>
        </header>
        <div class="card-content">
            <form class="form" role="form" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}

            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">First Name</label>
                </div>
                <div class="field-body">
                  <div class="field">
                    <p class="control is-expanded">
                      <input
                        name="first_name"
                        id="first_name"
                        class="input is-medium" 
                        type="text"
                        value="{{old('first_name')}}"
                        required autofocus>
                    </p>
                  </div>
                </div>
            </div>

            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">Last Name</label>
                </div>
                <div class="field-body">
                  <div class="field">
                    <p class="control is-expanded">
                      <input
                        name="last_name"
                        id="last_name"
                        class="input is-medium" 
                        type="text"
                        value="{{old('last_name')}}"
                        required>
                    </p>
                  </div>
                </div>
            </div>

            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">E-Mail</label>
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
                        required>
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
                        Register
                    </button>
                </p>
            </div>            

                @include('layouts.errors')
                
            </form>
        </div>
    </div>
</div>

@endsection
