@extends('layouts.default')
@section('content')

    <div class="content-header row">
        <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
            <div class="breadcrumbs-top float-md-left">
                <div class="breadcrumb-wrapper mr-1">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">HRM</a>
                        </li>
                        <li class="breadcrumb-item active text-white"><a href="#"><strong>Employee</strong></a>
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
                                <form action="{{route('contact.post')}}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <input type="hidden" id="record-id" name="id">

                                    <div class="card-header p-0">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="cxrm-tab1" data-toggle="tab"
                                                   aria-controls="tabIcon1" href="#tabIcon1" aria-expanded="true">Information </a>
                                            </li>
                                            <li class="nav-item" id="contact-hyperlink" style="display: none">
                                                <a class="nav-link" id="cxrm-tab2" data-toggle="tab"
                                                   aria-controls="tabIcon2" href="#tabIcon2" aria-expanded="false">
                                                    Contacts</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="cxrm-tab3" data-toggle="tab"
                                                   aria-controls="tabIcon3" href="#tabIcon3" aria-expanded="false">
                                                    Accounting</a>
                                            </li>


                                        </ul>
                                        <div class="heading-elements">
                                            <ul class="list-inline mb-0" style="margin-top:8px;">
                                                <li>
                                                    <a data-action="collapse">
                                                        <i class="ft-info"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a data-action="reload">
                                                        <i class="ft-aperture"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a data-action="reload" data-toggle="modal" data-keyboard="false"
                                                       data-target="#editAddress">
                                                        <i class="ft-edit"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--newcode-->
                                    <div class="card-content">
                                        <div class="card-body px-0">
                                            <div class="tab-content p-0">
                                                <div class="bg-lighttt">
                                                    <div class="row p-2">
                                                        <div class="form-check mr-1" id="individualChecked"
                                                             onclick="individualRadio(this.id)">
                                                            <input class="form-check-input" type="radio"
                                                                   name="contact-type" id="exampleRadios1"
                                                                   value="Individual">
                                                            <label class="form-check-label" for="exampleRadios1">
                                                                Individual
                                                            </label>
                                                        </div>
                                                        <div class="form-check" id="companyChecked"
                                                             onclick="companyRadio(this.id)">
                                                            <input class="form-check-input " type="radio"
                                                                   name="contact-type" id="exampleRadios2"
                                                                   value="Company">
                                                            <label class="form-check-label" for="exampleRadios2">
                                                                Company
                                                            </label>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="error" style="display: none;color: red"
                                                                 id="error-for-individual-company">1 type must be
                                                                select.
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-7">
                                                            <div class="media d-flex mx-0 user-text mt-0">
                                                                <div class="align-left p-0 mr-2">
                                                                    <a href="#" class="profile-image">
                                                                        <img id="targetImage"
                                                                             src="{{asset('app-assets/images/portrait/small/avatar-s-1.png')}}"
                                                                             width="120"
                                                                             height="120"
                                                                             class="rounded-squre img-border height-120"
                                                                             alt="Card image"> <br>
                                                                        <input class="mt-1"
                                                                               style="margin-left:10px; width: 90px;"
                                                                               type="file"
                                                                               onchange="previewImage(this);"
                                                                               name="photo">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body text-left text-dark">
                                                                    <div class="row_bussiness-md"
                                                                         id="individual-basic-info"
                                                                         style="display: block">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <select id=""
                                                                                                    name="priority"
                                                                                                    class="form-control">
                                                                                                <option value="low">Mr
                                                                                                </option>
                                                                                                <option value="medium"></option>
                                                                                                <option value="high"></option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <div class="position-relative">
                                                                                                <input type="text"
                                                                                                       id="first-name"
                                                                                                       class="form-control"
                                                                                                       placeholder="First Name"
                                                                                                       name="first-name">
                                                                                                <div class="error"
                                                                                                     style="display: none; color: red"
                                                                                                     id="error-for-first-name">
                                                                                                    First name must be
                                                                                                    required
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <div class="position-relative">
                                                                                                <input type="text"
                                                                                                       id="middle-name"
                                                                                                       class="form-control"
                                                                                                       placeholder="Middle Name"
                                                                                                       name="middle-name">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <div class="position-relative">
                                                                                                <input type="text"
                                                                                                       id="last-name"
                                                                                                       class="form-control"
                                                                                                       placeholder="Last Name"
                                                                                                       name="last-name">
                                                                                                <div class="error"
                                                                                                     style="display: none;color: red"
                                                                                                     id="error-for-last-name">
                                                                                                    Last name must be
                                                                                                    required
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label for="" class="">Job
                                                                                                Position</label>
                                                                                            <div class="position-relative">
                                                                                                <select id=""
                                                                                                        onchange="postDetail('{{route('post-contact-type-info')}}')"
                                                                                                        name="job-position"
                                                                                                        class="form-control">
                                                                                                    <option selected
                                                                                                            disabled>
                                                                                                        Select any one
                                                                                                    </option>
                                                                                                    <option value="low">
                                                                                                        Designer
                                                                                                    </option>
                                                                                                    <option value="medium">
                                                                                                        Developer
                                                                                                    </option>
                                                                                                    <option value="high">
                                                                                                        Coder
                                                                                                    </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label for="">Business /
                                                                                                Refine</label>
                                                                                            <div class="position-relative">
                                                                                                <input type="text" id=""
                                                                                                       class="form-control"
                                                                                                       placeholder=""
                                                                                                       name="business-info">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <div class="row_bussiness-md"
                                                                         id="company-basic-info" style="display: none">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group">
                                                                                            <div class="position-relative">
                                                                                                <input type="text"
                                                                                                       id="company-name"
                                                                                                       class="form-control"
                                                                                                       placeholder="Company Name"
                                                                                                       name="company-name">
                                                                                                <div class="error"
                                                                                                     style="display: none;color: red"
                                                                                                     id="error-for-company-name">
                                                                                                    Company name must be
                                                                                                    required
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>


                                                                        </div>
                                                                    </div>

                                                                    <div class="row_bussiness-col"
                                                                         id="business-classifications"
                                                                         style="display: none">
                                                                        <div class="row">

                                                                            <div class="col-md-12 col-xl-6">
                                                                                <div class="form-group">
                                                                                    <label for="timesheetinput1">Business
                                                                                        Classification</label>
                                                                                    <div class="position-relative">
                                                                                        <input type="text"
                                                                                               onclick="postDetail('{{route('post-contact-type-info')}}')"
                                                                                               id="timesheetinput1"
                                                                                               class="form-control"
                                                                                               placeholder=""
                                                                                               name="business-classifications">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12 col-xl-6">
                                                                                <div class="form-group">
                                                                                    <label for="timesheetinput1">Account
                                                                                        Status</label>
                                                                                    <div class="position-relative">
                                                                                        <input type="text"
                                                                                               id="timesheetinput1"
                                                                                               class="form-control"
                                                                                               placeholder=""
                                                                                               name="account-status">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row_colmd row">
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="">Email</label>
                                                                                <div class="position-relative">
                                                                                    <input type="email" id="" class="form-control" placeholder="Enter Your Email" name="email">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12" id="website" style="display: none">
                                                                            <div class="form-group">
                                                                                <label for="timesheetinput1">Website</label>
                                                                                <div class="position-relative">
                                                                                    <input type="url" id="timesheetinput1" class="form-control" placeholder="" name="website">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="">Phone</label>
                                                                                <div class="position-relative">
                                                                                    <input type="text" id=""
                                                                                           class="form-control"
                                                                                           placeholder="Phone"
                                                                                           name="phone">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="">Mobile</label>
                                                                                <div class="position-relative">
                                                                                    <input type="text" id=""
                                                                                           class="form-control"
                                                                                           placeholder="Mobile"
                                                                                           name="mobile">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="timesheetinput1">tag</label>
                                                                                <div class="position-relative">
                                                                                    <input name='tags'
                                                                                           value='tag1, tag2 '
                                                                                           type="text" id=""
                                                                                           class="form-control"
                                                                                           placeholder="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="media-body text-left text-dark">

                                                                <div class="row">
                                                                    <div class="col-md-12" id="address-type" style="display: none">
                                                                        <div class="form-group row">
                                                                            <label class="col-md-3" for="">Address
                                                                                type</label>
                                                                            <div class="col-md-9">

                                                                                <div class="row cxrmcheckbox pb-2">
                                                                                    <div class="col-md-6 col-sm-6">
                                                                                        <div class="custom-control custom-checkbox" id="correspondence-sec" onclick="checkAddressType(this.id)">
                                                                                            <input type="checkbox" name="address-type[]" value="Correspondence" class="custom-control-input" id="Correspondence">
                                                                                            <label class="custom-control-label"
                                                                                                   for="Correspondence">Correspondence</label>
                                                                                            <!-- <i class="ft-external-link ccm"></i> -->
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6 col-sm-6">
                                                                                        <div class="custom-control custom-checkbox" id="invoice-sec" onclick="checkAddressType(this.id)">
                                                                                            <input type="checkbox" name="address-type[]" class="custom-control-input" value="Invoice" id="Invoice">
                                                                                            <label class="custom-control-label"
                                                                                                   for="Invoice">Invoice</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row cxrmcheckbox pb-2">
                                                                                    <div class="col-md-6 col-sm-6">
                                                                                        <div class="custom-control custom-checkbox" id="registered-sec" onclick="checkAddressType(this.id)">
                                                                                            <input type="checkbox" name="address-type[]" value="Registered" class="custom-control-input" id="Registered">
                                                                                            <label class="custom-control-label" for="Registered">Registered</label>
                                                                                            <!-- <i class="ft-external-link ccm"></i> -->
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6 col-sm-6">
                                                                                        <div class="custom-control custom-checkbox" id="shipping-sec" onclick="checkAddressType(this.id)">
                                                                                            <input type="checkbox" name="address-type[]" value="Shipping" class="custom-control-input" id="Shipping">
                                                                                            <label class="custom-control-label" for="Shipping">Shipping</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row cxrmcheckbox pb-2">
                                                                                    <div class="col-md-6 col-sm-6">
                                                                                        <div class="custom-control custom-checkbox" id="other-sec" onclick="checkAddressType(this.id)">
                                                                                            <input type="checkbox" name="address-type[]" value="Other" class="custom-control-input" id="other">
                                                                                            <label class="custom-control-label" for="other">Other</label>
                                                                                            <!-- <i class="ft-external-link ccm"></i> -->
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group row">
                                                                            <label class="col-md-3" for="">House
                                                                                Number</label>
                                                                            <div class="col-md-9">
                                                                                <input type="text" id="" class="form-control" placeholder="" name="house-number">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group extent-wrp row">
                                                                            <label class="col-md-3" for="">House
                                                                                Name</label>
                                                                            <div class="col-md-9">
                                                                                <input type="text" id=""
                                                                                       class="form-control"
                                                                                       placeholder="" name="house-name">

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group row">
                                                                            <label class="col-md-3" for="">Address
                                                                                info</label>
                                                                            <div class="col-md-9">
                                                                                <input type="text" id=""
                                                                                       class="form-control"
                                                                                       placeholder=""
                                                                                       name="address-info">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group row">
                                                                            <label class="col-md-3"
                                                                                   for="">Street</label>
                                                                            <div class="col-md-9">
                                                                                <input type="text" id=""
                                                                                       class="form-control"
                                                                                       placeholder="" name="street">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group row">
                                                                            <label class="col-md-3"
                                                                                   for="">Postcode</label>
                                                                            <div class="col-md-9">
                                                                                <input type="text" id=""
                                                                                       class="form-control"
                                                                                       placeholder="" name="post-code">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group row">
                                                                            <label class="col-md-3"
                                                                                   for="">Country</label>
                                                                            <div class="col-md-9">
                                                                                <select id="" name="country"
                                                                                        onchange="selectCountry(this.value , '{{route('get-state-for-contact')}}')"
                                                                                        class="form-control">
                                                                                    <option value="">Select Country
                                                                                    </option>
                                                                                    @forelse($countries as $country)
                                                                                        <option value="{{$country->id}}">{{$country->value}}</option>
                                                                                    @empty
                                                                                        <option selected disabled>not
                                                                                            found in record
                                                                                        </option>
                                                                                    @endforelse

                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group row">
                                                                            <label class="col-md-3"
                                                                                   for="">State</label>
                                                                            <div class="col-md-9">
                                                                                <select id="putState" name="state"
                                                                                        onchange="selectState(this.value, '{{route('get-city-for-contact')}}')"
                                                                                        class="form-control">
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group row">
                                                                            <label class="col-md-3" for="">City</label>
                                                                            <div class="col-md-9">
                                                                                <select id="putCity" name="city"
                                                                                        class="form-control">
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row" id="more-address" style="display: none">
                                                                    <div class="col-md-12 mt-1 text-right">
                                                                        <button type="button"
                                                                                class="btn btn-bg-gradient-x-purple-red mb-1"
                                                                                data-toggle="modal"
                                                                                data-keyboard="false"
                                                                                data-target="#moreAddress">More Address
                                                                        </button>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--Information Tab Content-->
                                                <div role="tabpanel" class="tab-pane active" id="tabIcon1"
                                                     aria-expanded="true" aria-labelledby="baseIcon-tab1">

                                                    <div class="row mt-1">
                                                        <div class="col-md-6">

                                                            <div class="form-body">
                                                                <h4 class="form-section">Social Info</h4>
                                                                <div class="form-group row">
                                                                    <label class="col-md-3 label-control" for="">LinkedIn</label>
                                                                    <div class="col-md-8">
                                                                        <div class="position-relative">
                                                                            <input type="url" id="" name="social[]" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-md-3 label-control" for="">Facebook</label>
                                                                    <div class="col-md-8">
                                                                        <div class="position-relative">
                                                                            <input type="url" id="" name="social[]" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-md-3 label-control"
                                                                           for="projectinput7">Twitter</label>
                                                                    <div class="col-md-8">
                                                                        <div class="position-relative">
                                                                            <input type="url" id="" name="social[]" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-md-3 label-control">Instagram</label>
                                                                    <div class="col-md-8">
                                                                        <div class="position-relative">
                                                                            <input type="url" id="" name="social[]" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-6">

                                                            <div class="form-body">
                                                                <h4 class="form-section">CxRM</h4>
                                                                <div class="row cxrmcheckbox pb-2">
                                                                    <div class="col-md-6 col-sm-6">
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" value="Customer" name="cxrm[]" id="customCheck1">
                                                                            <label class="custom-control-label"
                                                                                   for="customCheck1">Customer</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-6">
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox"
                                                                                   class="custom-control-input" value="Supplier" name="cxrm[]" id="customCheck2">
                                                                            <label class="custom-control-label"
                                                                                   for="customCheck2">Supplier</label>
                                                                            <!-- <i class="ft-external-link ccm"></i> -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row cxrmcheckbox pb-2">
                                                                    <div class="col-md-6 col-sm-6">
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" name="cxrm[]" value="Beneficiary" class="custom-control-input" id="customCheck3">
                                                                            <label class="custom-control-label"
                                                                                   for="customCheck3">Beneficiary</label>
                                                                            <!-- <i class="ft-external-link ccm"></i> -->
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-6">
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" name="cxrm[]" value="Partner" class="custom-control-input" id="customCheck4">
                                                                            <label class="custom-control-label"
                                                                                   for="customCheck4">Partner</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row cxrmcheckbox pb-2">
                                                                    <div class="col-md-6 col-sm-6">
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" name="cxrm[]" value="Employee" class="custom-control-input" id="customCheck5">
                                                                            <label class="custom-control-label"
                                                                                   for="customCheck5">Employee</label>
                                                                            <!-- <i class="ft-external-link ccm"></i> -->
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-6">
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" name="cxrm[]" value="User" class="custom-control-input" id="customCheck6">
                                                                            <label class="custom-control-label"
                                                                                   for="customCheck6">User</label>
                                                                            <!-- <i class="ft-external-link ccm"></i> -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                                <!--Contact Tab Content-->
                                                <div class="tab-pane" id="tabIcon2" aria-labelledby="baseIcon-tab2">



                                                    <div  id="contact-target" style="display: none">
                                                      <div class="row">

                                                        <div class="col-sm-12">
                                                            <h4>Contacts</h4>
                                                            <a href="javascript:void(0)" class="create_btn"
                                                               data-toggle="modal"
                                                               data-target="#create-modal">Create</a>
                                                        </div>

                                                        <div class="col-md-4 col-sm-6">
                                                            <div class="card mb-1 contactbox-m">
                                                                <div class="card-body p-0">
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <div class="border-left-radius-palette">
                                                                                <img src="http://digita.vhostevents.com/app-assets/images/portrait/small/avatar-s-1.png"
                                                                                     class="rounded-squre img-fluid img-border height-120 mt-0"
                                                                                     alt="Card image">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-8 pl-0">
                                                                            <div class="p-0">
                                                                                <div class="float-right">
                                                                                    <button type="button"
                                                                                            class="close_btn close"
                                                                                            data-toggle="modal"
                                                                                            data-target="#close_modal">
                                                                                        <span aria-hidden="true">×</span>
                                                                                    </button>
                                                                                    <p>Alexanda Walker Director of
                                                                                        Marketing and Communications</p>
                                                                                    <a href="#">walker@17capital.com</a>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6">
                                                            <div class="card mb-1 contactbox-m">
                                                                <div class="card-body p-0">
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <div class="border-left-radius-palette">
                                                                                <img src="http://digita.vhostevents.com/app-assets/images/portrait/small/avatar-s-1.png"
                                                                                     class="rounded-squre img-fluid img-border height-120 mt-0"
                                                                                     alt="Card image">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-8 pl-0">
                                                                            <div class="p-0">
                                                                                <div class="float-right">
                                                                                    <button type="button"
                                                                                            class="close_btn close"
                                                                                            data-toggle="modal"
                                                                                            data-target="#close_modal">
                                                                                        <span aria-hidden="true">×</span>
                                                                                    </button>
                                                                                    <p>Alexanda Walker Director of
                                                                                        Marketing and Communications</p>
                                                                                    <a href="#">walker@17capital.com</a>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6">
                                                            <div class="card mb-1 contactbox-m">
                                                                <div class="card-body p-0">
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <div class="border-left-radius-palette">
                                                                                <img src="http://digita.vhostevents.com/app-assets/images/portrait/small/avatar-s-1.png"
                                                                                     class="rounded-squre img-fluid img-border height-120 mt-0"
                                                                                     alt="Card image">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-8 pl-0">
                                                                            <div class="p-0">
                                                                                <div class="float-right">
                                                                                    <button type="button"
                                                                                            class="close_btn close"
                                                                                            data-toggle="modal"
                                                                                            data-target="#close_modal">
                                                                                        <span aria-hidden="true">×</span>
                                                                                    </button>
                                                                                    <p>Alexanda Walker Director of
                                                                                        Marketing and Communications</p>
                                                                                    <a href="#">walker@17capital.com</a>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6">
                                                            <div class="card mb-1 contactbox-m">
                                                                <div class="card-body p-0">
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <div class="border-left-radius-palette">
                                                                                <img src="http://digita.vhostevents.com/app-assets/images/portrait/small/avatar-s-1.png"
                                                                                     class="rounded-squre img-fluid img-border height-120 mt-0"
                                                                                     alt="Card image">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-8 pl-0">
                                                                            <div class="p-0">
                                                                                <div class="float-right">
                                                                                    <button type="button"
                                                                                            class="close_btn close"
                                                                                            data-toggle="modal"
                                                                                            data-target="#close_modal">
                                                                                        <span aria-hidden="true">×</span>
                                                                                    </button>
                                                                                    <p>Alexanda Walker Director of
                                                                                        Marketing and Communications</p>
                                                                                    <a href="#">walker@17capital.com</a>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6">
                                                            <div class="card mb-1 contactbox-m">
                                                                <div class="card-body p-0">
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <div class="border-left-radius-palette">
                                                                                <img src="http://digita.vhostevents.com/app-assets/images/portrait/small/avatar-s-1.png"
                                                                                     class="rounded-squre img-fluid img-border height-120 mt-0"
                                                                                     alt="Card image">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-8 pl-0">
                                                                            <div class="p-0">
                                                                                <div class="float-right">
                                                                                    <button type="button"
                                                                                            class="close_btn close"
                                                                                            data-toggle="modal"
                                                                                            data-target="#close_modal">
                                                                                        <span aria-hidden="true">×</span>
                                                                                    </button>
                                                                                    <p>Alexanda Walker Director of
                                                                                        Marketing and Communications</p>
                                                                                    <a href="#">walker@17capital.com</a>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6">
                                                            <div class="card mb-1 contactbox-m">
                                                                <div class="card-body p-0">
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <div class="border-left-radius-palette">
                                                                                <img src="http://digita.vhostevents.com/app-assets/images/portrait/small/avatar-s-1.png"
                                                                                     class="rounded-squre img-fluid img-border height-120 mt-0"
                                                                                     alt="Card image">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-8 pl-0">
                                                                            <div class="p-0">
                                                                                <div class="float-right">
                                                                                    <button type="button"
                                                                                            class="close_btn close"
                                                                                            data-toggle="modal"
                                                                                            data-target="#close_modal">
                                                                                        <span aria-hidden="true">×</span>
                                                                                    </button>
                                                                                    <p>Alexanda Walker Director of
                                                                                        Marketing and Communications</p>
                                                                                    <a href="#">walker@17capital.com</a>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                  </div>


                                                </div>
                                                <!--Accounting Tab Content-->

                                                <div role="tabpanel" class="tab-pane" id="tabIcon3" aria-expanded="true"
                                                     aria-labelledby="baseIcon-tab3">
                                                    <div class="row mt-1">
                                                        <div class="col-md-12">

                                                            <div class="form-body">
                                                                <h4 class="form-section">Accounting</h4>
                                                                <div class="row">
                                                                    <div class="col-md-6 col-sm-6">
                                                                        <div class="form-group row">
                                                                            <label class="col-md-4 label-control"
                                                                                   for="">Sales Person</label>
                                                                            <div class="col-md-8">
                                                                                <div class="position-relative">
                                                                                    <select id="" name="1"
                                                                                            class="form-control">
                                                                                        <option value="1">
                                                                                            Sales Person
                                                                                        </option>
                                                                                        <option value="2">Sales
                                                                                            Person 1
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-6">
                                                                        <div class="form-group row">
                                                                            <label class="col-md-4 label-control"
                                                                                   for="">Accounts Receivable</label>
                                                                            <div class="col-md-8">
                                                                                <div class="position-relative">
                                                                                    <input type="text" id="" name="account-rec-able"
                                                                                           class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-6">
                                                                        <div class="form-group row">
                                                                            <label class="col-md-4 label-control"
                                                                                   for="projectinput7">Sales Price
                                                                                list</label>
                                                                            <div class="col-md-8">
                                                                                <div class="position-relative">
                                                                                    <input type="text" id="" name="sales-price"
                                                                                           class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-6">
                                                                        <div class="form-group row">
                                                                            <label class="col-md-4 label-control"
                                                                                   for="projectinput7">Accounts
                                                                                Payable</label>
                                                                            <div class="col-md-8">
                                                                                <div class="position-relative">
                                                                                    <input type="text" id="" name="account-payable"
                                                                                           class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-6">
                                                                        <div class="form-group row">
                                                                            <label class="col-md-4 label-control"
                                                                                   for="projectinput7">Customer Payment
                                                                                Terms</label>
                                                                            <div class="col-md-8">
                                                                                <div class="position-relative">
                                                                                    <input type="text" id="" name="customer-payment"
                                                                                           class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-6">
                                                                        <div class="form-group row">
                                                                            <label class="col-md-4 label-control"
                                                                                   for="projectinput7">Vendor Payment
                                                                                Terms</label>
                                                                            <div class="col-md-8">
                                                                                <div class="position-relative">
                                                                                    <input type="text" id="" name="vendor-term"
                                                                                           class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-body">
                                                            <h4 class="form-section">Other Information</h4>
                                                            <div class="form-group row">
                                                                <div class="col-md-12">
                                                                    <textarea id="projectinput9" rows="5" class="form-control" name="other-information"
                                                                              placeholder="WISIWYG"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--newcode-->
                                    <button type="submit" class="btn btn-success float-right mb-2">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
        </section>
        <!-- Tabs with Icons end -->

    </div>


    <!-- Modal More Address-->
    <div class="modal fade text-left" id="editAddress" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel3"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="basicModalLabel3">Edit Information</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="media d-flex mx-0 user-text mt-0">
                                <div class="media-body text-left text-dark">
                                    <div class="row">
                                        <div class="col-md-2 pr-md-0">
                                            <div class="form-group">
                                                <select id="" name="priority" class="form-control">
                                                    <option value="low">Mr</option>
                                                    <option value="medium"></option>
                                                    <option value="high"></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <div class="position-relative">
                                                            <input type="text" id="" class="form-control"
                                                                   placeholder="First Name" name="issuetitle">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <div class="position-relative">
                                                            <input type="text" id="" class="form-control"
                                                                   placeholder="Middle Name" name="issuetitle">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <div class="position-relative">
                                                            <input type="text" id="" class="form-control"
                                                                   placeholder="Last Name" name="issuetitle">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4 col-md-6">
                                            <div class="form-group">
                                                <label for="" class="">Job Position</label>
                                                <div class="position-relative">
                                                    <select id="" name="priority" class="form-control">
                                                        <option value="low">Designer</option>
                                                        <option value="medium">Developer</option>
                                                        <option value="high">Coder</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6">
                                            <div class="form-group">
                                                <label for="">Business / Refine</label>
                                                <div class="position-relative">
                                                    <input type="text" id="" class="form-control" placeholder=""
                                                           name="employeename">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6">
                                            <div class="form-group">
                                                <label for="">tag</label>
                                                <div class="position-relative">
                                                    <input name='tags' value='tag1, tag2 ' type="text" id=""
                                                           class="form-control" placeholder="" name="employeename">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-xl-4">
                                            <div class="form-group">
                                                <label for="">Email</label>
                                                <div class="position-relative">
                                                    <input type="text" id="" class="form-control"
                                                           placeholder="Enter Your Email" name="employeename">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xl-4">
                                            <div class="form-group">
                                                <label for="">Phone</label>
                                                <div class="position-relative">
                                                    <input type="text" id="" class="form-control" placeholder="Phone"
                                                           name="employeename">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xl-4">
                                            <div class="form-group">
                                                <label for="">Mobile</label>
                                                <div class="position-relative">
                                                    <input type="text" id="" class="form-control" placeholder="Mobile"
                                                           name="employeename">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="">Address</label>
                                                <div class="position-relative">
                                                    <input type="text" id="" class="form-control" placeholder="Address"
                                                           name="employeename">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn grey btn-sm btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-sm btn-danger">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit Address-->
    <div class="modal fade text-left" id="moreAddress" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel3"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body pb-0">
                    <div class="row">
                        <div class="col-lg-12 col-xl-12">
                            <div class="col_dropdown">
                                <div class="col_boxdrop">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-3" for="">Address
                                                    type</label>
                                                <div class="col-md-9">
                                                    <div class="row cxrmcheckbox pb-2">
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="custom-control custom-checkbox" id="correspondence-more-sec" {{--onclick="checkAddressType(this.id)"--}}>
                                                                <input type="checkbox" name="address-type[]" value="Correspondence" class="custom-control-input" id="correspondence-more">
                                                                <label class="custom-control-label"
                                                                       for="correspondence-more">Correspondence</label>
                                                                <!-- <i class="ft-external-link ccm"></i> -->
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="custom-control custom-checkbox" id="invoice-more-sec" {{--onclick="checkAddressType(this.id)"--}}>
                                                                <input type="checkbox" name="address-type[]" class="custom-control-input" value="Invoice" id="invoice-more">
                                                                <label class="custom-control-label"
                                                                       for="invoice-more">Invoice</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row cxrmcheckbox pb-2">
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="custom-control custom-checkbox" id="registered-more-sec" {{--onclick="checkAddressType(this.id)"--}}>
                                                                <input type="checkbox" name="address-type[]" value="Registered" class="custom-control-input" id="registered-more">
                                                                <label class="custom-control-label" for="registered-more">Registered</label>
                                                                <!-- <i class="ft-external-link ccm"></i> -->
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="custom-control custom-checkbox" id="shipping-more-sec" {{--onclick="checkAddressType(this.id)"--}}>
                                                                <input type="checkbox" name="address-type[]" value="Shipping" class="custom-control-input" id="shipping-more">
                                                                <label class="custom-control-label" for="shipping-more">Shipping</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row cxrmcheckbox pb-2">
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="custom-control custom-checkbox" id="other-more-sec" {{--onclick="checkAddressType(this.id)"--}}>
                                                                <input type="checkbox" name="address-type[]" value="Other" class="custom-control-input" id="other-more">
                                                                <label class="custom-control-label" for="other-more">Other</label>
                                                                <!-- <i class="ft-external-link ccm"></i> -->
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-3" for="">House Number</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="" class="form-control" placeholder="" name="house-number">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group extent-wrp row">
                                                <label class="col-md-3" for="">House
                                                    Name</label>
                                                <div class="col-md-9">
                                                    <input type="text" id=""
                                                           class="form-control"
                                                           placeholder="" name="house-name">

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-3" for="">Address
                                                    info</label>
                                                <div class="col-md-9">
                                                    <input type="text" id=""
                                                           class="form-control"
                                                           placeholder=""
                                                           name="address-info">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-3"
                                                       for="">Street</label>
                                                <div class="col-md-9">
                                                    <input type="text" id=""
                                                           class="form-control"
                                                           placeholder="" name="street">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-3"
                                                       for="">Postcode</label>
                                                <div class="col-md-9">
                                                    <input type="text" id=""
                                                           class="form-control"
                                                           placeholder="" name="post-code">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-3"
                                                       for="">Country</label>
                                                <div class="col-md-9">
                                                    <select id="" name="country"
                                                            onchange="selectMoreCountry(this.value , '{{route('get-state-for-contact')}}')"
                                                            class="form-control">
                                                        <option value="">Select Country
                                                        </option>
                                                        @forelse($countries as $country)
                                                            <option value="{{$country->id}}">{{$country->value}}</option>
                                                        @empty
                                                            <option selected disabled>not
                                                                found in record
                                                            </option>
                                                        @endforelse

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-3"
                                                       for="">State</label>
                                                <div class="col-md-9">
                                                    <select id="putMoreState" name="priority"
                                                            onchange="selectMoreState(this.value, '{{route('get-city-for-contact')}}')"
                                                            class="form-control">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-3" for="">City</label>
                                                <div class="col-md-9">
                                                    <select id="putMoreCity" name="City"
                                                            class="form-control">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer pt-0">
                        <button type="button" class="btn grey btn-sm btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-sm btn-danger">Save</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
  </div>



        <!-- Modal Create-->
        <div class="modal fade modal_custom" id="create-modal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <form id="child-form" method="post" action="{{route('contact.child.post')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" id="parentID" name="id">
                            <div class="card-header p-0">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="cxrm-tab1" data-toggle="tab"
                                           aria-controls="tabIcon1" href="#childTab1" aria-expanded="true">Information </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="cxrm-tab3" data-toggle="tab"
                                           aria-controls="tabIcon3" href="#childTab2" aria-expanded="false">
                                            Accounting</a>
                                    </li>
                                </ul>
                            </div>
                            <!--newcode-->
                            <div class="card-content">
                                <div class="card-body px-0">
                                    <div class="tab-content p-0">
                                        <div class="bg-lighttt">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="media d-flex mx-0 user-text mt-0">
                                                        <div class="align-left p-0 mr-2">
                                                            <a href="#" class="profile-image">
                                                                <img id="targetChildImage"
                                                                     src="{{asset('app-assets/images/portrait/small/avatar-s-1.png')}}"
                                                                     width="120"
                                                                     height="120"
                                                                     class="rounded-squre img-border height-120"
                                                                     alt="Card image"> <br>
                                                                <input class="mt-1"
                                                                       style="margin-left:10px; width: 90px;"
                                                                       type="file"
                                                                       onchange="previewChildImage(this);"
                                                                       name="photo">
                                                            </a>
                                                        </div>
                                                        <div class="media-body text-left text-dark">
                                                            <div class="row_bussiness-md"
                                                                 id="individual-basic-info"
                                                                 style="display: block">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <select id=""
                                                                                            name="priority"
                                                                                            class="form-control">
                                                                                        <option value="low">Mr
                                                                                        </option>
                                                                                        <option value="medium"></option>
                                                                                        <option value="high"></option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <div class="position-relative">
                                                                                        <input type="text"
                                                                                               id="first-name"
                                                                                               class="form-control"
                                                                                               placeholder="First Name"
                                                                                               name="first-name">
                                                                                        <div class="error"
                                                                                             style="display: none; color: red"
                                                                                             id="error-for-first-name">
                                                                                            First name must be
                                                                                            required
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <div class="position-relative">
                                                                                        <input type="text"
                                                                                               id="middle-name"
                                                                                               class="form-control"
                                                                                               placeholder="Middle Name"
                                                                                               name="middle-name">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <div class="position-relative">
                                                                                        <input type="text"
                                                                                               id="last-name"
                                                                                               class="form-control"
                                                                                               placeholder="Last Name"
                                                                                               name="last-name">
                                                                                        <div class="error"
                                                                                             style="display: none;color: red"
                                                                                             id="error-for-last-name">
                                                                                            Last name must be
                                                                                            required
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="" class="">Job
                                                                                        Position</label>
                                                                                    <div class="position-relative">
                                                                                        <select name="job-position"
                                                                                                class="form-control">
                                                                                            <option selected
                                                                                                    disabled>
                                                                                                Select any one
                                                                                            </option>
                                                                                            <option value="low">
                                                                                                Designer
                                                                                            </option>
                                                                                            <option value="medium">
                                                                                                Developer
                                                                                            </option>
                                                                                            <option value="high">
                                                                                                Coder
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="">Business /
                                                                                        Refine</label>
                                                                                    <div class="position-relative">
                                                                                        <input type="text" id=""
                                                                                               class="form-control"
                                                                                               placeholder=""
                                                                                               name="business-info">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="row_colmd row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="">Email</label>
                                                                        <div class="position-relative">
                                                                            <input type="email" id="" class="form-control" placeholder="Enter Your Email" name="email">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="">Phone</label>
                                                                        <div class="position-relative">
                                                                            <input type="text" id=""
                                                                                   class="form-control"
                                                                                   placeholder="Phone"
                                                                                   name="phone">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="">Mobile</label>
                                                                        <div class="position-relative">
                                                                            <input type="text" id=""
                                                                                   class="form-control"
                                                                                   placeholder="Mobile"
                                                                                   name="mobile">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="timesheetinput1">tag</label>
                                                                        <div class="position-relative">
                                                                            <input name='tags'
                                                                                   value='tag1, tag2 '
                                                                                   type="text" id=""
                                                                                   class="form-control"
                                                                                   placeholder="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="media-body text-left text-dark">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group row">
                                                                    <label class="col-md-3" for="">House Number</label>
                                                                    <div class="col-md-9">
                                                                        <input type="text" id="" class="form-control" placeholder="" name="house-number">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group extent-wrp row">
                                                                    <label class="col-md-3" for="">House
                                                                        Name</label>
                                                                    <div class="col-md-9">
                                                                        <input type="text" id=""
                                                                               class="form-control"
                                                                               placeholder="" name="house-name">

                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group row">
                                                                    <label class="col-md-3" for="">Address
                                                                        info</label>
                                                                    <div class="col-md-9">
                                                                        <input type="text" id=""
                                                                               class="form-control"
                                                                               placeholder=""
                                                                               name="address-info">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group row">
                                                                    <label class="col-md-3"
                                                                           for="">Street</label>
                                                                    <div class="col-md-9">
                                                                        <input type="text" id=""
                                                                               class="form-control"
                                                                               placeholder="" name="street">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group row">
                                                                    <label class="col-md-3"
                                                                           for="">Postcode</label>
                                                                    <div class="col-md-9">
                                                                        <input type="text" id=""
                                                                               class="form-control"
                                                                               placeholder="" name="post-code">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group row">
                                                                    <label class="col-md-3"
                                                                           for="">Country</label>
                                                                    <div class="col-md-9">
                                                                        <select id="" name="country"
                                                                                onchange="selectChildCountry(this.value , '{{route('get-state-for-contact')}}')"
                                                                                class="form-control">
                                                                            <option value="">Select Country
                                                                            </option>
                                                                            @forelse($countries as $country)
                                                                                <option value="{{$country->id}}">{{$country->value}}</option>
                                                                            @empty
                                                                                <option selected disabled>not
                                                                                    found in record
                                                                                </option>
                                                                            @endforelse

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group row">
                                                                    <label class="col-md-3"
                                                                           for="">State</label>
                                                                    <div class="col-md-9">
                                                                        <select id="putChildState" name="state"
                                                                                onchange="selectChildState(this.value, '{{route('get-city-for-contact')}}')"
                                                                                class="form-control">
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group row">
                                                                    <label class="col-md-3" for="">City</label>
                                                                    <div class="col-md-9">
                                                                        <select id="putChildCity" name="city"
                                                                                class="form-control">
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--Information Tab Content-->
                                        <div role="tabpanel" class="tab-pane active" id="childTab1"
                                             aria-expanded="true" aria-labelledby="baseIcon-tab1">

                                            <div class="row mt-1">
                                                <div class="col-md-6">
                                                    <div class="form-body">
                                                        <h4 class="form-section">Social Info</h4>
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control" for="">LinkedIn</label>
                                                            <div class="col-md-8">
                                                                <div class="position-relative">
                                                                    <input type="url" id="" name="social[]" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control" for="">Facebook</label>
                                                            <div class="col-md-8">
                                                                <div class="position-relative">
                                                                    <input type="url" id="" name="social[]" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control"
                                                                   for="projectinput7">Twitter</label>
                                                            <div class="col-md-8">
                                                                <div class="position-relative">
                                                                    <input type="url" id="" name="social[]" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control">Instagram</label>
                                                            <div class="col-md-8">
                                                                <div class="position-relative">
                                                                    <input type="url" id="" name="social[]" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-body">
                                                        <h4 class="form-section">CxRM</h4>
                                                        <div class="row cxrmcheckbox pb-2">
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" value="Customer" name="cxrm[]" id="childCustomer">
                                                                    <label class="custom-control-label"
                                                                           for="childCustomer">Customer</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox"
                                                                           class="custom-control-input" value="Supplier" name="cxrm[]" id="childSupplier">
                                                                    <label class="custom-control-label"
                                                                           for="childSupplier">Supplier</label>
                                                                    <!-- <i class="ft-external-link ccm"></i> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row cxrmcheckbox pb-2">
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="cxrm[]" value="Beneficiary" class="custom-control-input" id="childBeneficiary">
                                                                    <label class="custom-control-label"
                                                                           for="childBeneficiary">Beneficiary</label>
                                                                    <!-- <i class="ft-external-link ccm"></i> -->
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="cxrm[]" value="Partner" class="custom-control-input" id="childPartner">
                                                                    <label class="custom-control-label"
                                                                           for="childPartner">Partner</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row cxrmcheckbox pb-2">
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="cxrm[]" value="Employee" class="custom-control-input" id="childEmployee">
                                                                    <label class="custom-control-label"
                                                                           for="childEmployee">Employee</label>
                                                                    <!-- <i class="ft-external-link ccm"></i> -->
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="cxrm[]" value="User" class="custom-control-input" id="childUser">
                                                                    <label class="custom-control-label"
                                                                           for="childUser">User</label>
                                                                    <!-- <i class="ft-external-link ccm"></i> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                        <!--Accounting Tab Content-->
                                        <div role="tabpanel" class="tab-pane" id="childTab2" aria-expanded="true"
                                             aria-labelledby="baseIcon-tab3">
                                            <div class="row mt-1">
                                                <div class="col-md-12">
                                                    <div class="form-body">
                                                        <h4 class="form-section">Accounting</h4>
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="form-group row">
                                                                    <label class="col-md-4 label-control"
                                                                           for="">Sales Person</label>
                                                                    <div class="col-md-8">
                                                                        <div class="position-relative">
                                                                            <select id="" name="sales-person"
                                                                                    class="form-control">
                                                                                <option value="1">
                                                                                    Sales Person
                                                                                </option>
                                                                                <option value="2">Sales
                                                                                    Person 1
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="form-group row">
                                                                    <label class="col-md-4 label-control"
                                                                           for="">Accounts Receivable</label>
                                                                    <div class="col-md-8">
                                                                        <div class="position-relative">
                                                                            <input type="text" id="" name="account-rec-able"
                                                                                   class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="form-group row">
                                                                    <label class="col-md-4 label-control"
                                                                           for="projectinput7">Sales Price
                                                                        list</label>
                                                                    <div class="col-md-8">
                                                                        <div class="position-relative">
                                                                            <input type="text" id="" name="sales-price"
                                                                                   class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="form-group row">
                                                                    <label class="col-md-4 label-control"
                                                                           for="projectinput7">Accounts
                                                                        Payable</label>
                                                                    <div class="col-md-8">
                                                                        <div class="position-relative">
                                                                            <input type="text" id="" name="account-payable"
                                                                                   class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="form-group row">
                                                                    <label class="col-md-4 label-control"
                                                                           for="projectinput7">Customer Payment
                                                                        Terms</label>
                                                                    <div class="col-md-8">
                                                                        <div class="position-relative">
                                                                            <input type="text" id="" name="customer-payment"
                                                                                   class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="form-group row">
                                                                    <label class="col-md-4 label-control"
                                                                           for="projectinput7">Vendor Payment Terms</label>
                                                                    <div class="col-md-8">
                                                                        <div class="position-relative">
                                                                            <input type="text" id="" name="vendor-term"
                                                                                   class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-body">
                                                    <h4 class="form-section">Other Information</h4>
                                                    <div class="form-group row">
                                                        <div class="col-md-12">
                                                                    <textarea id="projectinput9" rows="5" class="form-control" name="other-information"
                                                                              placeholder="WISIWYG"></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--newcode-->
                            {{--                        <input type="submit" value="Submit" />--}}
                            <a onclick="childForm('{{route('contact.child.post')}}')" class="btn btn-success float-right m-1">Submit</a>
                            <div class="col-md-12">
                                <div class="error" style="display: none;color: red"
                                     id="error-for-sub-child">Company name and Business classifications must be required
                                    for create the sub child.
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
        <!--Close-->











        <!-- Close modal-->
        <div class="modal fade modal_custom" id="close_modal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body contact-close">
                        <p>do you want to close this contact</p>
                        <a href="#">Yes</a>
                        <a href="#">No</a>
                    </div>
                </div>

            </div>
        </div>
        <!--Close-->
        <script src="http://malsup.github.com/jquery.form.js"></script>





@stop

