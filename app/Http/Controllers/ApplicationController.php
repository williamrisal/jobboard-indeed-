<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use App\Models\Application;
use App\Models\People;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    public function offers(Application $application)
    {
//        $applications = $application->user()->get();
        $applications = Application::where('user_id', auth()->user()->id)->get();
//        $advertisements = Advertisement::where('id', auth()->user()->applications())->first();

        return view('profile', [
            'applications' => $applications,
//            'advertisements' => $advertisements,
        ]);
    }

//    public function hasApplied()
//    {
//        Application::where('');
//    }

//    public function show(User $user)
//    {
//        return view("profile", [
//            "applications" => $user->applications()->get(),
//        ]);
//    }


    public function store()
    {
        $attributes = request()->validate([
            "offer_id" => "required|integer",
            "first_name" => "required|string",
            "last_name" => "required|string",
            "gender" => "required|string",
            "phone_number" => "numeric",
            "email_address" => "required|email",
            "resume_file" => "file|mimes:pdf|max:2048",
            "cover_letter" => "max:2048",
            "city" => "required|string",
            "website" => "string",
            "postal_code" => "integer",
            "birth_date" => "date",
        ]);

        if (request("resume_file")) {
            $attributes["resume_file"] = request("resume_file")->store('public');
        }

        if (!Auth::check()) {
            $user = User::create([
                "first_name" => $attributes["first_name"],
                "last_name" => $attributes["last_name"],
                "phone" => $attributes["phone_number"],
                "email" => $attributes["email_address"],
                "postal_code" => $attributes["postal_code"],
                "city" => $attributes["city"],
                "birth_date" => $attributes["birth_date"],
                "cv" => $attributes["resume_file"],
                "website" => $attributes["website"],
//            "picture" => $attributes["picture"],
                "gender" => $attributes["gender"],
            ]);
        }

        if (Auth::check()) {
            Application::create([
                "advertisement_id" => $attributes["offer_id"],
                "user_id" => auth()->id(),
                "motivation_people" => $attributes["cover_letter"],
            ]);
        } else {
            Application::create([
                "advertisement_id" => $attributes["offer_id"],
                "user_id" => $user["id"],
                "motivation_people" => $attributes["cover_letter"],
            ]);
        }

        return redirect(route("home"));
    }
    public function show()
    {
        return view("create_applications");
    }
}
