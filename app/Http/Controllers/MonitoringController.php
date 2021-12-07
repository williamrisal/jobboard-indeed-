<?php

namespace App\Http\Controllers;
use App\Models\Company;
use App\Models\Monitoring;
use App\Models\Application;
use App\Models\People;
use App\Models\User;
use App\Models\Advertisement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;

class MonitoringController extends Controller
{
    public function show(){
        return view("monitoring");
    }
    public function showApplications() {
        return view("applications", [
            "applications" => Application::where('id', '!=', null)->orderBy('created_at', 'desc')->paginate(10),
        ]);
    }
    public function showCompanies() {
        return view("companies" , [
            'companies' => Company::where('id', '!=', null)->orderBy('created_at', 'desc')->paginate(10),
        ]);
    }
    public function showCompany($id) {
    
    }
    public function showUser() {
        return view("user" , [
            'users' => User::where('id', '!=', null)->paginate(10),
        ]);
    }
    public function showAdvertisements() {
        return view("advertisements", [
            "advertisements" => Advertisement::where('id', '!=', null)->paginate(10),
        ]);
    
    }
    public function createadvertissement()
    {
        return view('create_advertisement');
    }
    
    public function createapplications() {
        return view("create_applications");

    }
    public function createCompanies() {
        return view("create_companies");
    }

    public function editCompanies() {
        return view("Edit_company");
    }
    public function editUser() {
        return view("edit_users");
    }

    public function deleteCompanies($id) {
        $company = Company::findOrFail($id);
        $company->delete();

        return redirect()->route("monitoring.companies");
    }
    public function deleteApplication($id) {
        $application = Application::findOrFail($id);
        $application->delete();

        return redirect()->route("monitoring.application");
    }
    public function deleteUsers($id) {
        $user = User::findOrFail($id);
        $user->delete();

        return Redirect::back();
    }
    public function deleteAdvertisement($id) {
        $advertisements = Advertisement::findOrFail($id);
        $advertisements->delete();

        return redirect()->route("monitoring.advertisements");
    }


    public function createapplications_form() {
        $attributes = request()->validate([
            "Applications_id" => "required|integer",
            "people_id" => "required|integer",
            "motivation_people" => "required|string",
        ]);
        Application::create([
            "advertisement_id" => $attributes["Applications_id"],
            "user_id" => $attributes["people_id"],
            "motivation_people" => $attributes["motivation_people"],
        ]);
        return Redirect::back();
    }
    public function createadvertissement_form() {
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
            "company_id" => "1",
        ]);
        return Redirect::back();
    }
    public function send_edit_form_companies(companies $companies)
    {
        $attributes = request()->validate([
            'Companies_name' => ['required', 'string'],
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'SIRET' => ['required', 'string'],
            'number_employees' => ['required', 'string'],
            'website' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'postal_code' => ['required', 'string'],
            'Contact_name' => ['required', 'string'],
            'activities' => ['required', 'string'],
            'city' => ['required', 'string'],
            'password' => ['required'],
        ]);
        $companies->update($attributes);
        return Redirect::back();
    }

    public function send_edit_form_user(User $User)
    {
        $attributes = request()->validate([
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'email_address' => ['required', 'email'],
            'email_address_confirmation' => ['required', 'same:email_address'],
            'password' => ['required', 'min:8'],
            'password_confirmation' => ['required', 'min:8', 'same:password'],
        ]);
        $user->update($attributes);

        return redirect($user->path());
    }
}