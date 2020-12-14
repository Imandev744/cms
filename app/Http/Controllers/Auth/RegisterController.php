<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
     }

    public function store(UserRegisterRequest $request)
    {
        $mobile=session('mobile');
        $request['mobile']=$mobile;
        $request['password']=Hash::make($request['password']);

        $user=User::create($request->all());

        Auth::login($user);
        return view('user.dashboard')->withUser($user);

     }
}
