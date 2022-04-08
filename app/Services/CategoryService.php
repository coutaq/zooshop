<?php

namespace App\Services;

use App\Models\Category;

class CategoryService
{
    //возваращает все категории
    public function browse()
    {
        return Category::all();
    }
    //возвращает одну категорию по айди
    public function read($id)
    {
        return Category::findOrFail($id);
    }
    // редактирует категорию по айди
    public function edit($id, $data)
    {
        $item = Category::findOrFail($id);
        $item->update($data);
        return $item;
    }
    //добавляет категорию в бд
    public function add($data)
    {
        $item = Category::create($data);
        return $item;
    }
    //удаляет категорию по айди
    public function delete($id)
    {
        $item = Category::findOrFail($id);
        $item->delete;
    }
}