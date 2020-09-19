@extends('layouts.default')
@section('content')
    <!-- BEGIN: Content-->
    <div class="content-header row">
        <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
            <h3 class="content-header-title mb-0 d-inline-block">Admin</h3>
            <div class="breadcrumbs-top d-inline-block">
                <div class="breadcrumb-wrapper mr-1">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Contact</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Trash</a>
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
                                <p class="card-text"><a href="{{route('contact.index')}}"
                                                        class="btn btn-success float-right">View All</a></p>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Type</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Status</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php
                                            $i="1";
                                        @endphp
                                        @foreach($contacts as $contact)
                                            <tr>
                                                <td>{{$i}}</td>
                                                <td>{{$contact->contact_type}}</td>
                                                <td>{{$contact->contact_name}}</td>
                                                <td>
                                                    @if($contact->getAddressInfo->count() > 0)
                                                        {{isset($contact->getAddressInfo[0]->email)?$contact->getAddressInfo[0]->email:"not found"}}
                                                    @else
                                                        not found
                                                    @endif

                                                </td>
                                                <td>
                                                    @if($contact->getAddressInfo->count() > 0)
                                                        {{isset($contact->getAddressInfo[0]->phone)?$contact->getAddressInfo[0]->phone:"not found"}}
                                                    @else
                                                        not found
                                                    @endif
                                                </td>
                                                <td> {{$contact->status}}</td>
                                                <td>{{ !empty($contact->created_at)?$contact->created_at->diffForHumans(): ''}}</td>
                                                <td>
                                                    <span class="dropdown">
                                                        <button id="btnSearchDrop12" type="button" class="btn btn-sm btn-icon btn-pure font-medium-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ft-more-vertical"></i>
                                                        </button>
                                                        <span aria-labelledby="btnSearchDrop12" class="dropdown-menu mt-1 dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(55px, 27px, 0px);">
                                                            <a href="{{route('contact.restore' ,  encrypt($contact->id))}}" class="dropdown-item" title="Restore the trash record.">
                                                                <i class="ft-trash-2"></i> Restore</a>
                                                            <a href="{{route('contact.delete' ,  encrypt($contact->id))}}" class="dropdown-item" title="Danger! this action will delete the record from Database.">
                                                                <i class="ft-edit-2"></i> Delete</a>
                                                        </span>
                                                    </span>

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
                                            <th>Type</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
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
