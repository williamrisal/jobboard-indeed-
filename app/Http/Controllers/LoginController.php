<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function formulaire()
    {
        return view('login');
    }

    public function traitement()
    {
        $resultat = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $connect = Auth()->attempt([
            'email' => $resultat["email"],
            'password' => $resultat['password'],
        ]);
        if ($connect == false)
            return Redirect::back()->withErrors(['msg' => 'Email address or password incorrect.']);
        return Redirect::route('home');
    }

    public function log_out()
    {
        auth()->logout();

        return redirect('/');
    }
}
