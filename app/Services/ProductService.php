<?php

namespace App\Services;

use App\Models\Product;

class ProductService
{
    public function browse(){
        return Product::all();

    }
    public function read($id){
        return Product::findOrFail($id);
    }
    public function edit($id, $data){
        $item = Product::findOrFail($id);
        $item->update($data);
        return $item;
    }
    public function add($data){
        $item = Product::create($data);
        return $item;
    }   
    public function delete($id){
        $item = Product::findOrFail($id);
        $item->delete;
    }
}