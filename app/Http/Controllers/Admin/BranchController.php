<?php

namespace App\Http\Controllers\Admin;

use App\Branch;
use App\City;
use App\Company;
use App\Country;
use App\Http\Controllers\Controller;
use App\State;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexBranch()
    {
        $branches = Branch::with('company')->get();
       return view('admin.branch.index' , compact('branches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createViewBranch()
    {
        $companies = Company::all();
        $countries = Country::whereStatus('active')->get();
        $cities = City::whereStatus('active')->get();
        return view('admin.branch.create' , compact('countries', 'cities', 'companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postBranch(Request $request)
    {
        $request->validate([
            'company_id' => 'required',
            'branch-name' => 'required',
            'address_1' => 'required',
            'country_id' => 'required',
            'state_id' => 'required',
            'city' => 'required',
            'phone-number' => 'required',
            'mobile-number' => 'required',
            'email' => 'required|unique:branches,email',
            'zipcode' => 'required',
        ]);
        Branch::create([
            'company_id' => $request['company_id'],
            'branch_name' => $request['branch-name'],
            'address_1' => $request['address_1'],
            'address_2' => $request['address_2'],
            'country_id' => $request['country_id'],
            'state_id' => $request['state_id'],
            'city' => $request['city'],
            'zip_code' => $request['zipcode'],
            'phone' => $request['phone-number'],
            'mobile' => $request['mobile-number'],
            'email' => $request['email'],
        ]);
        return redirect()->route('branch-index')->with('success' , 'Branch registered successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function viewBranchDetail($id)
    {
        $branch = Branch::with('comCountry')->where('id', decrypt($id))->first();
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
    public function updateBranch($id)
    {
         $branch = Branch::with('company')->where('id', decrypt($id))->first();
            
        if($branch) {
            $companies = Company::all();
            $countries = Country::whereStatus('active')->get();
            $cities = City::whereStatus('active')->get();
            $states = State::whereStatus('active')->where('country_id', $branch->country_id)->get();
            return view('admin.branch.update' , compact('branch', 'countries', 'cities', 'states', 'companies'));
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
    public function updatePostBranch(Request $request, $id)
    {
        $branch = Branch::find(decrypt($id));
        $request->validate([
           'company_id' => 'required',
            'branch-name' => 'required',
            'address_1' => 'required',
            'country_id' => 'required',
            'state_id' => 'required',
            'city' => 'required',
            'phone-number' => 'required',
            'mobile-number' => 'required',
            'email' => 'required|unique:branches,email,'.$branch->id.'',
            'zipcode' => 'required',
        ]);

       

        $branch->update([
            'company_id' => $request['company_id'],
            'branch_name' => $request['branch-name'],
            'address_1' => $request['address_1'],
            'address_2' => $request['address_2'],
            'country_id' => $request['country_id'],
            'state_id' => $request['state_id'],
            'city' => $request['city'],
            'zip_code' => $request['zipcode'],
            'phone' => $request['phone-number'],
            'mobile' => $request['mobile-number'],
            'email' => $request['email'],
        ]);
        return redirect()->back()->with('success' , 'Branch updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteBranch($id)
    {
         $branch = Branch::find(decrypt($id));
        if($branch) {
            $branch->delete();
            return redirect()->back()->with('success' , 'Branch delete successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }
    
}
