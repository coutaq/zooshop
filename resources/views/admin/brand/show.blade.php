@extends('adminlte::page')

@section('title', 'Бренд')
@section('content')
<div class="d-flex flex-column justify-content-center">
    <h1 class="text-center">{{$brand->title}}</h1>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th>
                    Поле
                </th>
                <th>
                    Значение
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>ID</td>
                <td>{{ $brand->id }}</td>
            </tr>

            <tr>
                <td>Название</td>
                <td>{{ $brand->title }}</td>
            </tr>


        </tbody>
    </table>
</div>
@endsection
