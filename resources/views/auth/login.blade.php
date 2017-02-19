@extends('layouts.blank')

@section('content')
    
    <div class="row align-center">
        <img src="{{ URL::to('/') }}/images/recruitment-logo.png" alt="Logo" class="">
    </div>

    <form role="form" method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}
        <div class="medium-6 large-4 small-10 row align-center log-in-form">
            <h5 class="text-center hide-for-small-only">Log in with you email account</h5>

            <div class="large-10 medium-10 small-12">
                <label>Email
                    <input id="email" type="email" name="email" value="{{ old('email') }}" aria-describedby="email-text" required autofocus>
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
                <input name="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}><label for="show-password">Remember Me</label>
                <p><button type="submit" class="button secondary expanded"><i class="fi-unlock"></i> Log In</button></p>
            </div>

            <div class="row align-center small-links">
                <a type="submit" href="{{ url('/password/reset') }}">
                    <div class="btn-text">Forgot your password?</div>
                </a>
            </div>

        </div>
    </form>

    <div class="row align-center small-links">
        <a type="submit" href="{{ url('/register') }}" class="row align-middle">
            <i class="fi-torsos-all"></i>
            <div class="btn-text">Register</div>
        </a>
    </div>

@endsection
