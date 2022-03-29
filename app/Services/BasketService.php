<?php

namespace App\Services;

use App\Models\Basket;

class BasketService
{
    public function browse(){
        return Basket::all();

    }
    public function read($id){
        return Basket::findOrFail($id);
    }
    public function edit($id, $data){
        $item = Basket::findOrFail($id);
        $item->update($data);
        return $item;
    }
    public function add($data){
        $item = Basket::create($data);
        return $item;
    }   
    public function delete($id){
        $item = Basket::findOrFail($id);
        $item->delete;
    }
}