@extends('layouts.app')
@inject('basket', 'App\Services\BasketService')
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
    <div class="grid grid-cols-12 gap-3 col-span-12 mx-auto max-w-7xl px-8"> 
        
       <div class="col-span-12 grid grid-cols-12 gap-3 p-4">
        <span class="col-span-12 text-2xl">Ваша корзина</span>
           {{-- <div class='col-span-12 border-b border-slate-400 gap-8 grid grid-cols'> --}}
            @foreach (auth()->user()->basket()->first()->products as $p)
                {{-- @foreach ($b->products as $p) --}}
                <div class="col-span-3 flex flex-col">
                    <product-card product='{{$p}}' user=0></product-card>
                    <button class='shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded mt-2'>Удалить</button>
                </div>
              
                {{-- @endforeach    --}}
            @endforeach
            {{-- {{auth()->user()->basket()->with('products')->get()}} --}}
        {{-- </div> --}}
       </div>
    </div>
@endsection