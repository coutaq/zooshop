@extends('layouts.app')
@inject('basket', 'App\Services\BasketService')
@section('content')
<nav class="col-span-12 p-8 lg:h-32 bg-slate-400">
    <div class="flex flex-col lg:flex-row gap-4 m-auto max-w-7xl h-full lg:items-center lg:px-8 text-2xl">
    Вспомогательные ссылки
    </div>
</nav>
    <div class="grid grid-cols-12 gap-3 col-span-12 mx-auto max-w-7xl px-8"> 
        
       <div class="col-span-12 grid grid-cols-12 gap-3 p-4">
        <span class="col-span-12 text-2xl">Основное содержимое страницы</span>
          
       </div>
    </div>
@endsection