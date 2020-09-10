@extends('layouts.app')

@section('content')

    <h1>{{ __('Confirm Password') }}</h1>
    <p>{{ __('Please confirm your password before continuing.') }}</p>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <div>
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" name="password" required autocomplete="current-password">
                @error('password')
                    <span>
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div>
            <div>
                <button type="submit">
                    {{ __('Confirm Password') }}
                </button>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
        </div>
    </form>

@endsection
