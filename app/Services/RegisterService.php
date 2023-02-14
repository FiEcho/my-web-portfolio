<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Storage;

/**
 * Class RegisterService
 * @package App\Services
 */
class RegisterService
{
    private $user;
    private $gambarBaru = null;
    private $gambarLama = null;

    public function __construct()
    {
        $this->user = new User();
    }
    public function create(RegisterRequest $request) : User
    {
        $data = $request->validated();
        $user = $this->user->create($data);

        return $user;
    }
}