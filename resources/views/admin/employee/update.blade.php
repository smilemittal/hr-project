@extends('layouts.default')
@section('content')
    <!-- BEGIN: Content-->
    @if ($message = Session::get('success'))
        <div class="alert alert-success mb-2" style="width: 500px;position: absolute;right: 0;top: 0px;"
             id="alert-success-message" role="alert">
            <strong>Success! </strong> {{$message}}
        </div>
    @endif
    @if ($message = Session::get('error'))
        <div class="alert alert-error mb-2" id="alert-error-message"
             style="width: 500px;position: absolute;right: 0;top: 0px;" role="alert">
            <strong>Error! </strong> {{$message}}
        </div>
    @endif
    <div class="content-header row">
        <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
            <h3 class="content-header-title mb-0 d-inline-block">Admin</h3>
            <div class="breadcrumbs-top d-inline-block">
                <div class="breadcrumb-wrapper mr-1">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Settings</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Create Employee</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="content-header-right col-md-4 col-12 d-block d-md-none"><a
                class="btn btn-warning btn-min-width float-md-right box-shadow-4 mr-1 mb-1"
                href="chat-application.html"><i class="ft-mail"></i> Email</a></div>
    </div>
    {{--    main content--}}

    <div class="content-body">
        <!-- Tabs with Icons start -->
        <section id="tabs-with-icons">

            <div class="row match-height">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <!-- <div class="card-header">
                            <h4 class="card-title">Basic Tabs</h4>
                        </div> -->
                        <div class="card-content">
                            <div class="card-body">
                                <form action="{{route('post-update-employee',encrypt($record->id))}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="baseIcon-tab1" data-toggle="tab"
                                               aria-controls="tabIcon1" href="#tabIcon1" aria-expanded="true"><i
                                                    class="ft-user"></i> Personl Information</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="baseIcon-tab2" data-toggle="tab"
                                               aria-controls="tabIcon2" href="#tabIcon2" aria-expanded="false"><i
                                                    class="ft-alert-octagon"></i>Work Information</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="baseIcon-tab3" data-toggle="tab"
                                               aria-controls="tabIcon3" href="#tabIcon3" aria-expanded="false"><i
                                                    class="ft-map-pin"></i> HR Setting</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" id="baseIcon-tab4" data-toggle="tab"
                                               aria-controls="tabIcon4" href="#tabIcon4" aria-expanded="false"><i
                                                    class="ft-map-pin"></i> Personal Information </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" id="baseIcon-tab5" data-toggle="tab"
                                               aria-controls="tabIcon5" href="#tabIcon5" aria-expanded="false"><i
                                                    class="ft-map-pin"></i>Qualification</a>
                                        </li>

                                    </ul>
                                    <div class="tab-content px-1 pt-1">

                                        <div role="tabpanel" class="tab-pane active" id="tabIcon1"
                                             aria-expanded="true" aria-labelledby="baseIcon-tab1">



                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="media d-flex mx-0 my-1 user-text">
                                                        <div class="align-left p-0 mr-2">
                                                            <a href="#" class="profile-image">
                                                                <img
                                                                    src="{{asset('app-assets/images/portrait/small/avatar-s-1.png')}}"
                                                                    class="rounded-circle img-border height-75"
                                                                    alt="Card image">
                                                            </a>
                                                        </div>
                                                        <div class="media-body text-left text-dark mt-1">
                                                            <h3 class="font-medium-1 ">Thomas Cruise IV
                                                            </h3>
                                                            <div class="form-actions">
                                                                <button
                                                                    class="btn btn-sm btn-primary">
                                                                    <input type="file" name="profile_image" >
                                                                </button>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">

                                                    <div class="form-body">

                                                        <div class="form-group">
                                                            <label for="projectinput1">First Name</label>
                                                            <input value="{{$record->First_Name}}"; type="text" id="FirstName" required
                                                                   class="form-control"
                                                                   placeholder="First Name" name="First Name"
                                                                   data-toggle="tooltip" data-trigger="hover"
                                                                   data-placement="top"
                                                                   data-title="Issue Title">
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput3">Middle Name</label>
                                                                    <input value="{{$record->Middle_Name}}"; type="text" id="MiddleName"
                                                                           class="form-control"
                                                                           name="Middle Name"
                                                                           data-toggle="tooltip"
                                                                           data-trigger="hover"
                                                                           data-placement="top"
                                                                           data-title="Date Opened">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput3">Last Name</label>
                                                                    <input value="{{$record->Last_Name}}"; type="text" id="LastName" required
                                                                           class="form-control"
                                                                           name="Last Name"
                                                                           data-toggle="tooltip"
                                                                           data-trigger="hover"
                                                                           data-placement="top"
                                                                           data-title="Date Opened">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="projectinput3">Title</label>
                                                        <input value="{{$record->Title}}"; type="text" id="Title" required
                                                               class="form-control"
                                                               name="Title"
                                                               data-toggle="tooltip"
                                                               data-trigger="hover"
                                                               data-placement="top"
                                                               data-title="Date Opened">
                                                    </div>


                                                </div>
                                                <div class="col-md-6">

                                                    <div class="form-body">

                                                        <div class="form-group">
                                                            <label for="projectinput1">Email</label>
                                                            <input value="{{$record->Email}}"; type="email" id="Email" required
                                                                   class="form-control"
                                                                   placeholder="Email" name="Email"
                                                                   data-toggle="tooltip" data-trigger="hover"
                                                                   data-placement="top"
                                                                   data-title="Issue Title">
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput3">Marital Status</label>
                                                                    <input value="{{$record->Marital_Status}}"; type="text" id="MaritalStatus" required
                                                                           class="form-control"
                                                                           name="Marital Status"
                                                                           data-toggle="tooltip"
                                                                           data-trigger="hover"
                                                                           data-placement="top"
                                                                           data-title="Date Opened">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput3">Contact Mobile
                                                                        Number</label>
                                                                    <input value="{{$record->Contact_Mobile_Number}}"; type="number" id="ContactMobileNumber" required
                                                                           class="form-control"
                                                                           name="Contact Mobile Number"
                                                                           data-toggle="tooltip"
                                                                           data-trigger="hover"
                                                                           data-placement="top"
                                                                           data-title="Date Opened">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
{{--                                                            @dd($record)--}}
                                                            <label for="projectinput3">Contact phone Number</label>
                                                            <input value="{{$record->Contact_phone_Number}}"; type="number" id="ContactMobileNumber" required
                                                                   class="form-control"
                                                                   name="Contact phone Number"
                                                                   data-toggle="tooltip"
                                                                   data-trigger="hover"
                                                                   data-placement="top"
                                                                   data-title="Date Opened">
                                                        </div>

                                                    </div>


                                                </div>
                                                <div class="col-md-6">

                                                    <div class="form-body">

                                                        <div class="form-group">
                                                            <label for="projectinput1">Date of birth</label>
                                                            <input value="{{$record->Date_of_birth}}"; type="date" id="Dateofbirth" required
                                                                   class="form-control"
                                                                   placeholder="Date of birth" name="Date of birth"
                                                                   data-toggle="tooltip" data-trigger="hover"
                                                                   data-placement="top"
                                                                   data-title="Issue Title">
                                                        </div>

                                                        <div class="row">

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput3">House Number</label>
                                                                    <input value="{{$record->House_Number}}"; type="number" id="HouseNumber" required
                                                                           class="form-control"
                                                                           name="House Number"
                                                                           data-toggle="tooltip"
                                                                           data-trigger="hover"
                                                                           data-placement="top"
                                                                           data-title="Date Opened">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="projectinput3">House Name</label>
                                                            <input value="{{$record->House_Name}}"; type="text" id="HouseName" required
                                                                   class="form-control"
                                                                   name="House Name"
                                                                   data-toggle="tooltip"
                                                                   data-trigger="hover"
                                                                   data-placement="top"
                                                                   data-title="Date Opened">
                                                        </div>

                                                    </div>


                                                </div>
                                                <div class="col-md-6">

                                                    <div class="form-body">

                                                        <div class="form-group">
                                                            <label for="projectinput1">Street</label>
                                                            <input value="{{$record->Street}}"; type="text" id="Street" required
                                                                   class="form-control"
                                                                   placeholder="Street" name="Street"
                                                                   data-toggle="tooltip" data-trigger="hover"
                                                                   data-placement="top"
                                                                   data-title="Issue Title">
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput1">City</label>
                                                                    <input value="{{$record->City}}"; type="text" id="City" required
                                                                           class="form-control"
                                                                           placeholder="City" name="City"
                                                                           data-toggle="tooltip" data-trigger="hover"
                                                                           data-placement="top"
                                                                           data-title="Issue Title">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput3">Country / State </label>
                                                                    <input value="{{$record->CountryState}}"; type="text" id="CountryState" required
                                                                           class="form-control"
                                                                           name="CountryState"
                                                                           data-toggle="tooltip"
                                                                           data-trigger="hover"
                                                                           data-placement="top"
                                                                           data-title="Date Opened">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="projectinput3">Post Code</label>
                                                            <input value="{{$record->Post_Code}}"; type="text" id="PostCode" required
                                                                   class="form-control"
                                                                   name="Post Code"
                                                                   data-toggle="tooltip"
                                                                   data-trigger="hover"
                                                                   data-placement="top"
                                                                   data-title="Date Opened">
                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="col-md-6">

                                                    <div class="form-body">

                                                        <div class="form-group">
                                                            <label for="projectinput1">Country</label>
                                                            <input value="{{$record->Country}}"; type="text" id="Country" required
                                                                   class="form-control"
                                                                   placeholder="Country" name="Country"
                                                                   data-toggle="tooltip" data-trigger="hover"
                                                                   data-placement="top"
                                                                   data-title="Issue Title">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="projectinput3">Work Permit No.</label>
                                                            <input value="{{$record->Work_Permit_No}}"; type="text" id="WorkPermitNo" required
                                                                   class="form-control"
                                                                   name="Work Permit No"
                                                                   data-toggle="tooltip"
                                                                   data-trigger="hover"
                                                                   data-placement="top"
                                                                   data-title="Date Opened">
                                                        </div>


                                                    </div>



                                                </div>
                                                <div class="col-md-6">

                                                    <div class="form-body">

                                                        <div class="form-group">
                                                            <label for="projectinput1">Nationality</label>
                                                            <input value="{{$record->Nationality}}"; type="text" id="Nationality" required
                                                                   class="form-control"
                                                                   placeholder="Nationality" name="Nationality"
                                                                   data-toggle="tooltip" data-trigger="hover"
                                                                   data-placement="top"
                                                                   data-title="Issue Title">
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput1">Identification
                                                                        No.</label>
                                                                    <input value="{{$record->Identification_No}}"; type="text" id="IdentificationNo" required
                                                                           class="form-control"
                                                                           placeholder="Identification No"
                                                                           name="Identification No"
                                                                           data-toggle="tooltip" data-trigger="hover"
                                                                           data-placement="top"
                                                                           data-title="Issue Title">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput3">Visa No. </label>
                                                                    <input value="{{$record->Visa_No}}"; type="text" id="VisaNo" required
                                                                           class="form-control"
                                                                           name="Visa No"
                                                                           data-toggle="tooltip"
                                                                           data-trigger="hover"
                                                                           data-placement="top"
                                                                           data-title="Date Opened">
                                                                </div>
                                                            </div>
                                                        </div>



                                                    </div>


                                                </div>
                                                <div class="col-md-6">

                                                    <div class="form-body">

                                                        <div class="form-group">
                                                            <label for="projectinput1">Visa Expiry Date</label>
                                                            <input value="{{$record->Visa_Expiry_Date}}"; type="date" id="VisaExpiryDate" required
                                                                   class="form-control"
                                                                   placeholder="Visa Expiry Date"
                                                                   name="Visa Expiry Date"
                                                                   data-toggle="tooltip" data-trigger="hover"
                                                                   data-placement="top"
                                                                   data-title="Issue Title">
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput1">Blood Group</label>
                                                                    <input value="{{$record->Blood_Group}}"; type="text" id="BloodGroup" required
                                                                           class="form-control"
                                                                           placeholder="Blood Group"
                                                                           name="Blood Group"
                                                                           data-toggle="tooltip" data-trigger="hover"
                                                                           data-placement="top"
                                                                           data-title="Issue Title">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput3">Visa No. </label>
                                                                    <input value="{{$record->Visa_No}}"; type="text" id="VisaNo" required
                                                                           class="form-control"
                                                                           name="Visa No"
                                                                           data-toggle="tooltip"
                                                                           data-trigger="hover"
                                                                           data-placement="top"
                                                                           data-title="Date Opened">
                                                                </div>
                                                            </div>
                                                        </div>

{{--                                                        <div class="form-group">--}}
{{--                                                            <label for="projectinput3">Work Permit No.</label>--}}
{{--                                                            <input value="{{$record->}}"; type="text" id="WorkPermitNo" required--}}
{{--                                                                   class="form-control"--}}
{{--                                                                   name="Work Permit No"--}}
{{--                                                                   data-toggle="tooltip"--}}
{{--                                                                   data-trigger="hover"--}}
{{--                                                                   data-placement="top"--}}
{{--                                                                   data-title="Date Opened">--}}
{{--                                                        </div>--}}

                                                    </div>

                                                    {{--                                                    <div class="form-actions">--}}
                                                    {{--                                                        <button value="{{$record->}}"; type="button" class="btn btn-danger mr-1">--}}
                                                    {{--                                                            <i class="ft-x"></i> Cancel--}}
                                                    {{--                                                        </button>--}}
                                                    {{--                                                        <button   class="btn btn-primary">--}}
                                                    {{--                                                            <i class="la la-check-square-o"></i> Save--}}
                                                    {{--                                                        </button>--}}
                                                    {{--                                                    </div>--}}

                                                </div>
                                                <div class="col-md-6">

                                                    <div class="form-body">

                                                        <div class="form-group">
                                                            <label for="projectinput1">Bank Account Name</label>
                                                            <input value="{{$record->Bank_Account_Name}}"; type="text" id="BankAccountName" required
                                                                   class="form-control"
                                                                   placeholder="Bank Account Name"
                                                                   name="Bank Account Name"
                                                                   data-toggle="tooltip" data-trigger="hover"
                                                                   data-placement="top"
                                                                   data-title="Issue Title">
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput1">Bank Short Code</label>
                                                                    <input value="{{$record->Bank_Short_Code}}"; type="text" id="BankShortCode" required
                                                                           class="form-control"
                                                                           placeholder="Bank Short Code"
                                                                           name="Bank Short Code"
                                                                           data-toggle="tooltip" data-trigger="hover"
                                                                           data-placement="top"
                                                                           data-title="Issue Title">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput3">Bank Account
                                                                        Number</label>
                                                                    <input value="{{$record->Bank_Account_Number}}"; type="text" id="BankAccountNumber" required
                                                                           class="form-control"
                                                                           name="Bank Account Number"
                                                                           data-toggle="tooltip"
                                                                           data-trigger="hover"
                                                                           data-placement="top"
                                                                           data-title="Date Opened">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput3">Bank IFSC Code</label>
                                                                    <input value="{{$record->Bank_IFSC_Code}}"; type="text" id="BankIFSCCode" required
                                                                           class="form-control"
                                                                           name="Bank IFSC Code"
                                                                           data-toggle="tooltip"
                                                                           data-trigger="hover"
                                                                           data-placement="top"
                                                                           data-title="Date Opened">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput3">Bank IBAN Code</label>
                                                                    <input value="{{$record->Bank_IBAN_Code}}"; type="text" id="BankIBANCode" required
                                                                           class="form-control"
                                                                           name="Bank IBAN Code"
                                                                           data-toggle="tooltip"
                                                                           data-trigger="hover"
                                                                           data-placement="top"
                                                                           data-title="Date Opened">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        {{--                                                        <div class="form-group">--}}
                                                        {{--                                                            <label for="projectinput3">Bank IFSC Code</label>--}}
                                                        {{--                                                            <input value="{{}}"; type="text" id="BankIFSCCode" required--}}
                                                        {{--                                                                   class="form-control"--}}
                                                        {{--                                                                   name="Bank IFSC Code"--}}
                                                        {{--                                                                   data-toggle="tooltip"--}}
                                                        {{--                                                                   data-trigger="hover"--}}
                                                        {{--                                                                   data-placement="top"--}}
                                                        {{--                                                                   data-title="Date Opened">--}}
                                                        {{--                                                        </div>--}}

                                                    </div>

                                                    {{--                                                    <div class="form-actions">--}}
                                                    {{--                                                        <button value="{{}}"; type="button" class="btn btn-danger mr-1">--}}
                                                    {{--                                                            <i class="ft-x"></i> Cancel--}}
                                                    {{--                                                        </button>--}}
                                                    {{--                                                        <button   class="btn btn-primary">--}}
                                                    {{--                                                            <i class="la la-check-square-o"></i> Save--}}
                                                    {{--                                                        </button>--}}
                                                    {{--                                                    </div>--}}

                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <a id="baseIcon-tab2" data-toggle="tab" aria-controls="tabIcon2" href="#tabIcon2" aria-expanded="false"> <button   class="btn btn-primary">
                                                        <i class="la la-check-square-o"></i> Next
                                                    </button></a>
                                            </div>

                                        </div>


                                        <div class="tab-pane" id="tabIcon2" aria-labelledby="baseIcon-tab2">

                                            <div class="row">
                                                <div class="col-md-6">

                                                    <div class="form-body">

                                                        <div class="form-group">
                                                            <label for="projectinput1">Company</label>
                                                            <input value="{{$emp_work->Company}}"; type="text" id="Company" required
                                                                   class="form-control"
                                                                   placeholder="Company" name="Company"
                                                                   data-toggle="tooltip" data-trigger="hover"
                                                                   data-placement="top"
                                                                   data-title="Issue Title">
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput3">Branch</label>
                                                                    <input value="{{$emp_work->Branch}}"; type="text" id="Branch"
                                                                           class="form-control"
                                                                           name="Branch"
                                                                           data-toggle="tooltip"
                                                                           data-trigger="hover"
                                                                           data-placement="top"
                                                                           data-title="Date Opened">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput3">Department</label>
                                                                    <input value="{{$emp_work->Department}}"; type="text" id="Department" required
                                                                           class="form-control"
                                                                           name="Department"
                                                                           data-toggle="tooltip"
                                                                           data-trigger="hover"
                                                                           data-placement="top"
                                                                           data-title="Date Opened">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="projectinput3">Designation</label>
                                                        <input value="{{$emp_work->Designation}}"; type="text" id="Title"
                                                               class="form-control"
                                                               name="Designation"
                                                               data-toggle="tooltip"
                                                               data-trigger="hover"
                                                               data-placement="top"
                                                               data-title="Date Opened">
                                                    </div>

                                                    {{--                                                    </div>--}}

                                                    {{--                                                    <div class="form-actions">--}}
                                                    {{--                                                        <button value="{{$emp_work->}}"; type="button" class="btn btn-danger mr-1">--}}
                                                    {{--                                                            <i class="ft-x"></i> Cancel--}}
                                                    {{--                                                        </button>--}}
                                                    {{--                                                        <button   class="btn btn-primary">--}}
                                                    {{--                                                            <i class="la la-check-square-o"></i> Save--}}
                                                    {{--                                                        </button>--}}
                                                    {{--                                                    </div>--}}

                                                </div>
                                                <div class="col-md-6">

                                                    <div class="form-body">
                                                        <div class="form-group">
                                                            <label for="projectinput1">Date of joining</label>
                                                            <input value="{{$emp_work->Date_of_joining}}"; type="date" id="Dateofjoining" required
                                                                   class="form-control"
                                                                   placeholder="Date of joining" name="Date of joining"
                                                                   data-toggle="tooltip" data-trigger="hover"
                                                                   data-placement="top"
                                                                   data-title="Issue Title">
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput3">Date of leaving</label>
                                                                    <input value="{{$emp_work->Date_of_leaving}}"; type="date" id="Dateofleaving"
                                                                           class="form-control"
                                                                           name="Date of leaving"
                                                                           data-toggle="tooltip"
                                                                           data-trigger="hover"
                                                                           data-placement="top"
                                                                           data-title="Date Opened">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput3">Employee Type</label>
                                                                    <div class="mb-2">

                                                                        <div class="form-check form-check-inline">
{{--                                                                            @dd(($emp_work->Employee_Type=='Employee')?'checked':'')--}}
                                                                            <input class="form-check-input" type="radio"
                                                                                   name="Employee Type" {{($emp_work->Employee_Type=='Employee')?'checked':''}}
                                                                                   id="EmployeeType" value="Employee">
                                                                            <label class="form-check-label"
                                                                                   for="inlineRadio1">Employee</label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" type="radio"
                                                                                   name="Employee Type" {{($emp_work->Employee_Type=='Contractor')?'checked':''}}
                                                                                   id="EmployeeType" value="Contractor">
                                                                            <label class="form-check-label"
                                                                                   for="inlineRadio2">Contractor</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput3">Contract Type</label>
                                                                    <div class="mb-2">

                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" type="radio"
                                                                                   name="Contract Type" {{($emp_work->Contract_Type=='full-time')?'checked':''}}
                                                                                   id="ContractType" value="full-time">
                                                                            <label class="form-check-label"
                                                                                   for="inlineRadio1">Employee</label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" type="radio"
                                                                                   name="Contract Type" {{($emp_work->Contract_Type=='part-time')?'checked':''}}
                                                                                   id="ContractType" value="part-time">
                                                                            <label class="form-check-label"
                                                                                   for="inlineRadio2">Contractor</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput3">Employee id</label>
                                                                    <input value="{{$emp_work->Employee_id}}"; type="text" id="Employeeid"
                                                                           class="form-control"
                                                                           name="Employee id"
                                                                           data-toggle="tooltip"
                                                                           data-trigger="hover"
                                                                           data-placement="top"
                                                                           data-title="Date Opened">
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="col-md-6">

                                                    <div class="form-body">
                                                        <div class="form-group">
                                                            <label for="projectinput1">Manager</label>
                                                            <input value="{{$emp_work->Manager}}"; type="text" id="Manager" required
                                                                   class="form-control"
                                                                   placeholder="Manager" name="Manager"
                                                                   data-toggle="tooltip" data-trigger="hover"
                                                                   data-placement="top"
                                                                   data-title="Issue Title">
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="projectinput3">Job position</label>
                                                                    <input value="{{$emp_work->Job_position}}"; type="text" id="Jobposition"
                                                                           class="form-control"
                                                                           name="Job position"
                                                                           data-toggle="tooltip"
                                                                           data-trigger="hover"
                                                                           data-placement="top"
                                                                           data-title="Date Opened">
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="col-md-6">

                                                    <div class="form-body">

                                                        <div class="row">

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput3">Work Mobile no.</label>
                                                                    <input value="{{$emp_work->Work_Mobile_no}}"; type="number" id="Work Mobile no"
                                                                           class="form-control"
                                                                           name="Work Mobile no"
                                                                           data-toggle="tooltip"
                                                                           data-trigger="hover"
                                                                           data-placement="top"
                                                                           data-title="Date Opened">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput3">Work phone no.</label>
                                                                    <input value="{{$emp_work->Work_phone_no}}"; type="number" id="Work phone no"
                                                                           class="form-control"
                                                                           name="Work phone no"
                                                                           data-toggle="tooltip"
                                                                           data-trigger="hover"
                                                                           data-placement="top"
                                                                           data-title="Date Opened">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="projectinput3">Work Email</label>
                                                                    <input value="{{$emp_work->Work_Email}}"; type="email" id="Work Email"
                                                                           class="form-control"
                                                                           name="Work Email"
                                                                           data-toggle="tooltip"
                                                                           data-trigger="hover"
                                                                           data-placement="top"
                                                                           data-title="Date Opened">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <a id="baseIcon-tab3" data-toggle="tab" aria-controls="tabIcon3" href="#tabIcon3" aria-expanded="false"> <button   class="btn btn-primary">
                                                        <i class="la la-check-square-o"></i> Next
                                                    </button></a>
                                            </div>
                                        </div>


                                        <div class="tab-pane" id="tabIcon3" aria-labelledby="baseIcon-tab3">
                                            <div class="row">
                                                <div class="col-md-6">

                                                    <div class="form-body">

                                                        <div class="form-group">
                                                            <label for="projectinput1">Office Shift</label>
                                                            <input value="{{$hr_setting->Office_Shift}}"; type="text" id="OfficeShift" required
                                                                   class="form-control"
                                                                   placeholder="Company" name="Office Shift"
                                                                   data-toggle="tooltip" data-trigger="hover"
                                                                   data-placement="top"
                                                                   data-title="Issue Title">
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput3">User Name</label>
                                                                    <input value="{{$hr_setting->User_Name}}"; type="text" id="User Name"
                                                                           class="form-control"
                                                                           name="User Name"
                                                                           data-toggle="tooltip"
                                                                           data-trigger="hover"
                                                                           data-placement="top"
                                                                           data-title="Date Opened">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput3">Role</label>
                                                                    <input value="{{$hr_setting->Role}}"; type="text" id="Role" required
                                                                           class="form-control"
                                                                           name="Role"
                                                                           data-toggle="tooltip"
                                                                           data-trigger="hover"
                                                                           data-placement="top"
                                                                           data-title="Date Opened">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="projectinput3">payrole</label>
                                                        <input value="{{$hr_setting->payrole}}"; type="text" id="payrole"
                                                               class="form-control"
                                                               name="payrole"
                                                               data-toggle="tooltip"
                                                               data-trigger="hover"
                                                               data-placement="top"
                                                               data-title="Date Opened">
                                                    </div>

                                                    {{--                                                    </div>--}}

                                                    {{--                                                    <div class="form-actions">--}}
                                                    {{--                                                        <button value="{{$hr_setting->}}"; type="button" class="btn btn-danger mr-1">--}}
                                                    {{--                                                            <i class="ft-x"></i> Cancel--}}
                                                    {{--                                                        </button>--}}
                                                    {{--                                                        <button   class="btn btn-primary">--}}
                                                    {{--                                                            <i class="la la-check-square-o"></i> Save--}}
                                                    {{--                                                        </button>--}}
                                                    {{--                                                    </div>--}}

                                                </div>
                                                <div class="col-md-6">

                                                    <div class="form-body">

                                                        <div class="form-group">
                                                            <label for="projectinput1">Timesheet Cost</label>
                                                            <input value="{{$hr_setting->Timesheet_Cost}}"; type="text" id="TimesheetCost" required
                                                                   class="form-control"
                                                                   placeholder="Company" name="Timesheet Cost"
                                                                   data-toggle="tooltip" data-trigger="hover"
                                                                   data-placement="top"
                                                                   data-title="Issue Title">
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput3">Annual Gross
                                                                        Salary</label>
                                                                    <input value="{{$hr_setting->Annual_Gross_Salary}}"; type="text" id="Annual Gross Salary"
                                                                           class="form-control"
                                                                           name="Annual Gross Salary"
                                                                           data-toggle="tooltip"
                                                                           data-trigger="hover"
                                                                           data-placement="top"
                                                                           data-title="Date Opened">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput3">Attendance</label>
                                                                    <input value="{{$hr_setting->Attendance}}"; type="datetime-local" id="Attendance"
                                                                           required
                                                                           class="form-control"
                                                                           name="Attendance"
                                                                           data-toggle="tooltip"
                                                                           data-trigger="hover"
                                                                           data-placement="top"
                                                                           data-title="Date Opened">
                                                                </div>
                                                            </div>


                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput3">Badge ID</label>
                                                                    <input value="{{$hr_setting->Badge_ID}}"; type="text" id="Badge ID"
                                                                           class="form-control"
                                                                           name="Badge ID"
                                                                           data-toggle="tooltip"
                                                                           data-trigger="hover"
                                                                           data-placement="top"
                                                                           data-title="Date Opened">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput3">Manual Attendance</label>
                                                                    <input value="{{$hr_setting->Manual_Attendance}}"; type="datetime-local" id="Manual Attendance"
                                                                           class="form-control"
                                                                           name="Manual Attendance"
                                                                           data-toggle="tooltip"
                                                                           data-trigger="hover"
                                                                           data-placement="top"
                                                                           data-title="Date Opened">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    {{--                                                    </div>--}}

                                                    {{--                                                    <div class="form-actions">--}}
                                                    {{--                                                        <button value="{{}}"; type="button" class="btn btn-danger mr-1">--}}
                                                    {{--                                                            <i class="ft-x"></i> Cancel--}}
                                                    {{--                                                        </button>--}}
                                                    {{--                                                        <button   class="btn btn-primary">--}}
                                                    {{--                                                            <i class="la la-check-square-o"></i> Save--}}
                                                    {{--                                                        </button>--}}
                                                    {{--                                                    </div>--}}

                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <a id="baseIcon-tab4" data-toggle="tab" aria-controls="tabIcon4" href="#tabIcon4" aria-expanded="false"> <button   class="btn btn-primary">
                                                        <i class="la la-check-square-o"></i> Next
                                                    </button></a>
                                            </div>
                                        </div>


                                        <div class="tab-pane" id="tabIcon4" aria-labelledby="baseIcon-tab4">

                                            @foreach($emp_company as $company)
                                            <div class="row" id="appendable">
                                                <div class="col-md-12" id="custom-data">

                                                    <div class="form-body">

                                                        <div class="form-group">
                                                            <label for="projectinput1">Company Name</label>
                                                            <input value="{{$company->Company_Name}}"; type="text" id="CompanyName" required
                                                                   class="form-control"
                                                                   placeholder="Company Name" name="Company Name[]"
                                                                   data-toggle="tooltip" data-trigger="hover"
                                                                   data-placement="top"
                                                                   data-title="Issue Title">
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput3">Job Profile</label>
                                                                    <input value="{{$company->Job_Profile}}"; type="text" id="Job Profile"
                                                                           class="form-control"
                                                                           name="Job Profile[]"
                                                                           data-toggle="tooltip"
                                                                           data-trigger="hover"
                                                                           data-placement="top"
                                                                           data-title="Date Opened">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput3">Joining Date</label>
                                                                    <input value="{{$company->Joining_Date}}"; type="date" id="Joining Date" required
                                                                           class="form-control"
                                                                           name="Joining Date[]"
                                                                           data-toggle="tooltip"
                                                                           data-trigger="hover"
                                                                           data-placement="top"
                                                                           data-title="Date Opened">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="projectinput3">Leaving Date</label>
                                                                    <input value="{{$company->Leaving_Date}}"; type="date" id="Leaving Date" required
                                                                           class="form-control"
                                                                           name="Leaving Date[]"
                                                                           data-toggle="tooltip"
                                                                           data-trigger="hover"
                                                                           data-placement="top"
                                                                           data-title="Date Opened">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="projectinput3">Remarks</label>
                                                        <input value="{{$company->Remarks}}"; type="text" id="Remarks[]"
                                                               class="form-control"
                                                               name="Remarks[]"
                                                               data-toggle="tooltip"
                                                               data-trigger="hover"
                                                               data-placement="top"
                                                               data-title="Date Opened">
                                                    </div>

                                                    <hr>

                                                </div>
                                            </div>
                                            @endforeach
                                            {{--<div class="form-actions">

                                                <button   onclick="personal_info(this)" class="btn btn-primary">
                                                    <i class="ft-plus"></i>
                                                </button>
                                            </div>--}}
                                            <div class="form-actions">
                                                <a id="baseIcon-tab5" data-toggle="tab" aria-controls="tabIcon5" href="#tabIcon5" aria-expanded="false"> <button   class="btn btn-primary">
                                                        <i class="la la-check-square-o"></i> Next
                                                    </button></a>
                                            </div>
                                        </div>




                                        <div class="tab-pane" id="tabIcon5" aria-labelledby="baseIcon-tab5">
                                            @foreach($emp_qua as $qua)
                                            <div class="row" id="appendable_qua">
                                                <div class="col-md-12" id="custom-data-qua">

                                                    <div class="form-body">

                                                        <div class="form-group">
                                                            <label for="projectinput1">Schoole / University</label>
                                                            <input value="{{$qua->School_University}}"; type="text" id="SchooleUniversity" required
                                                                   class="form-control"
                                                                   placeholder="Schoole / University"
                                                                   name="School University[]"
                                                                   data-toggle="tooltip" data-trigger="hover"
                                                                   data-placement="top"
                                                                   data-title="Issue Title">
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput3">Education Level</label>
                                                                    <input value="{{$qua->Education_Level}}"; type="text" id="Education Level"
                                                                           class="form-control"
                                                                           name="Education Level[]"
                                                                           data-toggle="tooltip"
                                                                           data-trigger="hover"
                                                                           data-placement="top"
                                                                           data-title="Date Opened">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput3">Start Date</label>
                                                                    <input value="{{$qua->Start_Date}}"; type="date" id="Start Date" required
                                                                           class="form-control"
                                                                           name="Start Date[]"
                                                                           data-toggle="tooltip"
                                                                           data-trigger="hover"
                                                                           data-placement="top"
                                                                           data-title="Date Opened">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="projectinput3">End Date</label>
                                                                    <input value="{{$qua->End_Date}}"; type="date" id="End Date" required
                                                                           class="form-control"
                                                                           name="End Date[]"
                                                                           data-toggle="tooltip"
                                                                           data-trigger="hover"
                                                                           data-placement="top"
                                                                           data-title="Date Opened">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput3">Professional Course (if
                                                                        any)</label>
                                                                    <input value="{{$qua->Professional_Course}}"; type="date" id="End Date" required
                                                                           class="form-control"
                                                                           name="Professional Course[]"
                                                                           data-toggle="tooltip"
                                                                           data-trigger="hover"
                                                                           data-placement="top"
                                                                           data-title="Date Opened">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput3">Remarks</label>
                                                                    <input value="{{$qua->courseRemarks}}"; type="text" id="Remarks"
                                                                           class="form-control"
                                                                           name="courseRemarks[]"
                                                                           data-toggle="tooltip"
                                                                           data-trigger="hover"
                                                                           data-placement="top"
                                                                           data-title="Date Opened">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <hr>

                                                </div>
                                            </div>
                                            @endforeach
                                            {{--<div class="form-actions">

                                                <button   onclick="qualification(this)" class="btn btn-primary">
                                                    <i class="ft-plus"></i>
                                                </button>
                                            </div>--}}
                                            <div class="form-actions">
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> Save
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
        </section>
        <!-- Tabs with Icons end -->

    </div>







@stop



