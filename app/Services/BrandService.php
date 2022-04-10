<?php

namespace App\Services;

use App\Models\Brand;

class BrandService
{
    //возваращает все категории
    public function browse()
    {
        return Brand::all();
    }
    //возвращает одну категорию по айди
    public function read($id)
    {
        return Brand::findOrFail($id);
    }
    // редактирует категорию по айди
    public function edit($id, $data)
    {
        $item = Brand::findOrFail($id);
        $item->update($data);
        return $item;
    }
    //добавляет категорию в бд
    public function add($data)
    {
        $item = Brand::create($data);
        return $item;
    }
    //удаляет категорию по айди
    public function delete($id)
    {
        $item = Brand::findOrFail($id);
        $item->delete;
    }
}