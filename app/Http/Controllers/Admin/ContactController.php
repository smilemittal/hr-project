<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use App\ContactAccountingInfo;
use App\ContactAddress;
use App\Country;
use App\Http\Controllers\Controller;
use App\State;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::get();
//        dd(!isset($contacts[1]->getAddressInfo),$contacts[0]->getAddressInfo[0] , $contacts[0]->getAccInfo);
        return view('admin.contact.index', compact('contacts'));
    }

    public function create()
    {
        try {
            $countries = Country::whereStatus('active')->get();
            return view('admin.contact.create', compact('countries'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function getStates($country_id = 0)
    {
        $country = Country::find($country_id);
        if ($country->getState->count() > 0) {
            $state = $country->getState;
            return $state;
        } else {
            return "error";
        }
    }

    public function getCities($state_id = 0)
    {
        $state = State::find($state_id);
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
                    'cxrm' => 'required',
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
            } elseif ($contact->contact_type == 'Company') {
                $request->validate([
                    'company-name' => 'required',
                    'business-classifications' => 'required',
                    'account-status' => 'required',
                    'website' => 'required',
                    'cxrm' => 'required',
                    'account-rec-able' => 'required',
                    'sales-price' => 'required',
                    'account-payable' => 'required',
                    'customer-payment' => 'required',
                    'vendor-term' => 'required',
                    'address-type'=>'required',
                    'house-number' => 'required',
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
            }

            if ($request->file('photo')) {
                $profile_picture = $request->file('photo');
                $imageName = time() . '.' . $profile_picture->getClientOriginalExtension();
                $profile_picture->storeAs('public/contact-profile', $imageName);
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
            $AddressInfo->address_type = json_encode($request['address-type']);
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

            $accInfo = new ContactAccountingInfo();
            $accInfo->contact_id = $contact->id;
            $accInfo->sales_person = $request['sales-person'];
            $accInfo->account_receivable = $request['account-rec-able'];
            $accInfo->sales_price_list = $request['sales-price'];
            $accInfo->accounts_payable = $request['account-payable'];
            $accInfo->customer_payments_terms = $request['customer-payment'];
            $accInfo->vendor_payments_terms = $request['vendor-term'];
            $accInfo->save();
            return redirect()->back()->with('success', 'Form submitted successfully.');
        } else {
            return redirect()->back()->with('error', 'Please fill the form.');
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

            $name = $contact->contact_name . " " . $contact->last_name;
            $email = $AddressInfo->email;
            $photo = asset('storage/app/public/contact-profile/' . $contact->photo);
            return response(array('name' => $name, 'email' => $email, 'picture' => $photo));
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
        return response("success");
    }

    public function view($id)
    {
        $exist = Contact::find(decrypt($id));
        if ($exist) {
            return view('admin.contact.view', compact('exist'));
        } else {
            return redirect()->back()->with('error', 'invalid access.');
        }
    }

    public function edit($id)
    {
        $exist = Contact::find(decrypt($id));
        if ($exist) {
            return view('admin.contact.update', compact('exist'));
        } else {
            return redirect()->back()->with('error', 'invalid access.');
        }
    }

    public function trash($id)
    {
        $exist = Contact::find(decrypt($id));
        if ($exist) {
            $exist->delete();
            return redirect()->back()->with('success', 'Move to trash successfully.');
        } else {
            return redirect()->back()->with('error', 'invalid access.');
        }
    }

    public function trashView()
    {
        $contacts = Contact::onlyTrashed()->get();
        return view('admin.contact.trash', compact('contacts'));
    }

    public function restore($id)
    {
        $exist = Contact::withTrashed()->find(decrypt($id));
        if ($exist) {
            $exist->restore();
            return redirect()->back()->with('success', 'record restore successfully.');
        } else {
            return redirect()->back()->with('error', 'invalid access.');
        }
    }

    public function delete($id)
    {
        $exist = Contact::withTrashed()->find(decrypt($id));
        if ($exist) {
            foreach ($exist->getAddressInfo as $record) {
                $record->delete();
            }
            $exist->getAccInfo->delete();
            $exist->forceDelete();
            return redirect()->back()->with('success', 'Deleted from database successfully.');
        } else {
            return redirect()->back()->with('error', 'invalid access.');
        }
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

    public function createAddressView() {
        try {
            $countries = Country::whereStatus('active')->get();
            $is_parent = true;
            $addressChild = true;
            return view('admin.contact.partials.address', compact('countries', 'is_parent' ,'addressChild'))->render();
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

}
