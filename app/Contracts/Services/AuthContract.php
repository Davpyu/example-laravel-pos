<?php

namespace App\Contracts\Services;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Resources\Auth\LoginResponse;

interface AuthContract
{
    public function login(LoginRequest $request) : LoginResponse;
    public function logout() : void;
    public function refresh() : LoginResponse;
}
