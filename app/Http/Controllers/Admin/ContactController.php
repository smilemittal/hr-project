<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use App\ContactAccountingInfo;
use App\ContactAddress;
use App\Country;
use App\Http\Controllers\Controller;
use App\State;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class ContactController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            $countries = Country::whereStatus('active')->get();
            return view('admin.contact.create' ,compact('countries'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function getStates(Request $request) {
        $country = Country::find($request->id);
        if($country->getState->count()>0) {
            $state = $country->getState;
            return $state;
        }
        else {
            return "error";
        }
    }

    public function getCities(Request $request) {
        $state = State::find($request->id);
        if($state->getCity->count()>0) {
            $city = $state->getCity;
            return $city;
        }
        else {
            return "error";
        }
    }

    public function postContactTypeInfo(Request $request) {
        if($request['contact-type'] == 'Individual') {
            $contact = Contact::create([
                'contact_type'=>$request['contact-type'],
                'contact_name'=>$request['first-name'],
                'last_name'=>$request['last-name'],
            ]);
            return $contact->id;
        }
        else if($request['contact-type'] == 'Company') {
            $contact = Contact::create([
                'contact_type'=>$request['contact-type'],
                'contact_name'=>$request['company-name'],
            ]);
            return $contact->id;
        }
    }


    public function postContact(Request $request)
    {
        $contact = Contact::find($request['id']);
        if($contact) {
            if($request->file('photo')) {
                $profile_picture = $request->file('photo');
                $imageName = time() . '.' . $profile_picture->getClientOriginalExtension();
                $profile_picture->storeAs('contact-profile', $imageName);
            }

            if($contact->contact_type == 'Individual') {
                $contact->contact_name = $request['first-name'];
                $contact->middle_name = $request['middle-type'];
                $contact->last_name = $request['last-type'];
                $contact->job_position = $request['job-position'];
                $contact->business_info = $request['business-info'];
            }
            else {
                $contact->contact_name = $request['company-name'];
                $contact->business_classifications = $request['business-classifications'];
                $contact->account_status = $request['account-status'];

            }
            $contact->tags = $request['contact-type'];
            $contact->social_info = $request['social'];
            $contact->cxrm = $request['cxrm'];
            $contact->other_information = $request['other-information'];
            $contact->photo = $imageName;
            $contact->save();
            $AddressInfo =new ContactAddress();
            $AddressInfo->contact_id = $contact->id;
            $AddressInfo->house_number =$request['house-number'];
            $AddressInfo->house_name = $request['house-name'];
            $AddressInfo->address_info = $request['address-info'];
            $AddressInfo->street = $request['street'];
            $AddressInfo->city_id = $request['city'];
            $AddressInfo->state_id = $request['state'];
            $AddressInfo->country_id = $request['country'];
            $AddressInfo->pincode = $request['post-code'];
            $AddressInfo->mobile = $request['mobile'];
            $AddressInfo->phone = $request['phone'];
            $AddressInfo->email = $request['email'];
            $AddressInfo->website = $request['website'];
            $AddressInfo->save();
            $accInfo =new ContactAccountingInfo();
            $accInfo->contact_id = $contact->id;
            $accInfo->sales_person = 1;
            $accInfo->account_receivable = $request['account-rec-able'];
            $accInfo->sales_price_list = $request['sales-price'];
            $accInfo->accounts_payable = $request['account-payable'];
            $accInfo->customer_payments_terms = $request['customer-payment'];
            $accInfo->vendor_payments_terms = $request['vendor-term'];
            $accInfo->save();

            dd('all done');

        }
        else {

        }
    }

    public function postChildContact(Request $request) {
        dd($request->all());
    }

    public function postMoreAddress(Request $request) {
        dd('sada');
    }



}
