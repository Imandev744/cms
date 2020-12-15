<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\PhoneNumberRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginPassword()
    {
        return view('auth.passwordform');
    }

    public function checkInfo(LoginRequest $request)
    {

        $mobile = session('mobile');
        $pass = $request->password;

        if (Auth::attempt(['mobile' => $mobile, 'password' => $pass]))

            return redirect()->route('user.index');
        else

            return redirect()->back()->with('error','نام کاربری یا کلمه عبور صحیح نیست ! ');

   }


}
