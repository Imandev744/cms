<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginPassword()
    {
        return view('auth.passwordform');
    }

    public function checkInfo(LoginRequest $request)
    {
        dd($request);
    }
}
