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
        <!-- Alert animation start -->
        <section id="configuration">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body card-dashboard">
                                <form action="{{route('post-data-employee')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-body">
                                        {{--                                        <h4 class="form-section"><i class="la la-eye"></i> Employee Details</h4>--}}
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput1">Fist Name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="userinput1"
                                                               class="form-control border-primary" name="firstname">
                                                        @if($errors->has('firstname'))
                                                            <div class="error" style="color:red">First name must be required.</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput2">Last Name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="userinput2"
                                                               class="form-control border-primary" name="lastname">
                                                        @if($errors->has('lastname'))
                                                            <div class="error" style="color:red">Last name must be required.</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput1">Title</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="userinput1"
                                                               class="form-control border-primary" name="title">
                                                        @if($errors->has('title'))
                                                            <div class="error" style="color:red">Title must be required.</div>
                                                        @endif

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput2">Employee ID</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="userinput2"
                                                               class="form-control border-primary" name="employee-id">
                                                        @if($errors->has('employee-id'))
                                                            <div class="error" style="color:red">Emplyee ID must be required.</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control"
                                                           for="userinput1">Username</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="userinput1"
                                                               class="form-control border-primary" name="user-name">
                                                        @if($errors->has('user-name'))
                                                            <div class="error" style="color:red">User name must be Unique and required.</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput2">Email</label>
                                                    <div class="col-md-9">
                                                        <input type="email" id="userinput2"
                                                               class="form-control border-primary" name="email">
                                                        @if($errors->has('email'))
                                                            <div class="error" style="color:red">Email must be Unique and required.</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control"
                                                           for="userinput1">Company</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="userinput1"
                                                               class="form-control border-primary" name="company">
                                                        @if($errors->has('company'))
                                                            <div class="error" style="color:red">Company must be required.</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control"
                                                           for="userinput2">Location</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="userinput2"
                                                               class="form-control border-primary" name="location">
                                                        @if($errors->has('location'))
                                                            <div class="error" style="color:red">Location must be required.</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control"
                                                           for="userinput1">Department</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="userinput1"
                                                               class="form-control border-primary" name="department">
                                                        @if($errors->has('department'))
                                                            <div class="error" style="color:red">Department must be required.</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control"
                                                           for="userinput2">Designation</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="userinput2"
                                                               class="form-control border-primary" name="designation">
                                                        @if($errors->has('designation'))
                                                            <div class="error" style="color:red">Designation must be required.</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput1">Date of joining</label>
                                                    <div class="col-md-9">
                                                        <input type="date" id="userinput1"
                                                               class="form-control border-primary"
                                                               name="date-of-joining">
                                                        @if($errors->has('date-of-joining'))
                                                            <div class="error" style="color:red">Joining date must be required.</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput2">Date of
                                                        leaving</label>
                                                    <div class="col-md-9">
                                                        <input type="date" id="userinput2"
                                                               class="form-control border-primary"
                                                               name="date-of-leaving">
                                                        @if($errors->has('date-of-leaving'))
                                                            <div class="error" style="color:red">Leaving date must be required.</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput1">Role</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="userinput1"
                                                               class="form-control border-primary" name="role">
                                                        @if($errors->has('role'))
                                                            <div class="error" style="color:red">Role must be required.</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control"
                                                           for="userinput2">Gender</label>
                                                    <div class="col-md-9">
                                                        <select name="gender" id="" class="form-control border-primary">
                                                            @foreach($genders ?? '' as $gender)
                                                                <option value="{{$gender->id}}">{{$gender->value}}</option>
                                                            @endforeach
                                                        </select>
                                                        @if($errors->has('gender'))
                                                            <div class="error" style="color:red">Gender must be required.</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput1">Martial status</label>
                                                    <div class="col-md-9">
                                                        <select name="martial-status" id="" class="form-control border-primary">
                                                            @foreach($martialStatus as $martial)
                                                                <option value="{{$martial->id}}">{{$martial->value}}</option>
                                                            @endforeach
                                                        </select>
                                                        @if($errors->has('martial-status'))
                                                            <div class="error" style="color:red">Martial Status must be required.</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput2">Contact
                                                        number</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="userinput2"
                                                               class="form-control border-primary"
                                                               name="contact-number">
                                                        @if($errors->has('contact-number'))
                                                            <div class="error" style="color:red">Contact number must be required.</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control"
                                                           for="userinput1">Status</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="userinput1"
                                                               class="form-control border-primary" name="status">
                                                        @if($errors->has('status'))
                                                            <div class="error" style="color:red">Status must be required.</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput2">Office Shift</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="userinput2"
                                                               class="form-control border-primary" name="office-shift">
                                                        @if($errors->has('office-shift'))
                                                            <div class="error" style="color:red">Office shift must be required.</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput1">Date of
                                                        birth</label>
                                                    <div class="col-md-9">
                                                        <input type="date" id="userinput1"
                                                               class="form-control border-primary" name="dob">
                                                        @if($errors->has('dob'))
                                                            <div class="error" style="color:red">Date of birth must be required.</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control"
                                                           for="userinput2">Country</label>
                                                    <div class="col-md-9">
                                                        <select name="country" id="" class="form-control border-primary">
                                                            @foreach($countries as $country)
                                                                <option value="{{$country->id}}">{{$country->value}}</option>
                                                            @endforeach
                                                        </select>
                                                        @if($errors->has('country'))
                                                            <div class="error" style="color:red">Country must be required.</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput1">City</label>
                                                    <div class="col-md-9">
                                                        <select name="city" id="" class="form-control border-primary">
                                                            @foreach($cities as $city)
                                                                <option value="{{$city->id}}">{{$city->value}}</option>
                                                            @endforeach
                                                        </select>
                                                        @if($errors->has('city'))
                                                            <div class="error" style="color:red">City must be required.</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput2">State</label>
                                                    <div class="col-md-9">
                                                        <select name="state" id="" class="form-control border-primary">
                                                            @foreach($states as $state)
                                                            <option value="{{$state->id}}">{{$state->value}}</option>
                                                            @endforeach
                                                        </select>
                                                        @if($errors->has('state'))
                                                            <div class="error" style="color:red">State must be required.</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput1">Zip
                                                        code</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="userinput1"
                                                               class="form-control border-primary" name="zip-code">
                                                        @if($errors->has('zip-code'))
                                                            <div class="error" style="color:red">Zip code must be required.</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control"
                                                           for="userinput2">Address</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="userinput2"
                                                               class="form-control border-primary" name="address">
                                                        @if($errors->has('address'))
                                                            <div class="error" style="color:red">Address must be required.</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput1">Profile image</label>
                                                    <div class="col-md-9">
                                                        <input type="file" id="userinput1"
                                                               class="form-control border-primary" name="profile-image">
                                                        @if($errors->has('profile-image'))
                                                            <div class="error" style="color:red">Profile image must be required.</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions right">
                                        <a href="{{route('employee-index')}}" class="btn btn-primary mr-1">View All</a>
                                        <button type="submit" class="btn btn-success">
                                            <i class="la la-check-square-o"></i> Save
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Alert animation end -->
    </div>
    <!-- END: Content-->

    {{--    <fieldset class="form-group">--}}
    {{--        <button type="submit" class="btn btn-success">Submit</button>--}}
    {{--        <a href="{{route('city-index')}}" class="btn btn-primary">View All</a>--}}
    {{--    </fieldset>--}}
@stop


