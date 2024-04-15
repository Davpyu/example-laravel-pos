<?php

namespace App\Services;

use App\Contracts\Services\AuthContract;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Resources\Auth\LoginResponse;
use Exception;
use Illuminate\Support\Facades\Auth;

class AuthService implements AuthContract
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function login(LoginRequest $request) : LoginResponse
    {
        $credentials = $request->only(['email', 'password']);

        if (! $token = Auth::attempt($credentials, $request->only('remember_me'))) {
            throw new Exception("Unauthorized", 401);
        }

        return new LoginResponse(['token' => $token]);
    }

    public function logout() : void
    {
        Auth::logout();
    }

    public function refresh() : LoginResponse
    {
        $token = Auth::refresh();

        return new LoginResponse(['token' => $token]);
    }
}
