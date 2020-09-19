@extends('layouts.default')
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
                <form id="child-address" method="post" action="{{route('more.address.post')}}">
                    <input type="hidden" id="parentID" name="id">
                    <div class="modal-body pb-0">
                        <div class="row" id="append-address-fields">
{{--                            rendering area--}}

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


                            <div class="success float-right" style="display: none;color: green"
                                 id="success-sub-child">Child added successfully.
                            </div>
                            <div class="error" style="display: none;color: red"
                                 id="error-for-sub-child">Company name and Business classifications must be required for create the sub contact.
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
@section('page-js')
<script>
    var createForm = "{{ route('contact.form') }}";
    var getStates = "{{ route('get.state', ['country_id' => '']) }}";
    var getCities = "{{ route('get.city', ['state_id' => '']) }}";
    var moreAddressRoute = "{{route('contact.address.form')}}";
</script>
<script src="{{asset('app-assets/js/hr/contact/contact.js')}}" type="text/javascript"></script>

@endsection