<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function auth()
    {
        return view('auth.auth');
    }

    public function checkNumber(Request $request)
    {

    }

}
