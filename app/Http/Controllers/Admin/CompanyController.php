<?php

namespace App\Http\Controllers\Admin;

use App\City;
use App\Company;
use App\Country;
use App\Gender;
use App\Http\Controllers\Controller;
use App\MartialStatus;
use App\State;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexCompany()
    {
        try {
            $companies = Company::all();
            return view('admin.company.index' , compact('companies'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createViewCompany()
    {
        try {
             $countries = Country::whereStatus('active')->get();
            $cities = City::whereStatus('active')->get();
            $states = State::whereStatus('active')->get();
            return view('admin.company.create' , compact('countries', 'cities', 'states'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCompany(Request $request)
    {
         try {
            $request->validate([
                'company_name' => 'required',
                'vat' => 'required',
                'address_1' => 'required|max:100',
                'address_2' => 'max:100',
                'country_id' => 'required|exists:countries,id',
                'state_id' => 'required|exists:states,id',
                'city_id' => 'required', 
                'phone_number' => 'required|max:15',
                'mobile_number' => 'required|max:15',
                'email' => 'required|unique:companies,email',
                'zipcode' => 'required|max:10',
                'logo' => 'nullable|image|mimes:jpg,png,jpeg',
                'website_url' => 'nullable|url',
                'status' => 'required'
            ]);

            $logo = '';
            if($request->hasFile('logo')){
                $file = $request->file('logo');
                $logo = time() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('company-logos', $logo);
            }
            Company::create([
                'company_name' => $request['company_name'],
                'vat' => $request['vat'],
                'address_1' => $request['address_1'],
                'address_2' => $request['address_2'],
                'country_id' => $request['country_id'],
                'state_id' => $request['state_id'],
                'city_id' => $request['city_id'],
                'zip_code' => $request['zipcode'],
                'phone' => $request['phone_number'],
                'mobile' => $request['mobile_number'],
                'email' => $request['email'],
                'website_url' => $request['website_url'],
                'logo' => $logo,
                'status' => $request['status'],
            ]);
            return redirect()->route('company.index')->with('success' , 'Company registered successfully.');
         } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function viewCompanyDetail($id)
    {
        try {
            $company = Company::with('comCountry', 'comCity', 'comState')->where('id', decrypt($id))->first();
            if($company) {
                return view('admin.company.view',compact('company'));
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateCompany($id)
    {
        try {
            $company = Company::find(decrypt($id));
            if($company) {
                $countries = Country::whereStatus('active')->get();
                $states = State::whereStatus('active')->where('country_id', $company->country_id)->get();
                $cities = City::whereStatus('active')->where('state_id', $company->state_id)->get();
                return view('admin.company.update' , compact('company', 'countries', 'cities', 'states'));
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePostCompany(Request $request, $id)
    {
        try {
            $company = Company::find(decrypt($id));
            $request->validate([
                'company_name' => 'required',
                'vat' => 'required',
                'address_1' => 'required|max:100',
                'address_2' => 'max:100',
                'country_id' => 'required|exists:countries,id',
                'state_id' => 'required|exists:states,id',
                'city_id' => 'required', 
                'phone_number' => 'required|max:15',
                'mobile_number' => 'required|max:15',
                'zipcode' => 'required|max:10',
                'logo' => 'nullable|image|mimes:jpg,png,jpeg',
                'email' => 'required|unique:companies,email,'.$company->id.'',
                'website_url' => 'nullable|url',
                'status' => 'required',
            ]);

            if($request->hasFile('logo')){
                $file = $request->file('logo');
                $logo = time() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('company-logos', $logo);
            }else{
                $logo = $company->logo;
            }

            $company->update([
                'company_name' => $request['company_name'],
                'vat' => $request['vat'],
                'address_1' => $request['address_1'],
                'address_2' => $request['address_2'],
                'country_id' => $request['country_id'],
                'state_id' => $request['state_id'],
                'city_id' => $request['city_id'],
                'zip_code' => $request['zipcode'],
                'phone' => $request['phone_number'],
                'mobile' => $request['mobile_number'],
                'email' => $request['email'],
                'website_url' => $request['website_url'],
                'logo' => $logo,
                'status' => $request['status'],
            ]);
            return redirect()->back()->with('success' , 'Company updated successfully.');
        } catch (Exception $e) {
             return redirect()->back()->with('error', $e->getMessage());
        }
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteCompany($id)
    {
        try {
            $company = Company::find(decrypt($id));
            if($company) {
                $company->delete();
                return redirect()->back()->with('success' , 'Company delete successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
        
    }
    public function getStates(Request $request){
        try {
            if($request->ajax()){
                $html = '';
                $states = State::where('status', 'active')->where('country_id', $request->country_id)->get();
                if(!empty($states) && $states->count() > 0){
                   foreach($states as $state){
                        if($request->filled('state_id') && $request->state_id == $state->id){
                            $html .= '<option value="'.$state->id.'" selected>'.$state->value.'</option>'; 
                        }else{
                             $html .= '<option value="'.$state->id.'">'.$state->value.'</option>'; 
                        }  
                    } 
                }
                return response()->json(['html' => $html]);
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
        
    }
    public function getCities(Request $request){
        try {
            if($request->ajax()){
                $html = '';
                $cities = City::where('status', 'active')->where('state_id', $request->state_id)->get();
                if(!empty($cities) && $cities->count() > 0){
                    $html .= '<option value="enter_city" class="enter_city">Enter New City</option>';
                    foreach($cities as $city){
                        if($request->filled('city_id') && $request->city_id == $city->id){
                            $html .= '<option value="'.$city->id.'" selected>'.$city->value.'</option>'; 
                        }else{
                             $html .= '<option value="'.$city->id.'">'.$city->value.'</option>'; 
                        }  
                    } 
                }
                return response()->json(['html' => $html]);
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
        
    }
}
