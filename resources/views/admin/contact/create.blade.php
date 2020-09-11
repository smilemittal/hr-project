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
                                    <div class="card-header">
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
                                                        <a data-action="reload">
                                                            <i class="ft-edit"></i>
                                                        </a>
                                                    </li>                                          
                                                </ul>
                                            </div>                                    
                                    </div>
                                
                                <!--newcode-->


                                <div class="card-content">
                                  <div class="card-body pt-0">
                                    <div class="tab-content px-1 pt-1">
                                      <div role="tabpanel" class="tab-pane active" id="tabIcon1"
                                        aria-expanded="true" aria-labelledby="baseIcon-tab1">
                                        <div class="row bg-lighttt">
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
                                              <div class="row col-sm-12">
                                                <div class="col-sm-7">
                                                  <div class="media d-flex mx-0 my-1 user-text mt-0">
                                                    <div class="align-left p-0 mr-2">
                                                      <a href="#" class="profile-image">
                                                      <img src="app-assets/images/portrait/small/avatar-s-1.png"
                                                        class="rounded-squre img-border height-120 mt-0"
                                                        alt="Card image">
                                                      </a>
                                                    </div>
                                                    <div class="media-body text-left text-dark">
                                                      <div class="row">
                                                        <div class="col-md-3 pr-md-0">
                                                          <div class="form-group">
                                                            <select id="" name="priority" class="form-control">
                                                              <option value="low">Mr</option>
                                                              <option value="medium"></option>
                                                              <option value="high"></option>
                                                            </select>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                          <div class="form-group">                                                                            
                                                            <input type="text" id="" class="form-control" placeholder="John Smith" name="issuetitle">
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-md-6">
                                                          <div class="form-group">
                                                            <label for="timesheetinput1">Job POsition</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="timesheetinput1" class="form-control" placeholder="Designer" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                          <div class="form-group">
                                                            <label for="timesheetinput1">Business / Refine</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="timesheetinput1" class="form-control" placeholder="" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-md-12">
                                                          <div class="form-group">
                                                            <label for="timesheetinput1">Tages</label>
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
                                            <div class="tab-pane" id="tab2" aria-labelledby="base-tab2">
                                              <div class="row col-sm-12">
                                                <div class="col-sm-7">
                                                  <div class="media d-flex mx-0 my-1 user-text mt-0">
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
                                                            <label for="timesheetinput1">Tages</label>
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
                                                      <i class="ft-external-link ccm"></i>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="row cxrmcheckbox pb-2">
                                                  <div class="col-md-6 col-sm-6">
                                                    <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="customCheck3" checked>
                                                      <label class="custom-control-label" for="customCheck3">Beneficiary</label>
                                                      <i class="ft-external-link ccm"></i>
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
                                                      <i class="ft-external-link ccm"></i>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6 col-sm-6">
                                                    <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="customCheck6" checked>
                                                      <label class="custom-control-label" for="customCheck6">User</label>
                                                      <i class="ft-external-link ccm"></i>
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
                                      </div>
                                      <div class="tab-pane" id="tabIcon2" aria-labelledby="baseIcon-tab2">
                                        <div class="row bg-lighttt">
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
                                              <div class="row col-sm-12">
                                                <div class="col-sm-7">
                                                  <div class="media d-flex mx-0 my-1 user-text mt-0">
                                                    <div class="align-left p-0 mr-2">
                                                      <a href="#" class="profile-image">
                                                      <img src="app-assets/images/portrait/small/avatar-s-1.png"
                                                        class="rounded-squre img-border height-120 mt-0"
                                                        alt="Card image">
                                                      </a>
                                                    </div>
                                                    <div class="media-body text-left text-dark">
                                                      <div class="row">
                                                        <div class="col-md-3 pr-md-0">
                                                          <div class="form-group">
                                                            <select id="" name="priority" class="form-control">
                                                              <option value="low">Mr</option>
                                                              <option value="medium"></option>
                                                              <option value="high"></option>
                                                            </select>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                          <div class="form-group">                                                                            
                                                            <input type="text" id="" class="form-control" placeholder="John Smith" name="issuetitle">
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-md-6">
                                                          <div class="form-group">
                                                            <label for="timesheetinput1">Job POsition</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="timesheetinput1" class="form-control" placeholder="Designer" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                          <div class="form-group">
                                                            <label for="timesheetinput1">Business / Refine</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="timesheetinput1" class="form-control" placeholder="" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-md-12">
                                                          <div class="form-group">
                                                            <label for="timesheetinput1">Tages</label>
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
                                            <div class="tab-pane" id="tab2" aria-labelledby="base-tab2">
                                              <div class="row col-sm-12">
                                                <div class="col-sm-7">
                                                  <div class="media d-flex mx-0 my-1 user-text mt-0">
                                                    <div class="align-left p-0 mr-2">
                                                      <a href="#" class="profile-image">
                                                      <img src="app-assets/images/portrait/small/avatar-s-1.png"
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
                                                            <label for="timesheetinput1">Tages</label>
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
                                                      <i class="ft-external-link ccm"></i>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="row cxrmcheckbox pb-2">
                                                  <div class="col-md-6 col-sm-6">
                                                    <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="customCheck3" checked>
                                                      <label class="custom-control-label" for="customCheck3">Beneficiary</label>
                                                      <i class="ft-external-link ccm"></i>
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
                                                      <i class="ft-external-link ccm"></i>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6 col-sm-6">
                                                    <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="customCheck6" checked>
                                                      <label class="custom-control-label" for="customCheck6">User</label>
                                                      <i class="ft-external-link ccm"></i>
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
                                      </div>
                                      <div class="tab-pane" id="tabIcon3" aria-labelledby="baseIcon-tab3">
                                        <div class="row bg-lighttt">
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
                                              <div class="row col-sm-12">
                                                <div class="col-sm-7">
                                                  <div class="media d-flex mx-0 my-1 user-text mt-0">
                                                    <div class="align-left p-0 mr-2">
                                                      <a href="#" class="profile-image">
                                                      <img src="app-assets/images/portrait/small/avatar-s-1.png"
                                                        class="rounded-squre img-border height-120 mt-0"
                                                        alt="Card image">
                                                      </a>
                                                    </div>
                                                    <div class="media-body text-left text-dark">
                                                      <div class="row">
                                                        <div class="col-md-3 pr-md-0">
                                                          <div class="form-group">
                                                            <select id="" name="priority" class="form-control">
                                                              <option value="low">Mr</option>
                                                              <option value="medium"></option>
                                                              <option value="high"></option>
                                                            </select>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                          <div class="form-group">                                                                            
                                                            <input type="text" id="" class="form-control" placeholder="John Smith" name="issuetitle">
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-md-6">
                                                          <div class="form-group">
                                                            <label for="timesheetinput1">Job POsition</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="timesheetinput1" class="form-control" placeholder="Designer" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                          <div class="form-group">
                                                            <label for="timesheetinput1">Business / Refine</label>
                                                            <div class="position-relative">
                                                              <input type="text" id="timesheetinput1" class="form-control" placeholder="" name="employeename">
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-md-12">
                                                          <div class="form-group">
                                                            <label for="timesheetinput1">Tages</label>
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
                                            <div class="tab-pane" id="tab2" aria-labelledby="base-tab2">
                                              <div class="row col-sm-12">
                                                <div class="col-sm-7">
                                                  <div class="media d-flex mx-0 my-1 user-text mt-0">
                                                    <div class="align-left p-0 mr-2">
                                                      <a href="#" class="profile-image">
                                                      <img src="app-assets/images/portrait/small/avatar-s-1.png"
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
                                                            <label for="timesheetinput1">Tages</label>
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


