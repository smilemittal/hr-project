<?php

namespace App\Http\Controllers\Admin;

use App\City;
use App\ContactTag;
use App\ContactTitle;
use App\ContractType;
use App\Country;
use App\DocumentType;
use App\EducationLevel;
use App\Gender;
use App\Http\Controllers\Controller;
use App\IndustryAndBusiness;
use App\JobCategory;
use App\JobType;
use App\MartialStatus;
use App\Nationality;
use App\State;
use Illuminate\Http\Request;
use Symfony\Component\Process\Pipes\UnixPipes;

class SiteSettingController extends Controller
{
    //Start Contract Type
    public function indexContractType() {
        $contractTypes = ContractType::get();
        return view('admin.settings.contract-type.index' , compact('contractTypes'));
    }

    public function createViewContractType() {
        return view('admin.settings.contract-type.create');
    }

    public function postContractType(Request $request) {
        $request->validate([
            'contract-type' => 'required|unique:contract_types,value|max:50'
        ]);

        ContractType::create([
            'value'=> $request['contract-type'],
            'status' => 'active',
        ]);

        return redirect()->back()->with('success' , 'Contract type submitted successfully.');
    }

    public function updateContractType($id) {
        $record = ContractType::find(decrypt($id));
        if($record) {
            return view('admin.settings.contract-type.update' , compact('record'));
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }

    public function updatePostContractType(Request $request , $id) {
        $record = ContractType::find(decrypt($id));
        if($record) {
            $request->validate([
                'contract-type' => 'required|unique:contract_types,value|max:50'
            ]);

            $record->value = $request['contract-type'];
            $record->save();
            return redirect()->back()->with('success' , 'Contract type updated successfully.');
        }
        else {
            return redirect()->back()->with('success' , 'wrong access.');
        }

    }

    public function inactiveContractType($id) {
        $record = ContractType::find(decrypt($id));
        if($record) {
            $record->status = 'inactive';
            $record->save();
            return redirect()->back()->with('success' , 'Contract type Inactive successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }

    public function activeContractType($id) {
        $record = ContractType::find(decrypt($id));
        if($record) {
            $record->status = 'active';
            $record->save();
            return redirect()->back()->with('success' , 'Contract type active successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }

    }

    public function deleteContractType($id) {
        $record = ContractType::find(decrypt($id));
        if($record) {
            $record->delete();
            return redirect()->back()->with('success' , 'Contract type delete successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }
    //End Contract Type

    //Start Contact Tag
    public function indexContactTag() {
        $contactTags = ContactTag::get();
        return view('admin.settings.contact-tag.index' , compact('contactTags'));
    }

    public function createViewContactTag() {
        return view('admin.settings.contact-tag.create');
    }

    public function postContactTag(Request $request) {
        $request->validate([
            'contact-tag' => 'required|unique:contact_tags,value|max:50'
        ]);

        ContactTag::create([
            'value'=> $request['contact-tag'],
            'status' => 'active',
        ]);

        return redirect()->back()->with('success' , 'Contact tag submitted successfully.');
    }

    public function updateContactTag($id) {
        $record = ContactTag::find(decrypt($id));
        if($record) {
            return view('admin.settings.contact-tag.update' , compact('record'));
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }

    public function updatePostContactTag(Request $request , $id) {
        $record = ContactTag::find(decrypt($id));
        if($record) {
            $request->validate([
                'contact-tag' => 'required|unique:contact_tags,value|max:50'
            ]);

            $record->value = $request['contact-tag'];
            $record->save();
            return redirect()->back()->with('success' , 'Contact tag updated successfully.');
        }
        else {
            return redirect()->back()->with('success' , 'wrong access.');
        }

    }

    public function inactiveContactTag($id) {
        $record = ContactTag::find(decrypt($id));
        if($record) {
            $record->status = 'inactive';
            $record->save();
            return redirect()->back()->with('success' , 'Contact tag Inactive successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }

    public function activeContactTag($id) {
        $record = ContactTag::find(decrypt($id));
        if($record) {
            $record->status = 'active';
            $record->save();
            return redirect()->back()->with('success' , 'Contact tag active successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }

    }

    public function deleteContactTag($id) {
        $record = ContactTag::find(decrypt($id));
        if($record) {
            $record->delete();
            return redirect()->back()->with('success' , 'Contact tag delete successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }
    //End Contact Tag

    //Start Education Level
    public function indexEducationLevel() {
        $educationLevels = EducationLevel::get();
        return view('admin.settings.education-level.index' , compact('educationLevels'));
    }

    public function createViewEducationLevel() {
        return view('admin.settings.education-level.create');
    }

    public function postEducationLevel(Request $request) {
        $request->validate([
            'education-level' => 'required|unique:education_levels,value|max:50'
        ]);

        EducationLevel::create([
            'value'=> $request['education-level'],
            'status' => 'active',
        ]);

        return redirect()->back()->with('success' , 'Education level submitted successfully.');
    }

    public function updateEducationLevel($id) {
        $record = EducationLevel::find(decrypt($id));
        if($record) {
            return view('admin.settings.education-level.update' , compact('record'));
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }

    public function updatePostEducationLevel(Request $request , $id) {
        $record = EducationLevel::find(decrypt($id));
        if($record) {
            $request->validate([
                'education-level' => 'required|unique:education_levels,value|max:50'
            ]);

            $record->value = $request['education-level'];
            $record->save();
            return redirect()->back()->with('success' , 'Education level updated successfully.');
        }
        else {
            return redirect()->back()->with('success' , 'wrong access.');
        }

    }

    public function inactiveEducationLevel($id) {
        $record = EducationLevel::find(decrypt($id));
        if($record) {
            $record->status = 'inactive';
            $record->save();
            return redirect()->back()->with('success' , 'Education level Inactive successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }

    public function activeEducationLevel($id) {
        $record = EducationLevel::find(decrypt($id));
        if($record) {
            $record->status = 'active';
            $record->save();
            return redirect()->back()->with('success' , 'Education level active successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }

    }

    public function deleteEducationLevel($id) {
        $record = EducationLevel::find(decrypt($id));
        if($record) {
            $record->delete();
            return redirect()->back()->with('success' , 'Education level delete successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }
    //End Education Level

    //Start Document Type
    public function indexDocumentType() {
        $documentTypes = DocumentType::get();
        return view('admin.settings.document-type.index' , compact('documentTypes'));
    }

    public function createViewDocumentType() {
        return view('admin.settings.document-type.create');
    }

    public function postDocumentType(Request $request) {
        $request->validate([
            'document-type' => 'required|unique:document_types,value|max:50'
        ]);

        DocumentType::create([
            'value'=> $request['document-type'],
            'status' => 'active',
        ]);

        return redirect()->back()->with('success' , 'Document Type submitted successfully.');
    }

    public function updateDocumentType($id) {
        $record = DocumentType::find(decrypt($id));
        if($record) {
            return view('admin.settings.document-type.update' , compact('record'));
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }

    public function updatePostDocumentType(Request $request , $id) {
        $record = DocumentType::find(decrypt($id));
        if($record) {
            $request->validate([
                'document-type' => 'required|unique:document_types,value|max:50'
            ]);

            $record->value = $request['document-type'];
            $record->save();
            return redirect()->back()->with('success' , 'Document Type updated successfully.');
        }
        else {
            return redirect()->back()->with('success' , 'wrong access.');
        }

    }

    public function inactiveDocumentType($id) {
        $record = DocumentType::find(decrypt($id));
        if($record) {
            $record->status = 'inactive';
            $record->save();
            return redirect()->back()->with('success' , 'Document type Inactive successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }

    public function activeDocumentType($id) {
        $record = DocumentType::find(decrypt($id));
        if($record) {
            $record->status = 'active';
            $record->save();
            return redirect()->back()->with('success' , 'Document Type active successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }

    }

    public function deleteDocumentType($id) {
        $record = DocumentType::find(decrypt($id));
        if($record) {
            $record->delete();
            return redirect()->back()->with('success' , 'Document Type delete successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }
    //End Document Type

    //Start Job Type
    public function indexJobType() {
        $jobTypes = JobType::get();
        return view('admin.settings.job-type.index' , compact('jobTypes'));
    }

    public function createViewJobType() {
        return view('admin.settings.job-type.create');
    }

    public function postJobType(Request $request) {
        $request->validate([
            'job-type' => 'required|unique:job_types,value|max:50'
        ]);

        JobType::create([
            'value'=> $request['job-type'],
            'status' => 'active',
        ]);

        return redirect()->back()->with('success' , 'Job Type submitted successfully.');
    }

    public function updateJobType($id) {
        $record = JobType::find(decrypt($id));
        if($record) {
            return view('admin.settings.job-type.update' , compact('record'));
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }

    public function updatePostJobType(Request $request , $id) {
        $record = JobType::find(decrypt($id));
        if($record) {
            $request->validate([
                'job-type' => 'required|unique:job_types,value|max:50'
            ]);

            $record->value = $request['job-type'];
            $record->save();
            return redirect()->back()->with('success' , 'Job Type updated successfully.');
        }
        else {
            return redirect()->back()->with('success' , 'wrong access.');
        }

    }

    public function inactiveJobType($id) {
        $record = JobType::find(decrypt($id));
        if($record) {
            $record->status = 'inactive';
            $record->save();
            return redirect()->back()->with('success' , 'Job type Inactive successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }

    public function activeJobType($id) {
        $record = JobType::find(decrypt($id));
        if($record) {
            $record->status = 'active';
            $record->save();
            return redirect()->back()->with('success' , 'Job Type active successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }

    }

    public function deleteJobType($id) {
        $record = JobType::find(decrypt($id));
        if($record) {
            $record->delete();
            return redirect()->back()->with('success' , 'Job Type delete successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }
    //End Job Type

    //Start Job Category
    public function indexJobCategory() {
        $jobCategories = JobCategory::get();
        return view('admin.settings.job-category.index' , compact('jobCategories'));
    }

    public function createViewJobCategory() {
        return view('admin.settings.job-category.create');
    }

    public function postJobCategory(Request $request) {
        $request->validate([
            'job-category' => 'required|unique:job_categories,value|max:50'
        ]);

        JobCategory::create([
            'value'=> $request['job-category'],
            'status' => 'active',
        ]);

        return redirect()->back()->with('success' , 'Job Category submitted successfully.');
    }

    public function updateJobCategory($id) {
        $record = JobCategory::find(decrypt($id));
        if($record) {
            return view('admin.settings.job-category.update' , compact('record'));
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }

    public function updatePostJobCategory(Request $request , $id) {
        $record = JobCategory::find(decrypt($id));
        if($record) {
            $request->validate([
                'job-category' => 'required|unique:job_categories,value|max:50'
            ]);

            $record->value = $request['job-category'];
            $record->save();
            return redirect()->back()->with('success' , 'Job Category updated successfully.');
        }
        else {
            return redirect()->back()->with('success' , 'wrong access.');
        }

    }

    public function inactiveJobCategory($id) {
        $record = JobCategory::find(decrypt($id));
        if($record) {
            $record->status = 'inactive';
            $record->save();
            return redirect()->back()->with('success' , 'Job Category Inactive successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }

    public function activeJobCategory($id) {
        $record = JobCategory::find(decrypt($id));
        if($record) {
            $record->status = 'active';
            $record->save();
            return redirect()->back()->with('success' , 'Job Category active successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }

    }

    public function deleteJobCategory($id) {
        $record = JobCategory::find(decrypt($id));
        if($record) {
            $record->delete();
            return redirect()->back()->with('success' , 'Job Category delete successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }
    //End Job Category

    //Start Nationality
    public function indexNationality() {
        $nationalities = Nationality::get();
        return view('admin.settings.nationality.index' , compact('nationalities'));
    }

    public function createViewNationality() {
        return view('admin.settings.nationality.create');
    }

    public function postNationality(Request $request) {
        $request->validate([
            'nationality' => 'required|unique:nationalities,value|max:50'
        ]);

        Nationality::create([
            'value'=> $request['nationality'],
            'status' => 'active',
        ]);

        return redirect()->back()->with('success' , 'Nationality submitted successfully.');
    }

    public function updateNationality($id) {
        $record = Nationality::find(decrypt($id));
        if($record) {
            return view('admin.settings.nationality.update' , compact('record'));
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }

    public function updatePostNationality(Request $request , $id) {
        $record = Nationality::find(decrypt($id));
        if($record) {
            $request->validate([
                'nationality' => 'required|unique:nationalities,value|max:50'
            ]);

            $record->value = $request['nationality'];
            $record->save();
            return redirect()->back()->with('success' , 'Nationality updated successfully.');
        }
        else {
            return redirect()->back()->with('success' , 'wrong access.');
        }

    }

    public function inactiveNationality($id) {
        $record = Nationality::find(decrypt($id));
        if($record) {
            $record->status = 'inactive';
            $record->save();
            return redirect()->back()->with('success' , 'Nationality Inactive successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }

    public function activeNationality($id) {
        $record = Nationality::find(decrypt($id));
        if($record) {
            $record->status = 'active';
            $record->save();
            return redirect()->back()->with('success' , 'Nationality active successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }

    }

    public function deleteNationality($id) {
        $record = Nationality::find(decrypt($id));
        if($record) {
            $record->delete();
            return redirect()->back()->with('success' , 'Nationality delete successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }
    //End Nationality

    //Start Gender
    public function indexGender() {
        $genders = Gender::get();
        return view('admin.settings.gender.index' , compact('genders'));
    }

    public function createViewGender() {
        return view('admin.settings.gender.create');
    }

    public function postGender(Request $request) {
        $request->validate([
            'gender' => 'required|unique:genders,value|max:50'
        ]);

        Gender::create([
            'value'=> $request['gender'],
            'status' => 'active',
        ]);

        return redirect()->back()->with('success' , 'Gender submitted successfully.');
    }

    public function updateGender($id) {
        $record = Gender::find(decrypt($id));
        if($record) {
            return view('admin.settings.gender.update' , compact('record'));
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }

    public function updatePostGender(Request $request , $id) {
        $record = Gender::find(decrypt($id));
        if($record) {
            $request->validate([
                'gender' => 'required|unique:genders,value|max:50'
            ]);

            $record->value = $request['gender'];
            $record->save();
            return redirect()->back()->with('success' , 'Gender updated successfully.');
        }
        else {
            return redirect()->back()->with('success' , 'wrong access.');
        }

    }

    public function inactiveGender($id) {
        $record = Gender::find(decrypt($id));
        if($record) {
            $record->status = 'inactive';
            $record->save();
            return redirect()->back()->with('success' , 'Gender Inactive successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }

    public function activeGender($id) {
        $record = Gender::find(decrypt($id));
        if($record) {
            $record->status = 'active';
            $record->save();
            return redirect()->back()->with('success' , 'Gender active successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }

    }

    public function deleteGender($id) {
        $record = Gender::find(decrypt($id));
        if($record) {
            $record->delete();
            return redirect()->back()->with('success' , 'Gender delete successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }
    //End Gender

    //Start Martial Status
    public function indexMartialStatus() {
        $martialStatus = MartialStatus::get();
        return view('admin.settings.martial-status.index' , compact('martialStatus'));
    }

    public function createViewMartialStatus() {
        return view('admin.settings.martial-status.create');
    }

    public function postMartialStatus(Request $request) {
        $request->validate([
            'martial-status' => 'required|unique:martial_statuses,value|max:50'
        ]);

        MartialStatus::create([
            'value'=> $request['martial-status'],
            'status' => 'active',
        ]);

        return redirect()->back()->with('success' , 'Martial status submitted successfully.');
    }

    public function updateMartialStatus($id) {
        $record = MartialStatus::find(decrypt($id));
        if($record) {
            return view('admin.settings.martial-status.update' , compact('record'));
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }

    public function updatePostMartialStatus(Request $request , $id) {
        $record = MartialStatus::find(decrypt($id));
        if($record) {
            $request->validate([
                'martial-status' => 'required|unique:martial_statuses,value|max:50'
            ]);

            $record->value = $request['martial-status'];
            $record->save();
            return redirect()->back()->with('success' , 'Martial Status updated successfully.');
        }
        else {
            return redirect()->back()->with('success' , 'wrong access.');
        }

    }

    public function inactiveMartialStatus($id) {
        $record = MartialStatus::find(decrypt($id));
        if($record) {
            $record->status = 'inactive';
            $record->save();
            return redirect()->back()->with('success' , 'Martial Status Inactive successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }

    public function activeMartialStatus($id) {
        $record = MartialStatus::find(decrypt($id));
        if($record) {
            $record->status = 'active';
            $record->save();
            return redirect()->back()->with('success' , 'Martial Status active successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }

    }

    public function deleteMartialStatus($id) {
        $record = MartialStatus::find(decrypt($id));
        if($record) {
            $record->delete();
            return redirect()->back()->with('success' , 'Martial Status delete successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }
    //End Martial Status

    //Start Contact Title
    public function indexContactTitle() {
        $contactTitles = ContactTitle::get();
        return view('admin.settings.contact-title.index' , compact('contactTitles'));
    }

    public function createViewContactTitle() {
        return view('admin.settings.contact-title.create');
    }

    public function postContactTitle(Request $request) {
        $request->validate([
            'contact-title' => 'required|unique:contact_titles,value|max:50'
        ]);

        ContactTitle::create([
            'value'=> $request['contact-title'],
            'status' => 'active',
        ]);

        return redirect()->back()->with('success' , 'Contact title submitted successfully.');
    }

    public function updateContactTitle($id) {
        $record = ContactTitle::find(decrypt($id));
        if($record) {
            return view('admin.settings.contact-title.update' , compact('record'));
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }

    public function updatePostContactTitle(Request $request , $id) {
        $record = ContactTitle::find(decrypt($id));
        if($record) {
            $request->validate([
                'contact-title' => 'required|unique:contact_titles,value|max:50'
            ]);

            $record->value = $request['contact-title'];
            $record->save();
            return redirect()->back()->with('success' , 'Contact title updated successfully.');
        }
        else {
            return redirect()->back()->with('success' , 'wrong access.');
        }

    }

    public function inactiveContactTitle($id) {
        $record = ContactTitle::find(decrypt($id));
        if($record) {
            $record->status = 'inactive';
            $record->save();
            return redirect()->back()->with('success' , 'Contact title Inactive successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }

    public function activeContactTitle($id) {
        $record = ContactTitle::find(decrypt($id));
        if($record) {
            $record->status = 'active';
            $record->save();
            return redirect()->back()->with('success' , 'Contact title active successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }

    }

    public function deleteContactTitle($id) {
        $record = ContactTitle::find(decrypt($id));
        if($record) {
            $record->delete();
            return redirect()->back()->with('success' , 'Contact title delete successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }
    //End Contact Title

    //Start Contact Title
    public function indexIndustryAndBusiness() {
        $industryAndBusinesses = IndustryAndBusiness::get();
        return view('admin.settings.industry-and-business.index' , compact('industryAndBusinesses'));
    }

    public function createViewIndustryAndBusiness() {
        return view('admin.settings.industry-and-business.create');
    }

    public function postIndustryAndBusiness(Request $request) {
        $request->validate([
            'industry-and-business' => 'required|unique:industry_and_businesses,value|max:50'
        ]);

        IndustryAndBusiness::create([
            'value'=> $request['industry-and-business'],
            'status' => 'active',
        ]);

        return redirect()->back()->with('success' , 'Industry & Business submitted successfully.');
    }

    public function updateIndustryAndBusiness($id) {
        $record = IndustryAndBusiness::find(decrypt($id));
        if($record) {
            return view('admin.settings.industry-and-business.update' , compact('record'));
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }

    public function updatePostIndustryAndBusiness(Request $request , $id) {
        $record = IndustryAndBusiness::find(decrypt($id));
        if($record) {
            $request->validate([
                'industry-and-business' => 'required|unique:industry_and_businesses,value|max:50'
            ]);
            $record->value = $request['industry-and-business'];
            $record->save();
            return redirect()->back()->with('success' , 'Industry & Business updated successfully.');
        }
        else {
            return redirect()->back()->with('success' , 'wrong access.');
        }

    }

    public function inactiveIndustryAndBusiness($id) {
        $record = IndustryAndBusiness::find(decrypt($id));
        if($record) {
            $record->status = 'inactive';
            $record->save();
            return redirect()->back()->with('success' , 'Industry & Business Inactive successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }

    public function activeIndustryAndBusiness($id) {
        $record = IndustryAndBusiness::find(decrypt($id));
        if($record) {
            $record->status = 'active';
            $record->save();
            return redirect()->back()->with('success' , 'Industry & Business active successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }

    }

    public function deleteIndustryAndBusiness($id) {
        $record = IndustryAndBusiness::find(decrypt($id));
        if($record) {
            $record->delete();
            return redirect()->back()->with('success' , 'Industry & Business delete successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }
    //End Contact Title

    //Start Country
    public function indexCountry() {
        $countries = Country::get();
        return view('admin.settings.country.index' , compact('countries'));
    }

    public function createViewCountry() {
        return view('admin.settings.country.create');
    }

    public function postCountry(Request $request) {
        $request->validate([
            'country' => 'required|unique:countries,value|max:50'
        ]);

        Country::create([
            'value'=> $request['country'],
            'status' => 'active',
        ]);

        return redirect()->back()->with('success' , 'Country submitted successfully.');
    }

    public function updateCountry($id) {
        $record = Country::find(decrypt($id));
        if($record) {
            return view('admin.settings.country.update' , compact('record'));
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }

    public function updatePostCountry(Request $request , $id) {
        $record = Country::find(decrypt($id));
        if($record) {
            $request->validate([
                'country' => 'required|unique:countries,value|max:50'
            ]);

            $record->value = $request['country'];
            $record->save();
            return redirect()->back()->with('success' , 'Country updated successfully.');
        }
        else {
            return redirect()->back()->with('success' , 'wrong access.');
        }

    }

    public function inactiveCountry($id) {
        $record = Country::find(decrypt($id));
        if($record) {
            $record->status = 'inactive';
            $record->save();
            return redirect()->back()->with('success' , 'Country Inactive successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }

    public function activeCountry($id) {
        $record = Country::find(decrypt($id));
        if($record) {
            $record->status = 'active';
            $record->save();
            return redirect()->back()->with('success' , 'Country active successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }

    }

    public function deleteCountry($id) {
        $record = Country::find(decrypt($id));
        if($record) {
            $record->delete();
            return redirect()->back()->with('success' , 'Country delete successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }
    //End Country

    //Start City
    public function indexCity() {
        $cities = City::get();
        return view('admin.settings.city.index' , compact('cities'));
    }

    public function createViewCity() {
        return view('admin.settings.city.create');
    }

    public function postCity(Request $request) {
        $request->validate([
            'city-name' => 'required|unique:cities,value|max:50'
        ]);

        City::create([
            'value'=> $request['city-name'],
            'status' => 'active',
        ]);

        return redirect()->back()->with('success' , 'City submitted successfully.');
    }

    public function updateCity($id) {
        $record = City::find(decrypt($id));
        if($record) {
            return view('admin.settings.city.update' , compact('record'));
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }

    public function updatePostCity(Request $request , $id) {
        $record = City::find(decrypt($id));
        if($record) {
            $request->validate([
                'city-name' => 'required|unique:cities,value|max:50'
            ]);

            $record->value = $request['city-name'];
            $record->save();
            return redirect()->back()->with('success' , 'City updated successfully.');
        }
        else {
            return redirect()->back()->with('success' , 'wrong access.');
        }

    }

    public function inactiveCity($id) {
        $record = City::find(decrypt($id));
        if($record) {
            $record->status = 'inactive';
            $record->save();
            return redirect()->back()->with('success' , 'City Inactive successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }

    public function activeCity($id) {
        $record = City::find(decrypt($id));
        if($record) {
            $record->status = 'active';
            $record->save();
            return redirect()->back()->with('success' , 'City active successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }

    }

    public function deleteCity($id) {
        $record = City::find(decrypt($id));
        if($record) {
            $record->delete();
            return redirect()->back()->with('success' , 'City delete successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }
    //End City

    //Start State
    public function indexState() {
        $states = State::get();
        return view('admin.settings.state.index' , compact('states'));
    }

    public function createViewState() {
        return view('admin.settings.state.create');
    }

    public function postState(Request $request) {
        $request->validate([
            'state-name' => 'required|unique:states,value|max:50'
        ]);

        State::create([
            'value'=> $request['state-name'],
            'status' => 'active',
        ]);

        return redirect()->back()->with('success' , 'State submitted successfully.');
    }

    public function updateState($id) {
        $record = State::find(decrypt($id));
        if($record) {
            return view('admin.settings.state.update' , compact('record'));
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }

    public function updatePostState(Request $request , $id) {
        $record = State::find(decrypt($id));
        if($record) {
            $request->validate([
                'state-name' => 'required|unique:states,value|max:50'
            ]);

            $record->value = $request['state-name'];
            $record->save();
            return redirect()->back()->with('success' , 'State updated successfully.');
        }
        else {
            return redirect()->back()->with('success' , 'wrong access.');
        }

    }

    public function inactiveState($id) {
        $record = State::find(decrypt($id));
        if($record) {
            $record->status = 'inactive';
            $record->save();
            return redirect()->back()->with('success' , 'State Inactive successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }

    public function activeState($id) {
        $record = State::find(decrypt($id));
        if($record) {
            $record->status = 'active';
            $record->save();
            return redirect()->back()->with('success' , 'State active successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }

    }

    public function deleteState($id) {
        $record = State::find(decrypt($id));
        if($record) {
            $record->delete();
            return redirect()->back()->with('success' , 'State delete successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }
    //End State
}
