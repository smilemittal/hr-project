<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use App\ContactAccountingInfo;
use App\ContactAddress;
use App\Country;
use App\Http\Controllers\Controller;
use App\State;
use Illuminate\Http\Request;

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
            return view('admin.contact.create', compact('countries'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function getStates(Request $request)
    {
        $country = Country::find($request->id);
        if ($country->getState->count() > 0) {
            $state = $country->getState;
            return $state;
        } else {
            return "error";
        }
    }

    public function getCities(Request $request)
    {
        $state = State::find($request->id);
        if ($state->getCity->count() > 0) {
            $city = $state->getCity;
            return $city;
        } else {
            return "error";
        }
    }

    public function postContactTypeInfo(Request $request)
    {
        if ($request['contact-type'] == 'Individual') {
            $request->validate([
                'first-name' => 'required',
                'last-name' => 'required',
                'contact-type' => 'required',
            ]);
            $contact = Contact::create([
                'contact_type' => $request['contact-type'],
                'contact_name' => $request['first-name'],
                'last_name' => $request['last-name'],
            ]);
            return $contact->id;
        } else if ($request['contact-type'] == 'Company') {
            $request->validate([
                'company-name' => 'required',
                'contact-type' => 'required',
            ]);
            $contact = Contact::create([
                'contact_type' => $request['contact-type'],
                'contact_name' => $request['company-name'],
            ]);
            return $contact->id;
        }
    }

    public function postContact(Request $request)
    {
        $contact = Contact::find($request['id']);
        if ($contact) {
            if ($contact->contact_type == 'Individual') {
                $request->validate([
                    'first-name' => 'required',
                    'last-name' => 'required',
                    'job-position' => 'required',
                    'business-info' => 'required',
                ]);
            } elseif ($contact->contact_type == 'company') {
                $request->validate([
                    'company-name' => 'required',
                    'business-classifications' => 'required',
                    'account-status' => 'required',
                    'website' => 'required',
                ]);
            }
            $request->validate([
                'email' => 'required | email',
                'cxrm' => 'required',
            ]);


            if ($request->file('photo')) {
                $profile_picture = $request->file('photo');
                $imageName = time() . '.' . $profile_picture->getClientOriginalExtension();
                $profile_picture->storeAs('contact-profile', $imageName);
                $contact->photo = $imageName;
            }
            if ($contact->contact_type == 'Individual') {
                $contact->contact_name = $request['first-name'];
                $contact->middle_name = $request['middle-name'];
                $contact->last_name = $request['last-name'];
                $contact->job_position = $request['job-position'];
                $contact->business_info = $request['business-info'];
            } else {
                $contact->contact_name = $request['company-name'];
                $contact->business_classifications = $request['business-classifications'];
                $contact->account_status = $request['account-status'];
            }
            $contact->tags = $request['tags'];
            $contact->social_info = json_encode($request['social']);
            $contact->cxrm = json_encode($request['cxrm']);
            $contact->other_information = $request['other-information'];
           
            $contact->save();
            $AddressInfo = new ContactAddress();
            $AddressInfo->contact_id = $contact->id;
            $AddressInfo->house_number = $request['house-number'];
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
            if($request['account-rec-able'])
            $accInfo = new ContactAccountingInfo();
            $accInfo->contact_id = $contact->id;
            $accInfo->sales_person = $request['sales-person'];
            $accInfo->account_receivable = $request['account-rec-able'];
            $accInfo->sales_price_list = $request['sales-price'];
            $accInfo->accounts_payable = $request['account-payable'];
            $accInfo->customer_payments_terms = $request['customer-payment'];
            $accInfo->vendor_payments_terms = $request['vendor-term'];
            $accInfo->save();

            dd('all done');
        } else {
            dd('some thing goes wrong');
        }
    }

    public function postChildContact(Request $request)
    {
        $validations = $request->validate([
            'first-name' => 'required',
            'last-name' => 'required',
            'job-position' => 'required',
            'business-info' => 'required',
            'cxrm*' => 'required',
            'account-rec-able' => 'required',
            'sales-price' => 'required',
            'account-payable' => 'required',
            'customer-payment' => 'required',
            'vendor-term' => 'required',
            'house-number' => 'required',
            'house-name' => 'required',
            'address-info' => 'required',
            'street' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'post-code' => 'required',
            'mobile' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'photo' => 'required',
        ]);
        $contact = new Contact();
        $parentContact = Contact::find($request['id']);
        if ($parentContact) {
            if ($request->file('photo')) {
                $profile_picture = $request->file('photo');
                $imageName = time() . '.' . $profile_picture->getClientOriginalExtension();
                $profile_picture->storeAs('public/contact-profile', $imageName);
                $contact->photo = $imageName;
            }
            $contact->contact_type = $parentContact->contact_type;
            $contact->contact_name = $request['first-name'];
            $contact->middle_name = $request['middle-name'];
            $contact->last_name = $request['last-name'];
            $contact->job_position = $request['job-position'];
            $contact->business_info = $request['business-info'];
            $contact->tags = $request['tags'];
            $contact->social_info = json_encode($request['social']);
            $contact->cxrm = json_encode($request['cxrm']);
            $contact->other_information = $request['other-information'];
            $contact->parent_id = $request['id'];
            $contact->save();
            $AddressInfo = new ContactAddress();
            $AddressInfo->contact_id = $contact->id;
            $AddressInfo->house_number = $request['house-number'];
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
            $accInfo = new ContactAccountingInfo();
            $accInfo->contact_id = $contact->id;
            $accInfo->sales_person = 1;
            $accInfo->account_receivable = $request['account-rec-able'];
            $accInfo->sales_price_list = $request['sales-price'];
            $accInfo->accounts_payable = $request['account-payable'];
            $accInfo->customer_payments_terms = $request['customer-payment'];
            $accInfo->vendor_payments_terms = $request['vendor-term'];
            $accInfo->save();

            $name = $contact->contact_name. " " .$contact->last_name;
            $email = $AddressInfo->email;
            $photo = public_path('storage/app/public/contact-profile/'.$contact->photo);
            return response(array('name'=>$name , 'email'=>$email , 'picture'=>$photo));
        } else {
            return "no parent found";
        }
    }

    public function postMoreAddress(Request $request)
    {
        $parentContact = Contact::find($request['id']);
        $AddressInfo = new ContactAddress();
        $AddressInfo->contact_id = $parentContact->id;
        $AddressInfo->address_type = json_encode($request['address-type']);
        $AddressInfo->house_number = $request['house-number'];
        $AddressInfo->house_name = $request['house-name'];
        $AddressInfo->address_info = $request['address-info'];
        $AddressInfo->street = $request['street'];
        $AddressInfo->city_id = $request['city'];
        $AddressInfo->state_id = $request['state'];
        $AddressInfo->country_id = $request['country'];
        $AddressInfo->pincode = $request['post-code'];
        $AddressInfo->save();
        dd('all-done');
    }

    public function createContactView()
    {
        try {
            $countries = Country::whereStatus('active')->get();
            $is_parent = false;

            return view('admin.contact.partials.form', compact('countries', 'is_parent'))->render();
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
