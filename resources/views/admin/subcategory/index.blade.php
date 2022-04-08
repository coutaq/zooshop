@extends('adminlte::page')

@section('title', 'Подкатегории')

@section('content_header')
<h1>Подкатегории</h1>
@stop

@section('content')
@php
$heads = [
'№',
'Наименование',
"Категория",
['label' => 'Действия', 'no-export' => true, 'width' => 5],

];


$config = [
'language' => ['url'=>'//cdn.datatables.net/plug-ins/1.11.4/i18n/ru.json']
];
@endphp

<x-adminlte-datatable id="table1" :heads="$heads" with-buttons :config="$config">
    @foreach($subcategories as $subcategory)
    <tr>
        <td>
            {{$subcategory->id}}
        </td>
        <td>
            {{$subcategory->title}}
        </td>
        <td>
            {{$subcategory->category_id}}
        </td>

        <td>
            <a class="btn btn-success mx-auto" type="button" href="{{ route('subategory.create') }}">➕</a>
            <a class='btn btn-warning' href='{{route("subcategory.edit", ["subcategory"=>$subcategory])}}'>✏️
            </a>

            <form action="{{route('subcategory.destroy', ['subcategory'=>$subcategory])}}" method="POST">
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
