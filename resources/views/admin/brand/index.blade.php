@extends('adminlte::page')

@section('title', 'Бренды')

@section('content_header')
<h1>Бренды</h1>
@stop

@section('content')
@php
$heads = [
'№',
'Наименование',

['label' => 'Действия', 'no-export' => true, 'width' => 5],

];


$config = [
'language' => ['url'=>'//cdn.datatables.net/plug-ins/1.11.4/i18n/ru.json']
];
@endphp

<x-adminlte-datatable id="table1" :heads="$heads" with-buttons :config="$config">
    @foreach($brands as $brand)
    <tr>
        <td>
            {{$brand->id}}
        </td>
        <td>
            {{$brand->title}}
        </td>

        <td>
            <a class="btn btn-success mx-auto" type="button" href="{{ route('brand.create') }}">➕</a>
            <a class='btn btn-warning' href='{{route("brand.edit", ["brand"=>$brand])}}'>✏️
            </a>

            <form action="{{route('brand.destroy', ['brand'=>$brand])}}" method="POST">
                @csrf
                @method("delete")
                <button type='submit' class='btn btn-danger'>🗑️</button>
            </form>
        </td>

    </tr>
    @endforeach
</x-adminlte-datatable>


@stop
@section('plugins.Datatables', true)
@section('plugins.DatatablesPlugin', true)
