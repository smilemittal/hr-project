@extends('layouts.default')
@section('content')
    <section id="tabs-with-icons">
        <div class="row match-height">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <!-- <div class="card-header">
                                <h4 class="card-title">Basic Tabs</h4>
                            </div> -->
                    <div class="card-content">
                        <div class="card-body">
                            <div class="card-header p-0">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="cxrm-tab1" data-toggle="tab" aria-controls="tabIcon1" href="#tabIcon1" aria-expanded="true">Information </a>
                                    </li>
                                    @if($exist->contact_type === "Company")
                                        <li class="nav-item" id="contact-hyperlink" style="display: block;">
                                            <a class="nav-link" id="cxrm-tab2" data-toggle="tab" aria-controls="tabIcon2" href="#tabIcon2" aria-expanded="false">
                                                Contacts</a>
                                        </li>
                                    @endif
                                    <li class="nav-item">
                                        <a class="nav-link" id="cxrm-tab3" data-toggle="tab" aria-controls="tabIcon3" href="#tabIcon3" aria-expanded="false">
                                            Accounting</a>
                                    </li>
                                </ul>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0" style="margin-top:8px;">
                                        <li>
                                            <a data-action="collapse"> <i class="ft-info"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-action="reload"> <i class="ft-aperture"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-action="reload" data-toggle="modal" data-keyboard="false" data-target="#editAddress">
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
                                        <div class="radio_button-type">
                                            <div class="row p-2">
                                                @if($exist->contact_type === "Individual")
                                                    <div class="form-check mr-1" id="individualChecked">
                                                        <input class="form-check-input" type="radio" name="contact-type" id="exampleRadios1" value="Individual" checked>
                                                        <label class="form-check-label" for="exampleRadios1">Individual</label>
                                                    </div>
                                                    <div class="form-check" id="companyChecked">
                                                        <input class="form-check-input " type="radio" name="contact-type" id="exampleRadios2" value="Company">
                                                        <label class="form-check-label" for="exampleRadios2">Company</label>
                                                    </div>
                                                @else
                                                    <div class="form-check mr-1" id="individualChecked">
                                                        <input class="form-check-input" type="radio" name="contact-type" id="exampleRadios1" value="Individual">
                                                        <label class="form-check-label" for="exampleRadios1">Individual</label>
                                                    </div>
                                                    <div class="form-check" id="companyChecked">
                                                        <input class="form-check-input " type="radio" name="contact-type" id="exampleRadios2" value="Company" checked>
                                                        <label class="form-check-label" for="exampleRadios2">Company</label>
                                                    </div>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                @if($exist->contact_type == "Individual")
                                                <div id="individual-row" class="col_custom-head row">
                                                    <div class="col-md-6">
                                                        <div class="media d-flex mx-0 my-1 user-text">
                                                            <div class="align-left p-0 mr-2">
                                                                <a href="#" class="profile-image">
                                                                    <img src="{{asset('storage/app/public/contact-profile/' . $exist->photo)}}" class="rounded-squre img-border height-120" alt="Card image">
                                                                </a>
                                                            </div>

                                                            <div class="media-body text-left text-dark">
                                                                <div class="row">
                                                                    @if($exist->contact_type === "Individual")
                                                                    <div class="col-md-3 pr-md-0">
                                                                        <div class="form-group">
                                                                            <select id="" name="priority" class="form-control">
                                                                                <option value="low">Mr</option>
                                                                                <option value="medium">Mrs</option>
                                                                                <option value="high">Other</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-9 px-1">
                                                                        <div class="form-group">
                                                                            <input type="text" id="" class="form-control" placeholder="John Smith" name="full-name" value="{{$exist->contact_name}} {{$exist->last_name}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-7">
                                                                        <div class="form-group">
                                                                            <label>Job Position</label>
                                                                            <input type="name" placeholder="Desinger" name="" value="{{$exist->job_position}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <div class="form-group">
                                                                            <label>Business/Ref info</label>
                                                                            <input type="name" placeholder="" name="" value="{{$exist->business_info}}">
                                                                        </div>
                                                                    </div>
                                                                    @else
                                                                        <div class="col-md-12 px-1">
                                                                            <div class="form-group">
                                                                                <input type="text" id="" class="form-control" placeholder="John Smith" name="comapny-name" value="{{$exist->contact_name}}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-7">
                                                                            <div class="form-group">
                                                                                <label>Business Classification</label>
                                                                                <input type="name" placeholder="Desinger" name="" value="{{$exist->business_classifications}}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="form-group">
                                                                                <label>Account Status</label>
                                                                                <input type="name" placeholder="" name="" value="{{$exist->account_status}}">
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label>Tag</label>
                                                                            <input type="name" placeholder="" name="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="address_info">
                                                                    <div class="right-edit-btn">
                                                                        <a href="#" data-toggle="modal" data-target="#edit-address"><i class="ft-edit"></i></a>
                                                                    </div>
                                                                    <ul class="col_bx">
                                                                        <li>
                                                                            <div class="icons"><i class="ft-edit"></i>
                                                                            </div>
                                                                            <div class="address-data">
                                                                                <label>Address</label>
                                                                                <p>Almack House, 28King street london
                                                                                    SW1Y 5EN United Kingdom</p>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="icons"><i class="ft-edit"></i>
                                                                            </div>
                                                                            <div class="address-data"><a href="#">John.smith@gmail.com</a>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="icons"><i class="ft-edit"></i>
                                                                            </div>
                                                                            <div class="address-data"><a href="#">+44
                                                                                    (10) 747998 2435</a>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="icons"><i class="ft-edit"></i>
                                                                            </div>
                                                                            <div class="address-data"><a href="#">+44
                                                                                    (10) 1707 562 487</a>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                                @if($exist->contact_type == "Company")
                                                <div id="company-row" class="col_custom-head row" style="display: none;">
                                                    <div class="col-md-6">
                                                        <div class="media d-flex mx-0 my-1 user-text">
                                                            <div class="align-left p-0 mr-2">
                                                                <a href="#" class="profile-image">
                                                                    <img src="http://digita.vhostevents.com/app-assets/images/portrait/small/avatar-s-1.png" class="rounded-squre img-border height-120" alt="Card image">
                                                                </a>
                                                            </div>
                                                            <div class="media-body text-left text-dark">
                                                                <div class="row">
                                                                    <div class="col-md-3 pr-md-0">
                                                                        <div class="form-group">
                                                                            <select id="" name="priority" class="form-control">
                                                                                <option value="low">Mr</option>
                                                                                <option value="medium">Mrs</option>
                                                                                <option value="high">Other</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-9 px-1">
                                                                        <div class="form-group">
                                                                            <input type="text" id="" class="form-control" placeholder="John Smith" name="issuetitle">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-7">
                                                                        <div class="form-group">
                                                                            <label>Job Position</label>
                                                                            <input type="name" placeholder="Desinger" name="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <div class="form-group">
                                                                            <label>Business/Ref info</label>
                                                                            <input type="name" placeholder="" name="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label>Tag</label>
                                                                            <input type="name" placeholder="" name="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row">
{{--                                                            @if($exist->)--}}
                                                            <div class="col-md-8">
                                                                <div class="tab-content" id="myTabContent">
                                                                    <div class="tab-pane fade show active" id="tab0" role="tabpanel" aria-labelledby="tab">
                                                                        <div class="address_info">
                                                                            <div class="right-edit-btn">
                                                                                <a href="#" data-toggle="modal" data-target="#edit-address">
                                                                                    <i class="ft-edit"></i>
                                                                                </a>
                                                                            </div>
                                                                            <ul class="col_bx">
                                                                                <li>
                                                                                    <div class="icons">
                                                                                        <i class="ft-edit"></i>
                                                                                    </div>
                                                                                    <div class="address-data">
                                                                                        <label>Address 0</label>
                                                                                        <p>Almack House, 28King street
                                                                                            london SW1Y 5EN United
                                                                                            Kingdom</p>
                                                                                    </div>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="icons">
                                                                                        <i class="ft-edit"></i>
                                                                                    </div>
                                                                                    <div class="address-data">
                                                                                        <a href="#">John.smith@gmail.com</a>
                                                                                    </div>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="icons">
                                                                                        <i class="ft-edit"></i>
                                                                                    </div>
                                                                                    <div class="address-data">
                                                                                        <a href="#">+44 (10) 747998
                                                                                            2435</a>
                                                                                    </div>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="icons">
                                                                                        <i class="ft-edit"></i>
                                                                                    </div>
                                                                                    <div class="address-data">
                                                                                        <a href="#">+44 (10) 1707 562
                                                                                            487</a>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="tab1" role="tabpanel" aria-labelledby="tab-one">
                                                                        <div class="address_info">
                                                                            <div class="right-edit-btn">
                                                                                <a href="#" data-toggle="modal" data-target="#edit-address">
                                                                                    <i class="ft-edit"></i>
                                                                                </a>
                                                                            </div>
                                                                            <ul class="col_bx">
                                                                                <li>
                                                                                    <div class="icons">
                                                                                        <i class="ft-edit"></i>
                                                                                    </div>
                                                                                    <div class="address-data">
                                                                                        <label>Address1</label>
                                                                                        <p>Almack House, 28King street
                                                                                            london SW1Y 5EN United
                                                                                            Kingdom</p>
                                                                                    </div>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="icons">
                                                                                        <i class="ft-edit"></i>
                                                                                    </div>
                                                                                    <div class="address-data">
                                                                                        <a href="#">John.smith@gmail.com</a>
                                                                                    </div>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="icons">
                                                                                        <i class="ft-edit"></i>
                                                                                    </div>
                                                                                    <div class="address-data">
                                                                                        <a href="#">+44 (10) 747998
                                                                                            2435</a>
                                                                                    </div>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="icons">
                                                                                        <i class="ft-edit"></i>
                                                                                    </div>
                                                                                    <div class="address-data">
                                                                                        <a href="#">+44 (10) 1707 562
                                                                                            487</a>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab-tow">
                                                                        <div class="address_info">
                                                                            <div class="right-edit-btn">
                                                                                <a href="#" data-toggle="modal" data-target="#edit-address">
                                                                                    <i class="ft-edit"></i>
                                                                                </a>
                                                                            </div>
                                                                            <ul class="col_bx">
                                                                                <li>
                                                                                    <div class="icons">
                                                                                        <i class="ft-edit"></i>
                                                                                    </div>
                                                                                    <div class="address-data">
                                                                                        <label>Address2</label>
                                                                                        <p>Almack House, 28King street
                                                                                            london SW1Y 5EN United
                                                                                            Kingdom</p>
                                                                                    </div>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="icons">
                                                                                        <i class="ft-edit"></i>
                                                                                    </div>
                                                                                    <div class="address-data">
                                                                                        <a href="#">John.smith@gmail.com</a>
                                                                                    </div>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="icons">
                                                                                        <i class="ft-edit"></i>
                                                                                    </div>
                                                                                    <div class="address-data">
                                                                                        <a href="#">+44 (10) 747998
                                                                                            2435</a>
                                                                                    </div>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="icons">
                                                                                        <i class="ft-edit"></i>
                                                                                    </div>
                                                                                    <div class="address-data">
                                                                                        <a href="#">+44 (10) 1707 562
                                                                                            487</a>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab-three">
                                                                        <div class="address_info">
                                                                            <div class="right-edit-btn">
                                                                                <a href="#" data-toggle="modal" data-target="#edit-address">
                                                                                    <i class="ft-edit"></i>
                                                                                </a>
                                                                            </div>
                                                                            <ul class="col_bx">
                                                                                <li>
                                                                                    <div class="icons">
                                                                                        <i class="ft-edit"></i>
                                                                                    </div>
                                                                                    <div class="address-data">
                                                                                        <label>Address3</label>
                                                                                        <p>Almack House, 28King street
                                                                                            london SW1Y 5EN United
                                                                                            Kingdom</p>
                                                                                    </div>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="icons">
                                                                                        <i class="ft-edit"></i>
                                                                                    </div>
                                                                                    <div class="address-data">
                                                                                        <a href="#">John.smith@gmail.com</a>
                                                                                    </div>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="icons">
                                                                                        <i class="ft-edit"></i>
                                                                                    </div>
                                                                                    <div class="address-data">
                                                                                        <a href="#">+44 (10) 747998
                                                                                            2435</a>
                                                                                    </div>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="icons">
                                                                                        <i class="ft-edit"></i>
                                                                                    </div>
                                                                                    <div class="address-data">
                                                                                        <a href="#">+44 (10) 1707 562
                                                                                            487</a>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab-four">
                                                                        <div class="address_info">
                                                                            <div class="right-edit-btn">
                                                                                <a href="#" data-toggle="modal" data-target="#edit-address">
                                                                                    <i class="ft-edit"></i>
                                                                                </a>
                                                                            </div>
                                                                            <ul class="col_bx">
                                                                                <li>
                                                                                    <div class="icons">
                                                                                        <i class="ft-edit"></i>
                                                                                    </div>
                                                                                    <div class="address-data">
                                                                                        <label>Address4</label>
                                                                                        <p>Almack House, 28King street
                                                                                            london SW1Y 5EN United
                                                                                            Kingdom</p>
                                                                                    </div>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="icons">
                                                                                        <i class="ft-edit"></i>
                                                                                    </div>
                                                                                    <div class="address-data">
                                                                                        <a href="#">John.smith@gmail.com</a>
                                                                                    </div>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="icons">
                                                                                        <i class="ft-edit"></i>
                                                                                    </div>
                                                                                    <div class="address-data">
                                                                                        <a href="#">+44 (10) 747998
                                                                                            2435</a>
                                                                                    </div>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="icons">
                                                                                        <i class="ft-edit"></i>
                                                                                    </div>
                                                                                    <div class="address-data">
                                                                                        <a href="#">+44 (10) 1707 562
                                                                                            487</a>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <ul class="nav nav-tabs address_info" id="myTab" role="tablist">
                                                                    <div class="type-address">
                                                                        <h2>Address type</h2>
                                                                        <a data-toggle="modal" data-target="#edit-address-type" href="#"><i class="ft-edit"></i></a>
                                                                    </div>

                                                                    <li class="nav-item" role="presentation">
                                                                        <a class="active" id="tab" data-toggle="tab" href="#tab0" role="tab" aria-controls="tab0" aria-selected="true"><span> <i class="ft-edit"></i></span>Correspondence</a>
                                                                    </li>
                                                                    <li class="nav-item" role="presentation">
                                                                        <a class="active" id="tab-one" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><span> <i class="ft-edit"></i></span>Invoice/Billing</a>
                                                                    </li>
                                                                    <li class="nav-item" role="presentation">
                                                                        <a class="" id="tab-tow" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><span> <i class="ft-edit"></i></span>Registered
                                                                            address </a>
                                                                    </li>
                                                                    <li class="nav-item" role="presentation">
                                                                        <a class="" id="tab-three" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><span> <i class="ft-edit"></i></span>Shipping<span class="shiping-icon"><i class="ft-edit"></i></span></a>
                                                                    </li>
                                                                    <li class="nav-item" role="presentation">
                                                                        <a class="" id="tab-four" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"><span> <i class="ft-edit"></i></span>Other
                                                                            Address</a>
                                                                    </li>


                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                        <!--Information Tab Content-->
                                        <div role="tabpanel" class="tab-pane active" id="tabIcon1" aria-expanded="true" aria-labelledby="baseIcon-tab1">
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
                                                            <label class="col-md-3 label-control" for="projectinput7">Twitter</label>
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
                                                                    <input type="checkbox" class="custom-control-input" value="Customer" name="cxrm[]" id="customCheck1" checked="">
                                                                    <label class="custom-control-label" for="customCheck1">Customer</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" value="Supplier" name="cxrm[]" id="customCheck2">
                                                                    <label class="custom-control-label" for="customCheck2">Supplier</label>
                                                                    <!-- <i class="ft-external-link ccm"></i> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row cxrmcheckbox pb-2">
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="cxrm[]" value="Beneficiary" class="custom-control-input" id="customCheck3">
                                                                    <label class="custom-control-label" for="customCheck3">Beneficiary</label>
                                                                    <!-- <i class="ft-external-link ccm"></i> -->
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="cxrm[]" value="Partner" class="custom-control-input" id="customCheck4">
                                                                    <label class="custom-control-label" for="customCheck4">Partner</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row cxrmcheckbox pb-2">
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="cxrm[]" value="Employee" class="custom-control-input" id="customCheck5">
                                                                    <label class="custom-control-label" for="customCheck5">Employee</label>
                                                                    <!-- <i class="ft-external-link ccm"></i> -->
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="cxrm[]" value="User" class="custom-control-input" id="customCheck6">
                                                                    <label class="custom-control-label" for="customCheck6">User</label>
                                                                    <!-- <i class="ft-external-link ccm"></i> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Contact Tab Content-->
                                        @if($exist->contact_type === "Company")
                                            <div class="tab-pane" id="tabIcon2" aria-labelledby="baseIcon-tab2">
                                                <div id="contact-target" style="display: block;">
                                                    <div class="row" id="child-contact-section">
                                                        <div class="col-sm-12">
                                                            <h4>Contacts</h4>
                                                            <a href="javascript:void(0)" class="create_btn" data-toggle="modal" data-target="#create-modal">Create</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    @endif
                                    <!--Accounting Tab Content-->
                                        <div role="tabpanel" class="tab-pane" id="tabIcon3" aria-expanded="true" aria-labelledby="baseIcon-tab3">
                                            <div class="row mt-1">
                                                <div class="col-md-12">
                                                    <div class="form-body">
                                                        <h4 class="form-section">Accounting</h4>
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="form-group row">
                                                                    <label class="col-md-4 label-control" for="">Sales
                                                                        Person</label>
                                                                    <div class="col-md-8">
                                                                        <div class="position-relative">
                                                                            <select id="" name="1" class="form-control">
                                                                                <option value="1">Sales Person</option>
                                                                                <option value="2">Sales Person 1
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="form-group row">
                                                                    <label class="col-md-4 label-control" for="">Accounts
                                                                        Receivable</label>
                                                                    <div class="col-md-8">
                                                                        <div class="position-relative">
                                                                            <input type="text" id="" name="account-rec-able" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="form-group row">
                                                                    <label class="col-md-4 label-control" for="projectinput7">Sales
                                                                        Price list</label>
                                                                    <div class="col-md-8">
                                                                        <div class="position-relative">
                                                                            <input type="text" id="" name="sales-price" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="form-group row">
                                                                    <label class="col-md-4 label-control" for="projectinput7">Accounts
                                                                        Payable</label>
                                                                    <div class="col-md-8">
                                                                        <div class="position-relative">
                                                                            <input type="text" id="" name="account-payable" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="form-group row">
                                                                    <label class="col-md-4 label-control" for="projectinput7">Customer
                                                                        Payment Terms</label>
                                                                    <div class="col-md-8">
                                                                        <div class="position-relative">
                                                                            <input type="text" id="" name="customer-payment" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="form-group row">
                                                                    <label class="col-md-4 label-control" for="projectinput7">Vendor
                                                                        Payment Terms</label>
                                                                    <div class="col-md-8">
                                                                        <div class="position-relative">
                                                                            <input type="text" id="" name="vendor-term" class="form-control">
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
                                                            <textarea id="projectinput9" rows="5" class="form-control" name="other-information" placeholder="WISIWYG"></textarea>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="edit-address" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="edit-address-type" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#companyChecked").click(function () {
                $("#company-row").show();
            });
            $("#companyChecked").click(function () {
                $("#individual-row").hide();
            });

            $("#individualChecked").click(function () {
                $("#individual-row").show();
            });
            $("#individualChecked").click(function () {
                $("#company-row").hide();
            });


        });
    </script>
@endsection