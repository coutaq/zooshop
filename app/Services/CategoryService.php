<?php

namespace App\Services;

use App\Models\Category;

class CategoryService
{
    public function browse(){
        return Category::all();

    }
    public function read($id){
        return Category::findOrFail($id);
    }
    public function edit($id, $data){
        $item = Category::findOrFail($id);
        $item->update($data);
        return $item;
    }
    public function add($data){
        $item = Category::create($data);
        return $item;
    }
    public function delete($id){
        $item = Category::findOrFail($id);
        $item->delete;
    }
}