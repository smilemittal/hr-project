@extends('layouts.default')
@section('content')
    <!-- BEGIN: Content-->
    @if ($message = Session::get('success'))
        <div class="alert alert-success mb-2" style="width: 500px;position: absolute;right: 0;top: 0px;" id="alert-success-message" role="alert">
            <strong>Success! </strong> {{$message}}
        </div>
    @endif
    @if ($message = Session::get('error'))
        <div class="alert alert-danger mb-2" id="alert-error-message" style="width: 500px;position: absolute;right: 0;top: 0px;" role="alert">
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
                        <li class="breadcrumb-item"><a href="#">Create Country</a>
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
                                <div class="col-xl-4 col-lg-6 col-md-12">

                                    <div class="card-block">
                                        <div class="card-body">
                                            <!-- <form action="{{route('post-data.country')}}" method="post">
                                                @csrf
                                                <fieldset class="form-group">
                                                    <input type="text" name="country"
                                                           placeholder="Write Country Name" class="form-control"
                                                           id="basicInput">
                                                    @if($errors->has('country'))
                                                        <div class="error" style="color:red">{{$errors->first('country')}}</div>
                                                    @endif
                                                     <input type="text" name="code"
                                                           placeholder="Write Country Code" class="form-control"
                                                           id="basicInput">
                                                    @if($errors->has('code'))
                                                        <div class="error" style="color:red">{{$errors->first('code')}}</div>
                                                    @endif
                                                    <input type="text" name="phonecode"
                                                           placeholder="Write Country Phone Code" class="form-control"
                                                           id="basicInput">
                                                    @if($errors->has('phonecode'))
                                                        <div class="error" style="color:red">{{$errors->first('phonecode')}}</div>
                                                    @endif
                                                </fieldset>
                                                
                                                <fieldset class="form-group">
                                                    <button type="submit" class="btn btn-success">Submit</button>
                                                    <a href="{{route('country.index')}}" class="btn btn-primary">View All</a>
                                                </fieldset>
                                            </form> -->
                                            <form class="form" action="{{route('post-data.country')}}" method="post">
                                                @csrf
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <label class="sr-only" for="country">Country Name</label>
                                                        <input type="text" id="country" class="form-control" placeholder="Country Name" name="country">
                                                        @if($errors->has('country'))
                                                            <div class="error" style="color:red">{{$errors->first('country')}}</div>
                                                        @endif
                                                    </div>
                                                     <div class="form-group">
                                                        <label class="sr-only" for="code">Country Code</label>
                                                        <input type="text" id="code" class="form-control" placeholder="Country Code" name="code">
                                                        @if($errors->has('code'))
                                                            <div class="error" style="color:red">{{$errors->first('code')}}</div>
                                                        @endif
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                       <label class="sr-only" for="phonecode">Country Phonecode</label>
                                                        <input type="text" id="phonecode" class="form-control" placeholder="Country Phonecode" name="phonecode">
                                                        @if($errors->has('phonecode'))
                                                            <div class="error" style="color:red">{{$errors->first('phonecode')}}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                     <button type="submit" class="btn btn-success">Submit</button>
                                                    <a href="{{route('country.index')}}" class="btn btn-primary">View All</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Alert animation end -->
    </div>
    <!-- END: Content-->
@stop


