@extends('layouts.app')

@section('content')
<div class="flex justify-center m-4 w-full">
    <div class="rounded border p-5">
        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            {{-- <input type="hidden" name="token" value="{{ $token }}"> --}}

            <div class="row mb-3">
                <label for="email" class="inline-block mb-2 text-gray-700">{{ __('Email Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email"
                        class="block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    text-gray-700
                    bg-white bg-clip-padding
                    border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none @error('email') is-invalid @enderror" name="email"
                        value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="password" class="inline-block mb-2 text-gray-700">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password"
                        class="block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    text-gray-700
                    bg-white bg-clip-padding
                    border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none @error('password') is-invalid @enderror" name="password"
                        required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="password-confirm" class="inline-block mb-2 text-gray-700">{{ __('Confirm Password')
                    }}</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    text-gray-700
                    bg-white bg-clip-padding
                    border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Reset Password') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

