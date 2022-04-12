@extends('layouts.app')
@inject('orders', 'App\Services\OrderService')
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
        @foreach($orders->allForUser(auth()->user(), 5) as $o)
       <div class="col-span-12 grid grid-cols-12 gap-3 p-4 border rounded border-slate-400">
           <div class='col-span-12 border-b border-slate-400'>
            <span class='mr-4 ml-2'>Заказ №{{$o->id}}</span>
           <span>Количество: {{$o->amount}}</span>
           </div>
           <div class='col-span-12'>
            <h2 class='text-bold text-2xl mb-2 ml-2'>Товар</h2>
            <div class="flex">
                <img class="h-96 aspect-square img m-2" src='{{$o->product->image}}'>
                <div class="flex flex-col m-2 gap-3">
                    <span class="text-sm">Товар №:{{$o->product->id}}</span>
                    <div>
                        <span class="text-bold font-xl w-full">{{$o->product->title}}</span>
                        <span class=" font-md">{{$o->product->description}}</span>
                    </div>
                    <span class=" font-md">{{$o->product->price}} руб.</span>
                </div>
            </div>
        </div>
       </div>
        @endforeach
    </div>
@endsection