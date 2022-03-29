@extends('layouts.app')
@inject('products', 'App\Services\ProductService')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <example-component></example-component>
            {{$products->browse();}}
        </div>
    </div>
</div>
@endsection
