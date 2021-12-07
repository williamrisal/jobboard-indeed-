<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use App\Models\Application;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /*
    public function show() {
        $applications = Application::where('people_id', '=', auth()->id())->get();
        //dd($applications);
        $advertisement = Advertisement::where('id', "=", $applications->attributes->advertisement_id)->get();

        return view('profile', [
            "applications" => $applications,
            //"advertisement" => $advertisements,
        ]);
    }
    */
    /*public function index(){
        return view('profile');
    }
    */

}
