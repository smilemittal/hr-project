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
        $companies = Company::all();
       return view('admin.company.index' , compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createViewCompany()
    {
        $countries = Country::whereStatus('active')->get();
        $cities = City::whereStatus('active')->get();
        $states = State::whereStatus('active')->get();
        return view('admin.company.create' , compact('countries', 'cities', 'states'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCompany(Request $request)
    {
        $request->validate([
            'company-name' => 'required',
            'vat' => 'required',
            'address_1' => 'required',
            'country_id' => 'required',
            'state_id' => 'required',
            'city' => 'required',
            'phone-number' => 'required',
            'mobile-number' => 'required',
            'email' => 'required|unique:companies,email',
            'zipcode' => 'required',
            'logo' => 'nullable|image|mimes:jpg,png,jpeg',
            'website-url' => 'nullable|url',
        ]);

        $logo = '';
        if($request->hasFile('logo')){
            $file = $request->file('logo');
            $logo = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('company-logos', $logo);
        }

        Company::create([
            'company_name' => $request['company-name'],
            'vat' => $request['vat'],
            'address_1' => $request['address_1'],
            'address_2' => $request['address_2'],
            'country_id' => $request['country_id'],
            'state_id' => $request['state_id'],
            'city' => $request['city'],
            'zip_code' => $request['zipcode'],
            'phone' => $request['phone-number'],
            'mobile' => $request['mobile-number'],
            'email' => $request['email'],
            'website_url' => $request['website-url'],
            'logo' => $logo,
        ]);
        return redirect()->route('company-index')->with('success' , 'Company registered successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function viewCompanyDetail($id)
    {
        $company = Company::with('comCountry')->where('id', decrypt($id))->first();
        if($company) {
            return view('admin.company.view',compact('company'));
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
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
         $company = Company::find(decrypt($id));
        if($company) {
            $countries = Country::whereStatus('active')->get();
            $cities = City::whereStatus('active')->get();
            $states = State::whereStatus('active')->where('country_id', $company->state_id)->get();
            return view('admin.company.update' , compact('company', 'countries', 'cities', 'states'));
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
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
        $company = Company::find(decrypt($id));
        $request->validate([
            'company-name' => 'required',
            'vat' => 'required',
            'address_1' => 'required',
            'country_id' => 'required',
            'state_id' => 'required',
            'city' => 'required',
            'phone-number' => 'required',
            'mobile-number' => 'required',
            'email' => 'required|unique:companies,email,'.$company->id.'',
            'zipcode' => 'required',
            'logo' => 'nullable|image|mimes:jpg,png,jpeg',
            'website-url' => 'nullable|url',
        ]);

        if($request->hasFile('logo')){
            $file = $request->file('logo');
            $logo = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('company-logos', $logo);
        }else{
            $logo = $company->logo;
        }

        $company->update([
            'company_name' => $request['company-name'],
            'vat' => $request['vat'],
            'address_1' => $request['address_1'],
            'address_2' => $request['address_2'],
            'country_id' => $request['country_id'],
            'state_id' => $request['state_id'],
            'city' => $request['city'],
            'zip_code' => $request['zipcode'],
            'phone' => $request['phone-number'],
            'mobile' => $request['mobile-number'],
            'email' => $request['email'],
            'website_url' => $request['website-url'],
            'logo' => $logo,
        ]);
        return redirect()->back()->with('success' , 'Company updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteCompany($id)
    {
         $company = Company::find(decrypt($id));
        if($company) {
            $company->delete();
            return redirect()->back()->with('success' , 'Company delete successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }
    public function getStates(Request $request){
        if($request->ajax()){
            $html = '';
            $states = State::where('status', 'active')->where('country_id', $request->country_id)->get();
            if(!empty($states) && $states->count() > 0){
                
                foreach($states as $state){
                 $html .= '<option value="'.$state->id.'">'.$state->value.'</option>';   
                } 
            }
            return response()->json(['html' => $html]);
        }
    }
}
