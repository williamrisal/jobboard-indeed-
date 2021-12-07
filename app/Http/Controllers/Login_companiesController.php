<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use App\Models\Application;
use App\Models\Company;
use App\Models\User;
use Illuminate\Foundation\Auth\companies;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class Login_companiesController extends Controller
{
    public function index(){

        $advertisement = Advertisement::where("company_id", auth()->user()->id)->exists();
        $user = Application::where("advertisement_id", $advertisement)->first()->user_id;

        return view('company.home', [
            'advertisements' => Advertisement::where("company_id", auth()->user()->id)->get(),
            'company' => Company::where("id", auth()->user()->id)->get(),
            'applications' => Application::where("advertisement_id", $advertisement)->get(),
            'users' => User::where("id", $user)->get(),
        ]);
    }

    public function show()
    {
        $advertisement = Advertisement::where("company_id", auth()->user()->id)->exists();
        $user = Application::where("advertisement_id", $advertisement)->first()->user_id;
        return view("company.show", [
            'advertisements' => Advertisement::where("company_id", auth()->user()->id)->get(),
            'applications' => Application::where("advertisement_id", $advertisement)->get(),
            'users' => User::where("id", $user)->get(),
        ]);
    }

    public function login() {
        return view('company.login_companie');
    }

    public function traitement_companie()
    {
        $resultat = request()->validate([
            'email-address' => ['required', 'email'],
            'password' => ['required'],
        ]);


        $connect = Auth::guard('company')
            ->attempt([
                'email' => $resultat["email-address"],
                'password' => $resultat['password'],
            ]);

        if ($connect == false) {
            return redirect()->route('company.login')->withErrors(['error' => 'The credentials do not match our records']);
        }
            return redirect()
                ->route('company.home');

        /*
        $resultat = request()->validate([
            'email-address' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (auth()->guard("company")->attempt([
            'email' => $resultat["email-address"],
            'password' => $resultat['password'],
        ])) {
            $user = auth()->user();
            return redirect("/monitoring");
        } else {
            dd("test");
            return redirect()->back()->withError("Credentials doesn't match.");
        }
        */
    }

        public function logout(Request $request)
        {
            Auth::guard('company')->logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return redirect('/');
        }

        public function create() {
            return view("company.create_advertisements");
        }
        public function store() {
            $attributes = request()->validate([
                "title" => "required|string",
                "description" => "required|string",
                "contrat_type" => "required|string",
                "wage" => "required|integer",
                "city" => "required|string",
            ]);
            Advertisement::create([
                "title" => $attributes["title"],
                "description" => $attributes["description"],
                "contract_type" => $attributes["contrat_type"],
                "wage" => $attributes["wage"],
                "city" => $attributes["city"],
                "company_id" => auth()->user()->id,
            ]);
            return Redirect::back();
        }
}
