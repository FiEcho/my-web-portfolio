<?php

namespace App\Service;

use App\Http\Requests\ProductRequest;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ProfileRequest;

class ProfileService
{
    public function update(ProfileRequest $request,User $user,$id) : User
    {
        $user = $request->validated();
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->alamat = $request->input('alamat');
        $user->no_hp = $request->input('no_hp');

        $user->update();
        return $user;
    }
}