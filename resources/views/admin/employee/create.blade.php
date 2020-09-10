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
                                <form action="{{route('post-data-employee')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="baseIcon-tab1" data-toggle="tab"
                                           aria-controls="tabIcon1" href="#tabIcon1" aria-expanded="true"><i
                                                class="ft-user"></i> Work Information</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="baseIcon-tab2" data-toggle="tab"
                                           aria-controls="tabIcon2" href="#tabIcon2" aria-expanded="false"><i
                                                class="ft-alert-octagon"></i> Personl Information</a>
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

                                                <div class="row bg-lighttt tab_portrait_sctn">
                                                    <div class="col-sm-6">
                                                        <div class="media d-flex mx-0 my-1 user-text mt-3">
                                                            <div class="align-left p-0 mr-2">
                                                                <a href="#" class="profile-image">
                                                                    <img  src="{{asset('app-assets/images/portrait/small/avatar-s-1.png')}}" class="rounded-squre img-border height-120 mt-1" alt="Card image">
                                                                </a>
                                                            </div>
                                                            <div class="media-body text-left text-dark">
                                                                <div class="row">
                                                                    <div class="col-md-3 pr-md-0">
                                                                        <div class="form-group">
                                                                            <label for="">* Title</label>
                                                                            <select id="" name="priority" class="form-control">
                                                                                <option value="low">Mr</option>
                                                                                <option value="medium"></option>
                                                                                <option value="high"></option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-9 px-1">
                                                                        <div class="form-group">
                                                                            <label for="">Name</label>
                                                                            <input type="text" id="" class="form-control" placeholder="John Smith" name="issuetitle">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-9 px-1">
                                                                        <div class="form-group">
                                                                            <label for="timesheetinput1">Work Email</label>
                                                                            <div class="position-relative has-icon-left">
                                                                                <input type="text" id="timesheetinput1" class="form-control" placeholder="joh.smith@wrappex.com" name="employeename">
                                                                                <div class="form-control-position">
                                                                                    <i class="ft-mail"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3 pl-md-0">
                                                                        <div class="form-group">
                                                                            <label for="timesheetinput2">&nbsp;</label>
                                                                            <div class="position-relative has-icon-left">
                                                                                <input style="font-size: 17px;
                                                                                padding: 0 0 0 37px;" type="text" id="timesheetinput2" class="form-control" placeholder="UKK" name="projectname">
                                                                                <div class="form-control-position">
                                                                                    <!-- <i class="la la-briefcase"></i> -->

                                                                                    <img style="width: 32px;
                                                                                    height: 32px;
                                                                                    margin: -9px 0 0;" src="../digitaadmin/app-assets/images/icons/flagimg.png">
                                                                                </div>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="row position_sctn">
                                                            <div class="col-sm-12">
                                                                <h4 class="form-section">Position</h4>
                                                            </div>
                                                        </div>
                                                        <div class="f-add mt-0">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="col-md-3" for="">Job Position</label>
                                                                        <div class="col-md-9">
                                                                        <input type="text" id="" class="form-control" placeholder="Senior Developer" name="">
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                           
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label  class="col-md-3" for="">Department</label>
                                                                        <div class="col-md-9">
                                                                        <input type="text" id="" class="form-control" placeholder="DevOps" name="">
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group extent-wrp row">
                                                                        <label class="col-md-3" for="">Manager</label>
                                                                        <div class="col-md-9">
                                                                        <input type="text" id="" class="form-control" placeholder="Chris Walker" name="">
                                                                        <i class="ft-external-link"></i>
                                                                    </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="col-md-3" for="">Employee ID</label>
                                                                        <div class="col-md-9">
                                                                        <input type="text" id="" class="form-control" placeholder="1254" name="">
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                    <div class="row mt-3">
                                                        <div class="col-md-6">
                                                            <form class="form form-horizontal">
                                                                <div class="form-body">
                    
                                                                   
                                                                    <h4 class="form-section">Contact Information</h4>
                                                                    <div class="form-group row">
                                                                        <label class="col-md-3 label-control" for="timesheetinput3">Date of joining</label>
                                                                        <div class="col-md-9">
                                                                            <div class="position-relative has-icon-left">
                                                                                <input type="date" id="timesheetinput3" class="form-control" name="date">
                                                                                <div class="form-control-position">
                                                                                    <i class="ft-message-square"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                    
                                                                    <div class="form-group row">
                                                                        <label class="col-md-3 label-control" for="projectinput6">Employment Type</label>
                                                                        <div class="col-md-9">
                                                                            <select id="projectinput6" name="interested" class="form-control">
                                                                                <option value="none" selected="" disabled="">Employee</option>
                                                                                <option value="design">design</option>
                                                                                <option value="development">development</option>
                                                                                <option value="illustration">illustration</option>
                                                                                <option value="branding">branding</option>
                                                                                <option value="video">video</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                    
                                                                    <div class="form-group row">
                                                                        <label class="col-md-3 label-control" for="projectinput7">Contract Type</label>
                                                                        <div class="col-md-9">
                                                                            <select id="projectinput7" name="budget" class="form-control">
                                                                                <option value="0" selected="" disabled="">Full - Time</option>
                                                                                <option value="less than 5000$">less than 5000$</option>
                                                                                <option value="5000$ - 10000$">5000$ - 10000$</option>
                                                                                <option value="10000$ - 20000$">10000$ - 20000$</option>
                                                                                <option value="more than 20000$">more than 20000$</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                    
                                                                    <div class="form-group row">
                                                                        <label class="col-md-3 label-control">Work Mobile</label>
                                                                        <div class="col-md-9">
                                                                            <div class="row">
                                                                                <div class="col-md-3 pr-md-0">
                                                                                    <div class="form-group mb-0">
                                                                                        
                                                                                        <div class="position-relative has-icon-right">
                                                                                            <input style="font-size: 17px;
                                                                                            padding: 0 0 0 5px;" type="text" id="timesheetinput2" class="form-control" placeholder="+44" name="projectname">
                                                                                            <div class="form-control-position">
                                                                                                <!-- <i class="la la-briefcase"></i> -->
            
                                                                                                <img style="width: 32px;
                                                                                                height: 32px;
                                                                                                margin: -9px 0 0;" src="../digitaadmin/app-assets/images/icons/flagimg.png">
                                                                                            </div>
                                                                                            
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-9 px-1">
                                                                                    <div class="form-group mb-0">
                                                                                       
                                                                                        <div class="position-relative has-icon-right">
                                                                                            <input type="text" id="timesheetinput1" class="form-control" placeholder="07479982438" name="employeename">
                                                                                            <div class="form-control-position">
                                                                                                <i class="ft-message-circle"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                    
                                                                    <div class="form-group row">
                                                                        <label class="col-md-3 label-control">Work Phone</label>
                                                                        <div class="col-md-9">
                                                                            <div class="row">
                                                                                <div class="col-md-3 pr-md-0">
                                                                                    <div class="form-group mb-0">
                                                                                        
                                                                                        <div class="position-relative has-icon-right">
                                                                                            <input style="font-size: 17px;
                                                                                            padding: 0 0 0 5px;" type="text" id="timesheetinput2" class="form-control" placeholder="+44" name="projectname">
                                                                                            <div class="form-control-position">
                                                                                                <!-- <i class="la la-briefcase"></i> -->
            
                                                                                                <img style="width: 32px;
                                                                                                height: 32px;
                                                                                                margin: -9px 0 0;" src="../digitaadmin/app-assets/images/icons/flagimg.png">
                                                                                            </div>
                                                                                            
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-9 px-1">
                                                                                    <div class="form-group mb-0">
                                                                                       
                                                                                        <div class="position-relative has-icon-right">
                                                                                            <input type="text" id="timesheetinput1" class="form-control" placeholder="07479982438" name="employeename">
                                                                                            <div class="form-control-position">
                                                                                                <i class="ft-message-circle"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                    
                                                                
                                                            </form>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <form class="form form-horizontal">
                                                                <div class="form-body">
                    
                                                                   
                                                                    <h4 class="form-section">Company Information</h4>
                                                                    <div class="form-group row">
                                                                        <label class="col-md-3 label-control" for="timesheetinput3">Company</label>
                                                                        <div class="col-md-9">
                                                                            <div class="form-group extent-wrp mb-0">                                                                               
                                                                                <input type="text" id="" class="form-control" placeholder="Chris Walker" name="">
                                                                                <i class="ft-external-link ccm"></i>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                    
                                                                    <div class="form-group row">
                                                                        <label class="col-md-3 label-control" for="timesheetinput3">Branch</label>
                                                                        <div class="col-md-9">
                                                                            <div class="form-group extent-wrp mb-0">                                                                               
                                                                                <input type="text" id="" class="form-control" placeholder="Main - Branch" name="">
                                                                                <i class="ccm"><small>PD</small></i>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-md-3 label-control" for="timesheetinput3">Work Location</label>
                                                                        <div class="col-md-9">
                                                                            <div class="form-group extent-wrp mb-0">                                                                               
                                                                                <input type="text" id="" class="form-control" placeholder="London" name="">
                                                                                <i class="ccm"><small>PD</small></i>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-md-3 label-control" for="timesheetinput3">Work Address</label>
                                                                        <div class="col-md-9">
                                                                            <div class="form-group extent-wrp mb-0">                                                                               
                                                                                <input type="text" id="" class="form-control" placeholder="28 Broad Street, London EC2M 1NH United Kingdom" name="">
                                                                                
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-md-3 label-control" for="timesheetinput3">Working Hours</label>
                                                                        <div class="col-md-9">
                                                                            <div class="form-group extent-wrp mb-0">                                                                               
                                                                                <input type="text" id="" class="form-control" placeholder="Standard 9 to 5 PM" name="">
                                                                                <i class="ft-external-link ccm"></i>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                    
                                                            </form>
                                                        </div>
                                                        
                                                    </div>

                                                    <div class="col-md-orizontal">
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
                                        <div class="row bg-lighttt tab_portrait_sctn">
                                                    <div class="col-sm-6">
                                                        <div class="media d-flex mx-0 my-1 user-text mt-3">
                                                            <div class="align-left p-0 mr-2">
                                                                <a href="#" class="profile-image">
                                                                    <img src="https://digita.vhostevents.com/app-assets/images/portrait/small/avatar-s-1.png" class="rounded-squre img-border height-120 mt-1" alt="Card image">
                                                                </a>
                                                            </div>
                                                            <div class="media-body text-left text-dark">
                                                                <div class="row">
                                                                    <div class="col-md-3 pr-md-0">
                                                                        <div class="form-group">
                                                                            <label for="">* Title</label>
                                                                            <select id="" name="priority" class="form-control">
                                                                                <option value="low">Mr</option>
                                                                                <option value="medium"></option>
                                                                                <option value="high"></option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-9 px-1">
                                                                        <div class="form-group">
                                                                            <label for="">Name</label>
                                                                            <input type="text" id="" class="form-control" placeholder="John Smith" name="issuetitle">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-9 px-1">
                                                                        <div class="form-group">
                                                                            <label for="timesheetinput1">Work Email</label>
                                                                            <div class="position-relative has-icon-left">
                                                                                <input type="text" id="timesheetinput1" class="form-control" placeholder="joh.smith@wrappex.com" name="employeename">
                                                                                <div class="form-control-position">
                                                                                    <i class="ft-mail"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3 pl-md-0">
                                                                        <div class="form-group">
                                                                            <label for="timesheetinput2">&nbsp;</label>
                                                                            <div class="position-relative has-icon-left">
                                                                                <input style="font-size: 17px;
                                                                                padding: 0 0 0 37px;" type="text" id="timesheetinput2" class="form-control" placeholder="UKK" name="projectname">
                                                                                <div class="form-control-position">
                                                                                    <!-- <i class="la la-briefcase"></i> -->

                                                                                    <img style="width: 32px;
                                                                                    height: 32px;
                                                                                    margin: -9px 0 0;" src="../digitaadmin/app-assets/images/icons/flagimg.png">
                                                                                </div>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="row position_sctn">
                                                            <div class="col-sm-12">
                                                                <h4 class="form-section">Position</h4>
                                                            </div>
                                                        </div>
                                                        <div class="f-add mt-0">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="col-md-3" for="">Job Position</label>
                                                                        <div class="col-md-9">
                                                                        <input type="text" id="" class="form-control" placeholder="Senior Developer" name="">
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                           
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="col-md-3" for="">Department</label>
                                                                        <div class="col-md-9">
                                                                        <input type="text" id="" class="form-control" placeholder="DevOps" name="">
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group extent-wrp row">
                                                                        <label class="col-md-3" for="">Manager</label>
                                                                        <div class="col-md-9">
                                                                        <input type="text" id="" class="form-control" placeholder="Chris Walker" name="">
                                                                        <i class="ft-external-link"></i>
                                                                    </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="col-md-3" for="">Employee ID</label>
                                                                        <div class="col-md-9">
                                                                        <input type="text" id="" class="form-control" placeholder="1254" name="">
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                    <div class="row mt-3">
                                                        <div class="col-md-6">
                                                            
                                                                <div class="form-body">
                    
                                                                   
                                                                    <h4 class="form-section">Contact Information</h4>
                                                                    <div class="form-group row">
                                                                        <label class="col-md-3 label-control" for="timesheetinput3">Date of joining</label>
                                                                        <div class="col-md-9">
                                                                            <div class="position-relative has-icon-left">
                                                                                <input type="date" id="timesheetinput3" class="form-control" name="date">
                                                                                <div class="form-control-position">
                                                                                    <i class="ft-message-square"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                    
                                                                    <div class="form-group row">
                                                                        <label class="col-md-3 label-control" for="projectinput6">Employment Type</label>
                                                                        <div class="col-md-9">
                                                                            <select id="projectinput6" name="interested" class="form-control">
                                                                                <option value="none" selected="" disabled="">Employee</option>
                                                                                <option value="design">design</option>
                                                                                <option value="development">development</option>
                                                                                <option value="illustration">illustration</option>
                                                                                <option value="branding">branding</option>
                                                                                <option value="video">video</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                    
                                                                    <div class="form-group row">
                                                                        <label class="col-md-3 label-control" for="projectinput7">Contract Type</label>
                                                                        <div class="col-md-9">
                                                                            <select id="projectinput7" name="budget" class="form-control">
                                                                                <option value="0" selected="" disabled="">Full - Time</option>
                                                                                <option value="less than 5000$">less than 5000$</option>
                                                                                <option value="5000$ - 10000$">5000$ - 10000$</option>
                                                                                <option value="10000$ - 20000$">10000$ - 20000$</option>
                                                                                <option value="more than 20000$">more than 20000$</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                    
                                                                    <div class="form-group row">
                                                                        <label class="col-md-3 label-control">Work Mobile</label>
                                                                        <div class="col-md-9">
                                                                            <div class="row">
                                                                                <div class="col-md-3 pr-md-0">
                                                                                    <div class="form-group mb-0">
                                                                                        
                                                                                        <div class="position-relative has-icon-right">
                                                                                            <input style="font-size: 17px;
                                                                                            padding: 0 0 0 5px;" type="text" id="timesheetinput2" class="form-control" placeholder="+44" name="projectname">
                                                                                            <div class="form-control-position">
                                                                                                <!-- <i class="la la-briefcase"></i> -->
            
                                                                                                <img style="width: 32px;
                                                                                                height: 32px;
                                                                                                margin: -9px 0 0;" src="../digitaadmin/app-assets/images/icons/flagimg.png">
                                                                                            </div>
                                                                                            
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-9 px-1">
                                                                                    <div class="form-group mb-0">
                                                                                       
                                                                                        <div class="position-relative has-icon-right">
                                                                                            <input type="text" id="timesheetinput1" class="form-control" placeholder="07479982438" name="employeename">
                                                                                            <div class="form-control-position">
                                                                                                <i class="ft-message-circle"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                    
                                                                    <div class="form-group row">
                                                                        <label class="col-md-3 label-control">Work Phone</label>
                                                                        <div class="col-md-9">
                                                                            <div class="row">
                                                                                <div class="col-md-3 pr-md-0">
                                                                                    <div class="form-group mb-0">
                                                                                        
                                                                                        <div class="position-relative has-icon-right">
                                                                                            <input style="font-size: 17px;
                                                                                            padding: 0 0 0 5px;" type="text" id="timesheetinput2" class="form-control" placeholder="+44" name="projectname">
                                                                                            <div class="form-control-position">
                                                                                                <!-- <i class="la la-briefcase"></i> -->
            
                                                                                                <img style="width: 32px;
                                                                                                height: 32px;
                                                                                                margin: -9px 0 0;" src="../digitaadmin/app-assets/images/icons/flagimg.png">
                                                                                            </div>
                                                                                            
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-9 px-1">
                                                                                    <div class="form-group mb-0">
                                                                                       
                                                                                        <div class="position-relative has-icon-right">
                                                                                            <input type="text" id="timesheetinput1" class="form-control" placeholder="07479982438" name="employeename">
                                                                                            <div class="form-control-position">
                                                                                                <i class="ft-message-circle"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                    
                                                                
                                                            
                                                        </div>

                                                        <div class="col-md-6">
                                                            <form class="form form-horizontal">
                                                                <div class="form-body">
                    
                                                                   
                                                                    <h4 class="form-section">Company Information</h4>
                                                                    <div class="form-group row">
                                                                        <label class="col-md-3 label-control" for="timesheetinput3">Company</label>
                                                                        <div class="col-md-9">
                                                                            <div class="form-group extent-wrp mb-0">                                                                               
                                                                                <input type="text" id="" class="form-control" placeholder="Chris Walker" name="">
                                                                                <i class="ft-external-link ccm"></i>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                    
                                                                    <div class="form-group row">
                                                                        <label class="col-md-3 label-control" for="timesheetinput3">Branch</label>
                                                                        <div class="col-md-9">
                                                                            <div class="form-group extent-wrp mb-0">                                                                               
                                                                                <input type="text" id="" class="form-control" placeholder="Main - Branch" name="">
                                                                                <i class="ccm"><small>PD</small></i>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-md-3 label-control" for="timesheetinput3">Work Location</label>
                                                                        <div class="col-md-9">
                                                                            <div class="form-group extent-wrp mb-0">                                                                               
                                                                                <input type="text" id="" class="form-control" placeholder="London" name="">
                                                                                <i class="ccm"><small>PD</small></i>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-md-3 label-control" for="timesheetinput3">Work Address</label>
                                                                        <div class="col-md-9">
                                                                            <div class="form-group extent-wrp mb-0">                                                                               
                                                                                <input type="text" id="" class="form-control" placeholder="28 Broad Street, London EC2M 1NH United Kingdom" name="">
                                                                                
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-md-3 label-control" for="timesheetinput3">Working Hours</label>
                                                                        <div class="col-md-9">
                                                                            <div class="form-group extent-wrp mb-0">                                                                               
                                                                                <input type="text" id="" class="form-control" placeholder="Standard 9 to 5 PM" name="">
                                                                                <i class="ft-external-link ccm"></i>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                    
                                                            </form>
                                                        </div>
                                                        
                                                    </div>

                                                    <div class="col-md-orizontal">
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
                                               <div class="row bg-lighttt tab_portrait_sctn">
                                                    <div class="col-sm-6">
                                                        <div class="media d-flex mx-0 my-1 user-text mt-3">
                                                            <div class="align-left p-0 mr-2">
                                                                <a href="#" class="profile-image">
                                                                    <img src="http://digita.vhostevents.com/app-assets/images/portrait/small/avatar-s-1.png" class="rounded-squre img-border height-120 mt-1" alt="Card image">
                                                                </a>
                                                            </div>
                                                            <div class="media-body text-left text-dark">
                                                                <div class="row">
                                                                    <div class="col-md-3 pr-md-0">
                                                                        <div class="form-group">
                                                                            <label for="">* Title</label>
                                                                            <select id="" name="priority" class="form-control">
                                                                                <option value="low">Mr</option>
                                                                                <option value="medium"></option>
                                                                                <option value="high"></option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-9 px-1">
                                                                        <div class="form-group">
                                                                            <label for="">Name</label>
                                                                            <input type="text" id="" class="form-control" placeholder="John Smith" name="issuetitle" >
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-9 px-1">
                                                                        <div class="form-group">
                                                                            <label for="timesheetinput1">Work Email</label>
                                                                            <div class="position-relative has-icon-left">
                                                                                <input type="text" id="timesheetinput1" class="form-control" placeholder="joh.smith@wrappex.com" name="employeename">
                                                                                <div class="form-control-position">
                                                                                    <i class="ft-mail"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3 pl-md-0">
                                                                        <div class="form-group">
                                                                            <label for="timesheetinput2">&nbsp;</label>
                                                                            <div class="position-relative has-icon-left">
                                                                                <input style="font-size: 17px;
                                                                                padding: 0 0 0 37px;" type="text" id="timesheetinput2" class="form-control" placeholder="UKK" name="projectname">
                                                                                <div class="form-control-position">
                                                                                    <!-- <i class="la la-briefcase"></i> -->

                                                                                    <img style="width: 32px;
                                                                                    height: 32px;
                                                                                    margin: -9px 0 0;" src="../digitaadmin/app-assets/images/icons/flagimg.png">
                                                                                </div>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="row position_sctn">
                                                            <div class="col-sm-12">
                                                                <h4 class="form-section">Position</h4>
                                                            </div>
                                                        </div>
                                                        <div class="f-add mt-0">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="col-md-3" for="">Job Position</label>
                                                                        <div class="col-md-9">
                                                                        <input type="text" id="" class="form-control" placeholder="Senior Developer" name="">
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                           
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="col-md-3" for="">Department</label>
                                                                        <div class="col-md-9">
                                                                        <input type="text" id="" class="form-control" placeholder="DevOps" name="">
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group extent-wrp row">
                                                                        <label class="col-md-3" for="">Manager</label>
                                                                        <div class="col-md-9">
                                                                        <input type="text" id="" class="form-control" placeholder="Chris Walker" name="">
                                                                        <i class="ft-external-link"></i>
                                                                    </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="col-md-3" for="">Employee ID</label>
                                                                        <div class="col-md-9">
                                                                        <input type="text" id="" class="form-control" placeholder="1254" name="">
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                    <div class="row mt-3c payroll">
                                                        <div class="col-md-6">
                                                            
                                                                <div class="form-body">
                                                                                
                                                                <h4 class="form-section">Payroll</h4>
                                                                          
                    
                                                                    <div class="form-group row">
                                                                        <label class="col-md-3 label-control">Timesheet Cost</label>
                                                                        <div class="col-md-9">
                                                                            <div class="row">
                                                                                <div class="col-md-4 pr-md-0">
                                                                                    <div class="form-group mb-0">
                                                                                        
                                                                                        <div class="position-relative has-icon-right">
                                                                                            <input style="font-size: 17px;
                                                                                            padding: 0 0 0 5px;" type="text" id="timesheetinput2" class="form-control" placeholder="GBP" name="projectname">
                                                                                            <div class="form-control-position">
                                                                                                <!-- <i class="la la-briefcase"></i> -->
            
                                                                                                <img style="width: 32px;
                                                                                                height: 32px;
                                                                                                margin: -9px 0 0;" src="../digitaadmin/app-assets/images/icons/flagimg.png">
                                                                                            </div>
                                                                                            
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-md-4">
                                                                                    <div class="form-group paroll_mb mb-0">
                                                                                       <input  class="form-control" type="number" name="" placeholder="15.00">
                                                                                      
                                                                                    </div>
                                                                                </div>

                                                                                 <div class="col-md-4">
                                                                                    <div class="form-group paroll_hrs mb-0">
                                                                                      <select id="hours" name="" class="form-control">
                                                                                <option >hour</option>
                                                                                <option >hour</option>
                                                                        
                                                                            </select>
                                                                                    </div>
                                                                                </div>


                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="form-group row">
                                                                        <label class="col-md-3 label-control">Gross Annual Salary</label>
                                                                        <div class="col-md-9">
                                                                            <div class="row">
                                                                                <div class="col-md-4 pr-md-0">
                                                                                    <div class="form-group mb-0">
                                                                                        
                                                                                        <div class="position-relative has-icon-right">
                                                                                            <input style="font-size: 17px;
                                                                                            padding: 0 0 0 5px;" type="text" id="timesheetinput2" class="form-control" placeholder="GBP" name="projectname">
                                                                                            <div class="form-control-position">
                                                                                                <!-- <i class="la la-briefcase"></i> -->
            
                                                                                                <img style="width: 32px;
                                                                                                height: 32px;
                                                                                                margin: -9px 0 0;" src="../digitaadmin/app-assets/images/icons/flagimg.png">
                                                                                            </div>
                                                                                            
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-md-4">
                                                                                    <div class="form-group   paroll_mb mb-0">
                                                                                       <input  class="form-control" type="number" name="" placeholder="35,000.00">
                                                                                      
                                                                                    </div>
                                                                                </div>

                                                                                 <div class="col-md-4">
                                                                                    <div class="form-group  paroll_hrs mb-0">
                                                                                      <select id="year" name="" class="form-control">
                                                                                <option >Year</option>
                                                                                <option >Year</option>
                                                                        
                                                                            </select>
                                                                                    </div>
                                                                                </div>


                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                     <div class="form-group row">
                                                                         <label class="col-md-3">Allowance</label>
                                                                         <div class="col-md-9">
                                                                             <div class="grop_input">
                                                                                 <input  class="form-control"  type="text" name="">
                                                                             </div>
                                                                         </div>
                                                                     </div>
                                                                        <div class="form-group row">
                                                                         <label class="col-md-3">Leaves</label>
                                                                         <div class="col-md-9">
                                                                             <div class="grop_input">
                                                                                 <input class="form-control"  type="text" name="">
                                                                             </div>
                                                                         </div>
                                                                     </div>

   <div class="form-group row">
                                                                         <label class="col-md-3">Upload Contracts</label>
                                                                         <div class="col-md-9">
                                                                             <div class="grop_input">
                                                                                 <input class="form-control"  type="text" name="">
                                                                             </div>
                                                                         </div>
                                                                     </div>



                                                                </div>
                    
                                                                
                                                            
                                                        </div>

                                                        <div class="col-md-6">
                                                            <form class="form form-horizontal">
                                                                <div class="form-body">
                    
                                                                   
                                                                    <h4 class="form-section">Status</h4>
                                                                 
                                                                    <div class="form-group row">
                                                                        <label class="col-md-3 label-control" for="timesheetinput3">Related User</label>
                                                                        <div class="col-md-9">
                                                                            <div class="form-group extent-wrp mb-0">                                                                               
                                                                                <input type="text" id="" class="form-control" placeholder="John Smith" name="">
                                                                                <i class="ccm"><small>PD</small></i>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                  
                                                                    <div class="form-group row">
                                                                        <label class="col-md-3 label-control" for="timesheetinput3">User Role</label>
                                                                        <div class="col-md-9">
                                                                            <div class="form-group extent-wrp mb-0">                                                                               
                                                                                <input type="text" id="" class="form-control" placeholder="johnsmith@gmail.com" name="">
                                                                                
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                        <div class="form-group row">
                                                                        <label class="col-md-3 label-control" for="timesheetinput3">Bade ID</label>
                                                                        <div class="col-md-9">
                                                                            <div class="form-group extent-wrp mb-0">                                                                               
                                                                                <input type="text" id="" class="form-control" placeholder="johnsmith@gmail.com" name="">
                                                                                
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="form-group row">
                                                                        <label class="col-md-3 label-control" for="projectinput7">Attendance</label>
                                                                        <div class="col-md-9">
                                                                            <select id="attendance" name="" class="form-control">
                                                                                <option value="0" selected="" disabled="">Manaul</option>
                                                                                <option value="Auto">Auto</option>
                                                                                <option value="Approvel">Approvel</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                    
                                                            </form>
                                                        </div>
                                                        
                                                    </div>

                                                    <div class="col-md-orizontal">
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


                                    <div class="tab-pane" id="tabIcon4" aria-labelledby="baseIcon-tab4">
                                       
                                               <div class="row bg-lighttt tab_portrait_sctn">
                                                    <div class="col-sm-6">
                                                        <div class="media d-flex mx-0 my-1 user-text mt-3">
                                                            <div class="align-left p-0 mr-2">
                                                                <a href="#" class="profile-image">
                                                                    <img src="http://digita.vhostevents.com/app-assets/images/portrait/small/avatar-s-1.png" class="rounded-squre img-border height-120 mt-1" alt="Card image">
                                                                </a>
                                                            </div>
                                                            <div class="media-body text-left text-dark">
                                                                <div class="row">
                                                                    <div class="col-md-3 pr-md-0">
                                                                        <div class="form-group">
                                                                            <label for="">* Title</label>
                                                                            <select id="" name="priority" class="form-control">
                                                                                <option value="low">Mr</option>
                                                                                <option value="medium"></option>
                                                                                <option value="high"></option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-9 px-1">
                                                                        <div class="form-group">
                                                                            <label for="">Name</label>
                                                                            <input type="text" id="" class="form-control" placeholder="John Smith" name="issuetitle">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-9 px-1">
                                                                        <div class="form-group">
                                                                            <label for="timesheetinput1">Work Email</label>
                                                                            <div class="position-relative has-icon-left">
                                                                                <input type="text" id="timesheetinput1" class="form-control" placeholder="joh.smith@wrappex.com" name="employeename">
                                                                                <div class="form-control-position">
                                                                                    <i class="ft-mail"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3 pl-md-0">
                                                                        <div class="form-group">
                                                                            <label for="timesheetinput2">&nbsp;</label>
                                                                            <div class="position-relative has-icon-left">
                                                                                <input style="font-size: 17px;
                                                                                padding: 0 0 0 37px;" type="text" id="timesheetinput2" class="form-control" placeholder="UKK" name="projectname">
                                                                                <div class="form-control-position">
                                                                                    <!-- <i class="la la-briefcase"></i> -->

                                                                                    <img style="width: 32px;
                                                                                    height: 32px;
                                                                                    margin: -9px 0 0;" src="../digitaadmin/app-assets/images/icons/flagimg.png">
                                                                                </div>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="row position_sctn">
                                                            <div class="col-sm-12">
                                                                <h4 class="form-section">Position</h4>
                                                            </div>
                                                        </div>
                                                        <div class="f-add mt-0">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="col-md-3" for="">Job Position</label>
                                                                        <div class="col-md-9">
                                                                        <input type="text" id="" class="form-control" placeholder="Senior Developer" name="">
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                           
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="col-md-3" for="">Department</label>
                                                                        <div class="col-md-9">
                                                                        <input type="text" id="" class="form-control" placeholder="DevOps" name="">
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group extent-wrp row">
                                                                        <label class="col-md-3" for="">Manager</label>
                                                                        <div class="col-md-9">
                                                                        <input type="text" id="" class="form-control" placeholder="Chris Walker" name="">
                                                                        <i class="ft-external-link"></i>
                                                                    </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="col-md-3" for="">Employee ID</label>
                                                                        <div class="col-md-9">
                                                                        <input type="text" id="" class="form-control" placeholder="1254" name="">
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                    <div class="row mt-3c payroll">
                                                        <div class="col-md-6">
                                                            
                                                                <div class="form-body">
                                                                                
                                                                <h4 class="form-section">Professional Information</h4>
                                                                  
                                                                     <div class="form-group row">
                                                                         <label class="col-md-3">Last Working Comany</label>
                                                                         <div class="col-md-9">
                                                                             <div class="grop_input">
                                                                                 <input class="form-control" type="text" name="">
                                                                             </div>
                                                                         </div>
                                                                     </div>
                                                                        <div class="form-group row">
                                                                         <label class="col-md-3">Last Working Jab Position</label>
                                                                         <div class="col-md-9">
                                                                             <div class="grop_input">
                                                                                 <input class="form-control" type="text" name="">
                                                                             </div>
                                                                         </div>
                                                                     </div>

                                                                  <div class="form-group row">
                                                                         <label class="col-md-3">Leaving Date</label>
                                                                         <div class="col-md-9">
                                                                             <div class="grop_input">
                                                                                 <input class="form-control" type="text" name="">
                                                                             </div>
                                                                         </div>
                                                                     </div>

                                                                         <div class="form-group row">
                                                                         <label class="col-md-3">Remarks</label>
                                                                         <div class="col-md-9">
                                                                             <div class="grop_input">
                                                                                 <input class="form-control" type="text" name="">
                                                                             </div>
                                                                         </div>
                                                                     </div>
                                                                         <div class="form-group row">
                                                                         <label class="col-md-3">Upload Contracts</label>
                                                                         <div class="col-md-9">
                                                                             <div class="grop_input">
                                                                                 <input class="form-control" type="text" name="">
                                                                             </div>
                                                                         </div>
                                                                     </div>



                                                                </div>
                    
                                                                
                                                            
                                                        </div>

                                                        <div class="col-md-6">
                                                            <form class="form form-horizontal">
                                                                <div class="form-body">
                    
                                                                   
                                                                    <h4 class="form-section">Qualification</h4>
                                                                 
                                                                    <div class="form-group row">
                                                                         <label class="col-md-3">Qualification</label>
                                                                         <div class="col-md-9">
                                                                             <div class="grop_input">
                                                                                 <input class="form-control" type="text" name="">
                                                                             </div>
                                                                         </div>
                                                                     </div>
                                                                  <div class="form-group row">
                                                                         <label class="col-md-3">Education Level</label>
                                                                         <div class="col-md-9">
                                                                             <div class="grop_input">
                                                                                 <input class="form-control" type="text" name="">
                                                                             </div>
                                                                         </div>
                                                                     </div>
                                                                    <div class="form-group row">
                                                                         <label class="col-md-3">Date of Certification</label>
                                                                         <div class="col-md-9">
                                                                             <div class="grop_input">
                                                                                 <input class="form-control" type="text" name="">
                                                                             </div>
                                                                         </div>
                                                                     </div>
                                                                    
                                                                    <div class="form-group row">
                                                                        <label class="col-md-3 label-control" for="projectinput7">Remarks</label>
                                                                        <div class="col-md-9">
                                                                            <select id="Remarks" name="" class="form-control">
                                                                                <option value="0" selected="" disabled="">Manaul</option>
                                                                                <option value="Auto">Auto</option>
                                                                                <option value="Approvel">Approvel</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                    
                                                            </form>
                                                        </div>
                                                        
                                                    </div>

                                                    <div class="col-md-orizontal">
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




                                    <div class="tab-pane" id="tabIcon5" aria-labelledby="baseIcon-tab5">
                                        <div class="row" id="appendable_qua">
                                            <div class="col-md-12" id="custom-data-qua">

                                                <div class="form-body">

                                                    <div class="form-group">
                                                        <label for="projectinput1">Schoole / University</label>
                                                        <input type="text" id="SchooleUniversity" required
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
                                                                <input type="text" id="Education Level"
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
                                                                <input type="date" id="Start Date" required
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
                                                                <input type="date" id="End Date" required
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
                                                                <input type="date" id="End Date" required
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
                                                                <input type="text" id="Remarks"
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
                                        <div class="form-actions">

                                            <button   onclick="qualification(this)" class="btn btn-primary">
                                                <i class="ft-plus"></i>
                                            </button>
                                        </div>
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


