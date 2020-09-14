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
                        <li class="breadcrumb-item"><a href="#">Create Branch</a>
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
                                <form action="{{route('post-data.branch')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput1">Company</label>
                                                    <div class="col-md-9">
                                                        <select name="company_id" id="company_id" class="form-control border-primary">
                                                            <option value="">Select</option>
                                                            @foreach($companies as $company)
                                                                <option value="{{$company->id}}" @if($company->id == old('company_id')) selected @endif>{{$company->company_name}}</option>
                                                            @endforeach
                                                        </select>
                                                        @if($errors->has('company_id'))
                                                            <div class="error" style="color:red">Company is required.</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput1">Branch Name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="userinput1"
                                                               class="form-control border-primary" name="branch_name" value="{{old('branch_name')}}">
                                                        @if($errors->has('branch_name'))
                                                            <div class="error" style="color:red">Branch Name is required.</div>
                                                        @endif
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
                                                               class="form-control border-primary" name="address_1" value="{{old('address_1')}}">
                                                        @if($errors->has('address_1'))
                                                            <div class="error" style="color:red">Address 1 must be max. 100 characters and required.</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput1">Address 2</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="userinput1"
                                                               class="form-control border-primary" name="address_2" value="{{old('address_2')}}">
                                                        @if($errors->has('address_2'))
                                                            <div class="error" style="color:red">Address 2 must be max. 100 characters.</div>
                                                        @endif
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
                                                        <select name="country_id" id="country_id" class="form-control border-primary">
                                                            <option value="">Select</option>
                                                            @foreach($countries as $country)
                                                                <option value="{{$country->id}}" @if($country->id == old('country_id'))selected @endif>{{$country->value}}</option>
                                                            @endforeach
                                                        </select>
                                                        @if($errors->has('country_id'))
                                                            <div class="error" style="color:red">Country is required.</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput2">State</label>
                                                    <div class="col-md-9">
                                                        <select name="state_id" id="state_id" class="form-control border-primary">
                                                            <option value="">Select</option>
                                                            
                                                        </select>
                                                        @if($errors->has('state_id'))
                                                            <div class="error" style="color:red">State is required.</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput2">City</label>
                                                    <div class="col-md-9">
                                                
                                                        <select name="city_id" id="city_id" class="city_select form-control border-primary city_id_control" >
                                                            <option value="">Select</option>
                                                        </select>

                                                        @if($errors->has('city') || $errors->has('city_id'))
                                                            <div class="error" style="color:red">City is required.</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control"
                                                           for="userinput1">Zipcode</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="userinput1"
                                                               class="form-control border-primary" name="zipcode" value="{{old('zipcode')}}">
                                                        @if($errors->has('zipcode'))
                                                            <div class="error" style="color:red">Zipcode must be max. 10 characters and required.</div>
                                                        @endif
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
                                                               class="form-control border-primary" name="email" value="{{old('email')}}">
                                                        @if($errors->has('email'))
                                                            <div class="error" style="color:red">Email must be Unique and required.</div>
                                                        @endif
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
                                                               name="phone_number" value="{{old('phone_number')}}">
                                                        @if($errors->has('phone_number'))
                                                            <div class="error" style="color:red">Phone number must be max. 15 characters and required.</div>
                                                        @endif
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
                                                               name="mobile_number" value="{{old('mobile_number')}}">
                                                        @if($errors->has('mobile_number'))
                                                            <div class="error" style="color:red">Mobile number must be max. 15 characters and required.</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput1">Status</label>
                                                    <div class="col-md-9">
                                                        <select name="status" id="status" class="form-control border-primary">
                                                            <option value="active">Active</option>
                                                            <option value="inactive">Inactive</option>
                                                        </select>
                                                        @if($errors->has('status'))
                                                            <div class="error" style="color:red">Status is required.</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    
                                    </div>
                                    <div class="form-actions right">
                                        <a href="{{route('branch.index')}}" class="btn btn-primary mr-1">View All</a>
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
            <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <label class="modal-title text-text-bold-600" id="myModalLabel33">Save New City</label>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('save-new.city') }}" method="post">
                            @csrf
                            <div class="modal-body">
                                <label>Enter City Name: </label>
                                <div class="form-group">
                                    <input type="text" name="city" placeholder="Write city name" class="form-control new_city">
                                <div class="error modal_city_error" style="color:red"></div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="reset" class="btn btn-secondary " data-dismiss="modal" value="close">
                                <input type="submit" class="btn btn-primary save_new_city" value="Save">
                            </div>
                        </form>
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

@section('scripts')
<script type="text/javascript">
    $('#country_id').on('change', function(){
        var country_id = $('#country_id option:selected').val();
        $.ajax({
            method: 'get',
            url: '{{ route("get-states") }}',
            data: {'country_id': country_id},
            success: function(data){
                if(data.html != ''){
                    $('#state_id option:gt(0)').remove();
                    $('#state_id').append(data.html);
                }
               
            },
        });
    });

     $('#state_id').on('change', function(){
        var state_id = $('#state_id option:selected').val();
        $.ajax({
            method: 'get',
            url: '{{ route("get-cities") }}',
            data: {'state_id': state_id},
            success: function(data){
                if(data.html != ''){
                    $('#city_id option:gt(0)').remove();
                    $('#city_id').append(data.html);
                }
               
            },
        });
    });
    $('#city_id').on('change', function(){
        var city_id = $('#city_id option:selected').val();
        if(city_id == 'enter_city'){
            $('#inlineForm').modal();
        }
    }); 

    $('.save_new_city').on('click', function(e){
        e.preventDefault();
        var state_id = $('#state_id option:selected').val();
        var new_city = $('.new_city').val();
        $.ajax({
            url: "{{ route('save-new.city') }}",
            method: 'post',
            data: {
                 "_token": "{{ csrf_token() }}",
                 'state_id': state_id,
                 'city': new_city,
            },
            success: function(data){
                if(data.success == true){
                    $('#state_id').trigger('change');
                    $('#inlineForm').modal('hide');
                }
            },
            error: function(data){
                $('.modal_city_error').html(data.responseJSON.errors.city[0]);
            }

        });

    });
</script>
<script type="text/javascript">
   
    $(document).ready(function(){
         @if(!empty(old('country_id')))
            var country_id = "{{ old('country_id') }}";
            var state_id = "{{ old('state_id') }}";
            $.ajax({
                method: 'get',
                url: '{{ route("get-states") }}',
                data: {'country_id': country_id, @if(!empty(old('state_id')))  'state_id': state_id @endif },
                success: function(data){
                    if(data.html != ''){
                        $('#state_id option:gt(0)').remove();
                        $('#state_id').append(data.html);
                    }
                },
            });
            @endif

            @if(!empty(old('state_id')))
              var state_id = "{{ old('state_id') }}";
              var city_id = "{{ old('city_id') }}";;
                $.ajax({
                    method: 'get',
                    url: '{{ route("get-cities") }}',
                    data: {'state_id': state_id, @if(!empty(old('city_id')))  'city_id': city_id @endif },
                    success: function(data){
                        if(data.html != ''){
                            $('#city_id option:gt(0)').remove();
                            $('#city_id').append(data.html);
                        }
                       
                    },
                });
           @endif

           @if(!empty(old('city_id')) && empty(old('city')))
            $('.city_id_control').show();
            $('.city_control').hide();
           @elseif(!empty(old('city')) && !empty(old('city_id')))
            $('.city_id_control').hide();
            $('.city_control').show();
           @endif


        });


   
</script>

@endsection


