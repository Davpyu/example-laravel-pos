<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\JsonResponse;

class LoginController extends AuthController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(LoginRequest $request) : JsonResponse
    {
        $data = $this->contract->login($request);

        return response()->json(['message' => 'success', 'data' => $data]);
    }
}
