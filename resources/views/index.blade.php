@extends('layouts.app')
@inject('products', 'App\Services\ProductService')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="text-3xl font-bold underline">
                Hello world!
              </h1>
            <example-component></example-component>
            {{$products->browse();}}
        </div>
    </div>
</div>
@endsection
