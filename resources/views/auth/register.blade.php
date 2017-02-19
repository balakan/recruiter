@extends('layouts.blank')

@section('content')

    <div class="row align-center">
        <img src="{{ URL::to('/') }}/images/recruitment-logo.png" alt="Logo" class="">
    </div>

    <form role="form" method="POST" action="{{ url('/register') }}">
        {{ csrf_field() }}
        <div class="medium-6 large-4 small-10 row align-center log-in-form">
            <h5 class="large-10 medium-10 small-12 text-center">Register with us</h5>

            <div class="large-10 medium-10 small-12">
                <label>Name
                    <input id="name" type="text" name="name" value="{{ old('name') }}" aria-describedby="name-text" required autofocus>
                </label>
                @if ($errors->has('name'))
                    <p class="help-text" id="name-text">{{ $errors->first('name') }}</p>
                @endif
            </div>

            <div class="large-10 medium-10 small-12">
                <label>Email
                    <input id="email" type="email" name="email" value="{{ old('email') }}" aria-describedby="email-text" required>
                </label>
                @if ($errors->has('email'))
                    <p class="help-text" id="email-text">{{ $errors->first('email') }}</p>
                @endif
            </div>

            <div class="large-10 medium-10 small-12">
                <label>Password
                    <input id="password" type="password" name="password" aria-describedby="password-text" required>
                </label>
                @if ($errors->has('password'))
                    <p class="help-text" id="password-text">{{ $errors->first('password') }}</p>
                @endif
            </div>

            <div class="large-10 medium-10 small-12">
                <label>Confirm Password
                    <input id="password_confirmation" type="password" name="password_confirmation" aria-describedby="password-c-text" required>
                </label>
            </div>

            <div class="large-10 medium-10 small-12">
                <p><button type="submit" class="button secondary expanded"><i class="fi-torsos-all"></i> Register</button></p>
            </div>

        </div>
    </form>

    <div class="row align-center small-links">
        <a type="submit" href="{{ url('/login') }}" class="row align-middle">
            <i class="fi-torso-business"></i>
            <div class="btn-text">Login</div>
        </a>
    </div>

@endsection

