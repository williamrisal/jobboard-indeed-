<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\companies;
use App\Models\User;



class signUp_companiesController extends Controller
{
    public function index(){
        return view('signUp_companie');
    }

    public function traitementform_companies()
    {
        $attributes = request()->validate([
            'Companies_name' => ['required', 'string'],
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'SIRET' => ['required', 'string'],
            'number_employees' => ['required', 'string'],
            'website' => ['required', 'string'],
//            'phone' => ['required', 'integer'],
        'phone' => ['required', 'string'],
            'postal_code' => ['required', 'string'],
            'Contact_name' => ['required', 'string'],
//            'postal_code' => ['required', 'integer'],
            'activities' => ['required', 'string'],
            'city' => ['required', 'string'],
            'password' => ['required'],
        ]);

        companies::create([
            "name" => $attributes["Companies_name"],
            "first_name" => $attributes["first_name"],
            "last_name" => $attributes["last_name"],
            "email" => $attributes["email"],
            'siret' => $attributes["SIRET"],
            'number_employees' => $attributes["number_employees"],
            'website' => $attributes["website"],
            'phone' => $attributes["phone"],
            'contact_name' => $attributes["Contact_name"],
            "activities" => $attributes["activities"],
            "city" => $attributes["city"],
            "postal_code" => $attributes["postal_code"],
            "password" => bcrypt($attributes["password"]),
        ]);
        return redirect('login');
    }
}