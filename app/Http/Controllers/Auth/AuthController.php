<?php

namespace App\Http\Controllers\Auth;

use App\Contracts\Services\AuthContract;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function __construct(
        protected AuthContract $contract,
    )
    {}
}
