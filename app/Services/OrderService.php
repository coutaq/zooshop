<?php

namespace App\Services;

use App\Models\Order;

class OrderService
{
    public function browse(){
        return Order::all();

    }
    public function read($id){
        return Order::findOrFail($id);
    }
    public function edit($id, $data){
        $item = Order::findOrFail($id);
        $item->update($data);
        return $item;
    }
    public function add($data){
        $item = Order::create($data);
        return $item;
    }
    public function delete($id){
        $item = Order::findOrFail($id);
        $item->delete;
    }

    public function allForUser($user, $n){
        $orders = Order::where('user_id', $user->id)->with('product')->paginate($n);
        return $orders;
    }
}