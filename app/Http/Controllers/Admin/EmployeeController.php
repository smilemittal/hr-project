<?php

namespace App\Http\Controllers\Admin;

use App\City;
use App\Country;
use App\EmployeeCompanyInfo;
use App\EmployeeQualification;
use App\EmployeeRegistration;
use App\EmployeeWorkInfo;
use App\Gender;
use App\HrSetting;
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

        if($request->hasFile('profile_image')) {
            $profile_picture = $request->file('profile_image');
            $imageName = time() . '.' . $profile_picture->getClientOriginalExtension();
            $profile_picture->storeAs('emp-profile-pictures', $imageName);

            $employee=EmployeeRegistration::create([
                "First_Name" =>$request['First_Name'] ,
              "Middle_Name" =>$request['Middle_Name'] ,
              "Last_Name" =>$request['Last_Name'] ,
              "Title" =>$request['Title'] ,
              "Email" =>$request['Email'] ,
              "Marital_Status" =>$request['Marital_Status'] ,
              "Contact_Mobile_Number" =>$request['Contact_Mobile_Number'] ,
              "Contact_phone_Number" =>$request['Contact_phone_Number'] ,
              "Date_of_birth" =>$request['Date_of_birth'] ,
              "House_Number" =>$request['House_Number'] ,
              "House_Name" =>$request['House_Name'] ,
              "Street" =>$request['Street'] ,
              "City" =>$request['City'] ,
              "CountryState" =>$request['CountryState'] ,
              "Post_Code" =>$request['Post_Code'] ,
              "Country" =>$request['Country'] ,
              "Work_Permit_No" =>$request['Work_Permit_No'] ,
              "Nationality" =>$request['Nationality'] ,
              "Identification_No" =>$request['Identification_No'] ,
              "Visa_No" =>$request['Visa_No'] ,
              "Visa_Expiry_Date" =>$request['Visa_Expiry_Date'] ,
              "Blood_Group" =>$request['Blood_Group'] ,
              "Bank_Account_Name" =>$request['Bank_Account_Name'] ,
              "Bank_Short_Code" =>$request['Bank_Short_Code'] ,
              "Bank_Account_Number" =>$request['Bank_Account_Number'] ,
              "Bank_IFSC_Code" =>$request['Bank_IFSC_Code'] ,
              "Bank_IBAN_Code" =>$request['Bank_IBAN_Code'] ,
              "profile_image" =>$imageName,
            ]);
            EmployeeWorkInfo::create([
                  "emp_id"  =>$employee->id,
                  "Company"  =>$request['Company'],
                  "Branch"  =>$request['Branch'],
                  "Department"  =>$request['Department'],
                  "Designation"  =>$request['Designation'],
                  "Date_of_joining"  =>$request['Date_of_joining'],
                  "Date_of_leaving"  =>$request['Date_of_leaving'],
                  "Employee_Type"  =>$request['Employee_Type'],
                  "Contract_Type"  =>$request['Contract_Type'],
                  "Employee_id"  =>$request['Employee_id'],
                  "Manager"  =>$request['Manager'],
                  "Job_position"  =>$request['Job_position'],
                  "Work_Mobile_no"  =>$request['Work_Mobile_no'],
                  "Work_phone_no"  =>$request['Work_phone_no'],
                  "Work_Email"  =>$request['Work_Email'],
            ]);

            HrSetting::create([
                "emp_id"  =>$employee->id,
                "Office_Shift"  =>$request['Office_Shift'],
                  "User_Name"  =>$request['User_Name'],
                  "Role"  =>$request['Role'],
                  "payrole"  =>$request['payrole'],
                  "Timesheet_Cost"  =>$request['Timesheet_Cost'],
                  "Annual_Gross_Salary"  =>$request['Annual_Gross_Salary'],
                  "Attendance"  =>$request['Attendance'],
                  "Badge_ID"  =>$request['Badge_ID'],
                  "Manual_Attendance"  =>$request['Manual_Attendance'],
                  "status"  =>'active',
            ]);

            for ($i=0; $i<count($request['Company_Name']);$i++)
            {
                EmployeeCompanyInfo::create([
                    "emp_id"  =>$employee->id,
                    "Company_Name"  =>$request['Company_Name'][$i],
                    "Job_Profile"  =>$request['Job_Profile'][$i],
                    "Joining_Date"  =>$request['Joining_Date'][$i],
                    "Leaving_Date"  =>$request['Leaving_Date'][$i],
                    "Remarks"  =>$request['Remarks'][$i],
                    "status"  =>'active',
                ]);
            }

            for ($i=0; $i<count($request['Education_Level']);$i++)
            {
                EmployeeQualification::create([
                      "emp_id"  =>$employee->id,
                      "School_University"  =>$request['School_University'][$i],
                      "Education_Level"  =>$request['Education_Level'][$i],
                      "Start_Date"  =>$request['Start_Date'][$i],
                      "End_Date"  =>$request['End_Date'][$i],
                      "Professional_Course"  =>$request['Professional_Course'][$i],
                      "courseRemarks"  =>$request['courseRemarks'][$i],
                ]);
            }


            return redirect()->back()->with('success' , 'Employee registered successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'Profile picture not found.');
        }


    }

    public function updateEmployee($id) {
//        dd($id);
        $record = EmployeeRegistration::find(decrypt($id));
        if($record) {

            $emp_work=EmployeeWorkInfo::where('emp_id',$record->id)->first();
            $hr_setting=HrSetting::where('emp_id',$record->id)->first();
            $emp_company=EmployeeCompanyInfo::where('emp_id',$record->id)->get();
            $emp_qua=EmployeeQualification::where('emp_id',$record->id)->get();


            $genders = Gender::whereStatus('active')->get();
            $martialStatus = MartialStatus::whereStatus('active')->get();
            $countries = Country::whereStatus('active')->get();
            $cities = City::whereStatus('active')->get();
            $states = State::whereStatus('active')->get();
            return view('admin.employee.update' , compact('record','genders', 'martialStatus', 'countries', 'cities', 'states','emp_company','emp_work','hr_setting','emp_qua'));
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }

    public function updatePostEmployee(Request $request , $id) {
        $record = EmployeeRegistration::find(decrypt($id));
        if($record) {

            if($request->hasFile('profile-image')) {
                $profile_picture = $request->file('profile-image');
                $imageName = time() . '.' . $profile_picture->getClientOriginalExtension();
                $profile_picture->storeAs('emp-profile-pictures', $imageName);



                 EmployeeRegistration::findOrFail($record->id)->update([
                    "First_Name" =>$request['First_Name'] ,
                    "Middle_Name" =>$request['Middle_Name'] ,
                    "Last_Name" =>$request['Last_Name'] ,
                    "Title" =>$request['Title'] ,
                    "Email" =>$request['Email'] ,
                    "Marital_Status" =>$request['Marital_Status'] ,
                    "Contact_Mobile_Number" =>$request['Contact_Mobile_Number'] ,
                    "Contact_phone_Number" =>$request['Contact_phone_Number'] ,
                    "Date_of_birth" =>$request['Date_of_birth'] ,
                    "House_Number" =>$request['House_Number'] ,
                    "House_Name" =>$request['House_Name'] ,
                    "Street" =>$request['Street'] ,
                    "City" =>$request['City'] ,
                    "CountryState" =>$request['CountryState'] ,
                    "Post_Code" =>$request['Post_Code'] ,
                    "Country" =>$request['Country'] ,
                    "Work_Permit_No" =>$request['Work_Permit_No'] ,
                    "Nationality" =>$request['Nationality'] ,
                    "Identification_No" =>$request['Identification_No'] ,
                    "Visa_No" =>$request['Visa_No'] ,
                    "Visa_Expiry_Date" =>$request['Visa_Expiry_Date'] ,
                    "Blood_Group" =>$request['Blood_Group'] ,
                    "Bank_Account_Name" =>$request['Bank_Account_Name'] ,
                    "Bank_Short_Code" =>$request['Bank_Short_Code'] ,
                    "Bank_Account_Number" =>$request['Bank_Account_Number'] ,
                    "Bank_IFSC_Code" =>$request['Bank_IFSC_Code'] ,
                    "Bank_IBAN_Code" =>$request['Bank_IBAN_Code'] ,
                    "profile_image" =>$imageName,
                ]);
                EmployeeWorkInfo::where('emp_id',$record->id)->update([
                    "Company"  =>$request['Company'],
                    "Branch"  =>$request['Branch'],
                    "Department"  =>$request['Department'],
                    "Designation"  =>$request['Designation'],
                    "Date_of_joining"  =>$request['Date_of_joining'],
                    "Date_of_leaving"  =>$request['Date_of_leaving'],
                    "Employee_Type"  =>$request['Employee_Type'],
                    "Contract_Type"  =>$request['Contract_Type'],
                    "Employee_id"  =>$request['Employee_id'],
                    "Manager"  =>$request['Manager'],
                    "Job_position"  =>$request['Job_position'],
                    "Work_Mobile_no"  =>$request['Work_Mobile_no'],
                    "Work_phone_no"  =>$request['Work_phone_no'],
                    "Work_Email"  =>$request['Work_Email'],
                ]);

                HrSetting::where('emp_id',$record->id)->update([
                    "Office_Shift"  =>$request['Office_Shift'],
                    "User_Name"  =>$request['User_Name'],
                    "Role"  =>$request['Role'],
                    "payrole"  =>$request['payrole'],
                    "Timesheet_Cost"  =>$request['Timesheet_Cost'],
                    "Annual_Gross_Salary"  =>$request['Annual_Gross_Salary'],
                    "Attendance"  =>$request['Attendance'],
                    "Badge_ID"  =>$request['Badge_ID'],
                    "Manual_Attendance"  =>$request['Manual_Attendance'],
                    "status"  =>'active',
                ]);

                for ($i=0; $i<count($request['Company_Name']);$i++)
                {
                    EmployeeCompanyInfo::where('emp_id',$record->id)->update([
                        "Company_Name"  =>$request['Company_Name'][$i],
                        "Job_Profile"  =>$request['Job_Profile'][$i],
                        "Joining_Date"  =>$request['Joining_Date'][$i],
                        "Leaving_Date"  =>$request['Leaving_Date'][$i],
                        "Remarks"  =>$request['Remarks'][$i],
                        "status"  =>'active',
                    ]);
                }

                for ($i=0; $i<count($request['Education_Level']);$i++)
                {
                    EmployeeQualification::where('emp_id',$record->id)->update([
                        "School_University"  =>$request['School_University'][$i],
                        "Education_Level"  =>$request['Education_Level'][$i],
                        "Start_Date"  =>$request['Start_Date'][$i],
                        "End_Date"  =>$request['End_Date'][$i],
                        "Professional_Course"  =>$request['Professional_Course'][$i],
                        "courseRemarks"  =>$request['courseRemarks'][$i],
                    ]);
                }

                return redirect()->back()->with('success' , 'Employee updated successfully.');
            }
            else {
                 EmployeeRegistration::findOrFail($record->id)->update([
                    "First_Name" =>$request['First_Name'] ,
                    "Middle_Name" =>$request['Middle_Name'] ,
                    "Last_Name" =>$request['Last_Name'] ,
                    "Title" =>$request['Title'] ,
                    "Email" =>$request['Email'] ,
                    "Marital_Status" =>$request['Marital_Status'] ,
                    "Contact_Mobile_Number" =>$request['Contact_Mobile_Number'] ,
                    "Contact_phone_Number" =>$request['Contact_phone_Number'] ,
                    "Date_of_birth" =>$request['Date_of_birth'] ,
                    "House_Number" =>$request['House_Number'] ,
                    "House_Name" =>$request['House_Name'] ,
                    "Street" =>$request['Street'] ,
                    "City" =>$request['City'] ,
                    "CountryState" =>$request['CountryState'] ,
                    "Post_Code" =>$request['Post_Code'] ,
                    "Country" =>$request['Country'] ,
                    "Work_Permit_No" =>$request['Work_Permit_No'] ,
                    "Nationality" =>$request['Nationality'] ,
                    "Identification_No" =>$request['Identification_No'] ,
                    "Visa_No" =>$request['Visa_No'] ,
                    "Visa_Expiry_Date" =>$request['Visa_Expiry_Date'] ,
                    "Blood_Group" =>$request['Blood_Group'] ,
                    "Bank_Account_Name" =>$request['Bank_Account_Name'] ,
                    "Bank_Short_Code" =>$request['Bank_Short_Code'] ,
                    "Bank_Account_Number" =>$request['Bank_Account_Number'] ,
                    "Bank_IFSC_Code" =>$request['Bank_IFSC_Code'] ,
                    "Bank_IBAN_Code" =>$request['Bank_IBAN_Code'] ,
                ]);
                EmployeeWorkInfo::where('emp_id',$record->id)->update([
                    "Company"  =>$request['Company'],
                    "Branch"  =>$request['Branch'],
                    "Department"  =>$request['Department'],
                    "Designation"  =>$request['Designation'],
                    "Date_of_joining"  =>$request['Date_of_joining'],
                    "Date_of_leaving"  =>$request['Date_of_leaving'],
                    "Employee_Type"  =>$request['Employee_Type'],
                    "Contract_Type"  =>$request['Contract_Type'],
                    "Employee_id"  =>$request['Employee_id'],
                    "Manager"  =>$request['Manager'],
                    "Job_position"  =>$request['Job_position'],
                    "Work_Mobile_no"  =>$request['Work_Mobile_no'],
                    "Work_phone_no"  =>$request['Work_phone_no'],
                    "Work_Email"  =>$request['Work_Email'],
                ]);

                HrSetting::where('emp_id',$record->id)->update([
                    "Office_Shift"  =>$request['Office_Shift'],
                    "User_Name"  =>$request['User_Name'],
                    "Role"  =>$request['Role'],
                    "payrole"  =>$request['payrole'],
                    "Timesheet_Cost"  =>$request['Timesheet_Cost'],
                    "Annual_Gross_Salary"  =>$request['Annual_Gross_Salary'],
                    "Attendance"  =>$request['Attendance'],
                    "Badge_ID"  =>$request['Badge_ID'],
                    "Manual_Attendance"  =>$request['Manual_Attendance'],
                    "status"  =>'active',
                ]);

                for ($i=0; $i<count($request['Company_Name']);$i++)
                {
                    EmployeeCompanyInfo::where('emp_id',$record->id)->update([
                        "Company_Name"  =>$request['Company_Name'][$i],
                        "Job_Profile"  =>$request['Job_Profile'][$i],
                        "Joining_Date"  =>$request['Joining_Date'][$i],
                        "Leaving_Date"  =>$request['Leaving_Date'][$i],
                        "Remarks"  =>$request['Remarks'][$i],
                        "status"  =>'active',
                    ]);
                }

                for ($i=0; $i<count($request['Education_Level']);$i++)
                {
                    EmployeeQualification::where('emp_id',$record->id)->update([
                        "School_University"  =>$request['School_University'][$i],
                        "Education_Level"  =>$request['Education_Level'][$i],
                        "Start_Date"  =>$request['Start_Date'][$i],
                        "End_Date"  =>$request['End_Date'][$i],
                        "Professional_Course"  =>$request['Professional_Course'][$i],
                        "courseRemarks"  =>$request['courseRemarks'][$i],
                    ]);
                }
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
        $record = EmployeeRegistration::find(decrypt($id));
        if($record) {
            $record->delete();
            EmployeeWorkInfo::where('emp_id',$id)->delete();
            HrSetting::where('emp_id',$id)->delete();
            EmployeeCompanyInfo::where('emp_id',$id)->delete();
            EmployeeQualification::where('emp_id',$id)->delete();
            return redirect()->back()->with('success' , 'Employee delete successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }
    public function activeEmployee($id) {
        $record = EmployeeRegistration::find(decrypt($id));
        if($record) {
            $record->update([
                'status'=>'active'
            ]);
            return redirect()->back()->with('success' , 'Employee inactive successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }
    public function inactiveEmployee($id) {
        $record = EmployeeRegistration::find(decrypt($id));
        if($record) {
            $record->update([
                'status'=>'inactive'
            ]);
            return redirect()->back()->with('success' , 'Employee inactive successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }
    //End State
}
