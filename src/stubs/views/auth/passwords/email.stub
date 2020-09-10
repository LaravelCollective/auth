@extends('layouts.app')

@section('content')
    <h1>{{ __('Reset Password') }}</h1>

    @if (session('status'))
        <div>
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div>
            <label for="email">{{ __('E-Mail Address') }}</label>
            <div>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span>
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div>
            <div>
                <button type="submit">
                    {{ __('Send Password Reset Link') }}
                </button>
            </div>
        </div>
    </form>

@endsection
