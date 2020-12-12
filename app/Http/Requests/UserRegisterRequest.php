<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'name'=>['bail','string','required'],
            'email'=>['bail','string','required','email','unique:App\Models\User,email'],
            'password'=>['bail','required','string','confirmed','min:4']
        ];
    }
}
