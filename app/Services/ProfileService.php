<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ProfileRequest;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ProfileService
{
    public function update(ProfileRequest $request,User $user,$id) : User
    {
        DB::beginTransaction();
        try{
            $user = $request->validated();
            $user = User::find($id);
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->alamat = $request->input('alamat');
            $user->no_hp = $request->input('no_hp');

            $user->update();
            DB::commit();

            return $user;
        } catch (Exception $e){
            DB::rollBack();
            Log::emergency($e->getMessage());
        }
    }
}
