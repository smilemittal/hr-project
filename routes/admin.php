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
    Route::get('/contract-type/index' , 'Admin\SiteSettingController@indexContractType')->name('contract-type-index');
    Route::get('/contract-type/create/view' , 'Admin\SiteSettingController@createViewContractType')->name('create-view-contract-type');
    Route::post('/contract-type/post/data' , 'Admin\SiteSettingController@postContractType')->name('post-data-contract-type');
    Route::get('/contract-type/update/{id}' , 'Admin\SiteSettingController@updateContractType')->name('update-contract-type');
    Route::post('/contract-type/post/update/data/{id}' , 'Admin\SiteSettingController@updatePostContractType')->name('post-update-contract-type');
    Route::get('/contract-type/inactive/{id}' , 'Admin\SiteSettingController@inactiveContractType')->name('inactive-contract-type');
    Route::get('/contract-type/active/{id}' , 'Admin\SiteSettingController@activeContractType')->name('active-contract-type');
    Route::get('/contract-type/delete/{id}' , 'Admin\SiteSettingController@deleteContractType')->name('delete-contract-type');

    //contract-tag routes
    Route::get('/contact-tag/index' , 'Admin\SiteSettingController@indexContactTag')->name('contact-tag-index');
    Route::get('/contact-tag/create/view' , 'Admin\SiteSettingController@createViewContactTag')->name('create-view-contact-tag');
    Route::post('/contact-tag/post/data' , 'Admin\SiteSettingController@postContactTag')->name('post-data-contact-tag');
    Route::get('/contact-tag/update/{id}' , 'Admin\SiteSettingController@updateContactTag')->name('update-contact-tag');
    Route::post('/contact-tag/post/update/data/{id}' , 'Admin\SiteSettingController@updatePostContactTag')->name('post-update-contact-tag');
    Route::get('/contact-tag/inactive/{id}' , 'Admin\SiteSettingController@inactiveContactTag')->name('inactive-contact-tag');
    Route::get('/contact-tag/active/{id}' , 'Admin\SiteSettingController@activeContactTag')->name('active-contact-tag');
    Route::get('/contact-tag/delete/{id}' , 'Admin\SiteSettingController@deleteContactTag')->name('delete-contact-tag');

    //education level routes
    Route::get('/education-level/index' , 'Admin\SiteSettingController@indexEducationLevel')->name('education-level-index');
    Route::get('/education-level/create/view' , 'Admin\SiteSettingController@createViewEducationLevel')->name('create-view-education-level');
    Route::post('/education-level/post/data' , 'Admin\SiteSettingController@postEducationLevel')->name('post-data-education-level');
    Route::get('/education-level/update/{id}' , 'Admin\SiteSettingController@updateEducationLevel')->name('update-education-level');
    Route::post('/education-level/post/update/data/{id}' , 'Admin\SiteSettingController@updatePostEducationLevel')->name('post-update-education-level');
    Route::get('/education-level/inactive/{id}' , 'Admin\SiteSettingController@inactiveEducationLevel')->name('inactive-education-level');
    Route::get('/education-level/active/{id}' , 'Admin\SiteSettingController@activeEducationLevel')->name('active-education-level');
    Route::get('/education-level/delete/{id}' , 'Admin\SiteSettingController@deleteEducationLevel')->name('delete-education-level');

    //document type routes
    Route::get('/document-type/index' , 'Admin\SiteSettingController@indexDocumentType')->name('document-type-index');
    Route::get('/document-type/create/view' , 'Admin\SiteSettingController@createViewDocumentType')->name('create-view-document-type');
    Route::post('/document-type/post/data' , 'Admin\SiteSettingController@postDocumentType')->name('post-data-document-type');
    Route::get('/document-type/update/{id}' , 'Admin\SiteSettingController@updateDocumentType')->name('update-document-type');
    Route::post('/document-type/post/update/data/{id}' , 'Admin\SiteSettingController@updatePostDocumentType')->name('post-update-document-type');
    Route::get('/document-type/inactive/{id}' , 'Admin\SiteSettingController@inactiveDocumentType')->name('inactive-document-type');
    Route::get('/document-type/active/{id}' , 'Admin\SiteSettingController@activeDocumentType')->name('active-document-type');
    Route::get('/document-type/delete/{id}' , 'Admin\SiteSettingController@deleteDocumentType')->name('delete-document-type');

    //job type routes
    Route::get('/job-type/index' , 'Admin\SiteSettingController@indexJobType')->name('job-type-index');
    Route::get('/job-type/create/view' , 'Admin\SiteSettingController@createViewJobType')->name('create-view-job-type');
    Route::post('/job-type/post/data' , 'Admin\SiteSettingController@postJobType')->name('post-data-job-type');
    Route::get('/job-type/update/{id}' , 'Admin\SiteSettingController@updateJobType')->name('update-job-type');
    Route::post('/job-type/post/update/data/{id}' , 'Admin\SiteSettingController@updatePostJobType')->name('post-update-job-type');
    Route::get('/job-type/inactive/{id}' , 'Admin\SiteSettingController@inactiveJobType')->name('inactive-job-type');
    Route::get('/job-type/active/{id}' , 'Admin\SiteSettingController@activeJobType')->name('active-job-type');
    Route::get('/job-type/delete/{id}' , 'Admin\SiteSettingController@deleteJobType')->name('delete-job-type');

    //job category routes
    Route::get('/job-category/index' , 'Admin\SiteSettingController@indexJobCategory')->name('job-category-index');
    Route::get('/job-category/create/view' , 'Admin\SiteSettingController@createViewJobCategory')->name('create-view-job-category');
    Route::post('/job-category/post/data' , 'Admin\SiteSettingController@postJobCategory')->name('post-data-job-category');
    Route::get('/job-category/update/{id}' , 'Admin\SiteSettingController@updateJobCategory')->name('update-job-category');
    Route::post('/job-category/post/update/data/{id}' , 'Admin\SiteSettingController@updatePostJobCategory')->name('post-update-job-category');
    Route::get('/job-category/inactive/{id}' , 'Admin\SiteSettingController@inactiveJobCategory')->name('inactive-job-category');
    Route::get('/job-category/active/{id}' , 'Admin\SiteSettingController@activeJobCategory')->name('active-job-category');
    Route::get('/job-category/delete/{id}' , 'Admin\SiteSettingController@deleteJobCategory')->name('delete-job-category');

    //nationality routes
    Route::get('/nationality/index' , 'Admin\SiteSettingController@indexNationality')->name('nationality-index');
    Route::get('/nationality/create/view' , 'Admin\SiteSettingController@createViewNationality')->name('create-view-nationality');
    Route::post('/nationality/post/data' , 'Admin\SiteSettingController@postNationality')->name('post-data-nationality');
    Route::get('/nationality/update/{id}' , 'Admin\SiteSettingController@updateNationality')->name('update-nationality');
    Route::post('/nationality/post/update/data/{id}' , 'Admin\SiteSettingController@updatePostNationality')->name('post-update-nationality');
    Route::get('/nationality/inactive/{id}' , 'Admin\SiteSettingController@inactiveNationality')->name('inactive-nationality');
    Route::get('/nationality/active/{id}' , 'Admin\SiteSettingController@activeNationality')->name('active-nationality');
    Route::get('/nationality/delete/{id}' , 'Admin\SiteSettingController@deleteNationality')->name('delete-nationality');

    //gender routes
    Route::get('/gender/index' , 'Admin\SiteSettingController@indexGender')->name('gender-index');
    Route::get('/gender/create/view' , 'Admin\SiteSettingController@createViewGender')->name('create-view-gender');
    Route::post('/gender/post/data' , 'Admin\SiteSettingController@postGender')->name('post-data-gender');
    Route::get('/gender/update/{id}' , 'Admin\SiteSettingController@updateGender')->name('update-gender');
    Route::post('/gender/post/update/data/{id}' , 'Admin\SiteSettingController@updatePostGender')->name('post-update-gender');
    Route::get('/gender/inactive/{id}' , 'Admin\SiteSettingController@inactiveGender')->name('inactive-gender');
    Route::get('/gender/active/{id}' , 'Admin\SiteSettingController@activeGender')->name('active-gender');
    Route::get('/gender/delete/{id}' , 'Admin\SiteSettingController@deleteGender')->name('delete-gender');


    //gender routes
    Route::get('/martial-status/index' , 'Admin\SiteSettingController@indexMartialStatus')->name('martial-status-index');
    Route::get('/martial-status/create/view' , 'Admin\SiteSettingController@createViewMartialStatus')->name('create-view-martial-status');
    Route::post('/martial-status/post/data' , 'Admin\SiteSettingController@postMartialStatus')->name('post-data-martial-status');
    Route::get('/martial-status/update/{id}' , 'Admin\SiteSettingController@updateMartialStatus')->name('update-martial-status');
    Route::post('/martial-status/post/update/data/{id}' , 'Admin\SiteSettingController@updatePostMartialStatus')->name('post-update-martial-status');
    Route::get('/martial-status/inactive/{id}' , 'Admin\SiteSettingController@inactiveMartialStatus')->name('inactive-martial-status');
    Route::get('/martial-status/active/{id}' , 'Admin\SiteSettingController@activeMartialStatus')->name('active-martial-status');
    Route::get('/martial-status/delete/{id}' , 'Admin\SiteSettingController@deleteMartialStatus')->name('delete-martial-status');


    //contract-tag routes
    Route::get('/contact-title/index' , 'Admin\SiteSettingController@indexContactTitle')->name('contact-title-index');
    Route::get('/contact-title/create/view' , 'Admin\SiteSettingController@createViewContactTitle')->name('create-view-contact-title');
    Route::post('/contact-title/post/data' , 'Admin\SiteSettingController@postContactTitle')->name('post-data-contact-title');
    Route::get('/contact-title/update/{id}' , 'Admin\SiteSettingController@updateContactTitle')->name('update-contact-title');
    Route::post('/contact-title/post/update/data/{id}' , 'Admin\SiteSettingController@updatePostContactTitle')->name('post-update-contact-title');
    Route::get('/contact-title/inactive/{id}' , 'Admin\SiteSettingController@inactiveContactTitle')->name('inactive-contact-title');
    Route::get('/contact-title/active/{id}' , 'Admin\SiteSettingController@activeContactTitle')->name('active-contact-title');
    Route::get('/contact-title/delete/{id}' , 'Admin\SiteSettingController@deleteContactTitle')->name('delete-contact-title');

    //industry and business routes
    Route::get('/industry-and-business/index' , 'Admin\SiteSettingController@indexIndustryAndBusiness')->name('industry-and-business-index');
    Route::get('/industry-and-business/create/view' , 'Admin\SiteSettingController@createViewIndustryAndBusiness')->name('create-view-industry-and-business');
    Route::post('/industry-and-business/post/data' , 'Admin\SiteSettingController@postIndustryAndBusiness')->name('post-data-industry-and-business');
    Route::get('/industry-and-business/update/{id}' , 'Admin\SiteSettingController@updateIndustryAndBusiness')->name('update-industry-and-business');
    Route::post('/industry-and-business/post/update/data/{id}' , 'Admin\SiteSettingController@updatePostIndustryAndBusiness')->name('post-update-industry-and-business');
    Route::get('/industry-and-business/inactive/{id}' , 'Admin\SiteSettingController@inactiveIndustryAndBusiness')->name('inactive-industry-and-business');
    Route::get('/industry-and-business/active/{id}' , 'Admin\SiteSettingController@activeIndustryAndBusiness')->name('active-industry-and-business');
    Route::get('/industry-and-business/delete/{id}' , 'Admin\SiteSettingController@deleteIndustryAndBusiness')->name('delete-industry-and-business');

//country routes
    Route::get('/countries/index' , 'Admin\SiteSettingController@indexCountry')->name('country-index');
    Route::get('/country/create/view' , 'Admin\SiteSettingController@createViewCountry')->name('create-view-country');
    Route::post('/country/post/data' , 'Admin\SiteSettingController@postCountry')->name('post-data-country');
    Route::get('/country/update/{id}' , 'Admin\SiteSettingController@updateCountry')->name('update-country');
    Route::post('/country/post/update/data/{id}' , 'Admin\SiteSettingController@updatePostCountry')->name('post-update-country');
    Route::get('/country/inactive/{id}' , 'Admin\SiteSettingController@inactiveCountry')->name('inactive-country');
    Route::get('/country/active/{id}' , 'Admin\SiteSettingController@activeCountry')->name('active-country');
    Route::get('/country/delete/{id}' , 'Admin\SiteSettingController@deleteCountry')->name('delete-country');


    //city routes
    Route::get('/cities/index' , 'Admin\SiteSettingController@indexCity')->name('city-index');
    Route::get('/city/create/view' , 'Admin\SiteSettingController@createViewCity')->name('create-view-city');
    Route::post('/city/post/data' , 'Admin\SiteSettingController@postCity')->name('post-data-city');
    Route::get('/city/update/{id}' , 'Admin\SiteSettingController@updateCity')->name('update-city');
    Route::post('/city/post/update/data/{id}' , 'Admin\SiteSettingController@updatePostCity')->name('post-update-city');
    Route::get('/city/inactive/{id}' , 'Admin\SiteSettingController@inactiveCity')->name('inactive-city');
    Route::get('/city/active/{id}' , 'Admin\SiteSettingController@activeCity')->name('active-city');
    Route::get('/city/delete/{id}' , 'Admin\SiteSettingController@deleteCity')->name('delete-city');


    //city routes
    Route::get('/states/index' , 'Admin\SiteSettingController@indexState')->name('state-index');
    Route::get('/state/create/view' , 'Admin\SiteSettingController@createViewState')->name('create-view-state');
    Route::post('/state/post/data' , 'Admin\SiteSettingController@postState')->name('post-data-state');
    Route::get('/state/update/{id}' , 'Admin\SiteSettingController@updateState')->name('update-state');
    Route::post('/state/post/update/data/{id}' , 'Admin\SiteSettingController@updatePostState')->name('post-update-state');
    Route::get('/state/inactive/{id}' , 'Admin\SiteSettingController@inactiveState')->name('inactive-state');
    Route::get('/state/active/{id}' , 'Admin\SiteSettingController@activeState')->name('active-state');
    Route::get('/state/delete/{id}' , 'Admin\SiteSettingController@deleteState')->name('delete-state');



    //Employee registration process
    Route::get('/employee/index' , 'Admin\EmployeeController@indexEmployee')->name('employee-index');
    Route::get('/employee/create/view' , 'Admin\EmployeeController@createViewEmployee')->name('create-view-employee');
    Route::post('/employee/post/data' , 'Admin\EmployeeController@postEmployee')->name('post-data-employee');
    Route::get('/employee/update/{id}' , 'Admin\EmployeeController@updateEmployee')->name('update-employee');
    Route::post('/employee/post/update/data/{id}' , 'Admin\EmployeeController@updatePostEmployee')->name('post-update-employee');
    Route::get('/employee/detail/{id}' , 'Admin\EmployeeController@viewEmployeeDetail')->name('employee-detail');
    Route::get('/employee/delete/{id}' , 'Admin\EmployeeController@deleteEmployee')->name('delete-employee');





});

