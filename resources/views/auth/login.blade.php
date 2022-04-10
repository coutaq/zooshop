@extends('layouts.app')

@section('content')
<div class="flex justify-center m-4 col-span-12">
    <div class="rounded border p-5">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label inline-block mb-2 text-gray-700">{{ __('Почта') }}</label>
                <div class="col-md-6">
                    <input id="email" type="email"
                        class=" block
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
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none  @error('email') outline-red-600 @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="text-red-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label inline-block mb-2 text-gray-700">{{ __('Пароль') }}</label>
                <div class="col-md-6">
                    <input id="password" type="password"
                        class="form-control
                    block
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
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none @error('password') outline-red-600 @enderror"
                        name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="text-red-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember')
                        ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        {{ __('Запомнить меня') }}
                    </label>
                </div>
            </div>
            <div class="mb-1">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="rounded w-full bg-blue-600 p-4 mb-2 text-white">
                        {{ __('Вход') }}
                    </button>
                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Забыли пароль?') }}
                    </a>
                    @endif
                </div>
            </div>
        </form>
    </div>
</div>
@endsection