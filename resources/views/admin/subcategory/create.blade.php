@inject('categories', 'App\Services\CategoryService')

@extends('adminlte::page')

@section('title', 'Подкатегории')

@section('content_header')
<h1>Новая подкатегория</h1>
@stop

@section('content')
@foreach ($errors->all() as $error)
<div style="width:50%" class="alert alert-danger">{{ $error }}</div>
@endforeach
<form action="/admin/subcategory" method="POST" enctype="multipart/form-data">
    @csrf



    <div class="row">
        <x-adminlte-input name="title" label="Наименование" fgroup-class="col-md-6" disable-feedback />
    </div>
    <div class="row">
        <x-adminlte-select name="category_id" label="Vehicle" label-class="text-lightblue" igroup-size="lg">
            <x-slot name="prependSlot">
                <div class="input-group-text bg-gradient-info">
                    <i class="fas fa-bone"></i>
                </div>
            </x-slot>
            @foreach($categories->browse() as $s)
            <option value="{{$s->id}}">{{$s->title}}</option>
            @endforeach
        </x-adminlte-select>
    </div>

    <button type='submit' class="btn btn-primary">Создать</button>
</form>
@stop
