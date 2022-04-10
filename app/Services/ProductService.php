<?php

namespace App\Services;

use App\Models\Product;

class ProductService
{
    public function browse(){
        return Product::with('subcategory.category')->get();

    }
    public function read($id){
        return Product::with('subcategory.category')->findOrFail($id);
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
    public function random($n){
        return Product::with('subcategory.category')->inRandomOrder()->limit($n)->get();
    }

    public function paginateAll($n){
        $item = Product::with('subcategory.category')->paginate($n);
    }
    public function paginateRandom($n){
        return Product::with('subcategory.category')->inRandomOrder()->paginate($n);
    }
    public function paginateCategory($id, $n){
        return Product::with('subcategory.category')->whereHas('subcategory', function ($query) use($id)  {
            return $query->where('category_id', '=', $id);
        })->paginate($n);
    }

    public function paginateBrand($id, $n){
        return Product::where('brand_id', $id)->paginate($n);
    }
}