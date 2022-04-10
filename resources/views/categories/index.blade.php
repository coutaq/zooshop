@extends('layouts.app')
@inject('categories', 'App\Services\CategoryService')
@section('content')
<nav class="col-span-12 p-8 lg:h-32 bg-slate-400">
    <div class="flex flex-col lg:flex-row gap-4 m-auto max-w-7xl h-full lg:items-center lg:px-8 text-2xl">
        <top-links></top-links>
    </div>
</nav>

{{-- <div class="flex flex-col flex-wrap lg:flex-row gap-10 justify-center"> --}}
    <div class="grid grid-cols-12 gap-8 col-span-12 mx-auto max-w-7xl px-8">
        <h1 class="col-span-12 text-4xl font-normal text-slate-900 mb-2">Категории</h1>
        @foreach ($categories->browse() as $c)
        <category-card category="{{$c}}"></category-card>
        @endforeach
    </div>
    {{--
</div> --}}
@endsection