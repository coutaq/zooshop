<?php

namespace App\Services;

use App\Models\Subcategory;

class SubcategoryService
{
    public function browse(){
        return Subcategory::all();

    }
    public function read($id){
        return Subcategory::findOrFail($id);
    }
    public function edit($id, $data){
        $item = Subcategory::findOrFail($id);
        $item->update($data);
        return $item;
    }
    public function add($data){
        $item = Subcategory::create($data);
        return $item;
    }
    public function delete($id){
        $item = Subcategory::findOrFail($id);
        $item->delete;
    }
}