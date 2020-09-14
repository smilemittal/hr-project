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
                                <form action="{{route('post-data-employee')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-header p-0">
                                         <ul class="nav nav-tabs">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="cxrm-tab1" data-toggle="tab"
                                                        aria-controls="tabIcon1" href="#tabIcon1" aria-expanded="true">Information </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="cxrm-tab2" data-toggle="tab"
                                                        aria-controls="tabIcon2" href="#tabIcon2" aria-expanded="false"> Contacts</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="cxrm-tab3" data-toggle="tab"
                                                        aria-controls="tabIcon3" href="#tabIcon3" aria-expanded="false"> Accounting</a>
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
                                    <!--Information Tab Content-->
                                      <div role="tabpanel" class="tab-pane active" id="tabIcon1"
                                        aria-expanded="true" aria-labelledby="baseIcon-tab1">
                                        <div class="bg-lighttt">
                                          <ul class="nav nav-tabs w-100 pt-1 px-1">
                                            <li class="nav-item">
                                              <a class="nav-link" id="base-tab1" data-toggle="tab" aria-controls="tab1" href="#tab1" aria-expanded="true">
                                                <div class="form-check">
                                                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                  <label class="form-check-label" for="exampleRadios1">
                                                  Individual
                                                  </label>
                                                </div>
                                              </a>
                                            </li>
                                            <li class="nav-item">
                                              <a class="nav-link" id="base-tab2" data-toggle="tab" aria-controls="tab2" href="#tab2" aria-expanded="false">
                                                <div class="form-check">
                                                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                  <label class="form-check-label" for="exampleRadios2">
                                                  Company
                                                  </label>
                                                </div>
                                              </a>
                                            </li>
                                          </ul>
                                          <div class="tab-content px-1 pt-1 col-sm-12">
                                            <div role="tabpanel" class="tab-pane active" id="tab1" aria-expanded="true" aria-labelledby="base-tab1">
                                              <div class="row">
                                                <div class="col-sm-12">
                                                  <div class="media d-flex mx-0 user-text mt-0">
                                                    <div class="align-left p-0 mr-2">
                                                      <a href="#" class="profile-image">
                                                      <img src="{{asset('app-assets/images/portrait/small/avatar-s-1.png')}}"
                                                        class="rounded-squre img-border height-120 mt-0"
                                                        alt="Card image">
                                                      </a>
                                                    </div>
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
                                                                <input type="text" id="" class="form-control" placeholder="First Name" name="issuetitle">
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="col-md-4">
                                                            <div class="form-group">
                                                              <div class="position-relative">
                                                                <input type="text" id="" class="form-control" placeholder="Middle Name" name="issuetitle">
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="col-md-4">
                                                            <div class="form-group">
                                                              <div class="position-relative">
                                                                <input type="text" id="" class="form-control" placeholder="Last Name" name="issuetitle">
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
                                                              <input type="text" id="" class="form-control" placeholder="" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-xl-4 col-md-6">
                                                          <div class="form-group">
                                                            <label for="">tag</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="" class="form-control" placeholder="" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-md-6 col-xl-4">
                                                          <div class="form-group">
                                                            <label for="">Email</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="" class="form-control" placeholder="Enter Your Email" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-6 col-xl-4">
                                                          <div class="form-group">
                                                            <label for="">Phone</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="" class="form-control" placeholder="Phone" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-6 col-xl-4">
                                                          <div class="form-group">
                                                            <label for="">Mobile</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="" class="form-control" placeholder="Mobile" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col">
                                                          <div class="form-group">
                                                            <label for="">Address</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="" class="form-control" placeholder="Address" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      
                                                      
                                                    </div>
                                                  </div>
                                                </div>
                                                
                                              </div>
                                            </div>
                                            <div class="tab-pane" id="tab2" aria-labelledby="base-tab2">
                                              <div class="row">
                                                <div class="col-md-7 pt-3">
                                                  <div class="media d-flex mx-0 user-text mt-0">
                                                    <div class="align-left p-0 mr-2">
                                                      <a href="#" class="profile-image">
                                                      <img  src="{{asset('app-assets/images/portrait/small/avatar-s-1.png')}}" class="rounded-squre img-border height-120" alt="Card image">
                                                      </a>
                                                    </div>
                                                    <div class="media-body text-left text-dark">
                                                      <div class="row">
                                                        <div class="col-md-12">
                                                          <div class="form-group">                                                                            
                                                            <input type="text" id="" class="form-control" placeholder="Contract Right Limited" name="issuetitle">
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                      
                                                        <div class="col-md-12 col-xl-6">
                                                          <div class="form-group">
                                                            <label for="timesheetinput1">Business Classification</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="timesheetinput1" class="form-control" placeholder="" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-12 col-xl-6">
                                                          <div class="form-group">
                                                            <label for="timesheetinput1">Account Status</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="timesheetinput1" class="form-control" placeholder="" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-md-12">
                                                          <div class="form-group">
                                                            <label for="">Email</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="" class="form-control" placeholder="Enter Your Email" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-12 col-xl-6">
                                                          <div class="form-group">
                                                            <label for="">Phone</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="" class="form-control" placeholder="Phone" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-12 col-xl-6">
                                                          <div class="form-group">
                                                            <label for="">Mobile</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="" class="form-control" placeholder="Mobile" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-md-12">
                                                          <div class="form-group">
                                                            <label for="timesheetinput1">tag</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="timesheetinput1" class="form-control" placeholder="" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-md-12">
                                                          <div class="form-group">
                                                            <label for="timesheetinput1">Company Website</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="timesheetinput1" class="form-control" placeholder="" name="employeename">
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
                                                      
                                                        <div class="row position_sctn">
                                                              <div class="col-sm-12">
                                                                  <h4 class="form-section">Address Type</h4>
                                                              </div>
                                                          </div>
                                                      </div>

                                                      <div class="row">
                                                                  <div class="col-md-12">
                                                                      <div class="form-group row">
                                                                          <label class="col-md-3" for="">Address</label>
                                                                          <div class="col-md-9">
                                                                          <input type="text" id="" class="form-control" placeholder="" name="">
                                                                      </div>
                                                                      </div>
                                                                  </div>
                                                            
                                                                  <div class="col-md-12">
                                                                      <div class="form-group row">
                                                                          <label class="col-md-3" for="">House Number</label>
                                                                          <div class="col-md-9">
                                                                          <input type="text" id="" class="form-control" placeholder="" name="">
                                                                      </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-12">
                                                                      <div class="form-group extent-wrp row">
                                                                          <label class="col-md-3" for="">House Name</label>
                                                                          <div class="col-md-9">
                                                                          <input type="text" id="" class="form-control" placeholder="" name="">
                                                                        
                                                                      </div>
                                                                          
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-12">
                                                                      <div class="form-group row">
                                                                          <label class="col-md-3" for="">Address info</label>
                                                                          <div class="col-md-9">
                                                                          <input type="text" id="" class="form-control" placeholder="" name="">
                                                                      </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-12">
                                                                      <div class="form-group row">
                                                                          <label class="col-md-3" for="">Street</label>
                                                                          <div class="col-md-9">
                                                                          <input type="text" id="" class="form-control" placeholder="" name="">
                                                                      </div>
                                                                      </div>
                                                                  </div>
                                                                  

                                                                  <div class="col-md-12">
                                                                      <div class="form-group row">
                                                                          <label class="col-md-3" for="">Postcode</label>
                                                                          <div class="col-md-9">
                                                                          <input type="text" id="" class="form-control" placeholder="" name="">
                                                                      </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-12">
                                                                      <div class="form-group row">
                                                                          <label class="col-md-3" for="">Country</label>
                                                                          <div class="col-md-9">
                                                                          <select id="" name="priority" class="form-control">
                                                                            <option value="low">Afghanistan</option>
                                                                            <option value="medium">Albania</option>
                                                                            <option value="high">Algeria</option>
                                                                          </select>
                                                                      </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-12">
                                                                      <div class="form-group row">
                                                                          <label class="col-md-3" for="">County</label>
                                                                          <div class="col-md-9">
                                                                          <select id="" name="priority" class="form-control">
                                                                            <option value="low">County</option>
                                                                            <option value="medium">County</option>
                                                                            <option value="high">County</option>
                                                                          </select>
                                                                      </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-12">
                                                                      <div class="form-group row">
                                                                          <label class="col-md-3" for="">City</label>
                                                                          <div class="col-md-9">
                                                                          <select id="" name="priority" class="form-control">
                                                                            <option value="low">City</option>
                                                                            <option value="medium">Developer</option>
                                                                            <option value="high">Coder</option>
                                                                          </select>
                                                                      </div>
                                                                      </div>
                                                                  </div>
                                                                  
                                                              </div>

                                                              <div class="row">
                                                          <div class="col-md-12 mt-1 text-right">
                                                            <button type="button" class="btn btn-bg-gradient-x-purple-red mb-1" data-toggle="modal" data-keyboard="false" data-target="#moreAddress">More Address</button>
                                                          </div>
                                                        </div>
                                                        
                                                      </div>
                                                  </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row mt-1">
                                          <div class="col-md-6">
                                            <form class="form form-horizontal">
                                              <div class="form-body">
                                                <h4 class="form-section">Social Info</h4>
                                                <div class="form-group row">
                                                  <label class="col-md-3 label-control" for="">LinkedIn</label>
                                                  <div class="col-md-8">
                                                    <div class="position-relative">
                                                      <input type="text" id="" class="form-control" >
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="form-group row">
                                                  <label class="col-md-3 label-control" for="">Facebook</label>
                                                  <div class="col-md-8">
                                                    <div class="position-relative">
                                                      <input type="text" id="" class="form-control" >
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="form-group row">
                                                  <label class="col-md-3 label-control" for="projectinput7">Twitter</label>
                                                  <div class="col-md-8">
                                                    <div class="position-relative">
                                                      <input type="text" id="" class="form-control" >
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="form-group row">
                                                  <label class="col-md-3 label-control">Instagram</label>
                                                  <div class="col-md-8">
                                                    <div class="position-relative">
                                                      <input type="text" id="" class="form-control" >
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </form>
                                          </div>
                                          <div class="col-md-6">
                                            <form class="form form-horizontal">
                                              <div class="form-body">
                                                <h4 class="form-section">CxRM</h4>
                                                <div class="row cxrmcheckbox pb-2">
                                                  <div class="col-md-6 col-sm-6">
                                                    <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                      <label class="custom-control-label" for="customCheck1">Customer</label>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6 col-sm-6">
                                                    <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="customCheck2" checked>
                                                      <label class="custom-control-label" for="customCheck2">Supplier</label>
                                                      <!-- <i class="ft-external-link ccm"></i> -->
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="row cxrmcheckbox pb-2">
                                                  <div class="col-md-6 col-sm-6">
                                                    <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="customCheck3" checked>
                                                      <label class="custom-control-label" for="customCheck3">Beneficiary</label>
                                                      <!-- <i class="ft-external-link ccm"></i> -->
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6 col-sm-6">
                                                    <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                      <label class="custom-control-label" for="customCheck4">Partner</label>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="row cxrmcheckbox pb-2">
                                                  <div class="col-md-6 col-sm-6">
                                                    <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="customCheck5" checked>
                                                      <label class="custom-control-label" for="customCheck5">Employee</label>
                                                      <!-- <i class="ft-external-link ccm"></i> -->
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6 col-sm-6">
                                                    <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="customCheck6" checked>
                                                      <label class="custom-control-label" for="customCheck6">User</label>
                                                      <!-- <i class="ft-external-link ccm"></i> -->
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </form>
                                          </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12">
                                          <form class="form form-horizontal">
                                            <div class="form-body">
                                              <h4 class="form-section">Other Information</h4>
                                              <div class="form-group row">
                                                <div class="col-md-12">
                                                  <textarea id="projectinput9" rows="5" class="form-control" name="comment" placeholder="WISIWYG"></textarea>
                                                </div>
                                              </div>
                                            </div>
                                          </form>
                                        </div>
                                        </div>
                                      </div>
                                    <!--Contact Tab Content-->
                                      <div class="tab-pane" id="tabIcon2" aria-labelledby="baseIcon-tab2">
                                        <div class="bg-lighttt">
                                          <!-- <ul class="nav nav-tabs w-100 pt-1 px-1">
                                            <li class="nav-item">
                                              <a class="nav-link" id="base-tab3" data-toggle="tab" aria-controls="tab1" href="#tab1" aria-expanded="true">
                                                <div class="form-check">
                                                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                  <label class="form-check-label" for="exampleRadios1">
                                                  Individual
                                                  </label>
                                                </div>
                                              </a>
                                            </li>
                                            <li class="nav-item">
                                              <a class="nav-link" id="base-tab4" data-toggle="tab" aria-controls="tab2" href="#tab2" aria-expanded="false">
                                                <div class="form-check">
                                                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                  <label class="form-check-label" for="exampleRadios2">
                                                  Company
                                                  </label>
                                                </div>
                                              </a>
                                            </li>
                                          </ul> -->
                                          <div class="tab-content px-1 pt-1 col-sm-12">
                                            <div role="tabpanel" class="tab-pane active" id="tab1" aria-expanded="true" aria-labelledby="base-tab3">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                  <div class="media d-flex mx-0 user-text mt-0">
                                                    <div class="align-left p-0 mr-2">
                                                      <a href="#" class="profile-image">
                                                      <img src="{{asset('app-assets/images/portrait/small/avatar-s-1.png')}}"
                                                        class="rounded-squre img-border height-120 mt-0"
                                                        alt="Card image">
                                                      </a>
                                                    </div>
                                                    <div class="media-body text-left text-dark">
                                                      
                                                      <div class="row">
                                                        <div class="col-xl-4 col-md-6">
                                                          <div class="form-group">
                                                            <label for="" class="">Contract Rite Limited</label>
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
                                                            <label for="" class="">Business Classification</label>
                                                            <div class="position-relative">
                                                              <select id="" name="priority" class="form-control">
                                                                <option value="low">Business</option>
                                                                <option value="medium">Developer</option>
                                                                <option value="high">Coder</option>
                                                              </select>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-xl-4 col-md-6">
                                                          <div class="form-group">
                                                            <label for="timesheetinput1">Account Status</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="timesheetinput1" class="form-control" placeholder="" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        
                                                        <div class="col-xl-4 col-md-6">
                                                          <div class="form-group">
                                                            <label for="timesheetinput1">Tags</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="timesheetinput1" class="form-control" placeholder="" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>

                                                        <div class="col-xl-4 col-md-6">
                                                          <div class="form-group">
                                                            <label for="">Address</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="" class="form-control" placeholder="Address" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-xl-4 col-md-6">
                                                          <div class="form-group">
                                                            <label for="">House Number</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="" class="form-control" placeholder="Address" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>

                                                      <div class="row">
                                                        <div class="col-xl-4 col-md-6">
                                                          <div class="form-group">
                                                            <label for="">House Name</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="" class="form-control" placeholder="Address" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-xl-4 col-md-6">
                                                          <div class="form-group">
                                                            <label for="">Address info</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="" class="form-control" placeholder="Address" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-xl-4 col-md-6">
                                                          <div class="form-group">
                                                            <label for="">Street</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="" class="form-control" placeholder="Address" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-xl-4 col-md-6">
                                                          <div class="form-group">
                                                            <label for="">City</label>
                                                            <div class="position-relative">
                                                            <select id="" name="priority" class="form-control">
                                                              <option value="low">City</option>
                                                              <option value="medium">Developer</option>
                                                              <option value="high">Coder</option>
                                                            </select>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-xl-4 col-md-6">
                                                          <div class="form-group">
                                                            <label for="">County</label>
                                                            <div class="position-relative">
                                                              <select id="" name="priority" class="form-control">
                                                                <option value="low">County</option>
                                                                <option value="medium">County</option>
                                                                <option value="high">County</option>
                                                              </select>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-xl-4 col-md-6">
                                                          <div class="form-group">
                                                            <label for="">Postcode</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="" class="form-control" placeholder="Address" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-xl-4 col-md-6">
                                                          <div class="form-group">
                                                            <label for="">Country</label>
                                                            <div class="position-relative">
                                                              <select id="" name="priority" class="form-control">
                                                                <option value="low">Afghanistan</option>
                                                                <option value="medium">Albania</option>
                                                                <option value="high">Algeria</option>
                                                              </select>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-xl-4 col-md-6">
                                                          <div class="form-group">
                                                            <label for="">Email</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="" class="form-control" placeholder="Enter Your Email" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-xl-4 col-md-6">
                                                          <div class="form-group">
                                                            <label for="">Phone</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="" class="form-control" placeholder="Phone" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>
                                                        </div>

                                                      <div class="row">
                                                       
                                                        <div class="col-xl-4 col-md-6">
                                                          <div class="form-group">
                                                            <label for="">Mobile</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="" class="form-control" placeholder="Mobile" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      
                                                      <div class="row">
                                                        <div class="col-md-12 mt-1 text-right">
                                                          <button type="button" class="btn btn-bg-gradient-x-purple-red mb-1" data-toggle="modal" data-keyboard="false" data-target="#keyboard1">More Address</button>
                                                        </div>
                                                      </div>
                                                      
                                                    </div>
                                                  </div>
                                                </div>
                                                
                                              </div>
                                            </div>
                                            <div class="tab-pane" id="tab2" aria-labelledby="base-tab4">
                                            <div class="row">
                                                <div class="col-md-7 pt-3">
                                                  <div class="media d-flex mx-0 user-text mt-0">
                                                    <div class="align-left p-0 mr-2">
                                                      <a href="#" class="profile-image">
                                                      <img  src="{{asset('app-assets/images/portrait/small/avatar-s-1.png')}}" class="rounded-squre img-border height-120" alt="Card image">
                                                      </a>
                                                    </div>
                                                    <div class="media-body text-left text-dark">
                                                      <div class="row">
                                                        <div class="col-md-12">
                                                          <div class="form-group">                                                                            
                                                            <input type="text" id="" class="form-control" placeholder="Contract Right Limited" name="issuetitle">
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                      
                                                        <div class="col-md-12 col-xl-6">
                                                          <div class="form-group">
                                                            <label for="timesheetinput1">Business Classification</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="timesheetinput1" class="form-control" placeholder="" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-12 col-xl-6">
                                                          <div class="form-group">
                                                            <label for="timesheetinput1">Account Status</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="timesheetinput1" class="form-control" placeholder="" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-md-12">
                                                          <div class="form-group">
                                                            <label for="">Email</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="" class="form-control" placeholder="Enter Your Email" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-12 col-xl-6">
                                                          <div class="form-group">
                                                            <label for="">Phone</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="" class="form-control" placeholder="Phone" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-12 col-xl-6">
                                                          <div class="form-group">
                                                            <label for="">Mobile</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="" class="form-control" placeholder="Mobile" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-md-12">
                                                          <div class="form-group">
                                                            <label for="timesheetinput1">tag</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="timesheetinput1" class="form-control" placeholder="" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-md-12">
                                                          <div class="form-group">
                                                            <label for="timesheetinput1">Company Website</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="timesheetinput1" class="form-control" placeholder="" name="employeename">
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
                                                      
                                                        <div class="row position_sctn">
                                                              <div class="col-sm-12">
                                                                  <h4 class="form-section">Address Type</h4>
                                                              </div>
                                                          </div>
                                                      </div>

                                                      <div class="row">
                                                                  <div class="col-md-12">
                                                                      <div class="form-group row">
                                                                          <label class="col-md-3" for="">Address</label>
                                                                          <div class="col-md-9">
                                                                          <input type="text" id="" class="form-control" placeholder="" name="">
                                                                      </div>
                                                                      </div>
                                                                  </div>
                                                            
                                                                  <div class="col-md-12">
                                                                      <div class="form-group row">
                                                                          <label class="col-md-3" for="">House Number</label>
                                                                          <div class="col-md-9">
                                                                          <input type="text" id="" class="form-control" placeholder="" name="">
                                                                      </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-12">
                                                                      <div class="form-group extent-wrp row">
                                                                          <label class="col-md-3" for="">House Name</label>
                                                                          <div class="col-md-9">
                                                                          <input type="text" id="" class="form-control" placeholder="" name="">
                                                                        
                                                                      </div>
                                                                          
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-12">
                                                                      <div class="form-group row">
                                                                          <label class="col-md-3" for="">Address info</label>
                                                                          <div class="col-md-9">
                                                                          <input type="text" id="" class="form-control" placeholder="" name="">
                                                                      </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-12">
                                                                      <div class="form-group row">
                                                                          <label class="col-md-3" for="">Street</label>
                                                                          <div class="col-md-9">
                                                                          <input type="text" id="" class="form-control" placeholder="" name="">
                                                                      </div>
                                                                      </div>
                                                                  </div>
                                                                 
                                                                 
                                                                  <div class="col-md-12">
                                                                      <div class="form-group row">
                                                                          <label class="col-md-3" for="">Postcode</label>
                                                                          <div class="col-md-9">
                                                                          <input type="text" id="" class="form-control" placeholder="" name="">
                                                                      </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-12">
                                                                      <div class="form-group row">
                                                                          <label class="col-md-3" for="">Country</label>
                                                                          <div class="col-md-9">
                                                                          <select id="" name="priority" class="form-control">
                                                                            <option value="low">Afghanistan</option>
                                                                            <option value="medium">Albania</option>
                                                                            <option value="high">Algeria</option>
                                                                          </select>
                                                                      </div>
                                                                      </div>
                                                                  </div>
                                                                   <div class="col-md-12">
                                                                      <div class="form-group row">
                                                                          <label class="col-md-3" for="">County</label>
                                                                          <div class="col-md-9">
                                                                          <select id="" name="priority" class="form-control">
                                                                            <option value="low">County</option>
                                                                            <option value="medium">County</option>
                                                                            <option value="high">County</option>
                                                                          </select>
                                                                      </div>
                                                                      </div>
                                                                  </div>
                                                                   <div class="col-md-12">
                                                                      <div class="form-group row">
                                                                          <label class="col-md-3" for="">City</label>
                                                                          <div class="col-md-9">
                                                                          <select id="" name="priority" class="form-control">
                                                                            <option value="low">City</option>
                                                                            <option value="medium">Developer</option>
                                                                            <option value="high">Coder</option>
                                                                          </select>
                                                                      </div>
                                                                      </div>
                                                                  </div>
                                                                  
                                                              </div>

                                                              <div class="row">
                                                          <div class="col-md-12 mt-1 text-right">
                                                            <button type="button" class="btn btn-bg-gradient-x-purple-red mb-1" data-toggle="modal" data-keyboard="false" data-target="#moreAddress">More Address</button>
                                                          </div>
                                                        </div>
                                                        
                                                      </div>
                                                  </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>

                                       <div class="row">
                                         <div class="col-sm-12">
                                           <h4>Contacts</h4>
                                           <a href="javascript:void(0)" class="create_btn" data-toggle="modal" data-target="#create-modal">Create</a>
                                         </div>
                                         
                                          <div class="col-md-4 col-sm-6">
                                            <div class="card mb-1 contactbox-m">
                                              <div class="card-body p-0">
                                                  <div class="row">
                                                      <div class="col-4">
                                                          <div class="border-left-radius-palette">
                                                          <img src="http://digita.vhostevents.com/app-assets/images/portrait/small/avatar-s-1.png" class="rounded-squre img-fluid img-border height-120 mt-0" alt="Card image">
                                                          </div>
                                                      </div>
                                                      <div class="col-8 pl-0">
                                                          <div class="p-0">                                                                
                                                              <div class="float-right">
                                                                 <button type="button" class="close_btn close" data-toggle="modal" data-target="#close_modal">
                                                                      <span aria-hidden="true">×</span>
                                                                  </button>                                                                
                                                                  <p>Alexanda Walker Director of Marketing and Communications</p>                                                                
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
                                                          <img src="http://digita.vhostevents.com/app-assets/images/portrait/small/avatar-s-1.png" class="rounded-squre img-fluid img-border height-120 mt-0" alt="Card image">
                                                          </div>
                                                      </div>
                                                      <div class="col-8 pl-0">
                                                          <div class="p-0">                                                                
                                                              <div class="float-right">
                                                                  <button type="button" class="close_btn close" data-toggle="modal" data-target="#close_modal">
                                                                      <span aria-hidden="true">×</span>
                                                                  </button>
                                                                  <p>Alexanda Walker Director of Marketing and Communications</p>                                                                
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
                                                          <img src="http://digita.vhostevents.com/app-assets/images/portrait/small/avatar-s-1.png" class="rounded-squre img-fluid img-border height-120 mt-0" alt="Card image">
                                                          </div>
                                                      </div>
                                                      <div class="col-8 pl-0">
                                                          <div class="p-0">                                                                
                                                              <div class="float-right">
                                                                 <button type="button" class="close_btn close" data-toggle="modal" data-target="#close_modal">
                                                                      <span aria-hidden="true">×</span>
                                                                  </button>
                                                                  <p>Alexanda Walker Director of Marketing and Communications</p>                                                                
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
                                                          <img src="http://digita.vhostevents.com/app-assets/images/portrait/small/avatar-s-1.png" class="rounded-squre img-fluid img-border height-120 mt-0" alt="Card image">
                                                          </div>
                                                      </div>
                                                      <div class="col-8 pl-0">
                                                          <div class="p-0">                                                                
                                                              <div class="float-right">
                                                                  <button type="button" class="close_btn close" data-toggle="modal" data-target="#close_modal">
                                                                      <span aria-hidden="true">×</span>
                                                                  </button>
                                                                  <p>Alexanda Walker Director of Marketing and Communications</p>                                                                
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
                                                          <img src="http://digita.vhostevents.com/app-assets/images/portrait/small/avatar-s-1.png" class="rounded-squre img-fluid img-border height-120 mt-0" alt="Card image">
                                                          </div>
                                                      </div>
                                                      <div class="col-8 pl-0">
                                                          <div class="p-0">                                                                
                                                              <div class="float-right">
                                                                 <button type="button" class="close_btn close" data-toggle="modal" data-target="#close_modal">
                                                                      <span aria-hidden="true">×</span>
                                                                  </button>
                                                                  <p>Alexanda Walker Director of Marketing and Communications</p>                                                                
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
                                                          <img src="http://digita.vhostevents.com/app-assets/images/portrait/small/avatar-s-1.png" class="rounded-squre img-fluid img-border height-120 mt-0" alt="Card image">
                                                          </div>
                                                      </div>
                                                      <div class="col-8 pl-0">
                                                          <div class="p-0">                                                                
                                                              <div class="float-right">
                                                                  <button type="button" class="close_btn close" data-toggle="modal" data-target="#close_modal">
                                                                      <span aria-hidden="true">×</span>
                                                                  </button>
                                                                  <p>Alexanda Walker Director of Marketing and Communications</p>                                                                
                                                                  <a href="#">walker@17capital.com</a>
                                                                  
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                            </div>
                                          </div>


                                         
                                       </div>

                                        
                                        <div class="col-md-12">
                                          <form class="form form-horizontal">
                                            <div class="form-body">
                                              <h4 class="form-section">Other Information</h4>
                                              <div class="form-group row">
                                                <div class="col-md-12">
                                                  <textarea id="projectinput9" rows="5" class="form-control" name="comment" placeholder="WISIWYG"></textarea>
                                                </div>
                                              </div>
                                            </div>
                                          </form>
                                        </div>
                                      </div>
                                      <!--Accounting Tab Content-->
                                      <!-- <div class="tab-pane" id="tabIcon3" aria-labelledby="baseIcon-tab3">
                                        <div class="bg-lighttt">
                                          <ul class="nav nav-tabs w-100 pt-1 px-1">
                                            <li class="nav-item">
                                              <a class="nav-link" id="base-tab5" data-toggle="tab" aria-controls="tab3" href="#tab3" aria-expanded="true">
                                                <div class="form-check">
                                                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                  <label class="form-check-label" for="exampleRadios1">
                                                  Individual
                                                  </label>
                                                </div>
                                              </a>
                                            </li>
                                            <li class="nav-item">
                                              <a class="nav-link" id="base-tab6" data-toggle="tab" aria-controls="tab4" href="#tab4" aria-expanded="false">
                                                <div class="form-check">
                                                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                  <label class="form-check-label" for="exampleRadios2">
                                                  Company
                                                  </label>
                                                </div>
                                              </a>
                                            </li>
                                          </ul>
                                          <div class="tab-content px-1 pt-1 col-sm-12">
                                            <div role="tabpanel" class="tab-pane active" id="tab3" aria-expanded="true" aria-labelledby="base-tab5">
                                              <div class="row">
                                                  <div class="col-md-7 pt-3">
                                                    <div class="media d-flex mx-0 user-text mt-0">
                                                      <div class="align-left p-0 mr-2">
                                                        <a href="#" class="profile-image">
                                                        <img  src="{{asset('app-assets/images/portrait/small/avatar-s-1.png')}}" class="rounded-squre img-border height-120" alt="Card image">
                                                        </a>
                                                      </div>
                                                      <div class="media-body text-left text-dark">
                                                        <div class="row">
                                                          <div class="col-md-12">
                                                            <div class="form-group">                                                                            
                                                              <input type="text" id="" class="form-control" placeholder="Contract Right Limited" name="issuetitle">
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="row">
                                                        
                                                          <div class="col-md-12 col-xl-6">
                                                            <div class="form-group">
                                                              <label for="timesheetinput1">Business Classification</label>
                                                              <div class="position-relative">
                                                                <input type="text" id="timesheetinput1" class="form-control" placeholder="" name="employeename">
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="col-md-12 col-xl-6">
                                                            <div class="form-group">
                                                              <label for="timesheetinput1">Account Status</label>
                                                              <div class="position-relative">
                                                                <input type="text" id="timesheetinput1" class="form-control" placeholder="" name="employeename">
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="row">
                                                          <div class="col-md-12">
                                                            <div class="form-group">
                                                              <label for="">Email</label>
                                                              <div class="position-relative">
                                                                <input type="text" id="" class="form-control" placeholder="Enter Your Email" name="employeename">
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="col-md-12 col-xl-6">
                                                            <div class="form-group">
                                                              <label for="">Phone</label>
                                                              <div class="position-relative">
                                                                <input type="text" id="" class="form-control" placeholder="Phone" name="employeename">
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="col-md-12 col-xl-6">
                                                            <div class="form-group">
                                                              <label for="">Mobile</label>
                                                              <div class="position-relative">
                                                                <input type="text" id="" class="form-control" placeholder="Mobile" name="employeename">
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="row">
                                                          <div class="col-md-12">
                                                            <div class="form-group">
                                                              <label for="timesheetinput1">tag</label>
                                                              <div class="position-relative">
                                                                <input type="text" id="timesheetinput1" class="form-control" placeholder="" name="employeename">
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="row">
                                                          <div class="col-md-12">
                                                            <div class="form-group">
                                                              <label for="timesheetinput1">Company Website</label>
                                                              <div class="position-relative">
                                                                <input type="text" id="timesheetinput1" class="form-control" placeholder="" name="employeename">
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
                                                        
                                                          <div class="row position_sctn">
                                                                <div class="col-sm-12">
                                                                    <h4 class="form-section">Address Type</h4>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group row">
                                                                            <label class="col-md-3" for="">Address</label>
                                                                            <div class="col-md-9">
                                                                            <input type="text" id="" class="form-control" placeholder="" name="">
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                              
                                                                    <div class="col-md-12">
                                                                        <div class="form-group row">
                                                                            <label class="col-md-3" for="">House Number</label>
                                                                            <div class="col-md-9">
                                                                            <input type="text" id="" class="form-control" placeholder="" name="">
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group extent-wrp row">
                                                                            <label class="col-md-3" for="">House Name</label>
                                                                            <div class="col-md-9">
                                                                            <input type="text" id="" class="form-control" placeholder="" name="">
                                                                          
                                                                        </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group row">
                                                                            <label class="col-md-3" for="">Address info</label>
                                                                            <div class="col-md-9">
                                                                            <input type="text" id="" class="form-control" placeholder="" name="">
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group row">
                                                                            <label class="col-md-3" for="">Street</label>
                                                                            <div class="col-md-9">
                                                                            <input type="text" id="" class="form-control" placeholder="" name="">
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group row">
                                                                            <label class="col-md-3" for="">City</label>
                                                                            <div class="col-md-9">
                                                                            <select id="" name="priority" class="form-control">
                                                                              <option value="low">City</option>
                                                                              <option value="medium">Developer</option>
                                                                              <option value="high">Coder</option>
                                                                            </select>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group row">
                                                                            <label class="col-md-3" for="">County</label>
                                                                            <div class="col-md-9">
                                                                            <select id="" name="priority" class="form-control">
                                                                              <option value="low">County</option>
                                                                              <option value="medium">County</option>
                                                                              <option value="high">County</option>
                                                                            </select>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group row">
                                                                            <label class="col-md-3" for="">Postcode</label>
                                                                            <div class="col-md-9">
                                                                            <input type="text" id="" class="form-control" placeholder="" name="">
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group row">
                                                                            <label class="col-md-3" for="">Country</label>
                                                                            <div class="col-md-9">
                                                                            <select id="" name="priority" class="form-control">
                                                                              <option value="low">Afghanistan</option>
                                                                              <option value="medium">Albania</option>
                                                                              <option value="high">Algeria</option>
                                                                            </select>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>

                                                                <div class="row">
                                                            <div class="col-md-12 mt-1 text-right">
                                                              <button type="button" class="btn btn-bg-gradient-x-purple-red mb-1" data-toggle="modal" data-keyboard="false" data-target="#moreAddress">More Address</button>
                                                            </div>
                                                          </div>
                                                          
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab2" aria-labelledby="base-tab6">
                                              <div class="row col-sm-12">
                                                <div class="col-sm-7">
                                                  <div class="media d-flex mx-0 my-1 user-text mt-0">
                                                    <div class="align-left p-0 mr-2">
                                                      <a href="#" class="profile-image">
                                                      <img src="{{asset('app-assets/images/portrait/small/avatar-s-1.png')}}"
                                                        class="rounded-squre img-border height-120 mt-0"
                                                        alt="Card image">
                                                      </a>
                                                    </div>
                                                    <div class="media-body text-left text-dark">
                                                      <div class="row">
                                                        <div class="col-md-12">
                                                          <div class="form-group">                                                                            
                                                            <input type="text" id="" class="form-control" placeholder="Contract Right Limited" name="issuetitle">
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-md-6">
                                                          <div class="form-group">
                                                            <label for="timesheetinput1">Business Classification</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="timesheetinput1" class="form-control" placeholder="" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                          <div class="form-group">
                                                            <label for="timesheetinput1">Account Status</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="timesheetinput1" class="form-control" placeholder="" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-md-12">
                                                          <div class="form-group">
                                                            <label for="timesheetinput1">tag</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="timesheetinput1" class="form-control" placeholder="" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-sm-5">2</div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row mt-3">
                                          <div class="col-md-12">
                                            <form class="form form-horizontal">
                                              <div class="form-body">
                                                <h4 class="form-section">Accounting</h4>
                                                <div class="row">
                                                  <div class="col-md-6 col-sm-6">
                                                    <div class="form-group row">
                                                      <label class="col-md-3 label-control" for="">Sales Person</label>
                                                      <div class="col-md-8">
                                                        <div class="position-relative">
                                                          <input type="text" id="" class="form-control" >
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6 col-sm-6">
                                                    <div class="form-group row">
                                                      <label class="col-md-3 label-control" for="">Accounts Receivable</label>
                                                      <div class="col-md-8">
                                                        <div class="position-relative">
                                                          <input type="text" id="" class="form-control" >
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6 col-sm-6">
                                                    <div class="form-group row">
                                                      <label class="col-md-3 label-control" for="projectinput7">Sales Price list</label>
                                                      <div class="col-md-8">
                                                        <div class="position-relative">
                                                          <input type="text" id="" class="form-control" >
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6 col-sm-6">
                                                    <div class="form-group row">
                                                      <label class="col-md-3 label-control" for="projectinput7">Accounts Payable</label>
                                                      <div class="col-md-8">
                                                        <div class="position-relative">
                                                          <input type="text" id="" class="form-control" >
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6 col-sm-6">
                                                    <div class="form-group row">
                                                      <label class="col-md-3 label-control" for="projectinput7">Customer Payment Terms</label>
                                                      <div class="col-md-8">
                                                        <div class="position-relative">
                                                          <input type="text" id="" class="form-control" >
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6 col-sm-6">
                                                    <div class="form-group row">
                                                      <label class="col-md-3 label-control" for="projectinput7">Vendor Payment Terms</label>
                                                      <div class="col-md-8">
                                                        <div class="position-relative">
                                                          <input type="text" id="" class="form-control" >
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </form>
                                          </div>
                                        </div>
                                        <div class="col-md-12">
                                          <form class="form form-horizontal">
                                            <div class="form-body">
                                              <h4 class="form-section">Other Information</h4>
                                              <div class="form-group row">
                                                <div class="col-md-12">
                                                  <textarea id="projectinput9" rows="5" class="form-control" name="comment" placeholder="WISIWYG"></textarea>
                                                </div>
                                              </div>
                                            </div>
                                          </form>
                                        </div>
                                      </div> -->
                                      <div role="tabpanel" class="tab-pane" id="tabIcon3" aria-expanded="true" aria-labelledby="baseIcon-tab3">
                                        <div class="bg-lighttt">
                                          <ul class="nav nav-tabs w-100 pt-1 px-1">
                                            <li class="nav-item">
                                              <a class="nav-link" id="base-tab1" data-toggle="tab" aria-controls="tab1" href="#tab3" aria-expanded="true">
                                                <div class="form-check">
                                                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                  <label class="form-check-label" for="exampleRadios1">
                                                  Individual
                                                  </label>
                                                </div>
                                              </a>
                                            </li>
                                            <li class="nav-item">
                                              <a class="nav-link" id="base-tab2" data-toggle="tab" aria-controls="tab2" href="#tab4" aria-expanded="false">
                                                <div class="form-check">
                                                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                  <label class="form-check-label" for="exampleRadios2">
                                                  Company
                                                  </label>
                                                </div>
                                              </a>
                                            </li>
                                          </ul>
                                          <div class="tab-content px-1 pt-1 col-sm-12">
                                            <div role="tabpanel" class="tab-pane" id="tab3" aria-expanded="true" aria-labelledby="base-tab1">
                                              <div class="row">
                                                <div class="col-sm-12">
                                                  <div class="media d-flex mx-0 user-text mt-0">
                                                    <div class="align-left p-0 mr-2">
                                                      <a href="#" class="profile-image">
                                                      <img src="{{asset('app-assets/images/portrait/small/avatar-s-1.png')}}"
                                                        class="rounded-squre img-border height-120 mt-0"
                                                        alt="Card image">
                                                      </a>
                                                    </div>
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
                                                                <input type="text" id="" class="form-control" placeholder="First Name" name="issuetitle">
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="col-md-4">
                                                            <div class="form-group">
                                                              <div class="position-relative">
                                                                <input type="text" id="" class="form-control" placeholder="Middle Name" name="issuetitle">
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="col-md-4">
                                                            <div class="form-group">
                                                              <div class="position-relative">
                                                                <input type="text" id="" class="form-control" placeholder="Last Name" name="issuetitle">
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
                                                              <input type="text" id="" class="form-control" placeholder="" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-xl-4 col-md-6">
                                                          <div class="form-group">
                                                            <label for="">tag</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="" class="form-control" placeholder="" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-md-6 col-xl-4">
                                                          <div class="form-group">
                                                            <label for="">Email</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="" class="form-control" placeholder="Enter Your Email" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-6 col-xl-4">
                                                          <div class="form-group">
                                                            <label for="">Phone</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="" class="form-control" placeholder="Phone" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-6 col-xl-4">
                                                          <div class="form-group">
                                                            <label for="">Mobile</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="" class="form-control" placeholder="Mobile" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col">
                                                          <div class="form-group">
                                                            <label for="">Address</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="" class="form-control" placeholder="Address" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      
                                                      
                                                    </div>
                                                  </div>
                                                </div>
                                                
                                              </div>
                                            </div>
                                            <div class="tab-pane active" id="tab4" aria-labelledby="base-tab2">
                                              <div class="row">
                                                <div class="col-md-7 pt-3">
                                                  <div class="media d-flex mx-0 user-text mt-0">
                                                    <div class="align-left p-0 mr-2">
                                                      <a href="#" class="profile-image">
                                                      <img  src="{{asset('app-assets/images/portrait/small/avatar-s-1.png')}}" class="rounded-squre img-border height-120" alt="Card image">
                                                      </a>
                                                    </div>
                                                    <div class="media-body text-left text-dark">
                                                      <div class="row">
                                                        <div class="col-md-12">
                                                          <div class="form-group">                                                                            
                                                            <input type="text" id="" class="form-control" placeholder="Contract Right Limited" name="issuetitle">
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                      
                                                        <div class="col-md-12 col-xl-6">
                                                          <div class="form-group">
                                                            <label for="timesheetinput1">Business Classification</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="timesheetinput1" class="form-control" placeholder="" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-12 col-xl-6">
                                                          <div class="form-group">
                                                            <label for="timesheetinput1">Account Status</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="timesheetinput1" class="form-control" placeholder="" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-md-12">
                                                          <div class="form-group">
                                                            <label for="">Email</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="" class="form-control" placeholder="Enter Your Email" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-12 col-xl-6">
                                                          <div class="form-group">
                                                            <label for="">Phone</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="" class="form-control" placeholder="Phone" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-12 col-xl-6">
                                                          <div class="form-group">
                                                            <label for="">Mobile</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="" class="form-control" placeholder="Mobile" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-md-12">
                                                          <div class="form-group">
                                                            <label for="timesheetinput1">tag</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="timesheetinput1" class="form-control" placeholder="" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-md-12">
                                                          <div class="form-group">
                                                            <label for="timesheetinput1">Company Website</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="timesheetinput1" class="form-control" placeholder="" name="employeename">
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
                                                      
                                                        <div class="row position_sctn">
                                                              <div class="col-sm-12">
                                                                  <h4 class="form-section">Address Type</h4>
                                                              </div>
                                                          </div>
                                                      </div>

                                                      <div class="row">
                                                                  <div class="col-md-12">
                                                                      <div class="form-group row">
                                                                          <label class="col-md-3" for="">Address</label>
                                                                          <div class="col-md-9">
                                                                          <input type="text" id="" class="form-control" placeholder="" name="">
                                                                      </div>
                                                                      </div>
                                                                  </div>
                                                            
                                                                  <div class="col-md-12">
                                                                      <div class="form-group row">
                                                                          <label class="col-md-3" for="">House Number</label>
                                                                          <div class="col-md-9">
                                                                          <input type="text" id="" class="form-control" placeholder="" name="">
                                                                      </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-12">
                                                                      <div class="form-group extent-wrp row">
                                                                          <label class="col-md-3" for="">House Name</label>
                                                                          <div class="col-md-9">
                                                                          <input type="text" id="" class="form-control" placeholder="" name="">
                                                                        
                                                                      </div>
                                                                          
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-12">
                                                                      <div class="form-group row">
                                                                          <label class="col-md-3" for="">Address info</label>
                                                                          <div class="col-md-9">
                                                                          <input type="text" id="" class="form-control" placeholder="" name="">
                                                                      </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-12">
                                                                      <div class="form-group row">
                                                                          <label class="col-md-3" for="">Street</label>
                                                                          <div class="col-md-9">
                                                                          <input type="text" id="" class="form-control" placeholder="" name="">
                                                                      </div>
                                                                      </div>
                                                                  </div>
                                                                
                                                                 
                                                                  <div class="col-md-12">
                                                                      <div class="form-group row">
                                                                          <label class="col-md-3" for="">Postcode</label>
                                                                          <div class="col-md-9">
                                                                          <input type="text" id="" class="form-control" placeholder="" name="">
                                                                      </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-12">
                                                                      <div class="form-group row">
                                                                          <label class="col-md-3" for="">Country</label>
                                                                          <div class="col-md-9">
                                                                          <select id="" name="priority" class="form-control">
                                                                            <option value="low">Afghanistan</option>
                                                                            <option value="medium">Albania</option>
                                                                            <option value="high">Algeria</option>
                                                                          </select>
                                                                      </div>
                                                                      </div>
                                                                  </div>
                                                                   <div class="col-md-12">
                                                                      <div class="form-group row">
                                                                          <label class="col-md-3" for="">County</label>
                                                                          <div class="col-md-9">
                                                                          <select id="" name="priority" class="form-control">
                                                                            <option value="low">County</option>
                                                                            <option value="medium">County</option>
                                                                            <option value="high">County</option>
                                                                          </select>
                                                                      </div>
                                                                      </div>
                                                                  </div>
                                                                    <div class="col-md-12">
                                                                      <div class="form-group row">
                                                                          <label class="col-md-3" for="">City</label>
                                                                          <div class="col-md-9">
                                                                          <select id="" name="priority" class="form-control">
                                                                            <option value="low">City</option>
                                                                            <option value="medium">Developer</option>
                                                                            <option value="high">Coder</option>
                                                                          </select>
                                                                      </div>
                                                                      </div>
                                                                  </div>
                                                                  
                                                              </div>

                                                              <div class="row">
                                                          <div class="col-md-12 mt-1 text-right">
                                                            <button type="button" class="btn btn-bg-gradient-x-purple-red mb-1" data-toggle="modal" data-keyboard="false" data-target="#moreAddress">More Address</button>
                                                          </div>
                                                        </div>
                                                        
                                                      </div>
                                                  </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row mt-1">
                                          <div class="col-md-12">
                                            <form class="form form-horizontal">
                                              <div class="form-body">
                                                <h4 class="form-section">Accounting</h4>
                                                <div class="row">
                                                  <div class="col-md-6 col-sm-6">
                                                    <div class="form-group row">
                                                      <label class="col-md-4 label-control" for="">Sales Person</label>
                                                      <div class="col-md-8">
                                                        <div class="position-relative">
                                                          <input type="text" id="" class="form-control">
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6 col-sm-6">
                                                    <div class="form-group row">
                                                      <label class="col-md-4 label-control" for="">Accounts Receivable</label>
                                                      <div class="col-md-8">
                                                        <div class="position-relative">
                                                          <input type="text" id="" class="form-control">
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6 col-sm-6">
                                                    <div class="form-group row">
                                                      <label class="col-md-4 label-control" for="projectinput7">Sales Price list</label>
                                                      <div class="col-md-8">
                                                        <div class="position-relative">
                                                          <input type="text" id="" class="form-control">
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6 col-sm-6">
                                                    <div class="form-group row">
                                                      <label class="col-md-4 label-control" for="projectinput7">Accounts Payable</label>
                                                      <div class="col-md-8">
                                                        <div class="position-relative">
                                                          <input type="text" id="" class="form-control">
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6 col-sm-6">
                                                    <div class="form-group row">
                                                      <label class="col-md-4 label-control" for="projectinput7">Customer Payment Terms</label>
                                                      <div class="col-md-8">
                                                        <div class="position-relative">
                                                          <input type="text" id="" class="form-control">
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6 col-sm-6">
                                                    <div class="form-group row">
                                                      <label class="col-md-4 label-control" for="projectinput7">Vendor Payment Terms</label>
                                                      <div class="col-md-8">
                                                        <div class="position-relative">
                                                          <input type="text" id="" class="form-control">
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </form>
                                          </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12">
                                          <form class="form form-horizontal">
                                            <div class="form-body">
                                              <h4 class="form-section">Other Information</h4>
                                              <div class="form-group row">
                                                <div class="col-md-12">
                                                  <textarea id="projectinput9" rows="5" class="form-control" name="comment" placeholder="WISIWYG"></textarea>
                                                </div>
                                              </div>
                                            </div>
                                          </form>
                                        </div>
                                        </div>
                                      </div>


                                    </div>
                                  </div>
                                </div>


                                <!--newcode-->

                                </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
        </section>
        <!-- Tabs with Icons end -->

    </div>


    <!-- Modal More Address-->
    <div class="modal fade text-left" id="editAddress" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel3" aria-hidden="true">
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
                                <input type="text" id="" class="form-control" placeholder="First Name" name="issuetitle">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <div class="position-relative">
                                <input type="text" id="" class="form-control" placeholder="Middle Name" name="issuetitle">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <div class="position-relative">
                                <input type="text" id="" class="form-control" placeholder="Last Name" name="issuetitle">
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
                              <input type="text" id="" class="form-control" placeholder="" name="employeename">
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                          <div class="form-group">
                            <label for="">tag</label>
                            <div class="position-relative">
                              <input type="text" id="" class="form-control" placeholder="" name="employeename">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6 col-xl-4">
                          <div class="form-group">
                            <label for="">Email</label>
                            <div class="position-relative">
                              <input type="text" id="" class="form-control" placeholder="Enter Your Email" name="employeename">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                          <div class="form-group">
                            <label for="">Phone</label>
                            <div class="position-relative">
                              <input type="text" id="" class="form-control" placeholder="Phone" name="employeename">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                          <div class="form-group">
                            <label for="">Mobile</label>
                            <div class="position-relative">
                              <input type="text" id="" class="form-control" placeholder="Mobile" name="employeename">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label for="">Address</label>
                            <div class="position-relative">
                              <input type="text" id="" class="form-control" placeholder="Address" name="employeename">
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
    <div class="modal fade text-left" id="moreAddress" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel3" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title" id="basicModalLabel3">More Address</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body pb-0">
              <div class="row">
                <div class="col-lg-12 col-xl-12">
                    

                    <div id="collapse3" class="card-accordion">
                        <div class="card collapse-icon accordion-icon-rotate">
                            <div class="card">
                                <div class="card-header" id="headingCOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseC1" aria-expanded="true" aria-controls="collapseC1">
                                        <i class="ft-book"></i> Correspondence
                                        </button>
                                    </h5> 
                                </div> 

                                <div id="collapseC1" class="collapse show" aria-labelledby="headingCOne">
                                    <div class="card-body">
                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingCTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseC2" aria-expanded="false" aria-controls="collapseC2">
                                        <i class="ft-bold"></i>  Invoice / Billing
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseC2" class="collapse" aria-labelledby="headingCTwo">
                                    <div class="card-body">
                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingCThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseC3" aria-expanded="false" aria-controls="collapseC3">
                                        <i class="ft-map-pin"></i>  Registered address
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseC3" class="collapse" aria-labelledby="headingCThree">
                                    <div class="card-body">
                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="card">
                                <div class="card-header" id="headingCfore">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseC4" aria-expanded="false" aria-controls="collapseC4">
                                        <i class="ft-anchor"></i>  Shipping
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseC4" class="collapse" aria-labelledby="headingCfore">
                                    <div class="card-body">
                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingCfive">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseC5" aria-expanded="false" aria-controls="collapseC5">
                                        <i class="ft-align-justify"></i>  Other address
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseC5" class="collapse" aria-labelledby="headingCfive">
                                    <div class="card-body">
                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
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





    <script>
        function personal_info(val) {

            let node = document.getElementById("appendable");
            let child = " <div class=\"col-md-12\" id=\"custom-data\">\n" +
                "\n" +
                "                                                    <div class=\"form-body\">\n" +
                "\n" +
                "                                                        <div class=\"form-group\">\n" +
                "                                                            <label for=\"projectinput1\">Company Name</label>\n" +
                "                                                            <input type=\"text\" id=\"CompanyName\" required\n" +
                "                                                                   class=\"form-control\"\n" +
                "                                                                   placeholder=\"Company Name\" name=\"Company Name[]\"\n" +
                "                                                                   data-toggle=\"tooltip\" data-trigger=\"hover\"\n" +
                "                                                                   data-placement=\"top\"\n" +
                "                                                                   data-title=\"Issue Title\">\n" +
                "                                                        </div>\n" +
                "\n" +
                "                                                        <div class=\"row\">\n" +
                "                                                            <div class=\"col-md-6\">\n" +
                "                                                                <div class=\"form-group\">\n" +
                "                                                                    <label for=\"projectinput3\">Job Profile</label>\n" +
                "                                                                    <input type=\"text\" id=\"Job Profile\"\n" +
                "                                                                           class=\"form-control\"\n" +
                "                                                                           name=\"Job Profile[]\"\n" +
                "                                                                           data-toggle=\"tooltip\"\n" +
                "                                                                           data-trigger=\"hover\"\n" +
                "                                                                           data-placement=\"top\"\n" +
                "                                                                           data-title=\"Date Opened\">\n" +
                "                                                                </div>\n" +
                "                                                            </div>\n" +
                "                                                            <div class=\"col-md-6\">\n" +
                "                                                                <div class=\"form-group\">\n" +
                "                                                                    <label for=\"projectinput3\">Joining Date</label>\n" +
                "                                                                    <input type=\"date\" id=\"Joining Date\" required\n" +
                "                                                                           class=\"form-control\"\n" +
                "                                                                           name=\"Joining Date[]\"\n" +
                "                                                                           data-toggle=\"tooltip\"\n" +
                "                                                                           data-trigger=\"hover\"\n" +
                "                                                                           data-placement=\"top\"\n" +
                "                                                                           data-title=\"Date Opened\">\n" +
                "                                                                </div>\n" +
                "                                                            </div>\n" +
                "                                                            <div class=\"col-md-12\">\n" +
                "                                                                <div class=\"form-group\">\n" +
                "                                                                    <label for=\"projectinput3\">Leaving Date</label>\n" +
                "                                                                    <input type=\"date\" id=\"Leaving Date\" required\n" +
                "                                                                           class=\"form-control\"\n" +
                "                                                                           name=\"Leaving Date[]\"\n" +
                "                                                                           data-toggle=\"tooltip\"\n" +
                "                                                                           data-trigger=\"hover\"\n" +
                "                                                                           data-placement=\"top\"\n" +
                "                                                                           data-title=\"Date Opened\">\n" +
                "                                                                </div>\n" +
                "                                                            </div>\n" +
                "                                                        </div>\n" +
                "                                                    </div>\n" +
                "\n" +
                "                                                    <div class=\"form-group\">\n" +
                "                                                        <label for=\"projectinput3\">Remarks</label>\n" +
                "                                                        <input type=\"text\" id=\"Remarks\"\n" +
                "                                                               class=\"form-control\"\n" +
                "                                                               name=\"Remarks[]\"\n" +
                "                                                               data-toggle=\"tooltip\"\n" +
                "                                                               data-trigger=\"hover\"\n" +
                "                                                               data-placement=\"top\"\n" +
                "                                                               data-title=\"Date Opened\">\n" +
                "                                                    </div>\n" +
                "\n" +
                "                                                <hr>\n" +
                "\n" +
                "                                            </div>";

            // node.append(child);
            $("#appendable").append(child)
            // $("#appendable").append(document.getElementById(val.parentElement.previousElementSibling.firstElementChild.id));
        }

        function qualification(val) {

            let node = document.getElementById("appendable_qua");
            let child = "                                            <div class=\"col-md-12\" id=\"custom-data-qua\">\n" +
                "\n" +
                "                                                    <div class=\"form-body\">\n" +
                "\n" +
                "                                                        <div class=\"form-group\">\n" +
                "                                                            <label for=\"projectinput1\">Schoole / University</label>\n" +
                "                                                            <input type=\"text\" id=\"SchooleUniversity\" required\n" +
                "                                                                   class=\"form-control\"\n" +
                "                                                                   placeholder=\"School / University\" name=\"School University[]\"\n" +
                "                                                                   data-toggle=\"tooltip\" data-trigger=\"hover\"\n" +
                "                                                                   data-placement=\"top\"\n" +
                "                                                                   data-title=\"Issue Title\">\n" +
                "                                                        </div>\n" +
                "\n" +
                "                                                        <div class=\"row\">\n" +
                "                                                            <div class=\"col-md-6\">\n" +
                "                                                                <div class=\"form-group\">\n" +
                "                                                                    <label for=\"projectinput3\">Education Level</label>\n" +
                "                                                                    <input type=\"text\" id=\"Education Level\"\n" +
                "                                                                           class=\"form-control\"\n" +
                "                                                                           name=\"Education Level[]\"\n" +
                "                                                                           data-toggle=\"tooltip\"\n" +
                "                                                                           data-trigger=\"hover\"\n" +
                "                                                                           data-placement=\"top\"\n" +
                "                                                                           data-title=\"Date Opened\">\n" +
                "                                                                </div>\n" +
                "                                                            </div>\n" +
                "                                                            <div class=\"col-md-6\">\n" +
                "                                                                <div class=\"form-group\">\n" +
                "                                                                    <label for=\"projectinput3\">Start Date</label>\n" +
                "                                                                    <input type=\"date\" id=\"Start Date\" required\n" +
                "                                                                           class=\"form-control\"\n" +
                "                                                                           name=\"Start Date[]\"\n" +
                "                                                                           data-toggle=\"tooltip\"\n" +
                "                                                                           data-trigger=\"hover\"\n" +
                "                                                                           data-placement=\"top\"\n" +
                "                                                                           data-title=\"Date Opened\">\n" +
                "                                                                </div>\n" +
                "                                                            </div>\n" +
                "                                                            <div class=\"col-md-12\">\n" +
                "                                                                <div class=\"form-group\">\n" +
                "                                                                    <label for=\"projectinput3\">End Date</label>\n" +
                "                                                                    <input type=\"date\" id=\"End Date\" required\n" +
                "                                                                           class=\"form-control\"\n" +
                "                                                                           name=\"End Date[]\"\n" +
                "                                                                           data-toggle=\"tooltip\"\n" +
                "                                                                           data-trigger=\"hover\"\n" +
                "                                                                           data-placement=\"top\"\n" +
                "                                                                           data-title=\"Date Opened\">\n" +
                "                                                                </div>\n" +
                "                                                            </div>\n" +
                "                                                            <div class=\"col-md-6\">\n" +
                "                                                                <div class=\"form-group\">\n" +
                "                                                                    <label for=\"projectinput3\">Professional Course (if any)</label>\n" +
                "                                                                    <input type=\"date\" id=\"End Date\" required\n" +
                "                                                                           class=\"form-control\"\n" +
                "                                                                           name=\"Professional Course[]\"\n" +
                "                                                                           data-toggle=\"tooltip\"\n" +
                "                                                                           data-trigger=\"hover\"\n" +
                "                                                                           data-placement=\"top\"\n" +
                "                                                                           data-title=\"Date Opened\">\n" +
                "                                                                </div>\n" +
                "                                                            </div>\n" +
                "                                                            <div class=\"col-md-6\">\n" +
                "                                                                <div class=\"form-group\">\n" +
                "                                                                    <label for=\"projectinput3\">Remarks</label>\n" +
                "                                                                    <input type=\"text\" id=\"Remarks\"\n" +
                "                                                                           class=\"form-control\"\n" +
                "                                                                           name=\"courseRemarks[]\"\n" +
                "                                                                           data-toggle=\"tooltip\"\n" +
                "                                                                           data-trigger=\"hover\"\n" +
                "                                                                           data-placement=\"top\"\n" +
                "                                                                           data-title=\"Date Opened\">\n" +
                "                                                                </div>\n" +
                "                                                            </div>\n" +
                "                                                        </div>\n" +
                "                                                    </div>\n" +
                "\n" +
                "\n" +
                "\n" +
                "                                                <hr>\n" +
                "\n" +
                "                                            </div>\n";

            $("#appendable_qua").append(child)
        }
    </script>
@stop


<!-- Modal Create-->
  <div class="modal fade" id="create-modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <p>hii</p>
        </div>
      </div>
      
    </div>
  </div>
  <!--Close-->


  <!-- Close modal-->
  <div class="modal fade" id="close_modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <p>do you want to close this contact</p>
        </div>
      </div>
      
    </div>
  </div>
  <!--Close-->