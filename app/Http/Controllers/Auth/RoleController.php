<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function rolecheck()
    {
        $user=\auth()->user();


        switch($user->role){

            case 'admin':
                return redirect()->route('admin.index');
            case 'client':
                return redirect()->route('user.index');
        }
    }
}
