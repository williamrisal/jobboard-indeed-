<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use App\Models\Application;
use App\Models\Company;
use App\Models\People;
use App\Models\User;
use Request;

class AdvertisementController extends Controller
{
    public function index()
    {
        return view("index", [
            'advertisement' => Advertisement::where('id', '!=', null)->orderBy('created_at', 'desc')->paginate(10),
        ]);
    }

    public function show(Advertisement $advertisement, User $user, Company $company, Application $application)
    {
//        $test = Application::where(['advertisement_id', $application->advertisement_id], ['user_id', auth()->user()->id])->exists();
        $exists = Application::where("user_id", '=', auth()->user()->id)->where("advertisement_id", '=', $advertisement->id)->exists();
//        dd($advertisement->id);
        return view("show", compact("advertisement", "user", "company", "exists", "application"));
    }

    public function create()
    {
        return view("create");
    }

    public function store()
    {
        $attributes = request()->validate([
            "title" => "required|max:255|string",
            "description" => 'required|min:3|max:1000',
            "contract" => "required|string",
            "wage" => "required|integer",
            "city" => "required|string",
            "working_time" => "integer",
        ]);

        Advertisement::create([
            "title" => $attributes["title"],
            "description" => $attributes["description"],
            "contract_type" => $attributes["contract"],
            "wage" => $attributes["wage"],
            "city" => $attributes["city"],
            "working_time" => $attributes["working_time"],
            "company_id" => 1,
        ]);

        return redirect(route("home"));
    }
}
