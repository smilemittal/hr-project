@extends('layouts.default')
@section('page-vendor-css')
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/ui/prism.min.css')}}">
@endsection
@section('page-css')
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/forms/tags/tagging.min.css')}}">
@endsection
@section('content')

    <div class="content-header row">
        <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
            <div class="breadcrumbs-top float-md-left">
                <div class="breadcrumb-wrapper mr-1">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">CxRM</a>
                        </li>
                        <li class="breadcrumb-item active text-white"><a href="#"><strong>Contact</strong></a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
     
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
                                    <input type="hidden" id="record-id" name="id">

                                    @include('admin.contact.partials.form', ['is_parent' => true])

                                    <button type="submit" class="btn btn-success float-right mb-2">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
        </section>
        <!-- Tabs with Icons end -->
    </div>
    <!-- Modal Edit Address-->
    <div class="modal fade text-left" id="moreAddress" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel3"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form id="child-address" method="post" action="{{route('more.address.post')}}">
                    <input type="hidden" id="parentID" name="id">
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
                                                                <div class="custom-control custom-checkbox" id="correspondence-more-sec" onclick="moreAddressType(this.id)">
                                                                    <input type="checkbox" name="address-type[]" onclick="ShowHideDiv(this)" value="Correspondence" class="custom-control-input" id="correspondence-more">
                                                                    <label class="custom-control-label"
                                                                           for="correspondence-more">Correspondence</label>
                                                                    <!-- <i class="ft-external-link ccm"></i> -->
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="custom-control custom-checkbox" id="invoice-more-sec" onclick="moreAddressType(this.id)">
                                                                    <input type="checkbox" name="address-type[]" class="custom-control-input" value="Invoice" id="invoice-more">
                                                                    <label class="custom-control-label"
                                                                           for="invoice-more">Invoice</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row cxrmcheckbox pb-2">
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="custom-control custom-checkbox" id="registered-more-sec" onclick="moreAddressType(this.id)">
                                                                    <input type="checkbox" name="address-type[]" value="Registered" class="custom-control-input" id="registered-more">
                                                                    <label class="custom-control-label" for="registered-more">Registered</label>
                                                                    <!-- <i class="ft-external-link ccm"></i> -->
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="custom-control custom-checkbox" id="shipping-more-sec" onclick="moreAddressType(this.id)">
                                                                    <input type="checkbox" name="address-type[]" value="Shipping" class="custom-control-input" id="shipping-more">
                                                                    <label class="custom-control-label" for="shipping-more">Shipping</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row cxrmcheckbox pb-2">
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="custom-control custom-checkbox" id="other-more-sec" onclick="moreAddressType(this.id)">
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
                                                            class="form-control">
                                                        <option value="">Select Country
                                                        </option>
                                                        @forelse($countries as $country)
                                                            <option value="{{$country->id}}">{{$country->value}}</option>
                                                        @empty
                                                            <option selected disabled>not found in record</option>
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
                                                            class="form-control">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-3" for="">City</label>
                                                <div class="col-md-9">
                                                    <select id="putMoreCity" name="city"
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
                            <button type="button" class="btn grey btn-sm btn-secondary" data-dismiss="modal">Close
                            </button>
                            <input type="submit" value="Submit" class="btn grey btn-sm btn-success float-right">
                        </div>
                        <div class="success" style="display: none;color: green"
                             id="success-address">Address is added successfully.
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>


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
                        <input type="hidden" id="parentID" name="id">
                        <div class="child-form">

                        </div>
                        <input type="submit" value="Submit" class="btn btn-success float-right">
                        <div class="col-md-12">
                            <div class="success" style="display: none;color: green"
                                 id="success-sub-child">Child added successfully.
                            </div>
                            <div class="error" style="display: none;color: red"
                                 id="error-for-sub-child">Company name and Business classifications must be required for
                                create the sub contact.
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
@endsection
@section('page-vendor-js')
<script src="{{asset('app-assets/vendors/js/forms/tags/tagging.min.js')}}" type="text/javascript"></script>
<script src="{{asset('app-assets/vendors/js/ui/prism.min.js')}}" type="text/javascript"></script>

@endsection
@section('page-js')
<script>
    var createForm = "{{ route('contact.form') }}";
    var getStates = "{{ route('get.state', ['country_id' => '']) }}";
    var getCities = "{{ route('get.city', ['state_id' => '']) }}";
</script>
<script src="{{asset('app-assets/js/hr/contact/contact.js')}}" type="text/javascript"></script>

@endsection