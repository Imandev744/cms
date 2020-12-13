<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;

class PhoneController extends Controller
{
    public function setVerificationCode()
    {
        $mobile = session('mobile');

        $code = rand(1000, 9999);
        Log::info("$mobile:$code");
        Cache::put($mobile, $code, 60);
        return view('auth.verify');
    }

    public function verifyMobile(Request $request)
    {

        $mobile = session('mobile');
        $code = $request->code;

        $cachedCode = Cache::get($mobile);
        if (empty($code) || $cachedCode == null || $cachedCode != $code) {
            return redirect()
                ->route('auth.verify.code')
                ->withError('Wrong Code Please Try again with new code!');
        }

        Cache::forget($mobile);
        return redirect()->route('auth.register.user');
    }
}
