@extends('adminlte::page')

@section('title', 'Бренды')

@section('content_header')
<h1>Новый бренд</h1>
@stop

@section('content')
@foreach ($errors->all() as $error)
<div style="width:50%" class="alert alert-danger">{{ $error }}</div>
@endforeach
<form action="/admin/brand" method="POST" enctype="multipart/form-data">
    @csrf


    <div class="row">
        <x-adminlte-input name="title" label="Наименование" fgroup-class="col-md-6" disable-feedback />
    </div>


    <button type='submit' class="btn btn-primary">Создать</button>
</form>
@stop
