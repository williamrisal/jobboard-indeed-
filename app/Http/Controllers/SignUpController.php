<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class SignUpController extends Controller
{
    //
    public function index(){
        return view('signUp');
    }


    public function traitementform()
    {
        $attributes = request()->validate([
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'email_address' => ['required', 'email'],
            'email_address_confirmation' => ['required', 'same:email_address'],
            'password' => ['required', 'min:8'],
            'password_confirmation' => ['required', 'min:8', 'same:password'],
        ]);
// ddd($attributes);
        User::create([
            "first_name" => $attributes["first_name"],
            "last_name" => $attributes["last_name"],
            "email" => $attributes["email_address"],
            "password" => bcrypt($attributes["password"]),
            "is_admin" => false,
        ]);
        return view('login');
    }
}
