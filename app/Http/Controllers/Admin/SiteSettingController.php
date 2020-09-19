<?php

namespace App\Http\Controllers\Admin;

use App\BloodGroup;
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
use App\Relationship;
use App\Attendance;
use App\EmploymentType;
use App\PeriodFrequency;
use Illuminate\Http\Request;
use Symfony\Component\Process\Pipes\UnixPipes;

class SiteSettingController extends Controller
{
    //Start Contract Type
    public function indexContractType() {
        try{
            $contractTypes = ContractType::get();
            return view('admin.settings.contract-type.index' , compact('contractTypes'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function createViewContractType() {
        try{
            return view('admin.settings.contract-type.create');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function postContractType(Request $request) {
        try{
            $request->validate([
                'contract-type' => 'required|unique:contract_types,value|max:50'
            ]);

            ContractType::create([
                'value'=> $request['contract-type'],
                'status' => 'active',
            ]);

            return redirect()->back()->with('success' , 'Contract type submitted successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updateContractType($id) {
        try{
            $record = ContractType::find(decrypt($id));
            if($record) {
                return view('admin.settings.contract-type.update' , compact('record'));
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updatePostContractType(Request $request , $id) {
        try{
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
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function inactiveContractType($id) {
        try{
            $record = ContractType::find(decrypt($id));
            if($record) {
                $record->status = 'inactive';
                $record->save();
                return redirect()->back()->with('success' , 'Contract type Inactive successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function activeContractType($id) {
        try{
            $record = ContractType::find(decrypt($id));
            if($record) {
                $record->status = 'active';
                $record->save();
                return redirect()->back()->with('success' , 'Contract type active successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }

    public function deleteContractType($id) {
        try{
            $record = ContractType::find(decrypt($id));
            if($record) {
                $record->delete();
                return redirect()->back()->with('success' , 'Contract type delete successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    //End Contract Type

    //Start Contact Tag
    public function indexContactTag() {
        try{
            $contactTags = ContactTag::get();
            return view('admin.settings.contact-tag.index' , compact('contactTags'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function createViewContactTag() {
        try{
            return view('admin.settings.contact-tag.create');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function postContactTag(Request $request) {
        try{
            $request->validate([
                'contact-tag' => 'required|unique:contact_tags,value|max:50'
            ]);

            ContactTag::create([
                'value'=> $request['contact-tag'],
                'status' => 'active',
            ]);

            return redirect()->back()->with('success' , 'Contact tag submitted successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updateContactTag($id) {
        try{
            $record = ContactTag::find(decrypt($id));
            if($record) {
                return view('admin.settings.contact-tag.update' , compact('record'));
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updatePostContactTag(Request $request , $id) {
        try{
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
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }

    public function inactiveContactTag($id) {
        try{
            $record = ContactTag::find(decrypt($id));
            if($record) {
                $record->status = 'inactive';
                $record->save();
                return redirect()->back()->with('success' , 'Contact tag Inactive successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function activeContactTag($id) {
        try{
            $record = ContactTag::find(decrypt($id));
            if($record) {
                $record->status = 'active';
                $record->save();
                return redirect()->back()->with('success' , 'Contact tag active successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }

    public function deleteContactTag($id) {
        try{
            $record = ContactTag::find(decrypt($id));
            if($record) {
                $record->delete();
                return redirect()->back()->with('success' , 'Contact tag delete successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    //End Contact Tag

    //Start Education Level
    public function indexEducationLevel() {
        try{
            $educationLevels = EducationLevel::get();
            return view('admin.settings.education-level.index' , compact('educationLevels'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function createViewEducationLevel() {
        try{
            return view('admin.settings.education-level.create');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function postEducationLevel(Request $request) {
        try{
            $request->validate([
                'education-level' => 'required|unique:education_levels,value|max:50'
            ]);

            EducationLevel::create([
                'value'=> $request['education-level'],
                'status' => 'active',
            ]);

            return redirect()->back()->with('success' , 'Education level submitted successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updateEducationLevel($id) {
        try{
            $record = EducationLevel::find(decrypt($id));
            if($record) {
                return view('admin.settings.education-level.update' , compact('record'));
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updatePostEducationLevel(Request $request , $id) {
        try{
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
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }

    public function inactiveEducationLevel($id) {
        try{
            $record = EducationLevel::find(decrypt($id));
            if($record) {
                $record->status = 'inactive';
                $record->save();
                return redirect()->back()->with('success' , 'Education level Inactive successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function activeEducationLevel($id) {
        try{
            $record = EducationLevel::find(decrypt($id));
            if($record) {
                $record->status = 'active';
                $record->save();
                return redirect()->back()->with('success' , 'Education level active successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }

    public function deleteEducationLevel($id) {
        try{
            $record = EducationLevel::find(decrypt($id));
            if($record) {
                $record->delete();
                return redirect()->back()->with('success' , 'Education level delete successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    //End Education Level

    //Start Document Type
    public function indexDocumentType() {
        try{
            $documentTypes = DocumentType::get();
            return view('admin.settings.document-type.index' , compact('documentTypes'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function createViewDocumentType() {
        try{
            return view('admin.settings.document-type.create');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function postDocumentType(Request $request) {
        try{
            $request->validate([
                'document-type' => 'required|unique:document_types,value|max:50'
            ]);

            DocumentType::create([
                'value'=> $request['document-type'],
                'status' => 'active',
            ]);

            return redirect()->back()->with('success' , 'Document Type submitted successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updateDocumentType($id) {
        try{
            $record = DocumentType::find(decrypt($id));
            if($record) {
                return view('admin.settings.document-type.update' , compact('record'));
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updatePostDocumentType(Request $request , $id) {
        try{
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
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }

    public function inactiveDocumentType($id) {
        try{
            $record = DocumentType::find(decrypt($id));
            if($record) {
                $record->status = 'inactive';
                $record->save();
                return redirect()->back()->with('success' , 'Document type Inactive successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function activeDocumentType($id) {
        try{
            $record = DocumentType::find(decrypt($id));
            if($record) {
                $record->status = 'active';
                $record->save();
                return redirect()->back()->with('success' , 'Document Type active successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }

    public function deleteDocumentType($id) {
        try{
            $record = DocumentType::find(decrypt($id));
            if($record) {
                $record->delete();
                return redirect()->back()->with('success' , 'Document Type delete successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    //End Document Type

    //Start Job Type
    public function indexJobType() {
        try{
            $jobTypes = JobType::get();
            return view('admin.settings.job-type.index' , compact('jobTypes'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function createViewJobType() {
        try{
            return view('admin.settings.job-type.create');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function postJobType(Request $request) {
        try{
            $request->validate([
                'job-type' => 'required|unique:job_types,value|max:50'
            ]);

            JobType::create([
                'value'=> $request['job-type'],
                'status' => 'active',
            ]);

            return redirect()->back()->with('success' , 'Job Type submitted successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updateJobType($id) {
        try{
            $record = JobType::find(decrypt($id));
            if($record) {
                return view('admin.settings.job-type.update' , compact('record'));
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updatePostJobType(Request $request , $id) {
        try{
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
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }

    public function inactiveJobType($id) {
        try{
            $record = JobType::find(decrypt($id));
            if($record) {
                $record->status = 'inactive';
                $record->save();
                return redirect()->back()->with('success' , 'Job type Inactive successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function activeJobType($id) {
        try{
            $record = JobType::find(decrypt($id));
            if($record) {
                $record->status = 'active';
                $record->save();
                return redirect()->back()->with('success' , 'Job Type active successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }

    public function deleteJobType($id) {
        try{
            $record = JobType::find(decrypt($id));
            if($record) {
                $record->delete();
                return redirect()->back()->with('success' , 'Job Type delete successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    //End Job Type

    //Start Job Category
    public function indexJobCategory() {
        try{
            $jobCategories = JobCategory::get();
            return view('admin.settings.job-category.index' , compact('jobCategories'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function createViewJobCategory() {
        try{
            return view('admin.settings.job-category.create');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function postJobCategory(Request $request) {
        try{
            $request->validate([
                'job-category' => 'required|unique:job_categories,value|max:50'
            ]);

            JobCategory::create([
                'value'=> $request['job-category'],
                'status' => 'active',
            ]);

            return redirect()->back()->with('success' , 'Job Category submitted successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updateJobCategory($id) {
        try{
            $record = JobCategory::find(decrypt($id));
            if($record) {
                return view('admin.settings.job-category.update' , compact('record'));
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updatePostJobCategory(Request $request , $id) {
        try{
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
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }

    public function inactiveJobCategory($id) {
        try{
            $record = JobCategory::find(decrypt($id));
            if($record) {
                $record->status = 'inactive';
                $record->save();
                return redirect()->back()->with('success' , 'Job Category Inactive successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function activeJobCategory($id) {
        try{
            $record = JobCategory::find(decrypt($id));
            if($record) {
                $record->status = 'active';
                $record->save();
                return redirect()->back()->with('success' , 'Job Category active successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }

    public function deleteJobCategory($id) {
        try{
            $record = JobCategory::find(decrypt($id));
            if($record) {
                $record->delete();
                return redirect()->back()->with('success' , 'Job Category delete successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    //End Job Category

    //Start Nationality
    public function indexNationality() {
        try{
            $nationalities = Nationality::get();
            return view('admin.settings.nationality.index' , compact('nationalities'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function createViewNationality() {
        try{
            return view('admin.settings.nationality.create');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function postNationality(Request $request) {
        try{
            $request->validate([
                'nationality' => 'required|unique:nationalities,value|max:50'
            ]);

            Nationality::create([
                'value'=> $request['nationality'],
                'status' => 'active',
            ]);

            return redirect()->back()->with('success' , 'Nationality submitted successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updateNationality($id) {
        try{
            $record = Nationality::find(decrypt($id));
            if($record) {
                return view('admin.settings.nationality.update' , compact('record'));
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updatePostNationality(Request $request , $id) {
        try{
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
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }

    public function inactiveNationality($id) {
        try{
            $record = Nationality::find(decrypt($id));
            if($record) {
                $record->status = 'inactive';
                $record->save();
                return redirect()->back()->with('success' , 'Nationality Inactive successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function activeNationality($id) {
        try{
            $record = Nationality::find(decrypt($id));
            if($record) {
                $record->status = 'active';
                $record->save();
                return redirect()->back()->with('success' , 'Nationality active successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }

    public function deleteNationality($id) {
        try{
            $record = Nationality::find(decrypt($id));
            if($record) {
                $record->delete();
                return redirect()->back()->with('success' , 'Nationality delete successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    //End Nationality

    //Start Gender
    public function indexGender() {
        try{
            $genders = Gender::get();
            return view('admin.settings.gender.index' , compact('genders'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function createViewGender() {
        try{
            return view('admin.settings.gender.create');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function postGender(Request $request) {
        try{
            $request->validate([
                'gender' => 'required|unique:genders,value|max:50'
            ]);

            Gender::create([
                'value'=> $request['gender'],
                'status' => 'active',
            ]);

            return redirect()->back()->with('success' , 'Gender submitted successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updateGender($id) {
        try{
            $record = Gender::find(decrypt($id));
            if($record) {
                return view('admin.settings.gender.update' , compact('record'));
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updatePostGender(Request $request , $id) {
        try{
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
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }

    public function inactiveGender($id) {
        try{
            $record = Gender::find(decrypt($id));
            if($record) {
                $record->status = 'inactive';
                $record->save();
                return redirect()->back()->with('success' , 'Gender Inactive successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function activeGender($id) {
        try{
            $record = Gender::find(decrypt($id));
            if($record) {
                $record->status = 'active';
                $record->save();
                return redirect()->back()->with('success' , 'Gender active successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }

    public function deleteGender($id) {
        try{
            $record = Gender::find(decrypt($id));
            if($record) {
                $record->delete();
                return redirect()->back()->with('success' , 'Gender delete successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    //End Gender

    //Start Martial Status
    public function indexMartialStatus() {
        try{
            $martialStatus = MartialStatus::get();
            return view('admin.settings.martial-status.index' , compact('martialStatus'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function createViewMartialStatus() {
        try{
            return view('admin.settings.martial-status.create');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function postMartialStatus(Request $request) {
        try{
            $request->validate([
                'martial-status' => 'required|unique:martial_statuses,value|max:50'
            ]);

            MartialStatus::create([
                'value'=> $request['martial-status'],
                'status' => 'active',
            ]);

            return redirect()->back()->with('success' , 'Martial status submitted successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updateMartialStatus($id) {
        try{
            $record = MartialStatus::find(decrypt($id));
            if($record) {
                return view('admin.settings.martial-status.update' , compact('record'));
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updatePostMartialStatus(Request $request , $id) {
        try{
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
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }

    public function inactiveMartialStatus($id) {
        try{
            $record = MartialStatus::find(decrypt($id));
            if($record) {
                $record->status = 'inactive';
                $record->save();
                return redirect()->back()->with('success' , 'Martial Status Inactive successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function activeMartialStatus($id) {
        try{
            $record = MartialStatus::find(decrypt($id));
            if($record) {
                $record->status = 'active';
                $record->save();
                return redirect()->back()->with('success' , 'Martial Status active successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }

    public function deleteMartialStatus($id) {
        try{
            $record = MartialStatus::find(decrypt($id));
            if($record) {
                $record->delete();
                return redirect()->back()->with('success' , 'Martial Status delete successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    //End Martial Status

    //Start Contact Title
    public function indexContactTitle() {
        try{
            $contactTitles = ContactTitle::get();
            return view('admin.settings.contact-title.index' , compact('contactTitles'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function createViewContactTitle() {
        try{
            return view('admin.settings.contact-title.create');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function postContactTitle(Request $request) {
        try{
            $request->validate([
                'contact-title' => 'required|unique:contact_titles,value|max:50'
            ]);

            ContactTitle::create([
                'value'=> $request['contact-title'],
                'status' => 'active',
            ]);

            return redirect()->back()->with('success' , 'Contact title submitted successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updateContactTitle($id) {
        try{
            $record = ContactTitle::find(decrypt($id));
            if($record) {
                return view('admin.settings.contact-title.update' , compact('record'));
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updatePostContactTitle(Request $request , $id) {
        try{
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
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }

    public function inactiveContactTitle($id) {
        try{
            $record = ContactTitle::find(decrypt($id));
            if($record) {
                $record->status = 'inactive';
                $record->save();
                return redirect()->back()->with('success' , 'Contact title Inactive successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function activeContactTitle($id) {
        try{
            $record = ContactTitle::find(decrypt($id));
            if($record) {
                $record->status = 'active';
                $record->save();
                return redirect()->back()->with('success' , 'Contact title active successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }

    public function deleteContactTitle($id) {
        try{
            $record = ContactTitle::find(decrypt($id));
            if($record) {
                $record->delete();
                return redirect()->back()->with('success' , 'Contact title delete successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    //End Contact Title

    //Start Industry And Business
    public function indexIndustryAndBusiness() {
        try{
            $industryAndBusinesses = IndustryAndBusiness::get();
            return view('admin.settings.industry-and-business.index' , compact('industryAndBusinesses'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function createViewIndustryAndBusiness() {
        try{
            return view('admin.settings.industry-and-business.create');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
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
        try{
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
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }

    public function inactiveIndustryAndBusiness($id) {
        try{
            $record = IndustryAndBusiness::find(decrypt($id));
            if($record) {
                $record->status = 'inactive';
                $record->save();
                return redirect()->back()->with('success' , 'Industry & Business Inactive successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function activeIndustryAndBusiness($id) {
        try{
            $record = IndustryAndBusiness::find(decrypt($id));
            if($record) {
                $record->status = 'active';
                $record->save();
                return redirect()->back()->with('success' , 'Industry & Business active successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }

    public function deleteIndustryAndBusiness($id) {
        try{
            $record = IndustryAndBusiness::find(decrypt($id));
            if($record) {
                $record->delete();
                return redirect()->back()->with('success' , 'Industry & Business delete successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    //End Contact Title

    //Start Country
    public function indexCountry() {
        try{
            $countries = Country::get();
            return view('admin.settings.country.index' , compact('countries'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function createViewCountry() {
        try{
            return view('admin.settings.country.create');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function postCountry(Request $request) {
        try{

            $request->validate([
                'country' => 'required|unique:countries,value|max:50',
                'code' => 'required',
                'phonecode' => 'required',
            ]);

            Country::create([
                'value'=> $request['country'],
                'status' => 'active',
                'phonecode' => $request['phonecode'],
                'code' => $request['code'],
            ]);

            return redirect()->back()->with('success' , 'Country submitted successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updateCountry($id) {
        try{
            $record = Country::find(decrypt($id));
            if($record) {
                return view('admin.settings.country.update' , compact('record'));
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updatePostCountry(Request $request , $id) {
        try{
            $record = Country::find(decrypt($id));
            if($record) {
                $request->validate([
                    'country' => 'required|unique:countries,value|max:50',
                    'code' => 'required',
                    'phonecode' => 'required',
                ]);

                $record->value = $request['country'];
                $record->code = $request['code'];
                $record->phonecode = $request['phonecode'];

                $record->save();
                return redirect()->back()->with('success' , 'Country updated successfully.');
            }
            else {
                return redirect()->back()->with('success' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }

    public function inactiveCountry($id) {
        try{
            $record = Country::find(decrypt($id));
            if($record) {
                $record->status = 'inactive';
                $record->save();
                return redirect()->back()->with('success' , 'Country Inactive successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function activeCountry($id) {
        try{
            $record = Country::find(decrypt($id));
            if($record) {
                $record->status = 'active';
                $record->save();
                return redirect()->back()->with('success' , 'Country active successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }

    public function deleteCountry($id) {
        try{
            $record = Country::find(decrypt($id));
            if($record) {
                $record->delete();
                return redirect()->back()->with('success' , 'Country delete successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    //End Country

    //Start City
    public function indexCity() {
        try{
            $cities = City::with('state')->get();
            //dd($cities);
            return view('admin.settings.city.index' , compact('cities'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function createViewCity() {
        try{
	    $states=State::whereStatus('active')->get();
            return view('admin.settings.city.create',compact('states'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function postCity(Request $request) {
        try{
            $request->validate([
                'city-name' => 'required|unique:cities,value|max:50',
		          'state' => 'required',
            ]);

            City::create([
                'value'=> $request['city-name'],
 		         'state_id'=> $request['state'],
                'status' => 'active',
            ]);

            return redirect()->back()->with('success' , 'City submitted successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updateCity($id) {
        try{
            $record = City::find(decrypt($id));
 	    $states=State::whereStatus('active')->get();
            if($record) {
                return view('admin.settings.city.update' , compact('record','states'));
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updatePostCity(Request $request , $id) {
        try{
            $record = City::find(decrypt($id));
            if($record) {
                $request->validate([
                    'city-name' => 'required|unique:cities,value|max:50'
                ]);

                $record->value = $request['city-name'];
 		$record->state_id = $request['state'];
                $record->save();
                return redirect()->back()->with('success' , 'City updated successfully.');
            }
            else {
                return redirect()->back()->with('success' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }

    public function inactiveCity($id) {
        try{
            $record = City::find(decrypt($id));
            if($record) {
                $record->status = 'inactive';
                $record->save();
                return redirect()->back()->with('success' , 'City Inactive successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function activeCity($id) {
        try{
            $record = City::find(decrypt($id));
            if($record) {
                $record->status = 'active';
                $record->save();
                return redirect()->back()->with('success' , 'City active successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }

    public function deleteCity($id) {
        try{
            $record = City::find(decrypt($id));
            if($record) {
                $record->delete();
                return redirect()->back()->with('success' , 'City delete successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function saveNewCity(Request $request){
        try {
            if($request->ajax()){
                 $request->validate([
                    'state_id' => 'required',
                    'city' => 'required',
                ]);
                 $city = $request->city;
                 $state_id = $request->state_id;
                $city = City::create(['value' => $city, 'state_id' => $state_id]);
                return response()->json(['success' => true, 'message' => 'City added']);
            }
            
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    //End City

    //Start State
    public function indexState() {
        try{
            $states = State::with('country')->get();
            return view('admin.settings.state.index' , compact('states'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function createViewState() {
        try{
            $countries=Country::whereStatus('active')->get();
            return view('admin.settings.state.create',compact('countries'));

        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function postState(Request $request) {
        try{

            $request->validate([
              'state-name' => 'required|unique:states,value|max:50',
		      'country' => 'required',
            ]);

            State::create([
                'value'=> $request['state-name'],
		      'country_id'=> $request['country'],
                'status' => 'active',
             
            ]);

            return redirect()->back()->with('success' , 'State submitted successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updateState($id) {
        try{
            $record = State::find(decrypt($id));
	    $countries=Country::whereStatus('active')->get();
            if($record) {
                return view('admin.settings.state.update' , compact('record','countries'));
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updatePostState(Request $request , $id) {
        try{
            $record = State::find(decrypt($id));
            if($record) {
                $request->validate([
                    'state-name' => 'required|unique:states,value|max:50'
                ]);

                $record->value = $request['state-name'];
		$record->country_id = $request['country'];
                $record->save();
                return redirect()->back()->with('success' , 'State updated successfully.');
            }
            else {
                return redirect()->back()->with('success' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }

    public function inactiveState($id) {
        try{
            $record = State::find(decrypt($id));
            if($record) {
                $record->status = 'inactive';
                $record->save();
                return redirect()->back()->with('success' , 'State Inactive successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function activeState($id) {
        try{
            $record = State::find(decrypt($id));
            if($record) {
                $record->status = 'active';
                $record->save();
                return redirect()->back()->with('success' , 'State active successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }

    public function deleteState($id) {
        try{
            $record = State::find(decrypt($id));
            if($record) {
                $record->delete();
                return redirect()->back()->with('success' , 'State delete successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    //End State


    //Start Blood Group
    public function indexBloodGroup() {
        try {
            $bloodGroups = BloodGroup::get();
            return view('admin.settings.blood-group.index' , compact('bloodGroups'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
       
    }

    public function createViewBloodGroup() {
        try {
           return view('admin.settings.blood-group.create');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
        
    }

    public function postBloodGroup(Request $request) {
        try {
            $request->validate([
                'blood_group' => 'required|unique:blood_groups,value|max:50'
            ]);

            BloodGroup::create([
                'value'=> $request['blood_group'],
                'status' => 'active',
            ]);

            return redirect()->back()->with('success' , 'Blood Group submitted successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updateBloodGroup($id) {
        try {
            $record = BloodGroup::find(decrypt($id));
            if($record) {
                return view('admin.settings.blood-group.update' , compact('record'));
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updatePostBloodGroup(Request $request , $id) {
        try {
            $record = BloodGroup::find(decrypt($id));
            if($record) {
                $request->validate([
                    'blood_group' => 'required|unique:blood_groups,value|max:50'
                ]);

                $record->value = $request['blood_group'];
                $record->save();
                return redirect()->back()->with('success' , 'Blood Group updated successfully.');
            }
            else {
                return redirect()->back()->with('success' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }

    public function inactiveBloodGroup($id) {
        try{
            $record = BloodGroup::find(decrypt($id));
            if($record) {
                $record->status = 'inactive';
                $record->save();
                return redirect()->back()->with('success' , 'Blood Group Inactive successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function activeBloodGroup($id) {
        try {
            $record = BloodGroup::find(decrypt($id));
            if($record) {
                $record->status = 'active';
                $record->save();
                return redirect()->back()->with('success' , 'Contract type active successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }

    public function deleteBloodGroup($id) {
        try{
            $record = BloodGroup::find(decrypt($id));
            if($record) {
                $record->delete();
                return redirect()->back()->with('success' , 'Contract type delete successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    //End Blood Group

    //Start Attendance
    public function indexAttendance() {
        try{
            $attendances = Attendance::get();
            return view('admin.settings.attendance.index' , compact('attendances'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function createViewAttendance() {
        try{
            return view('admin.settings.attendance.create');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function postAttendance(Request $request) {
        try{
            $request->validate([
                'attendance' => 'required|unique:attendances,value|max:50'
            ]);

            Attendance::create([
                'value'=> $request['attendance'],
                'status' => 'active',
            ]);

            return redirect()->back()->with('success' , 'Attendance submitted successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updateAttendance($id) {
        try{
            $record = Attendance::find(decrypt($id));
            if($record) {
                return view('admin.settings.attendance.update' , compact('record'));
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updatePostAttendance(Request $request , $id) {
        try{
            $record = Attendance::find(decrypt($id));
            if($record) {
                $request->validate([
                    'attendance' => 'required|unique:attendances,value|max:50'
                ]);

                $record->value = $request['attendance'];
                $record->save();
                return redirect()->back()->with('success' , 'Attendance updated successfully.');
            }
            else {
                return redirect()->back()->with('success' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function inactiveAttendance($id) {
        try{
            $record = Attendance::find(decrypt($id));
            if($record) {
                $record->status = 'inactive';
                $record->save();
                return redirect()->back()->with('success' , 'Attendance Inactive successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function activeAttendance($id) {
        try{
            $record = Attendance::find(decrypt($id));
            if($record) {
                $record->status = 'active';
                $record->save();
                return redirect()->back()->with('success' , 'Attendance active successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }

    public function deleteAttendance($id) {
        try{
            $record = Attendance::find(decrypt($id));
            if($record) {
                $record->delete();
                return redirect()->back()->with('success' , 'Attendance delete successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    //End Attendance

    //Start Employment Tyoe
    public function indexEmploymentType() {
        try{
            $employmentTypes = EmploymentType::get();
            return view('admin.settings.employment-type.index' , compact('employmentTypes'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function createViewEmploymentType() {
        try{
            return view('admin.settings.employment-type.create');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function postEmploymentType(Request $request) {
        try{
            $request->validate([
                'employment_type' => 'required|unique:employment_types,value|max:50'
            ]);

            EmploymentType::create([
                'value'=> $request['employment_type'],
                'status' => 'active',
            ]);

            return redirect()->back()->with('success' , 'Employment Type submitted successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updateEmploymentType($id) {
        try{
            $record = EmploymentType::find(decrypt($id));
            if($record) {
                return view('admin.settings.employment-type.update' , compact('record'));
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updatePostEmploymentType(Request $request , $id) {
        try{
            $record = EmploymentType::find(decrypt($id));
            if($record) {
                $request->validate([
                    'employment_type' => 'required|unique:employment_types,value|max:50'
                ]);

                $record->value = $request['employment_type'];
                $record->save();
                return redirect()->back()->with('success' , 'Employment Type updated successfully.');
            }
            else {
                return redirect()->back()->with('success' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function inactiveEmploymentType($id) {
        try{
            $record = EmploymentType::find(decrypt($id));
            if($record) {
                $record->status = 'inactive';
                $record->save();
                return redirect()->back()->with('success' , 'Employment Type Inactive successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function activeEmploymentType($id) {
        try{
            $record = EmploymentType::find(decrypt($id));
            if($record) {
                $record->status = 'active';
                $record->save();
                return redirect()->back()->with('success' , 'Employment Type active successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }

    public function deleteEmploymentType($id) {
        try{
            $record = EmploymentType::find(decrypt($id));
            if($record) {
                $record->delete();
                return redirect()->back()->with('success' , 'Employment Type delete successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    //End Employment Type


    //Start Period Frequency
    public function indexPeriodFrequency() {
        try{
            $periodFrequencies = PeriodFrequency::get();
            return view('admin.settings.period-frequency.index' , compact('periodFrequencies'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function createViewPeriodFrequency() {
        try{
            return view('admin.settings.period-frequency.create');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function postPeriodFrequency(Request $request) {
        try{
            $request->validate([
                'period_frequency' => 'required|unique:period_frequencies,value|max:50'
            ]);

            PeriodFrequency::create([
                'value'=> $request['period_frequency'],
                'status' => 'active',
            ]);

            return redirect()->back()->with('success' , 'Period Frequency submitted successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updatePeriodFrequency($id) {
        try{
            $record = PeriodFrequency::find(decrypt($id));
            if($record) {
                return view('admin.settings.period-frequency.update' , compact('record'));
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updatePostPeriodFrequency(Request $request , $id) {
        try{
            $record = PeriodFrequency::find(decrypt($id));
            if($record) {
                $request->validate([
                    'period_frequency' => 'required|unique:period_frequencies,value|max:50'
                ]);

                $record->value = $request['period_frequency'];
                $record->save();
                return redirect()->back()->with('success' , 'Period Frequency updated successfully.');
            }
            else {
                return redirect()->back()->with('success' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function inactivePeriodFrequency($id) {
        try{
            $record = PeriodFrequency::find(decrypt($id));
            if($record) {
                $record->status = 'inactive';
                $record->save();
                return redirect()->back()->with('success' , 'Period Frequency Inactive successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function activePeriodFrequency($id) {
        try{
            $record = PeriodFrequency::find(decrypt($id));
            if($record) {
                $record->status = 'active';
                $record->save();
                return redirect()->back()->with('success' , 'PeriodFrequency active successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }

    public function deletePeriodFrequency($id) {
        try{
            $record = PeriodFrequency::find(decrypt($id));
            if($record) {
                $record->delete();
                return redirect()->back()->with('success' , 'Period Frequency delete successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    //End Period Frequency

     //Start Relationship
    public function indexRelationship() {
        try{
            $relationships = Relationship::get();
            return view('admin.settings.relationship.index' , compact('relationships'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function createViewRelationship() {
        try{
            return view('admin.settings.relationship.create');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function postRelationship(Request $request) {
        try{
            $request->validate([
                'relationship' => 'required|unique:relationships,value|max:50'
            ]);

            Relationship::create([
                'value'=> $request['relationship'],
                'status' => 'active',
            ]);

            return redirect()->back()->with('success' , 'Relationship submitted successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updateRelationship($id) {
        try{
            $record = Relationship::find(decrypt($id));
            if($record) {
                return view('admin.settings.relationship.update' , compact('record'));
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updatePostRelationship(Request $request , $id) {
        try{
            $record = Relationship::find(decrypt($id));
            if($record) {
                $request->validate([
                    'relationship' => 'required|unique:relationships,value|max:50'
                ]);

                $record->value = $request['relationship'];
                $record->save();
                return redirect()->back()->with('success' , 'Relationship updated successfully.');
            }
            else {
                return redirect()->back()->with('success' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function inactiveRelationship($id) {
        try{
            $record = Relationship::find(decrypt($id));
            if($record) {
                $record->status = 'inactive';
                $record->save();
                return redirect()->back()->with('success' , 'Relationship Inactive successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function activeRelationship($id) {
        try{
            $record = Relationship::find(decrypt($id));
            if($record) {
                $record->status = 'active';
                $record->save();
                return redirect()->back()->with('success' , 'Relationship active successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }

    public function deleteRelationship($id) {
        try{
            $record = Relationship::find(decrypt($id));
            if($record) {
                $record->delete();
                return redirect()->back()->with('success' , 'Relationship delete successfully.');
            }
            else {
                return redirect()->back()->with('error' , 'wrong access.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    //End Relationship

}
