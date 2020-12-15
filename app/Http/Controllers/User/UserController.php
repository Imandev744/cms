<?php

namespace App\Http\Controllers\Auth\User;

use App\Http\Controllers\Auth\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
      return view('user.dashboard');
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show(User $user)
    {
        //
    }


    public function edit(User $user)
    {
        //
    }


    public function update(Request $request, User $user)
    {

    }


    public function destroy(User $user)
    {
        //
    }
}
