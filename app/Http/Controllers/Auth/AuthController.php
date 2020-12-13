<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\PhoneNumberRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function auth()
    {
        return view('auth.auth');
    }

    public function checkNumber(PhoneNumberRequest $request)
    {
        session(['mobile'=>$request->mobile]);

        if(User::select('mobile')->where('mobile',$request->mobile)->exists()){
            return view('auth.password');
        }
        else{
            return redirect()->route('auth.verify.code');
        }

    }

}
