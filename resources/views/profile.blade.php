@extends('layouts.app')
@inject('products', 'App\Services\ProductService')
@section('content')
<nav class="col-span-12 p-8 lg:h-32 bg-slate-400">
    <div class="flex flex-col lg:flex-row gap-4 m-auto max-w-7xl h-full lg:items-center lg:px-8 text-2xl">
      @if(auth()->check() && auth()->user()->isAdmin())   
      <top-admin></top-admin>
      @else
      <top-links></top-links>
      @endif
    </div>
</nav>

    <div class="grid grid-cols-12 gap-8 col-span-12 mx-auto max-w-7xl px-8">
        <form class="col-span-12" action="{{route('user.edit')}}" method='post'>
            @method('put')
            @csrf
            <div class="md:flex md:items-center mb-6">
              <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                  ФИО
                </label>
              </div>
              <div class="md:w-2/3">
                <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" name='name' type="text"
                    value='{{auth()->user()->name}}'/>
              </div>
            </div>
            <div class="md:flex md:items-center mb-6">
              <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-email">
                  Почта
                </label>
              </div>
              <div class="md:w-2/3">
                <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-email" type="email" name='email' value="{{auth()->user()->email}}">
              </div>
            </div>
<div class="md:flex md:items-center mb-5 text-purple-500">
                <div class="md:w-1/3"></div>
                <div class="md:w-2/3">
                    <a class="col-span-12 text-xl" href='{{route("password.request")}}'>Сменить пароль</a>
                </div>
              </div>
            <div class="md:flex md:items-center">
              <div class="md:w-1/3"></div>
              <div class="md:w-2/3">
                <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                 Редактировать
                </button>
              </div>
            </div>
          </form>

         
    </div>

@endsection