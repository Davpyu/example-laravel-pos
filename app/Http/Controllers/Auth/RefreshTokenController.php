<?php

namespace App\Http\Controllers\Auth;

use Knuckles\Scribe\Attributes\Header;

class RefreshTokenController extends AuthController
{
    /**
     * Handle the incoming request.
     */
    #[Header("Authentication", "Bearer xxx")]
    public function __invoke()
    {
        $data = $this->contract->refresh();

        return response()->json(['message' => 'success', 'data' => $data]);
    }
}
