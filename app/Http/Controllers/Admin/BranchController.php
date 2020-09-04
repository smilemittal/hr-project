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
        try {
            $branches = Branch::with('company')->get();
            return view('admin.branch.index' , compact('branches'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createViewBranch()
    {
        try {
            $companies = Company::whereStatus('active')->get();
            $countries = Country::whereStatus('active')->get();
            $cities = City::whereStatus('active')->get();
            return view('admin.branch.create' , compact('countries', 'cities', 'companies'));
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
    public function postBranch(Request $request)
    {
        try {
            $request->validate([
                'company_id' => 'required|exists:companies,id',
                'branch_name' => 'required',
                'address_1' => 'required|max:100',
                'address_2' => 'max:100',
                'country_id' => 'required',
                'state_id' => 'required',
                'city' => 'required',
                'phone_number' => 'required|max:15',
                'mobile_number' => 'required|max:15',
                'email' => 'required|unique:branches,email',
                'zipcode' => 'required|max:10',
                'status' => 'required',
            ]);
            Branch::create([
                'company_id' => $request['company_id'],
                'branch_name' => $request['branch_name'],
                'address_1' => $request['address_1'],
                'address_2' => $request['address_2'],
                'country_id' => $request['country_id'],
                'state_id' => $request['state_id'],
                'city' => $request['city'],
                'zip_code' => $request['zipcode'],
                'phone' => $request['phone_number'],
                'mobile' => $request['mobile_number'],
                'email' => $request['email'],
                'status' => $request['status'],
            ]);
            return redirect()->route('branch.index')->with('success' , 'Branch registered successfully.');
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
    public function viewBranchDetail($id)
    {
        try {
            $branch = Branch::with('company')->where('id', decrypt($id))->first();
            if($branch) {
                return view('admin.branch.view',compact('branch'));
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
    public function updateBranch($id)
    {
        try {
            $branch = Branch::with('company')->where('id', decrypt($id))->first();    
            if($branch) {
                $companies = Company::whereStatus('active')->get();
                $countries = Country::whereStatus('active')->get();
                $cities = City::whereStatus('active')->get();
                $states = State::whereStatus('active')->where('country_id', $branch->country_id)->get();
                return view('admin.branch.update' , compact('branch', 'countries', 'cities', 'states', 'companies'));
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
    public function updatePostBranch(Request $request, $id)
    {
        try {
            $branch = Branch::find(decrypt($id));
            $request->validate([
                'company_id' => 'required|exists:companies,id',
                'branch_name' => 'required',
                'address_1' => 'required|max:100',
                'address_2' => 'max:100',
                'country_id' => 'required',
                'state_id' => 'required',
                'city' => 'required',
                'phone_number' => 'required|max:15',
                'mobile_number' => 'required|max:15',
                'zipcode' => 'required|max:10',
                'email' => 'required|unique:branches,email,'.$branch->id.'',
                'status' => 'required',
            ]);
            $branch->update([
                'company_id' => $request['company_id'],
                'branch_name' => $request['branch_name'],
                'address_1' => $request['address_1'],
                'address_2' => $request['address_2'],
                'country_id' => $request['country_id'],
                'state_id' => $request['state_id'],
                'city' => $request['city'],
                'zip_code' => $request['zipcode'],
                'phone' => $request['phone_number'],
                'mobile' => $request['mobile_number'],
                'email' => $request['email'],
                'status' => $request['status'],
            ]);
            return redirect()->back()->with('success' , 'Branch updated successfully.');
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
    public function deleteBranch($id)
    {
        try {
            $branch = Branch::find(decrypt($id));
            if($branch) {
                $branch->delete();
                return redirect()->back()->with('success' , 'Branch delete successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
        
    }
    
}
