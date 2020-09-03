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
                        <li class="breadcrumb-item"><a href="#">View Company</a>
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
                                <form action="{{route('post-update-company', encrypt($company->id))}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput1">Company Name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="userinput1"
                                                               class="form-control border-primary" name="company-name" value="{{$company->company_name}}" readonly>
                                                     
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput1">VAT</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="userinput1"
                                                               class="form-control border-primary" name="vat" value="{{$company->vat}}" readonly>
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput2">Address 1</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="userinput2"
                                                               class="form-control border-primary" name="address_1" value="{{$company->address_1}}" readonly>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput1">Address 2</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="userinput1"
                                                               class="form-control border-primary" name="address_2" value="{{$company->address_2}}" readonly>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                             <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control"
                                                           for="userinput2">Country</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="userinput1"
                                                               class="form-control border-primary" name="country_id" value="{{$company->comCountry->value}}" readonly>
                                                       {{--<select name="country_id" id="" class="form-control border-primary" readonly>
                                                            <option value="">Select</option>
                                                            @foreach($countries as $country)
                                                                <option value="{{$country->id}}" @if($country->id == $company->country_id)selected @endif>{{$country->value}}</option>
                                                            @endforeach
                                                        </select>--}}
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput2">State</label>
                                                    <div class="col-md-9">
                                                        <select name="state_id" id="state_id" class="form-control border-primary" readonly>
                                                            <option value="">Select</option>
                                                           
                                                        </select>
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput2">City</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="userinput2"
                                                               class="form-control border-primary" name="city" value="{{$company->city}}" readonly>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control"
                                                           for="userinput1">Zipcode</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="userinput1"
                                                               class="form-control border-primary" name="zipcode" value="{{$company->zip_code}}" readonly >
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput2">Email</label>
                                                    <div class="col-md-9">
                                                        <input type="email" id="userinput2"
                                                               class="form-control border-primary" name="email" value="{{$company->email}}" readonly>
                                                     
                                                    </div>
                                                </div>
                                            </div>                                        
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput2">Phone
                                                        number</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="userinput2"
                                                               class="form-control border-primary"
                                                               name="phone-number" value="{{$company->phone}}" readonly>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput2">Mobile
                                                        number</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="userinput2"
                                                               class="form-control border-primary"
                                                               name="mobile-number" value="{{$company->mobile}}" readonly>
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput1">Website URL</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="userinput1"
                                                               class="form-control border-primary" name="website-url" value="{{$company->website_url}}" readonly>
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                         @if($company->logo)
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput1">Logo</label>
                                                    
                                                    <img class="mt-2" src="{{asset('storage/app/company-logos/'.$company->logo)}}" alt="" width="150" height="150">
                                                

                                                    </div>
                                                </div>
                                            </div>
                                             @endif
                                        </div>
                                    
                                    <div class="form-actions right">
                                        <a href="{{route('company-index')}}" class="btn btn-primary mr-1">Back</a>
                                        
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


