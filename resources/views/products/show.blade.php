@extends('layouts.app')
@inject('brands', 'App\Services\CategoryService')
@inject('pr', 'App\Services\ProductService')
@section('content')
@php
// $br = $brands->read($id);
$product = $pr->read($id);
$similar = $pr->random(4);
@endphp
<nav class="col-span-12 p-8 lg:h-32 bg-slate-400">
    <div class="flex flex-col lg:flex-row gap-4 m-auto max-w-7xl h-full lg:items-center lg:px-8 text-2xl">
     @if(auth()->check() && auth()->user()->isAdmin())   
      <top-admin></top-admin>
      @else
      <top-links></top-links>
      @endif
    </div>
</nav>
<div class="grid grid-cols-12 gap-8 col-span-12 mx-auto max-w-7xl px-8 pt-3 mt-5">
    <div class="col-span-4 hidden aspect-square rounded-lg overflow-hidden lg:block">
        <img src="{{$product->image}}" class="w-full h-full object-center object-cover">
    </div>

    <!-- Product info -->
    <div class="col-span-8">
        <div class="lg:border-gray-200">
            <h1 class="text-2xl font-extrabold tracking-tight text-gray-900 sm:text-3xl">{{$product->title}}</h1>
            <div class="py-10 lg:pt-6 lg:pb-16 lg:col-start-1 lg:col-span-2">
                <div>
                    <h3 class="sr-only">Описание</h3>

                    <div class="space-y-6">
                        <p class="text-base text-gray-900">{{$product->description}}</p>
                    </div>
                </div>

                <div class="py-3 lg:pt-8 lg:col-start-1 lg:col-span-2">
                    <h2 class="font-bold text-2xl">{{$product->price}} руб.</h2>
                </div>
                <div class="flex gap-8">
                    @auth
                        
                    <button type="submit"
                    class="mt-10 bg-indigo-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Добавить
                    в корзину</button>
                    @endauth
                    <button type="submit"
                        class="mt-10 bg-emerald-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Купить
                        сейчас</button>
                </div>
            </div>
        </div>

    </div>
    <div class='col-span-12 grid grid-cols-12 my-14 gap-8'>
        <h2 class="col-span-12 text-bold text-2xl">Похожие товары, которые могут вас заинтересовать</h2>
        @foreach ($similar as $p)
        <product-card class='col-span-3' product="{{$p}}"  user="{{auth()->check()}}"></product-card>
        @endforeach
    </div>
@endsection