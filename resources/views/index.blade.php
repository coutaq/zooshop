@extends('layouts.app')
@inject('products', 'App\Services\ProductService')
@section('content')
<nav class="col-span-12 p-8 lg:h-32 bg-slate-400">
    <div class="flex flex-col lg:flex-row gap-4 m-auto max-w-7xl h-full lg:items-center lg:px-8 text-2xl">
        <top-links></top-links>
    </div>
</nav>

{{-- <div class="flex flex-col flex-wrap lg:flex-row gap-10 justify-center"> --}}
    <div class="grid grid-cols-12 gap-8 col-span-12 mx-auto max-w-7xl px-8">
        <h1 class="col-span-12 text-4xl font-normal text-slate-900 mb-2">Самые популярные товары</h1>
        @foreach ($products->random(4) as $p)
        <product-card product="{{$p}}"></product-card>
        @endforeach
    </div>
    {{--
</div> --}}
@endsection