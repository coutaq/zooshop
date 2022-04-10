@extends('layouts.app')

@section('content')
<div class="flex justify-center m-4 col-span-12">
    <div class="rounded border p-5">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="inline-block mb-2 text-gray-700">{{ __('Имя') }}</label>
                <div>
                    <input id="name" type="text" class=" block
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
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                    @error('name') outline-red-600 @enderror" name="name" value="{{ old('name') }}" required
                        autocomplete="name" autofocus>

                    @error('name')
                    <span class="text-red-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="email" class="inline-block mb-2 text-gray-700">{{ __('Почта') }}</label>

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
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none @error('email') outline-red-600 @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <span class="text-red-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="password" class="inline-block mb-2 text-gray-700">{{ __('Пароль') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password"
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
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none @error('password') outline-red-600 @enderror"
                        name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="text-red-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="password-confirm" class="inline-block mb-2 text-gray-700">{{ __('Подтверждение пароля')
                    }}</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class=" block
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
                    <button type="submit" class="rounded w-full bg-blue-600 p-4 mb-2 text-white">
                        {{ __('Зарегестрироваться') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection