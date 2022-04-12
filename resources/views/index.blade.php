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
{{-- <div class="flex flex-col flex-wrap lg:flex-row gap-10 justify-center"> --}}
    <div class="grid grid-cols-12 gap-8 col-span-12 mx-auto max-w-7xl px-8">
        <h1 class="col-span-12 text-4xl font-normal text-slate-900 mb-2">Самые популярные товары</h1>
        @foreach ($products->random(4) as $p)
        <form method="POST" action='{{route("basket.add", ["product"=> $p, "user"=> auth()->user()])}}' class="hidden" id='{{"add_to_basket_".$p->id}}'>@csrf</form>
        <product-card product="{{$p}}" user="{{auth()->check()}}"></product-card>
        @endforeach
    </div>
    {{--
</div> --}}
@endsection