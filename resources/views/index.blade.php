@extends('layouts.app')
@inject('products', 'App\Services\ProductService')
@section('content')
<nav class="col-span-12 p-8 h-32 bg-slate-400"> 
</nav>

{{-- <div class="flex flex-col flex-wrap lg:flex-row gap-10 justify-center"> --}}
<div class=" grid grid-cols-12 gap-8 col-span-12 mx-auto max-w-7xl p-8">
        <h1 class="col-span-12 text-4xl font-normal text-slate-900 my-3">Самые популярные товары</h1>
        @foreach ($products->random(8) as $p)
        <product-card product="{{$p}}"></product-card>
        @endforeach
</div>
{{-- </div> --}}
@endsection
