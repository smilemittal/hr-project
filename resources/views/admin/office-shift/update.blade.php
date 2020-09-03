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
                        <li class="breadcrumb-item"><a href="#">Create Office Shift</a>
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
                                <form action="{{route('post-update.office-shift', encrypt($office_shift->id))}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">
                                             <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput1">Shift Name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="userinput1"
                                                               class="form-control border-primary" name="shift_name" value="{{$office_shift->shift_name}}">
                                                        @if($errors->has('shift_name'))
                                                            <div class="error" style="color:red">Shift Name is required.</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput1">Week Day</label>
                                                    <div class="col-md-9">
                                                        <select name="weekday" id="weekday" class="form-control border-primary">
                                                            <option value="">Select</option>
                                                            @foreach($weekdays as $day)
                                                                <option value="{{$day}}" @if($day == $office_shift->weekday)selected @endif>{{$day}}</option>
                                                            @endforeach
                                                        </select>
                                                        @if($errors->has('weekday'))
                                                            <div class="error" style="color:red">Weekday is required.</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput2">From</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="userinput2"
                                                               class="form-control border-primary timepicker1" name="from" value="{{\Carbon\Carbon::parse($office_shift->from)->format('h:i A')}}">
                                                        @if($errors->has('from'))
                                                            <div class="error" style="color:red">From Time is required.</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput1">To</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="userinput1"
                                                               class="form-control border-primary timepicker2" name="to" value="{{\Carbon\Carbon::parse($office_shift->to)->format('h:i A')}}">
                                                        @if($errors->has('to'))
                                                            <div class="error" style="color:red">To Time is required.</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput2">Start Date</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="userinput2"
                                                               class="form-control border-primary datepicker1" name="start_date" value="{{\Carbon\Carbon::parse($office_shift->start_date)->format('d F, Y')}}">
                                                        @if($errors->has('start_date'))
                                                            <div class="error" style="color:red">Start Date is required.</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control"
                                                           for="userinput1">End Date</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="userinput1"
                                                               class="form-control border-primary datepicker2" name="end_date" value="{{\Carbon\Carbon::parse($office_shift->end_date)->format('d F, Y')}}">
                                                        @if($errors->has('end_date'))
                                                            <div class="error" style="color:red">End Date is required.</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput1">Status</label>
                                                    <div class="col-md-9">
                                                        <select name="status" id="status" class="form-control border-primary">
                                                            <option value="active" @if($office_shift->status == 'active') selected @endif>Active</option>
                                                            <option value="inactive" @if($office_shift->status == 'inactive') selected @endif>Inactive</option>
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
                                        <a href="{{route('office-shift.index')}}" class="btn btn-primary mr-1">View All</a>
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

@section('scripts')
<script src="{{asset('app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js')}}" type="text/javascript"></script>




<script type="text/javascript">
$(document).ready(function(){
$('.datepicker1').pickadate({
        formatSubmit: 'yyyy/mm/dd',
        hiddenName: true
     })
$('.datepicker2').pickadate({
        formatSubmit: 'yyyy/mm/dd',
        hiddenName: true
     })
  $('.timepicker1').pickatime({
            formatSubmit: 'HH:i',
              hiddenName: true
         });
 $('.timepicker2').pickatime({
            formatSubmit: 'HH:i',
              hiddenName: true
         });
});

    $('.datepicker1').on('click', function() {
     $('.datepicker1').pickadate({
        formatSubmit: 'yyyy/mm/dd',
        hiddenName: true
     })
    });
    $('.datepicker2').on('click', function() {
     $('.datepicker2').pickadate({
        formatSubmit: 'yyyy/mm/dd',
        hiddenName: true
     })
    });
    $('.timepicker1').on('click', function(){
         $('.timepicker1').pickatime({
            formatSubmit: 'HH:i',
              hiddenName: true
         });
    });
     $('.timepicker2').on('click', function(){
         $('.timepicker2').pickatime({
            formatSubmit: 'HH:i',
              hiddenName: true
         });
    }); 
</script>


@endsection


