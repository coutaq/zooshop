@extends('layouts.app')
@inject('products', 'App\Services\ProductService')
@section('content')
<div>
    {{-- @foreach ( as $p) --}}
    <product-card product="{{$products->read(1)}}"></product-card>
    {{-- @endforeach --}}
</div>
@endsection
