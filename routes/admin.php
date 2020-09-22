<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Admin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::prefix('admin')->group(function () {
    //contract-type routes
    Route::get('/contract-type/index' , 'Admin\SiteSettingController@indexContractType')->name('contract-type.index');
    Route::get('/contract-type/create/view' , 'Admin\SiteSettingController@createViewContractType')->name('create-view.contract-type');
    Route::post('/contract-type/post/data' , 'Admin\SiteSettingController@postContractType')->name('post-data.contract-type');
    Route::get('/contract-type/update/{id}' , 'Admin\SiteSettingController@updateContractType')->name('update.contract-type');
    Route::post('/contract-type/post/update/data/{id}' , 'Admin\SiteSettingController@updatePostContractType')->name('post-update.contract-type');
    Route::get('/contract-type/inactive/{id}' , 'Admin\SiteSettingController@inactiveContractType')->name('inactive.contract-type');
    Route::get('/contract-type/active/{id}' , 'Admin\SiteSettingController@activeContractType')->name('active.contract-type');
    Route::get('/contract-type/delete/{id}' , 'Admin\SiteSettingController@deleteContractType')->name('delete.contract-type');

    //contract-tag routes
    Route::get('/contact-tag/index' , 'Admin\SiteSettingController@indexContactTag')->name('contact-tag.index');
    Route::get('/contact-tag/create/view' , 'Admin\SiteSettingController@createViewContactTag')->name('create-view.contact-tag');
    Route::post('/contact-tag/post/data' , 'Admin\SiteSettingController@postContactTag')->name('post-data.contact-tag');
    Route::get('/contact-tag/update/{id}' , 'Admin\SiteSettingController@updateContactTag')->name('update.contact-tag');
    Route::post('/contact-tag/post/update/data/{id}' , 'Admin\SiteSettingController@updatePostContactTag')->name('post-update.contact-tag');
    Route::get('/contact-tag/inactive/{id}' , 'Admin\SiteSettingController@inactiveContactTag')->name('inactive.contact-tag');
    Route::get('/contact-tag/active/{id}' , 'Admin\SiteSettingController@activeContactTag')->name('active.contact-tag');
    Route::get('/contact-tag/delete/{id}' , 'Admin\SiteSettingController@deleteContactTag')->name('delete.contact-tag');

    //education level routes
    Route::get('/education-level/index' , 'Admin\SiteSettingController@indexEducationLevel')->name('education-level.index');
    Route::get('/education-level/create/view' , 'Admin\SiteSettingController@createViewEducationLevel')->name('create-view.education-level');
    Route::post('/education-level/post/data' , 'Admin\SiteSettingController@postEducationLevel')->name('post-data.education-level');
    Route::get('/education-level/update/{id}' , 'Admin\SiteSettingController@updateEducationLevel')->name('update.education-level');
    Route::post('/education-level/post/update/data/{id}' , 'Admin\SiteSettingController@updatePostEducationLevel')->name('post-update.education-level');
    Route::get('/education-level/inactive/{id}' , 'Admin\SiteSettingController@inactiveEducationLevel')->name('inactive.education-level');
    Route::get('/education-level/active/{id}' , 'Admin\SiteSettingController@activeEducationLevel')->name('active.education-level');
    Route::get('/education-level/delete/{id}' , 'Admin\SiteSettingController@deleteEducationLevel')->name('delete.education-level');

    //document type routes
    Route::get('/document-type/index' , 'Admin\SiteSettingController@indexDocumentType')->name('document-type.index');
    Route::get('/document-type/create/view' , 'Admin\SiteSettingController@createViewDocumentType')->name('create-view.document-type');
    Route::post('/document-type/post/data' , 'Admin\SiteSettingController@postDocumentType')->name('post-data.document-type');
    Route::get('/document-type/update/{id}' , 'Admin\SiteSettingController@updateDocumentType')->name('update.document-type');
    Route::post('/document-type/post/update/data/{id}' , 'Admin\SiteSettingController@updatePostDocumentType')->name('post-update.document-type');
    Route::get('/document-type/inactive/{id}' , 'Admin\SiteSettingController@inactiveDocumentType')->name('inactive.document-type');
    Route::get('/document-type/active/{id}' , 'Admin\SiteSettingController@activeDocumentType')->name('active.document-type');
    Route::get('/document-type/delete/{id}' , 'Admin\SiteSettingController@deleteDocumentType')->name('delete.document-type');

    //job type routes
    Route::get('/job-type/index' , 'Admin\SiteSettingController@indexJobType')->name('job-type.index');
    Route::get('/job-type/create/view' , 'Admin\SiteSettingController@createViewJobType')->name('create-view.job-type');
    Route::post('/job-type/post/data' , 'Admin\SiteSettingController@postJobType')->name('post-data.job-type');
    Route::get('/job-type/update/{id}' , 'Admin\SiteSettingController@updateJobType')->name('update.job-type');
    Route::post('/job-type/post/update/data/{id}' , 'Admin\SiteSettingController@updatePostJobType')->name('post-update.job-type');
    Route::get('/job-type/inactive/{id}' , 'Admin\SiteSettingController@inactiveJobType')->name('inactive.job-type');
    Route::get('/job-type/active/{id}' , 'Admin\SiteSettingController@activeJobType')->name('active.job-type');
    Route::get('/job-type/delete/{id}' , 'Admin\SiteSettingController@deleteJobType')->name('delete.job-type');

    //job category routes
    Route::get('/job-category/index' , 'Admin\SiteSettingController@indexJobCategory')->name('job-category.index');
    Route::get('/job-category/create/view' , 'Admin\SiteSettingController@createViewJobCategory')->name('create-view.job-category');
    Route::post('/job-category/post/data' , 'Admin\SiteSettingController@postJobCategory')->name('post-data.job-category');
    Route::get('/job-category/update/{id}' , 'Admin\SiteSettingController@updateJobCategory')->name('update.job-category');
    Route::post('/job-category/post/update/data/{id}' , 'Admin\SiteSettingController@updatePostJobCategory')->name('post-update.job-category');
    Route::get('/job-category/inactive/{id}' , 'Admin\SiteSettingController@inactiveJobCategory')->name('inactive.job-category');
    Route::get('/job-category/active/{id}' , 'Admin\SiteSettingController@activeJobCategory')->name('active.job-category');
    Route::get('/job-category/delete/{id}' , 'Admin\SiteSettingController@deleteJobCategory')->name('delete.job-category');

    //nationality routes
    Route::get('/nationality/index' , 'Admin\SiteSettingController@indexNationality')->name('nationality.index');
    Route::get('/nationality/create/view' , 'Admin\SiteSettingController@createViewNationality')->name('create-view.nationality');
    Route::post('/nationality/post/data' , 'Admin\SiteSettingController@postNationality')->name('post-data.nationality');
    Route::get('/nationality/update/{id}' , 'Admin\SiteSettingController@updateNationality')->name('update.nationality');
    Route::post('/nationality/post/update/data/{id}' , 'Admin\SiteSettingController@updatePostNationality')->name('post-update.nationality');
    Route::get('/nationality/inactive/{id}' , 'Admin\SiteSettingController@inactiveNationality')->name('inactive.nationality');
    Route::get('/nationality/active/{id}' , 'Admin\SiteSettingController@activeNationality')->name('active.nationality');
    Route::get('/nationality/delete/{id}' , 'Admin\SiteSettingController@deleteNationality')->name('delete.nationality');

    //gender routes
    Route::get('/gender/index' , 'Admin\SiteSettingController@indexGender')->name('gender.index');
    Route::get('/gender/create/view' , 'Admin\SiteSettingController@createViewGender')->name('create-view.gender');
    Route::post('/gender/post/data' , 'Admin\SiteSettingController@postGender')->name('post-data.gender');
    Route::get('/gender/update/{id}' , 'Admin\SiteSettingController@updateGender')->name('update.gender');
    Route::post('/gender/post/update/data/{id}' , 'Admin\SiteSettingController@updatePostGender')->name('post-update.gender');
    Route::get('/gender/inactive/{id}' , 'Admin\SiteSettingController@inactiveGender')->name('inactive.gender');
    Route::get('/gender/active/{id}' , 'Admin\SiteSettingController@activeGender')->name('active.gender');
    Route::get('/gender/delete/{id}' , 'Admin\SiteSettingController@deleteGender')->name('delete.gender');


    //marital status routes
    Route::get('/martial-status/index' , 'Admin\SiteSettingController@indexMartialStatus')->name('martial-status.index');
    Route::get('/martial-status/create/view' , 'Admin\SiteSettingController@createViewMartialStatus')->name('create-view.martial-status');
    Route::post('/martial-status/post/data' , 'Admin\SiteSettingController@postMartialStatus')->name('post-data.martial-status');
    Route::get('/martial-status/update/{id}' , 'Admin\SiteSettingController@updateMartialStatus')->name('update.martial-status');
    Route::post('/martial-status/post/update/data/{id}' , 'Admin\SiteSettingController@updatePostMartialStatus')->name('post-update.martial-status');
    Route::get('/martial-status/inactive/{id}' , 'Admin\SiteSettingController@inactiveMartialStatus')->name('inactive.martial-status');
    Route::get('/martial-status/active/{id}' , 'Admin\SiteSettingController@activeMartialStatus')->name('active.martial-status');
    Route::get('/martial-status/delete/{id}' , 'Admin\SiteSettingController@deleteMartialStatus')->name('delete.martial-status');


    //contract-title routes
    Route::get('/contact-title/index' , 'Admin\SiteSettingController@indexContactTitle')->name('contact-title.index');
    Route::get('/contact-title/create/view' , 'Admin\SiteSettingController@createViewContactTitle')->name('create-view.contact-title');
    Route::post('/contact-title/post/data' , 'Admin\SiteSettingController@postContactTitle')->name('post-data.contact-title');
    Route::get('/contact-title/update/{id}' , 'Admin\SiteSettingController@updateContactTitle')->name('update.contact-title');
    Route::post('/contact-title/post/update/data/{id}' , 'Admin\SiteSettingController@updatePostContactTitle')->name('post-update.contact-title');
    Route::get('/contact-title/inactive/{id}' , 'Admin\SiteSettingController@inactiveContactTitle')->name('inactive.contact-title');
    Route::get('/contact-title/active/{id}' , 'Admin\SiteSettingController@activeContactTitle')->name('active.contact-title');
    Route::get('/contact-title/delete/{id}' , 'Admin\SiteSettingController@deleteContactTitle')->name('delete.contact-title');

    //industry and business routes
    Route::get('/industry-and-business/index' , 'Admin\SiteSettingController@indexIndustryAndBusiness')->name('industry-and-business.index');
    Route::get('/industry-and-business/create/view' , 'Admin\SiteSettingController@createViewIndustryAndBusiness')->name('create-view.industry-and-business');
    Route::post('/industry-and-business/post/data' , 'Admin\SiteSettingController@postIndustryAndBusiness')->name('post-data.industry-and-business');
    Route::get('/industry-and-business/update/{id}' , 'Admin\SiteSettingController@updateIndustryAndBusiness')->name('update.industry-and-business');
    Route::post('/industry-and-business/post/update/data/{id}' , 'Admin\SiteSettingController@updatePostIndustryAndBusiness')->name('post-update.industry-and-business');
    Route::get('/industry-and-business/inactive/{id}' , 'Admin\SiteSettingController@inactiveIndustryAndBusiness')->name('inactive.industry-and-business');
    Route::get('/industry-and-business/active/{id}' , 'Admin\SiteSettingController@activeIndustryAndBusiness')->name('active.industry-and-business');
    Route::get('/industry-and-business/delete/{id}' , 'Admin\SiteSettingController@deleteIndustryAndBusiness')->name('delete.industry-and-business');

//country routes
    Route::get('/countries/index' , 'Admin\SiteSettingController@indexCountry')->name('country.index');
    Route::get('/country/create/view' , 'Admin\SiteSettingController@createViewCountry')->name('create-view.country');
    Route::post('/country/post/data' , 'Admin\SiteSettingController@postCountry')->name('post-data.country');
    Route::get('/country/update/{id}' , 'Admin\SiteSettingController@updateCountry')->name('update.country');
    Route::post('/country/post/update/data/{id}' , 'Admin\SiteSettingController@updatePostCountry')->name('post-update.country');
    Route::get('/country/inactive/{id}' , 'Admin\SiteSettingController@inactiveCountry')->name('inactive.country');
    Route::get('/country/active/{id}' , 'Admin\SiteSettingController@activeCountry')->name('active.country');
    Route::get('/country/delete/{id}' , 'Admin\SiteSettingController@deleteCountry')->name('delete.country');


    //city routes
    Route::get('/cities/index' , 'Admin\SiteSettingController@indexCity')->name('city.index');
    Route::get('/city/create/view' , 'Admin\SiteSettingController@createViewCity')->name('create-view.city');
    Route::post('/city/post/data' , 'Admin\SiteSettingController@postCity')->name('post-data.city');
    Route::get('/city/update/{id}' , 'Admin\SiteSettingController@updateCity')->name('update.city');
    Route::post('/city/post/update/data/{id}' , 'Admin\SiteSettingController@updatePostCity')->name('post-update.city');
    Route::get('/city/inactive/{id}' , 'Admin\SiteSettingController@inactiveCity')->name('inactive.city');
    Route::get('/city/active/{id}' , 'Admin\SiteSettingController@activeCity')->name('active.city');
    Route::get('/city/delete/{id}' , 'Admin\SiteSettingController@deleteCity')->name('delete.city');
    Route::post('/city/post/new_city', 'Admin\SiteSettingController@saveNewCity')->name('save-new.city');

    //state routes
    Route::get('/states/index' , 'Admin\SiteSettingController@indexState')->name('state.index');
    Route::get('/state/create/view' , 'Admin\SiteSettingController@createViewState')->name('create-view.state');
    Route::post('/state/post/data' , 'Admin\SiteSettingController@postState')->name('post-data.state');
    Route::get('/state/update/{id}' , 'Admin\SiteSettingController@updateState')->name('update.state');
    Route::post('/state/post/update/data/{id}' , 'Admin\SiteSettingController@updatePostState')->name('post-update.state');
    Route::get('/state/inactive/{id}' , 'Admin\SiteSettingController@inactiveState')->name('inactive.state');
    Route::get('/state/active/{id}' , 'Admin\SiteSettingController@activeState')->name('active.state');
    Route::get('/state/delete/{id}' , 'Admin\SiteSettingController@deleteState')->name('delete.state');

    //blood group routes
    Route::get('/blood-group/index' , 'Admin\SiteSettingController@indexBloodGroup')->name('blood-group.index');
    Route::get('/blood-group/create/view' , 'Admin\SiteSettingController@createViewBloodGroup')->name('create-view.blood-group');
    Route::post('/blood-group/post/data' , 'Admin\SiteSettingController@postBloodGroup')->name('post-data.blood-group');
    Route::get('/blood-group/update/{id}' , 'Admin\SiteSettingController@updateBloodGroup')->name('update.blood-group');
    Route::post('/blood-group/post/update/data/{id}' , 'Admin\SiteSettingController@updatePostBloodGroup')->name('post-update.blood-group');
    Route::get('/blood-group/inactive/{id}' , 'Admin\SiteSettingController@inactiveBloodGroup')->name('inactive.blood-group');
    Route::get('/blood-group/active/{id}' , 'Admin\SiteSettingController@activeBloodGroup')->name('active.blood-group');
    Route::get('/blood-group/delete/{id}' , 'Admin\SiteSettingController@deleteBloodGroup')->name('delete.blood-group');

    // Employment type toutes
    Route::get('/employment-type/index' , 'Admin\SiteSettingController@indexEmploymentType')->name('employment-type.index');
    Route::get('/employment-type/create/view' , 'Admin\SiteSettingController@createViewEmploymentType')->name('create-view.employment-type');
    Route::post('/employment-type/post/data' , 'Admin\SiteSettingController@postEmploymentType')->name('post-data.employment-type');
    Route::get('/employment-type/update/{id}' , 'Admin\SiteSettingController@updateEmploymentType')->name('update.employment-type');
    Route::post('/employment-type/post/update/data/{id}' , 'Admin\SiteSettingController@updatePostEmploymentType')->name('post-update.employment-type');
    Route::get('/employment-type/inactive/{id}' , 'Admin\SiteSettingController@inactiveEmploymentType')->name('inactive.employment-type');
    Route::get('/employment-type/active/{id}' , 'Admin\SiteSettingController@activeEmploymentType')->name('active.employment-type');
    Route::get('/employment-type/delete/{id}' , 'Admin\SiteSettingController@deleteEmploymentType')->name('delete.employment-type');

    //relationship routes
    Route::get('/relationship/index' , 'Admin\SiteSettingController@indexRelationship')->name('relationship.index');
    Route::get('/relationship/create/view' , 'Admin\SiteSettingController@createViewRelationship')->name('create-view.relationship');
    Route::post('/relationship/post/data' , 'Admin\SiteSettingController@postRelationship')->name('post-data.relationship');
    Route::get('/relationship/update/{id}' , 'Admin\SiteSettingController@updateRelationship')->name('update.relationship');
    Route::post('/relationship/post/update/data/{id}' , 'Admin\SiteSettingController@updatePostRelationship')->name('post-update.relationship');
    Route::get('/relationship/inactive/{id}' , 'Admin\SiteSettingController@inactiveRelationship')->name('inactive.relationship');
    Route::get('/relationship/active/{id}' , 'Admin\SiteSettingController@activeRelationship')->name('active.relationship');
    Route::get('/relationship/delete/{id}' , 'Admin\SiteSettingController@deleteRelationship')->name('delete.relationship');

     //attendance routes
    Route::get('/attendance/index' , 'Admin\SiteSettingController@indexAttendance')->name('attendance.index');
    Route::get('/attendance/create/view' , 'Admin\SiteSettingController@createViewAttendance')->name('create-view.attendance');
    Route::post('/attendance/post/data' , 'Admin\SiteSettingController@postAttendance')->name('post-data.attendance');
    Route::get('/attendance/update/{id}' , 'Admin\SiteSettingController@updateAttendance')->name('update.attendance');
    Route::post('/attendance/post/update/data/{id}' , 'Admin\SiteSettingController@updatePostAttendance')->name('post-update.attendance');
    Route::get('/attendance/inactive/{id}' , 'Admin\SiteSettingController@inactiveAttendance')->name('inactive.attendance');
    Route::get('/attendance/active/{id}' , 'Admin\SiteSettingController@activeAttendance')->name('active.attendance');
    Route::get('/attendance/delete/{id}' , 'Admin\SiteSettingController@deleteAttendance')->name('delete.attendance');

     //period-frequency routes
    Route::get('/period-frequency/index' , 'Admin\SiteSettingController@indexPeriodFrequency')->name('period-frequency.index');
    Route::get('/period-frequency/create/view' , 'Admin\SiteSettingController@createViewPeriodFrequency')->name('create-view.period-frequency');
    Route::post('/period-frequency/post/data' , 'Admin\SiteSettingController@postPeriodFrequency')->name('post-data.period-frequency');
    Route::get('/period-frequency/update/{id}' , 'Admin\SiteSettingController@updatePeriodFrequency')->name('update.period-frequency');
    Route::post('/period-frequency/post/update/data/{id}' , 'Admin\SiteSettingController@updatePostPeriodFrequency')->name('post-update.period-frequency');
    Route::get('/period-frequency/inactive/{id}' , 'Admin\SiteSettingController@inactivePeriodFrequency')->name('inactive.period-frequency');
    Route::get('/period-frequency/active/{id}' , 'Admin\SiteSettingController@activePeriodFrequency')->name('active.period-frequency');
    Route::get('/period-frequency/delete/{id}' , 'Admin\SiteSettingController@deletePeriodFrequency')->name('delete.period-frequency');

     //Employee registration process
     Route::get('/employee/index' , 'Admin\EmployeeController@indexEmployee')->name('employee.index');
     Route::get('/employee/create/view' , 'Admin\EmployeeController@createViewEmployee')->name('create-view-employee');
     Route::post('/employee/post/data' , 'Admin\EmployeeController@postEmployee')->name('post-data-employee');
     Route::get('/employee/update/{id}' , 'Admin\EmployeeController@updateEmployee')->name('update-employee');
     Route::post('/employee/post/update/data/{id}' , 'Admin\EmployeeController@updatePostEmployee')->name('post-update-employee');
     Route::get('/employee/inactive/{id}' , 'Admin\EmployeeController@inactiveEmployee')->name('inactive-employee');
     Route::get('/employee/active/{id}' , 'Admin\EmployeeController@activeEmployee')->name('active-employee');
     Route::get('/employee/delete/{id}' , 'Admin\EmployeeController@deleteEmployee')->name('delete-employee');
 
    //Company crud
    Route::get('/company/index' , 'Admin\CompanyController@indexCompany')->name('company.index');
    Route::get('/company/create/view' , 'Admin\CompanyController@createViewCompany')->name('create-view.company');
    Route::post('/company/post/data' , 'Admin\CompanyController@postCompany')->name('post-data.company');
    Route::get('/company/update/{id}' , 'Admin\CompanyController@updateCompany')->name('update.company');
    Route::post('/company/post/update/data/{id}' , 'Admin\CompanyController@updatePostCompany')->name('post-update.company');
    Route::get('/company/detail/{id}' , 'Admin\CompanyController@viewCompanyDetail')->name('company.detail');
    Route::get('/company/delete/{id}' , 'Admin\CompanyController@deleteCompany')->name('delete.company');
    Route::get('get_states', 'Admin\CompanyController@getStates')->name('get-states');
    Route::get('get_cities', 'Admin\CompanyController@getCities')->name('get-cities');
     //Branch crud
    Route::get('branch/index' , 'Admin\BranchController@indexBranch')->name('branch.index');
    Route::get('branch/create/view' , 'Admin\BranchController@createViewBranch')->name('create-view.branch');
    Route::post('branch/post/data' , 'Admin\BranchController@postBranch')->name('post-data.branch');
    Route::get('branch/update/{id}' , 'Admin\BranchController@updateBranch')->name('update.branch');
    Route::post('branch/post/update/data/{id}' , 'Admin\BranchController@updatePostBranch')->name('post-update.branch');
    Route::get('branch/detail/{id}' , 'Admin\BranchController@viewBranchDetail')->name('branch.detail');
    Route::get('branch/delete/{id}' , 'Admin\BranchController@deleteBranch')->name('delete.branch');


    //Office Shift
    Route::get('office-shift/index' , 'Admin\OfficeShiftController@indexOfficeShift')->name('office-shift.index');
    Route::get('office-shift/create/view' , 'Admin\OfficeShiftController@createViewOfficeShift')->name('create-view.office-shift');
    Route::post('office-shift/post/data' , 'Admin\OfficeShiftController@postOfficeShift')->name('post-data.office-shift');
    Route::get('office-shift/update/{id}' , 'Admin\OfficeShiftController@updateOfficeShift')->name('update.office-shift');
    Route::post('office-shift/post/update/data/{id}' , 'Admin\OfficeShiftController@updatePostOfficeShift')->name('post-update.office-shift');
    Route::get('office-shift/detail/{id}' , 'Admin\OfficeShiftController@viewOfficeShiftDetail')->name('office-shift.detail');
    Route::get('office-shift/delete/{id}' , 'Admin\OfficeShiftController@deleteOfficeShift')->name('delete.office-shift');

    //Contact Create View
    Route::get('/contact/form' , 'Admin\ContactController@createContactView')->name('contact.form');
    Route::get('/contact/address/form' , 'Admin\ContactController@createAddressView')->name('contact.address.form');
    Route::get('/contact/index' , 'Admin\ContactController@index')->name('contact.index');
    Route::get('/contact/create/view' , 'Admin\ContactController@create')->name('contact.create');
    Route::post('post/contact' , 'Admin\ContactController@postContact')->name('contact.post');
    Route::post('post/child/contact' , 'Admin\ContactController@postChildContact')->name('contact.child.post');
    Route::post('post/more/contact/address' , 'Admin\ContactController@postMoreAddress')->name('more.address.post');
    Route::get('get/states/{country_id?}' , 'Admin\ContactController@getStates')->name('get.state');
    Route::get('get/cities/{state_id?}' , 'Admin\ContactController@getCities')->name('get.city');
    Route::post('/post/contact/type/info' , 'Admin\ContactController@postContactTypeInfo')->name('post-contact-type-info');

    Route::get('/contact/edit/view/{id}' , 'Admin\ContactController@contactEditView')->name('edit.contact.view');



    Route::get('/contact/view/{id}' , 'Admin\ContactController@view')->name('contact.view');
    Route::get('/contact/edit/{id}' , 'Admin\ContactController@edit')->name('contact.edit');
    Route::get('/contact/trash/view' , 'Admin\ContactController@trashView')->name('contact.trash.view');
    Route::get('/contact/trash/{id}' , 'Admin\ContactController@trash')->name('contact.trash');
    Route::get('/contact/restore/{id}' , 'Admin\ContactController@restore')->name('contact.restore');
    Route::get('/contact/delete/{id}' , 'Admin\ContactController@delete')->name('contact.delete');


});

