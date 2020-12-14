<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\PhoneNumberRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showPhoneForm()
    {
        return view('auth.phoneform');
    }

    public function checkNumber(PhoneNumberRequest $request)
    {
        session(['mobile'=>$request->mobile]);

        if(User::select('mobile')->where('mobile',$request->mobile)->exists()){
            return view('auth.passwordform');
        }
        else{
            return redirect()->route('verify.code');
        }

    }

}
