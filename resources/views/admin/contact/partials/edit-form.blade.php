<form action="{{route('update.contact')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" id="record-id" name="id" value="{{isset($contact)?$contact->id:old('id')}}">
    <div class="card-header p-0">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" id="cxrm-tab1" data-toggle="tab"
                   aria-controls="{{ $is_parent ? 'parent' : 'child' }}_info-tab" href="#{{ $is_parent ? 'parent' : 'child' }}_info-tab" aria-expanded="true">Information </a>
            </li>

                <li class="nav-item" id="contact-hyperlink" style="{{$company?"display: block" : "display: none"}}">
                    <a class="nav-link" id="cxrm-tab2" data-toggle="tab"
                       aria-controls="{{ $is_parent ? 'parent' : 'child' }}_contact-tab" href="#{{ $is_parent ? 'parent' : 'child' }}_contact-tab" aria-expanded="false">
                        Contacts</a>
                </li>

            <li class="nav-item">
                <a class="nav-link" id="cxrm-tab3" data-toggle="tab"
                   aria-controls="{{ $is_parent ? 'parent' : 'child' }}_accounting-tab" href="#{{ $is_parent ? 'parent' : 'child' }}_accounting-tab" aria-expanded="false">
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
            </ul>
        </div>
    </div>
    <!--newcode-->
    <div class="card-content">
        <div class="card-body px-0">
            <div class="tab-content p-0">
                <div class="bg-lighttt">
                    @if($is_parent)
                        <div class="row p-2">
                            <div class="form-check mr-1" id="individualChecked"
                                 onclick="individualRadio(this.id)">
                                <input class="form-check-input" type="radio"
                                       name="contact-type" id="individual"
                                       value="Individual" checked>
                                <label class="form-check-label" for="individual" {{$individual?"checked" : ""}}>
                                    Individual
                                </label>
                            </div>
                            <div class="form-check" id="companyChecked"
                                 onclick="companyRadio(this.id)">
                                <input class="form-check-input " type="radio"
                                       name="contact-type" id="company"
                                       value="Company" {{$company?"checked" : ""}}>
                                <label class="form-check-label" for="company">
                                    Company
                                </label>
                            </div>
                            <div class="col-md-12">
                                @if($errors->has('contact-type'))
                                    <div class="error" style="color:red">Contact Type must be required.</div>
                                @endif
                                <div class="error" style="display: none;color: red"
                                     id="error-for-individual-company">1 type must be
                                    select.
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-7">
                            <div class="media d-flex mx-0 user-text mt-0">
                                <div class="align-left p-0 mr-2">
                                    <a href="#" class="profile-image">
                                        <img id="targetImage"
                                             src="{{asset('storage/app/public/contact-profile/' . $contact->photo)}}"
                                             width="120"
                                             height="120"
                                             class="rounded-squre img-border height-120"
                                             alt="Card image"> <br>
                                        <input class="mt-1"
                                               style="margin-left:10px; width: 90px;"
                                               type="file"
                                               onchange="previewImage(this);"
                                               name="photo">
                                        @if($errors->has('photo'))
                                            <div class="error" style="color:red">Picture must be required.</div>
                                        @endif
                                    </a>
                                </div>
                                <div class="media-body text-left text-dark">
                                    @if($individual)
                                    <div class="row_bussiness-md"
                                         id="individual-basic-info"
                                         style="display: block">
                                        <div class="row" style="{{$company?"display: none" : "display: block"}}">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <select id="" name="title" class="form-control">
                                                                <option selected disabled></option>
                                                                @foreach($contactTitle as $title)
                                                                    <option value="{{$title->id}}">{{$title->value}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6" style="{{$company?"display: none" : "display: block"}}">
                                                        <div class="form-group" >
                                                            <div class="position-relative">
                                                                <input type="text"
                                                                       id="first-name"
                                                                       class="form-control"
                                                                       placeholder="First Name"
                                                                       name="first-name" value="{{isset($contact)?$contact->contact_name:old('first-name')}}">
                                                                @if($errors->has('first-name'))
                                                                    <div class="error" style="color:red">First name must be
                                                                        required.
                                                                    </div>
                                                                @endif
                                                                <div class="error"
                                                                     style="display: none; color: red"
                                                                     id="error-for-first-name">
                                                                    First name must be
                                                                    required
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6" style="{{$company?"display: none" : "display: block"}}">
                                                        <div class="form-group" >
                                                            <div class="position-relative">
                                                                <input type="text"
                                                                       id="middle-name"
                                                                       class="form-control"
                                                                       placeholder="Middle Name"
                                                                       name="middle-name" value="{{isset($contact)?$contact->middle_name:old('middle-name')}}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6" style="{{$company?"display: none" : "display: block"}}">
                                                        <div class="form-group">
                                                            <div class="position-relative">
                                                                <input type="text"
                                                                       id="last-name"
                                                                       class="form-control"
                                                                       placeholder="Last Name"
                                                                       name="last-name" value="{{isset($contact)?$contact->last_name:old('last-name')}}">
                                                                @if($errors->has('last-name'))
                                                                    <div class="error" style="color:red">Last name must be
                                                                        required.
                                                                    </div>
                                                                @endif
                                                                <div class="error"
                                                                     style="display: none;color: red"
                                                                     id="error-for-last-name">
                                                                    Last name must be
                                                                    required
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6" style="{{$company?"display: none" : "display: block"}}">
                                                        <div class="form-group">
                                                            <label for="" class="">Job Position</label>
                                                            <div class="position-relative">
                                                                <input type="text"
                                                                       class="form-control"
                                                                       placeholder="Job Position"
                                                                       name="job-position" value="{{isset($contact)?$contact->job_position:old('job-position')}}">
                                                                @if($errors->has('job-position'))
                                                                    <div class="error" style="color:red">Job position must
                                                                        be required.
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6" style="{{$company?"display: none" : "display: block"}}">
                                                        <div class="form-group">
                                                            <label for="">Business / Refine</label>
                                                            <div class="position-relative">
                                                                <input type="text" id=""
                                                                       class="form-control"
                                                                       placeholder="Business / Refine"
                                                                       name="business-info" value="{{isset($contact)?$contact->business_info:old('business-info')}}">
                                                                @if($errors->has('business-info'))
                                                                    <div class="error" style="color:red">Business info must
                                                                        be required.
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    @endif
                                    @if($company)
                                        <div class="row_bussiness-md"
                                             id="company-basic-info" style="{{$company?"display: block" : "display: none"}}">
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
                                                                           name="company-name" value="{{isset($contact)?$contact->contact_name:old('company-name')}}">
                                                                    @if($errors->has('company-name'))
                                                                        <div class="error" style="color:red">{{$errors->first('company-name')}}</div>
                                                                    @endif
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
                                             style="{{$company?"display: block" : "display: none"}}">
                                            <div class="row">

                                                <div class="col-md-12 col-xl-6">
                                                    <div class="form-group">
                                                        <label>Business Classification</label>
                                                        <div class="position-relative">
                                                            <input type="text"
                                                                   class="form-control"
                                                                   placeholder="Business Classification"
                                                                   name="business-classifications" value="{{isset($contact)?$contact->business_classifications:old('business-classifications')}}">
                                                            @if($errors->has('business-classifications'))
                                                                <div class="error" style="color:red">Business
                                                                    classifications must be required.
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-xl-6">
                                                    <div class="form-group">
                                                        <label>Account Status</label>
                                                        <div class="position-relative">
                                                            <input type="text"
                                                                   class="form-control"
                                                                   placeholder="Account Status"
                                                                   name="account-status" value="{{isset($contact)?$contact->account_status:old('account-status')}}">
                                                            @if($errors->has('account-status'))
                                                                <div class="error" style="color:red">Account status must be
                                                                    required.
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    <div class="row_colmd row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tags</label>
                                                <div class="position-relative">
                                                    <div class="form-control {{ $is_parent ? 'parent' : 'child' }}-tags"
                                                         data-tags-input-name="{{ $is_parent ? 'parent' : 'child' }}-tags">{{ $contact->tags }}</div>
                                                    @if($errors->has('tags'))
                                                        <div class="error" style="color:red">Tags must be required.</div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if($contact->contact_type === "Individual")
                            {{--                                                                                                                @dd(json_decode($exist->social_info),$exist->social_info , $exist,$exist->getAddressInfo[0] , $exist->getAddressInfo[0]->getCity , $exist->getAddressInfo[0]->getState , $exist->getAddressInfo[0]->getCountry)--}}
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="address_info">
                                            <div class="right-edit-btn">
                                                <a href="#" data-toggle="modal" data-target="#contact-edit-address" onclick="updateMoreAddress('{{route('update.more.address.view' , encrypt($contact->id))}}')"><i class="ft-edit"></i></a>
                                            </div>
                                            <ul class="col_bx">
                                                <li>
                                                    <div class="icons">
                                                        <i class="ft-edit"></i>
                                                    </div>
                                                    <div class="address-data">
                                                        <label>Address</label>
                                                        <p id="update-contact-address">{{isset($contact->getAddressInfo[0])?$contact->getAddressInfo[0]->house_name : "not set"}}
                                                            ,
                                                            {{isset($contact->getAddressInfo[0])?$contact->getAddressInfo[0]->street : "not set"}}
                                                            street
                                                            {{isset($contact->getAddressInfo[0])?$contact->getAddressInfo[0]->getCity->value : "not set"}}
                                                            {{isset($contact->getAddressInfo[0])?$contact->getAddressInfo[0]->postcode : "not set"}}
                                                            {{isset($contact->getAddressInfo[0])?$contact->getAddressInfo[0]->getCountry->value : "not set"}}</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icons">
                                                        <i class="ft-edit"></i>
                                                    </div>
                                                    <div class="address-data">
                                                        <a href="#" id="update-contact-email"> {{isset($contact->getAddressInfo[0])?$contact->getAddressInfo[0]->email : "not set"}}</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icons">
                                                        <i class="ft-edit"></i>
                                                    </div>
                                                    <div class="address-data">
                                                        <a href="#" id="update-contact-phone"> {{isset($contact->getAddressInfo[0])?$contact->getAddressInfo[0]->phone : "not set"}}</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icons">
                                                        <i class="ft-edit"></i>
                                                    </div>
                                                    <div class="address-data">
                                                        <a href="#" id="update-contact-mobile"> {{isset($contact->getAddressInfo[0])?$contact->getAddressInfo[0]->mobile : "not set"}}</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if($contact->contact_type === "Company")
                            <div class="col-md-5">
                                <div class="row">
                                    {{--                                                                @dd($exist ,$exist->getAddressInfo)--}}
                                    <div class="col-md-8">
                                        <div class="tab-content" id="myTabContent">
                                            @foreach($contact->getAddressInfo as $key=>$address)
                                                <div class="tab-pane fade show @if($key == 0) active @endif" id="tab{{$key}}" role="tabpanel" aria-labelledby="tab">
                                                    <div class="address_info">
                                                        <div class="right-edit-btn">
                                                            <a href="" onclick="updateCompanyAddress('{{route('edit.company.address' , ['id'=> encrypt($address->id), 'contact'=>encrypt($contact->id)])}}')" data-toggle="modal" data-target="#edit-company-address">
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
                                                                    <p id="company-address-{{$address->id}}">{{$address->house_name}}
                                                                        ,
                                                                        {{$address->street}}
                                                                        street
                                                                        {{$address->getCity->value }}
                                                                        {{$address->postcode }}
                                                                        {{$address->getCountry->value }}</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="icons">
                                                                    <i class="ft-edit"></i>
                                                                </div>
                                                                <div class="address-data">
                                                                    <a href="#" id="company-email-{{$address->id}}">{{$address->email}}</a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="icons">
                                                                    <i class="ft-edit"></i>
                                                                </div>
                                                                <div class="address-data">
                                                                    <a href="#" id="company-mobile-{{$address->id}}">{{$address->mobile}}</a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="icons">
                                                                    <i class="ft-edit"></i>
                                                                </div>
                                                                <div class="address-data">
                                                                    <a href="#" id="company-phone-{{$address->id}}">{{$address->phone}}</a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="icons">
                                                                    <i class="ft-edit"></i>
                                                                </div>
                                                                <div class="address-data">
                                                                    <a href="#" id="company-website-{{$address->id}}">{{isset($address->website)?$address->website : "URL"}}</a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="nav nav-tabs address_info" id="myTab" role="tablist">
                                            <div class="type-address">
                                                <h2>Address type</h2>
                                            </div>
                                            @foreach($contact->getAddressInfo as $key=>$address)
                                                @foreach(json_decode($address->address_type) as $type )
                                                    <li class="nav-item" role="presentation">
                                                        <a id="tab" data-toggle="tab" href="#tab{{$key}}" role="tab" aria-controls="tab{{$key}}" aria-selected="true"><span> <i class="ft-edit"></i></span>{{$type}}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            @endforeach


                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>

                <!--Information Tab Content-->
                <div role="tabpanel" class="tab-pane active" id="{{ $is_parent ? 'parent' : 'child' }}_info-tab"
                     aria-expanded="true" aria-labelledby="baseIcon-tab1">
                    <div class="row mt-1">
                        <div class="col-md-6">
                            <div class="form-body">
                                <h4 class="form-section">Social Info</h4>
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="">LinkedIn</label>
                                    <div class="col-md-8">
                                        <div class="position-relative">
                                            <input type="url" id="" name="social[]" class="form-control" value="{{isset($contact->social_info)?json_decode($contact->social_info)[0]:""}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="">Facebook</label>
                                    <div class="col-md-8">
                                        <div class="position-relative">
                                            <input type="url" id="" name="social[]" class="form-control" value="{{isset($contact->social_info)?json_decode($contact->social_info)[1]:""}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 label-control"
                                           for="projectinput7">Twitter</label>
                                    <div class="col-md-8">
                                        <div class="position-relative">
                                            <input type="url" id="" name="social[]" class="form-control" value="{{isset($contact->social_info)?json_decode($contact->social_info)[2]:""}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 label-control">Instagram</label>
                                    <div class="col-md-8">
                                        <div class="position-relative">
                                            <input type="url" id="" name="social[]" class="form-control" value="{{isset($contact->social_info)?json_decode($contact->social_info)[3]:""}}">
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
                                            <input type="checkbox" class="custom-control-input" value="Customer" name="cxrm[]" id="{{ $is_parent ? 'parent' : 'child' }}_Customer"
                                                    {{in_array('Customer', json_decode($contact->cxrm,true)) ? 'checked' : ''}}>
                                            <label class="custom-control-label"
                                                   for="{{ $is_parent ? 'parent' : 'child' }}_Customer">Customer</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox"
                                                   class="custom-control-input" value="Supplier" name="cxrm[]" id="{{ $is_parent ? 'parent' : 'child' }}_Supplier"
                                                    {{in_array('Supplier', json_decode($contact->cxrm,true)) ? 'checked' : ''}}>
                                            <label class="custom-control-label"
                                                   for="{{ $is_parent ? 'parent' : 'child' }}_Supplier">Supplier</label>
                                            <!-- <i class="ft-external-link ccm"></i> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="row cxrmcheckbox pb-2">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="cxrm[]" value="Beneficiary" class="custom-control-input" id="{{ $is_parent ? 'parent' : 'child' }}_Beneficiary"
                                                    {{in_array('Beneficiary', json_decode($contact->cxrm,true)) ? 'checked' : ''}}>
                                            <label class="custom-control-label" for="{{ $is_parent ? 'parent' : 'child' }}_Beneficiary">Beneficiary</label>
                                            <!-- <i class="ft-external-link ccm"></i> -->
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="cxrm[]" value="Partner" class="custom-control-input" id="{{ $is_parent ? 'parent' : 'child' }}_Partner"
                                                    {{in_array('Partner', json_decode($contact->cxrm,true)) ? 'checked' : ''}}>
                                            <label class="custom-control-label"
                                                   for="{{ $is_parent ? 'parent' : 'child' }}_Partner">Partner</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row cxrmcheckbox pb-2">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="cxrm[]" value="Employee" class="custom-control-input" id="{{ $is_parent ? 'parent' : 'child' }}_Employee"
                                                    {{in_array('Employee', json_decode($contact->cxrm,true)) ? 'checked' : ''}}>
                                            <label class="custom-control-label"
                                                   for="{{ $is_parent ? 'parent' : 'child' }}_Employee">Employee</label>
                                            <!-- <i class="ft-external-link ccm"></i> -->
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="cxrm[]" value="User" class="custom-control-input" id="{{ $is_parent ? 'parent' : 'child' }}_User"
                                                    {{in_array('User', json_decode($contact->cxrm,true)) ? 'checked' : ''}}>
                                            <label class="custom-control-label"
                                                   for="{{ $is_parent ? 'parent' : 'child' }}_User">User</label>
                                            <!-- <i class="ft-external-link ccm"></i> -->
                                        </div>
                                    </div>
                                </div>
                                @if($errors->has('cxrm'))
                                    <div class="error" style="color:red">At least one CXRM must be required.</div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!--Contact Tab Content-->
                @if($company)

                    <div class="tab-pane" id="{{ $is_parent ? 'parent' : 'child' }}_contact-tab" aria-labelledby="baseIcon-tab2">

                        <div id="contact-target" style="{{$company?"display: block" : "display: none"}}">
                            <div class="row" id="child-contact-section">

{{--                                <div class="col-sm-12">--}}
{{--                                    <h4>Contacts</h4>--}}
{{--                                    <a href="javascript:void(0)" class="create_btn"--}}
{{--                                       data-toggle="modal"--}}
{{--                                       data-target="#create-modal">Create</a>--}}
{{--                                </div>--}}
                                @if($contact->getChildContact)
                                    @foreach($contact->getChildContact as $child)
                                        <div class="col-md-4 col-sm-6">
                                            <div class="card mb-1 contactbox-m">
                                                <div class="card-body p-0">
                                                    <div class="row">
                                                        <div class="right-edit-btn">
                                                            <a href="" onclick="updateCompanyContact('{{route('edit.company.contact' , ['id'=> encrypt($child->id), 'contact'=>encrypt($contact->id)])}}')" data-toggle="modal" data-target="#edit-company-contact">
                                                                <i class="ft-edit"></i>
                                                            </a>
                                                        </div>

                                                        <div class="col-4">
                                                            <div class="border-left-radius-palette">
                                                                <img id="contact-imag-{{$child->id}}" src="{{asset('storage/app/public/contact-profile/'.$child->photo)}}" class="rounded-squre img-fluid img-border height-120 mt-0"
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
                                                                    <p id="contact-name-{{$child->id}}">{{$child->contact_name}}</p>
                                                                    <a href="#" id="contact-email-{{$child->id}}">{{isset($child->getAddressInfo[0])?$child->getAddressInfo[0]->email:"email not found"}}</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
            @endif
            <!--Accounting Tab Content-->

                <div role="tabpanel" class="tab-pane" id="{{ $is_parent ? 'parent' : 'child' }}_accounting-tab" aria-expanded="true"
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
                                                    <select id="" name="sales-person" class="form-control">
                                                        <option selected value="{{isset($contact->getAccInfo)?$contact->getAccInfo->sales_person:""}}">{{isset($contact->getAccInfo)?$contact->getAccInfo->sales_person:""}}</option>
                                                        <option value="1">Sales Person</option>
                                                        <option value="2">Sales Person 1</option>
                                                    </select>
                                                    @if($errors->has('sales-person'))
                                                        <div class="error" style="color:red">Sales person must be
                                                            required.
                                                        </div>
                                                    @endif
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
                                                           class="form-control" value="{{isset($contact->getAccInfo)?$contact->getAccInfo->account_receivable:old('account-rec-able')}}" >
                                                    @if($errors->has('account-rec-able'))
                                                        <div class="error" style="color:red">Account receivable must be
                                                            required.
                                                        </div>
                                                    @endif
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
                                                           class="form-control" value="{{isset($contact->getAccInfo)?$contact->getAccInfo->sales_price_list:old('sales-price')}}">
                                                    @if($errors->has('sales-price'))
                                                        <div class="error" style="color:red">Sales price must be required.
                                                        </div>
                                                    @endif
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
                                                           class="form-control" value="{{isset($contact->getAccInfo)?$contact->getAccInfo->accounts_payable:old('account-payable')}}">
                                                    @if($errors->has('account-payable'))
                                                        <div class="error" style="color:red">Accounts payable must be
                                                            required.
                                                        </div>
                                                    @endif
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
                                                           class="form-control" value="{{isset($contact->getAccInfo)?$contact->getAccInfo->customer_payments_terms:old('customer-payment')}}">
                                                    @if($errors->has('customer-payment'))
                                                        <div class="error" style="color:red">Customer payment terms must be
                                                            required.
                                                        </div>
                                                    @endif
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
                                                           class="form-control" value="{{isset($contact->getAccInfo)?$contact->getAccInfo->vendor_payments_terms:old('vendor-term')}}">
                                                    @if($errors->has('vendor-term'))
                                                        <div class="error" style="color:red">Vendor payment terms must be
                                                            required
                                                        </div>
                                                    @endif
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
                                          placeholder="WISIWYG">{{isset($contact)?$contact->other_information : old('other-information')}}</textarea>
                                    @if($errors->has('other-information'))
                                        <div class="error" style="color:red">Other information must be required.</div>
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--newcode-->

    <button type="submit" class="btn btn-success float-right mb-2" style="{{isset($isContact)?"display:none":"display:bloack"}}">Submit</button>
</form>






