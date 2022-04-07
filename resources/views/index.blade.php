@extends('layouts.app')
@inject('products', 'App\Services\ProductService')
@section('content')
<div class="flex flex-col flex-wrap lg:flex-row gap-10 justify-center">
    @foreach ($products->random(8) as $p)
    <product-card product="{{$p}}"></product-card>
    @endforeach
</div>
@endsection
