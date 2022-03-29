<?php

namespace App\Services;

use App\Models\User;

class UserService
{
    public function browse(){
        return User::all();

    }
    public function read($id){
        return User::findOrFail($id);
    }
    public function edit($id, $data){
        $item = User::findOrFail($id);
        $item->update($data);
        return $item;
    }
    public function add($data){
        $item = User::create($data);
        return $item;
    }
    public function delete($id){
        $item = User::findOrFail($id);
        $item->delete;
    }
}