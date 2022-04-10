@extends('layouts.app')
@inject('categories', 'App\Services\CategoryService')
@inject('pr', 'App\Services\ProductService')
@section('content')
@php
    $cat = $categories->read($id);
    $products = $pr->paginateCategory($id, 4)
@endphp
<nav class="col-span-12 p-8 lg:h-32 bg-slate-400">
    <div class="flex flex-col lg:flex-row gap-4 m-auto max-w-7xl h-full lg:items-center lg:px-8 text-2xl">
        <top-links></top-links>
    </div>
</nav>

{{-- <div class="flex flex-col flex-wrap lg:flex-row gap-10 justify-center"> --}}
    <div class="grid grid-cols-12 gap-8 col-span-12 mx-auto max-w-7xl px-8">
        <h1 class="col-span-12 text-4xl font-normal text-slate-900 mb-2">{{$cat->title}}</h1>
        <h1 class="col-span-12 text-2xl font-normal text-slate-900 mb-2">Подкатегории</h1>
        <div class="flex w-full gap-4 col-span-12">
            @foreach ($cat->subcategories as $sub)
                <a class="flex-none text-xl" href='#'>{{$sub->title}}</a>
            @endforeach
        </div>
        <h1 class="col-span-12 text-2xl font-normal text-slate-900 mb-2">Товары</h1>
        @foreach ($products->items() as $p)
        <product-card product="{{$p}}"></product-card>
        @endforeach
        <div class="col-span-12">{{$products->links()}}</div>
    </div>
    {{--
</div> --}}
@endsection