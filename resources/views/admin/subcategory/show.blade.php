@extends('adminlte::page')

@section('title', 'Подкатегории')
@section('content')
<div class="d-flex flex-column justify-content-center">
    <h1 class="text-center">{{$subcategory->title}}</h1>
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
                <td>{{ $subcategory->id }}</td>
            </tr>
            {{-- <tr>
                <td>Код</td>
                <td>{{ $subcategory->code }}</td>
            </tr> --}}
            <tr>
                <td>Название</td>
                <td>{{ $subcategory->title }}</td>
            </tr>
            <tr>
                <td>Описание</td>
                <td>{{ $subcategory->description }}</td>
            </tr>
            <tr>
                <td>Картинка</td>
                <td><img src="{{$subcategory->image}}" height="240px"></td>
            </tr>

        </tbody>
    </table>
</div>
@endsection
