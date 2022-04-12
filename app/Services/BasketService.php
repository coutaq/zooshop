<?php

namespace App\Services;

use App\Models\Basket;
use App\Models\User;

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
        $user = User::findOrFail($data['user_id']);
        $basket = Basket::where('user_id', $user->id)->count();
        if($basket == 0){
            $basket = new Basket(['user_id' => $user->id]);
            $basket->save();
        }else{
            $basket = Basket::where('user_id', $user->id)->first();
        }
        $basket->products()->attach($data['product_id']);
        return $basket;
    }   
    public function delete($id){
        $item = Basket::findOrFail($id);
        $item->delete;
    }
}