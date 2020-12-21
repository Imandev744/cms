<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        $user=\auth()->user();

        $all=User::all();

        return view('admin.adminpanel')->withUser($user)->withAll($all);
    }

    public function show(User $user)
    {

        $count=$user->posts()->count();

        $user['count']=$count;

        return view('admin.showuser')->withUser($user);
    }
}
