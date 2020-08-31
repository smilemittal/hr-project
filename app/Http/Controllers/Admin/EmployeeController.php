<?php

namespace App\Http\Controllers\Admin;

use App\City;
use App\Country;
use App\EmployeeRegistration;
use App\Gender;
use App\Http\Controllers\Controller;
use App\MartialStatus;
use App\State;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //Start State
    public function indexEmployee() {
        $employees = EmployeeRegistration::get();
        return view('admin.employee.index' , compact('employees'));
    }

    public function createViewEmployee() {
        $genders = Gender::whereStatus('active')->get();
        $martialStatus = MartialStatus::whereStatus('active')->get();
        $countries = Country::whereStatus('active')->get();
        $cities = City::whereStatus('active')->get();
        $states = State::whereStatus('active')->get();
        return view('admin.employee.create' , compact('genders', 'martialStatus', 'countries', 'cities', 'states'));
    }

    public function postEmployee(Request $request) {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'title' => 'required',
            'employee-id' => 'required',
            'user-name' => 'required | unique:employee_registrations,user_name',
            'email' => 'required | email | unique:employee_registrations,email',
            'company' => 'required',
            'location' => 'required',
            'department' => 'required',
            'designation' => 'required',
            'date-of-joining' => 'required',
            'date-of-leaving' => 'required',
            'role' => 'required',
            'gender' => 'required',
            'martial-status' => 'required',
            'contact-number' => 'required',
            'status' => 'required',
            'office-shift' => 'required',
            'dob' => 'required',
            'country' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip-code' => 'required',
            'address' => 'required',
            'profile-image' => 'required',
        ]);
        if($request->hasFile('profile-image')) {
            $profile_picture = $request->file('profile-image');
            $imageName = time() . '.' . $profile_picture->getClientOriginalExtension();
            $profile_picture->storeAs('emp-profile-pictures', $imageName);

            EmployeeRegistration::create([
                'first_name' => $request['firstname'],
                'last_name' => $request['lastname'],
                'title' => $request['title'],
                'employee_id' => $request['employee-id'],
                'user_name' => $request['user-name'],
                'email' => $request['email'],
                'company' => $request['company'],
                'location' => $request['location'],
                'department' => $request['department'],
                'designation' => $request['designation'],
                'date_of_joining' => $request['date-of-joining'],
                'date_of_leaving' => $request['date-of-leaving'],
                'role' => $request['role'],
                'gender' => $request['gender'],
                'martial_status' => $request['martial-status'],
                'contact_number' => $request['contact-number'],
                'status' => $request['status'],
                'office_shift' => $request['office-shift'],
                'date_of_birth' => $request['dob'],
                'country' => $request['country'],
                'state' => $request['city'],
                'city' => $request['state'],
                'zip_code' => $request['zip-code'],
                'address' => $request['address'],
                'profile_picture' => $imageName,
            ]);
            return redirect()->back()->with('success' , 'Employee registered successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'Profile picture not found.');
        }


    }

    public function updateEmployee($id) {
        $record = EmployeeRegistration::find(decrypt($id));
        if($record) {
            $genders = Gender::whereStatus('active')->get();
            $martialStatus = MartialStatus::whereStatus('active')->get();
            $countries = Country::whereStatus('active')->get();
            $cities = City::whereStatus('active')->get();
            $states = State::whereStatus('active')->get();
            return view('admin.employee.update' , compact('record','genders', 'martialStatus', 'countries', 'cities', 'states'));
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }

    public function updatePostEmployee(Request $request , $id) {
        $record = EmployeeRegistration::find(decrypt($id));
        if($record) {
            $request->validate([
                'firstname' => 'required',
                'lastname' => 'required',
                'title' => 'required',
                'employee-id' => 'required',
                'user-name' => 'required | unique:employee_registrations,user_name',
                'email' => 'required | email | unique:employee_registrations,email',
                'company' => 'required',
                'location' => 'required',
                'department' => 'required',
                'designation' => 'required',
                'date-of-joining' => 'required',
                'date-of-leaving' => 'required',
                'role' => 'required',
                'gender' => 'required',
                'martial-status' => 'required',
                'contact-number' => 'required',
                'status' => 'required',
                'office-shift' => 'required',
                'dob' => 'required',
                'country' => 'required',
                'city' => 'required',
                'state' => 'required',
                'zip-code' => 'required',
                'address' => 'required',
            ]);
            if($request->hasFile('profile-image')) {
                $profile_picture = $request->file('profile-image');
                $imageName = time() . '.' . $profile_picture->getClientOriginalExtension();
                $profile_picture->storeAs('emp-profile-pictures', $imageName);
                EmployeeRegistration::findOrFail($record->id)->update([
                    'first_name' => $request['firstname'],
                    'last_name' => $request['lastname'],
                    'title' => $request['title'],
                    'employee_id' => $request['employee-id'],
                    'user_name' => $request['user-name'],
                    'email' => $request['email'],
                    'company' => $request['company'],
                    'location' => $request['location'],
                    'department' => $request['department'],
                    'designation' => $request['designation'],
                    'date_of_joining' => $request['date-of-joining'],
                    'date_of_leaving' => $request['date-of-leaving'],
                    'role' => $request['role'],
                    'gender' => $request['gender'],
                    'martial_status' => $request['martial-status'],
                    'contact_number' => $request['contact-number'],
                    'status' => $request['status'],
                    'office_shift' => $request['office-shift'],
                    'date_of_birth' => $request['dob'],
                    'country' => $request['country'],
                    'state' => $request['city'],
                    'city' => $request['state'],
                    'zip_code' => $request['zip-code'],
                    'address' => $request['address'],
                    'profile_picture' => $imageName,
                ]);
                return redirect()->back()->with('success' , 'Employee updated successfully.');
            }
            else {
                EmployeeRegistration::findOrFail($record->id)->update([
                    'first_name' => $request['firstname'],
                    'last_name' => $request['lastname'],
                    'title' => $request['title'],
                    'employee_id' => $request['employee-id'],
                    'user_name' => $request['user-name'],
                    'email' => $request['email'],
                    'company' => $request['company'],
                    'location' => $request['location'],
                    'department' => $request['department'],
                    'designation' => $request['designation'],
                    'date_of_joining' => $request['date-of-joining'],
                    'date_of_leaving' => $request['date-of-leaving'],
                    'role' => $request['role'],
                    'gender' => $request['gender'],
                    'martial_status' => $request['martial-status'],
                    'contact_number' => $request['contact-number'],
                    'status' => $request['status'],
                    'office_shift' => $request['office-shift'],
                    'date_of_birth' => $request['dob'],
                    'country' => $request['country'],
                    'state' => $request['city'],
                    'city' => $request['state'],
                    'zip_code' => $request['zip-code'],
                    'address' => $request['address'],
                ]);
                return redirect()->back()->with('success' , 'Employee updated successfully.');
            }
        }
        else {
            return redirect()->back()->with('success' , 'wrong access.');
        }

    }

    public function viewEmployeeDetail($id) {
        $record = EmployeeRegistration::find(decrypt($id));
        if($record) {
            return view('admin.employee.view',compact('record'));
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }

    public function deleteEmployee($id) {
        $record = State::find(decrypt($id));
        if($record) {
            $record->delete();
            return redirect()->back()->with('success' , 'Employee delete successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }
    //End State
}
