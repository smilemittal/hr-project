@extends('layouts.default')
@section('content')
    <!-- BEGIN: Content-->
    <div class="content-header row">
        <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
            <h3 class="content-header-title mb-0 d-inline-block">Admin</h3>
            <div class="breadcrumbs-top d-inline-block">
                <div class="breadcrumb-wrapper mr-1">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Settings</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Job Type</a>
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
                                <p class="card-text"><a href="{{route('create-view-job-type')}}"
                                                        class="btn btn-success float-right">Add</a></p>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Job Type</th>
                                            <th>Status</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php
                                            $i="1";
                                        @endphp
                                        @foreach($jobTypes as $jobType)
                                            <tr>
                                                <td>{{$i}}</td>
                                                <td>{{$jobType->value}}</td>
                                                <td>
                                                    @if($jobType->status === 'active')
                                                        <span style="color:green"> {{$jobType->status}}</span>
                                                    @else
                                                        <span style="color:blue"> {{$jobType->status}}</span>
                                                    @endif

                                                </td>
                                                <td>{{$jobType->created_at->diffForHumans()}}</td>
                                                <td>
                                                    @if($jobType->status === 'active')
                                                        <a href="{{route('inactive-job-type' , encrypt($jobType->id))}}" class="btn btn-warning mr-2"
                                                           title="click to make inactive the active value">Inactive</a>
                                                    @else
                                                        <a href="{{route('active-job-type' ,  encrypt($jobType->id))}}" class="btn btn-success mr-2"
                                                           title="click to make active the inactive value">Active</a>
                                                    @endif
                                                        <a href="{{route('update-job-type' ,  encrypt($jobType->id))}}" class="btn btn-dark mr-2" title="update the value">Update</a>
                                                        <a href="{{route('delete-job-type' ,  encrypt($jobType->id))}}" class="btn btn-danger mr-2" title="Danger! this action will delete the record from database">Delete</a>
                                                </td>
                                            </tr>
                                            @php
                                                $i++;
                                            @endphp
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Job Type</th>
                                            <th>Status</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                        </tr>
                                        </tfoot>
                                    </table>
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
