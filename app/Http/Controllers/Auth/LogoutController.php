<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\JsonResponse;
use Knuckles\Scribe\Attributes\Header;

class LogoutController extends AuthController
{
    /**
     * Handle the incoming request.
     */
    #[Header("Authentication", "Bearer xxx")]
    public function __invoke() : JsonResponse
    {
        $this->contract->logout();

        return response()->json(['message' => 'success']);
    }
}
