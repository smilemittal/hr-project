@csrf
<div class="card-header p-0">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" id="cxrm-tab1" data-toggle="tab"
                aria-controls="{{ $is_parent ? 'parent' : 'child' }}_info-tab" href="#{{ $is_parent ? 'parent' : 'child' }}_info-tab" aria-expanded="true">Information </a>
        </li>
        @if($is_parent)
        <li class="nav-item" id="contact-hyperlink" style="display: none">
            <a class="nav-link" id="cxrm-tab2" data-toggle="tab"
                aria-controls="{{ $is_parent ? 'parent' : 'child' }}_contact-tab" href="#{{ $is_parent ? 'parent' : 'child' }}_contact-tab" aria-expanded="false">
                Contacts</a>
        </li>
        @endif
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
                                value="Individual">
                        <label class="form-check-label" for="individual">
                            Individual
                        </label>
                    </div>
                    <div class="form-check" id="companyChecked"
                            onclick="companyRadio(this.id)">
                        <input class="form-check-input " type="radio"
                                name="contact-type" id="company"
                                value="Company">
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
                                                                name="title"
                                                                class="form-control">
                                                            <option value="Mr">Mr
                                                            </option>
                                                            <option value="Miss">Miss</option>
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
                                                            @if($errors->has('first-name'))
                                                                <div class="error" style="color:red">First name must be required.</div>
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
                                                            @if($errors->has('last-name'))
                                                                <div class="error" style="color:red">Last name must be required.</div>
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
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="" class="">Job Position</label>
                                                        <div class="position-relative">
                                                            <input type="text"
                                                                onclick="postDetail('{{route('post-contact-type-info')}}')"
                                                                class="form-control"
                                                                placeholder="Job Position"
                                                                name="job-position">
                                                            @if($errors->has('job-position'))
                                                                <div class="error" style="color:red">Job position must be required.</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Business / Refine</label>
                                                        <div class="position-relative">
                                                            <input type="text" id=""
                                                                    class="form-control"
                                                                    placeholder="Business / Refine"
                                                                    name="business-info">
                                                            @if($errors->has('business-info'))
                                                                <div class="error" style="color:red">Business info must be required.</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                @if($is_parent)
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
                                        style="display: none">
                                    <div class="row">

                                        <div class="col-md-12 col-xl-6">
                                            <div class="form-group">
                                                <label>Business Classification</label>
                                                <div class="position-relative">
                                                    <input type="text"
                                                            onclick="postDetail('{{route('post-contact-type-info')}}')"
                                                            class="form-control"
                                                            placeholder="Business Classification"
                                                            name="business-classifications">
                                                    @if($errors->has('business-classifications'))
                                                        <div class="error" style="color:red">Business classifications must be required.</div>
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
                                                            name="account-status">
                                                    @if($errors->has('account-status'))
                                                        <div class="error" style="color:red">Account status must be required.</div>
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
                                            <label for="">Email</label>
                                            <div class="position-relative">
                                                <input type="email" id="" class="form-control" placeholder="Enter Your Email" name="email">
                                                @if($errors->has('email'))
                                                    <div class="error" style="color:red">{{$errors->first('email')}}</div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    @if($is_parent)
                                    <div class="col-md-12" id="website" style="display: none">
                                        <div class="form-group">
                                            <label>Website</label>
                                            <div class="position-relative">
                                                <input type="url"  class="form-control" placeholder="Enter Your Website" name="website">
                                                @if($errors->has('website'))
                                                    <div class="error" style="color:red">Website URL must be required.</div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Phone</label>
                                            <div class="position-relative">
                                                <input type="text" id=""
                                                        class="form-control"
                                                        placeholder="Phone"
                                                        name="phone">
                                                @if($errors->has('phone'))
                                                    <div class="error" style="color:red">Phone must be required.</div>
                                                @endif
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
                                                @if($errors->has('mobile'))
                                                    <div class="error" style="color:red">Mobile must be required.</div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Tags</label>
                                            <div class="position-relative">
                                                <input name='tags'
                                                        type="text" id=""
                                                        class="form-control"
                                                        placeholder="tags">
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
                    <div class="col-md-5">
                        <div class="media-body text-left text-dark">
                            <div class="row">
                               @include('admin.contact.partials.address',['is_parent' => true])
                            </div>
                            @if($is_parent)
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
                            @endif
                        </div>
                    </div>
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
                                        <input type="checkbox" class="custom-control-input" value="Customer" name="cxrm[]" id="{{ $is_parent ? 'parent' : 'child' }}_Customer">
                                        <label class="custom-control-label"
                                                for="{{ $is_parent ? 'parent' : 'child' }}_Customer">Customer</label>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox"
                                                class="custom-control-input" value="Supplier" name="cxrm[]" id="{{ $is_parent ? 'parent' : 'child' }}_Supplier">
                                        <label class="custom-control-label"
                                                for="{{ $is_parent ? 'parent' : 'child' }}_Supplier">Supplier</label>
                                        <!-- <i class="ft-external-link ccm"></i> -->
                                    </div>
                                </div>
                            </div>
                            <div class="row cxrmcheckbox pb-2">
                                <div class="col-md-6 col-sm-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="cxrm[]" value="Beneficiary" class="custom-control-input" id="{{ $is_parent ? 'parent' : 'child' }}_Beneficiary">
                                        <label class="custom-control-label"
                                                for="{{ $is_parent ? 'parent' : 'child' }}_Beneficiary">Beneficiary</label>
                                        <!-- <i class="ft-external-link ccm"></i> -->
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="cxrm[]" value="Partner" class="custom-control-input" id="{{ $is_parent ? 'parent' : 'child' }}_Partner">
                                        <label class="custom-control-label"
                                                for="{{ $is_parent ? 'parent' : 'child' }}_Partner">Partner</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row cxrmcheckbox pb-2">
                                <div class="col-md-6 col-sm-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="cxrm[]" value="Employee" class="custom-control-input" id="{{ $is_parent ? 'parent' : 'child' }}_Employee">
                                        <label class="custom-control-label"
                                                for="{{ $is_parent ? 'parent' : 'child' }}_Employee">Employee</label>
                                        <!-- <i class="ft-external-link ccm"></i> -->
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="cxrm[]" value="User" class="custom-control-input" id="{{ $is_parent ? 'parent' : 'child' }}_User">
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
            @if($is_parent)

            <div class="tab-pane" id="{{ $is_parent ? 'parent' : 'child' }}_contact-tab" aria-labelledby="baseIcon-tab2">

                <div id="contact-target" style="display: none">
                    <div class="row" id="child-contact-section">

                        <div class="col-sm-12">
                            <h4>Contacts</h4>
                            <a href="javascript:void(0)" class="create_btn"
                                data-toggle="modal"
                                data-target="#create-modal">Create</a>
                        </div>
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
                                                    <option value="1">Sales Person</option>
                                                    <option value="2">Sales Person 1</option>
                                                </select>
                                                @if($errors->has('sales-person'))
                                                    <div class="error" style="color:red">Sales person must be required.</div>
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
                                                        class="form-control">
                                                @if($errors->has('account-rec-able'))
                                                    <div class="error" style="color:red">Account receivable must be required.</div>
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
                                                        class="form-control">
                                                @if($errors->has('sales-price'))
                                                    <div class="error" style="color:red">Sales price must be required.</div>
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
                                                        class="form-control">
                                                @if($errors->has('account-payable'))
                                                    <div class="error" style="color:red">Accounts payable must be required.</div>
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
                                                        class="form-control">
                                                @if($errors->has('customer-payment'))
                                                    <div class="error" style="color:red">Customer payment terms must be required.</div>
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
                                                        class="form-control">
                                                @if($errors->has('vendor-term'))
                                                    <div class="error" style="color:red">Vendor payment terms must be required</div>
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
                                            placeholder="WISIWYG"></textarea>
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