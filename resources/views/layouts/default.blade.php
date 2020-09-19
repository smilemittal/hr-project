<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
          content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords"
          content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>ERP</title>
    <link rel="apple-touch-icon" href="{{asset('app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('app-assets/images/ico/favicon.ico')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/toastr.css')}}">
    <link
        href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/vendors.min.css')}}">
    @yield('page-vendor-css')

    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/components.css')}}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/colors/palette-gradient.min.css')}}">

    @yield('page-css')
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns   fixed-navbar" data-open="click"
      data-menu="vertical-menu-modern" data-color="bg-gradient-x-purple-red" data-col="2-columns">

<!-- BEGIN: Header-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="collapse navbar-collapse show" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    {{--                    <li class="nav-item mobile-menu d-md-none mr-auto">--}}
                    {{--                        <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">--}}
                    {{--                            <i class="ft-menu font-large-1"> </i>--}}
                    {{--                        </a>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="nav-item d-none d-md-block">--}}
                    {{--                        <a class="nav-link nav-link-expand" href="#">--}}
                    {{--                            <i class="ficon ft-maximize"></i>--}}
                    {{--                        </a>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="dropdown nav-item mega-dropdown d-none d-md-block">--}}
                    {{--                        <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Mega</a>--}}
                    {{--                        <ul class="mega-dropdown-menu dropdown-menu row">--}}
                    {{--                            <li class="col-md-2">--}}
                    {{--                                <h6 class="dropdown-menu-header text-uppercase mb-1">--}}
                    {{--                                    <i class="ft-link"></i> Quick Links</h6>--}}
                    {{--                                <ul>--}}
                    {{--                                    <li>--}}
                    {{--                                        <a class="my-1" href="chat-application.html"><i class="ft-home"></i>Chat</a>--}}
                    {{--                                    </li>--}}
                    {{--                                    <li>--}}
                    {{--                                        <a class="my-1" href="table-bootstrap.html"><i class="ft-grid"></i> Tables</a>--}}
                    {{--                                    </li>--}}
                    {{--                                    <li>--}}
                    {{--                                        <a class="my-1" href="chartist-charts.html"><i class="ft-bar-chart"></i> Charts</a>--}}
                    {{--                                    </li>--}}
                    {{--                                    <li>--}}
                    {{--                                        <a class="my-1" href="gallery-grid.html"><i class="ft-sidebar"></i> Gallery</a>--}}
                    {{--                                    </li>--}}
                    {{--                                </ul>--}}
                    {{--                            </li>--}}
                    {{--                            <li class="col-md-3">--}}
                    {{--                                <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="ft-star"></i> My--}}
                    {{--                                    Bookmarks</h6>--}}
                    {{--                                <ul class="ml-2">--}}
                    {{--                                    <li class="list-style-circle"><a class="my-1" href="card-bootstrap.html">--}}
                    {{--                                            Cards</a></li>--}}
                    {{--                                    <li class="list-style-circle"><a class="my-1" href="full-calender.html">--}}
                    {{--                                            Calender</a></li>--}}
                    {{--                                    <li class="list-style-circle"><a class="my-1" href="invoice-template.html">--}}
                    {{--                                            Invoice</a></li>--}}
                    {{--                                    <li class="list-style-circle"><a class="my-1" href="users-contacts.html">--}}
                    {{--                                            Contact</a></li>--}}
                    {{--                                </ul>--}}
                    {{--                            </li>--}}
                    {{--                            <li class="col-md-3">--}}
                    {{--                                <h6 class="dropdown-menu-header text-uppercase"><i class="ft-layers"></i> Recent--}}
                    {{--                                    Products</h6>--}}
                    {{--                                <div class="carousel slide pt-1" id="carousel-example" data-ride="carousel">--}}
                    {{--                                    <div class="carousel-inner" role="listbox">--}}
                    {{--                                        <div class="carousel-item active"><img class="d-block w-100"--}}
                    {{--                                                                               src="{{asset('app-assets/images/carousel/08.jpg')}}"--}}
                    {{--                                                                               alt="First slide"></div>--}}
                    {{--                                        <div class="carousel-item"><img class="d-block w-100"--}}
                    {{--                                                                        src="{{asset('app-assets/images/carousel/03.jpg')}}"--}}
                    {{--                                                                        alt="Second slide"></div>--}}
                    {{--                                        <div class="carousel-item"><img class="d-block w-100"--}}
                    {{--                                                                        src="{{asset('app-assets/images/carousel/01.jpg')}}"--}}
                    {{--                                                                        alt="Third slide"></div>--}}
                    {{--                                    </div>--}}
                    {{--                                    <a class="carousel-control-prev" href="#carousel-example" role="button"--}}
                    {{--                                       data-slide="prev"><span class="la la-angle-left" aria-hidden="true"></span><span--}}
                    {{--                                            class="sr-only">Previous</span></a><a class="carousel-control-next"--}}
                    {{--                                                                                  href="#carousel-example" role="button"--}}
                    {{--                                                                                  data-slide="next"><span--}}
                    {{--                                            class="la la-angle-right icon-next" aria-hidden="true"></span><span--}}
                    {{--                                            class="sr-only">Next</span></a>--}}
                    {{--                                    <h5 class="pt-1">Special title treatment</h5>--}}
                    {{--                                    <p>Jelly beans sugar plum.</p>--}}
                    {{--                                </div>--}}
                    {{--                            </li>--}}
                    {{--                            <li class="col-md-4">--}}
                    {{--                                <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="ft-thumbs-up"></i> Get in--}}
                    {{--                                    touch</h6>--}}
                    {{--                                <form class="form form-horizontal pt-1">--}}
                    {{--                                    <div class="form-body">--}}
                    {{--                                        <div class="form-group row">--}}
                    {{--                                            <label class="col-sm-3 form-control-label" for="inputName1">Name</label>--}}
                    {{--                                            <div class="col-sm-9">--}}
                    {{--                                                <div class="position-relative has-icon-left">--}}
                    {{--                                                    <input class="form-control" id="inputName1" type="text"--}}
                    {{--                                                           placeholder="John Doe">--}}
                    {{--                                                    <div class="form-control-position pl-1"><i class="ft-user"></i>--}}
                    {{--                                                    </div>--}}
                    {{--                                                </div>--}}
                    {{--                                            </div>--}}
                    {{--                                        </div>--}}
                    {{--                                        <div class="form-group row">--}}
                    {{--                                            <label class="col-sm-3 form-control-label"--}}
                    {{--                                                   for="inputContact1">Contact</label>--}}
                    {{--                                            <div class="col-sm-9">--}}
                    {{--                                                <div class="position-relative has-icon-left">--}}
                    {{--                                                    <input class="form-control" id="inputContact1" type="text"--}}
                    {{--                                                           placeholder="(123)-456-7890">--}}
                    {{--                                                    <div class="form-control-position pl-1"><i--}}
                    {{--                                                            class="ft-smartphone"></i></div>--}}
                    {{--                                                </div>--}}
                    {{--                                            </div>--}}
                    {{--                                        </div>--}}
                    {{--                                        <div class="form-group row">--}}
                    {{--                                            <label class="col-sm-3 form-control-label" for="inputEmail1">Email</label>--}}
                    {{--                                            <div class="col-sm-9">--}}
                    {{--                                                <div class="position-relative has-icon-left">--}}
                    {{--                                                    <input class="form-control" id="inputEmail1" type="email"--}}
                    {{--                                                           placeholder="john@example.com">--}}
                    {{--                                                    <div class="form-control-position pl-1"><i class="ft-mail"></i>--}}
                    {{--                                                    </div>--}}
                    {{--                                                </div>--}}
                    {{--                                            </div>--}}
                    {{--                                        </div>--}}
                    {{--                                        <div class="form-group row">--}}
                    {{--                                            <label class="col-sm-3 form-control-label"--}}
                    {{--                                                   for="inputMessage1">Message</label>--}}
                    {{--                                            <div class="col-sm-9">--}}
                    {{--                                                <div class="position-relative has-icon-left">--}}
                    {{--                                                    <textarea class="form-control" id="inputMessage1" rows="2"--}}
                    {{--                                                              placeholder="Simple Textarea"></textarea>--}}
                    {{--                                                    <div class="form-control-position pl-1"><i--}}
                    {{--                                                            class="ft-message-circle"></i></div>--}}
                    {{--                                                </div>--}}
                    {{--                                            </div>--}}
                    {{--                                        </div>--}}
                    {{--                                        <div class="row">--}}
                    {{--                                            <div class="col-sm-12 mb-1">--}}
                    {{--                                                <button class="btn btn-danger float-right" type="button"><i--}}
                    {{--                                                        class="ft-arrow-right"></i> Submit--}}
                    {{--                                                </button>--}}
                    {{--                                            </div>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                </form>--}}
                    {{--                            </li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="dropdown d-none d-md-block mr-1">--}}
                    {{--                        <a class="dropdown-toggle nav-link" id="apps-navbar-links" href="#"--}}
                    {{--                           data-toggle="dropdown">Apps</a>--}}
                    {{--                        <div class="dropdown-menu">--}}
                    {{--                            <div class="arrow_box"><a class="dropdown-item" href="email-application.html"><i--}}
                    {{--                                        class="ft-user"></i> Email</a><a class="dropdown-item"--}}
                    {{--                                                                         href="chat-application.html"><i--}}
                    {{--                                        class="ft-mail"></i> Chat</a><a class="dropdown-item"--}}
                    {{--                                                                        href="project-summary.html"><i--}}
                    {{--                                        class="ft-briefcase"></i> Project Summary </a><a class="dropdown-item"--}}
                    {{--                                                                                         href="full-calender.html"><i--}}
                    {{--                                        class="ft-calendar"></i> Calendar </a></div>--}}
                    {{--                        </div>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="nav-item dropdown navbar-search">--}}
                    {{--                        <a class="nav-link dropdown-toggle hide" data-toggle="dropdown" href="#"><i--}}
                    {{--                                class="ficon ft-search"></i></a>--}}
                    {{--                        <ul class="dropdown-menu">--}}
                    {{--                            <li class="arrow_box">--}}
                    {{--                                <form>--}}
                    {{--                                    <div class="input-group search-box">--}}
                    {{--                                        <div class="position-relative has-icon-right full-width">--}}
                    {{--                                            <input class="form-control" id="search" type="text"--}}
                    {{--                                                   placeholder="Search here...">--}}
                    {{--                                            <div class="form-control-position navbar-search-close"><i class="ft-x"></i>--}}
                    {{--                                            </div>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                </form>--}}
                    {{--                            </li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}
                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-language nav-item">
                        <a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="flag-icon flag-icon-us"></i>
                            <span class="selected-language"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                            <div class="arrow_box">
                                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-us"></i> English</a>
                                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> Chinese</a>
                                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-ru"></i> Russian</a>
                                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a>
                                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-es"></i> Spanish</a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown dropdown-notification nav-item">
                        <a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
                            <i class="ficon ft-bell bell-shake" id="notification-navbar-link"></i>
                            <span class="badge badge-pill badge-sm badge-info badge-up badge-glow">5</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <div class="arrow_box_right">
                                <li class="dropdown-menu-header">
                                    <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span>
                                    </h6>
                                </li>
                                <li class="scrollable-container media-list w-100"><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i
                                                    class="ft-plus-square icon-bg-circle bg-cyan"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">You have new order!</h6>
                                                <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor
                                                    sit amet, consectetuer elit.</p><small>
                                                    <time class="media-meta text-muted"
                                                          datetime="2015-06-11T18:29:20+08:00">30 minutes ago
                                                    </time>
                                                </small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i
                                                    class="ft-download-cloud icon-bg-circle bg-red bg-darken-1"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading red darken-1">99% Server load</h6>
                                                <p class="notification-text font-small-3 text-muted">Aliquam tincidunt
                                                    mauris eu risus.</p><small>
                                                    <time class="media-meta text-muted"
                                                          datetime="2015-06-11T18:29:20+08:00">Five hour ago
                                                    </time>
                                                </small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i
                                                    class="ft-alert-triangle icon-bg-circle bg-yellow bg-darken-3"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                                                <p class="notification-text font-small-3 text-muted">Vestibulum auctor
                                                    dapibus neque.</p><small>
                                                    <time class="media-meta text-muted"
                                                          datetime="2015-06-11T18:29:20+08:00">Today
                                                    </time>
                                                </small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i
                                                    class="ft-check-circle icon-bg-circle bg-cyan"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Complete the task</h6><small>
                                                    <time class="media-meta text-muted"
                                                          datetime="2015-06-11T18:29:20+08:00">Last week
                                                    </time>
                                                </small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i
                                                    class="ft-file icon-bg-circle bg-teal"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Generate monthly report</h6><small>
                                                    <time class="media-meta text-muted"
                                                          datetime="2015-06-11T18:29:20+08:00">Last month
                                                    </time>
                                                </small>
                                            </div>
                                        </div>
                                    </a></li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center"
                                                                    href="javascript:void(0)">Read all notifications</a>
                                </li>
                            </div>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#"
                                                                           data-toggle="dropdown"><i
                                class="ficon ft-mail"> </i></a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <div class="arrow_box_right">
                                <li class="dropdown-menu-header">
                                    <h6 class="dropdown-header m-0"><span class="grey darken-2">Messages</span></h6>
                                </li>
                                <li class="scrollable-container media-list w-100"><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left"><span
                                                    class="avatar avatar-sm avatar-online rounded-circle"><img
                                                        src="{{asset('app-assets/images/portrait/small/avatar-s-19.png')}}"
                                                        alt="avatar"><i></i></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Margaret Govan</h6>
                                                <p class="notification-text font-small-3 text-muted">I like your
                                                    portfolio, let's start.</p><small>
                                                    <time class="media-meta text-muted"
                                                          datetime="2015-06-11T18:29:20+08:00">Today
                                                    </time>
                                                </small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left"><span
                                                    class="avatar avatar-sm avatar-busy rounded-circle"><img
                                                        src="{{asset('app-assets/images/portrait/small/avatar-s-2.png')}}"
                                                        alt="avatar"><i></i></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Bret Lezama</h6>
                                                <p class="notification-text font-small-3 text-muted">I have seen your
                                                    work, there is</p><small>
                                                    <time class="media-meta text-muted"
                                                          datetime="2015-06-11T18:29:20+08:00">Tuesday
                                                    </time>
                                                </small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left"><span
                                                    class="avatar avatar-sm avatar-online rounded-circle"><img
                                                        src="{{asset('app-assets/images/portrait/small/avatar-s-3.png')}}"
                                                        alt="avatar"><i></i></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Carie Berra</h6>
                                                <p class="notification-text font-small-3 text-muted">Can we have call in
                                                    this week ?</p><small>
                                                    <time class="media-meta text-muted"
                                                          datetime="2015-06-11T18:29:20+08:00">Friday
                                                    </time>
                                                </small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left"><span
                                                    class="avatar avatar-sm avatar-away rounded-circle"><img
                                                        src="{{asset('app-assets/images/portrait/small/avatar-s-6.png')}}"
                                                        alt="avatar"><i></i></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Eric Alsobrook</h6>
                                                <p class="notification-text font-small-3 text-muted">We have project
                                                    party this saturday.</p><small>
                                                    <time class="media-meta text-muted"
                                                          datetime="2015-06-11T18:29:20+08:00">last month
                                                    </time>
                                                </small>
                                            </div>
                                        </div>
                                    </a></li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center"
                                                                    href="javascript:void(0)">Read all messages</a></li>
                            </div>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link"
                                                                   href="#" data-toggle="dropdown"> <span
                                class="avatar avatar-online"><img
                                    src="{{asset('app-assets/images/portrait/small/avatar-s-19.png')}}"
                                    alt="avatar"><i></i></span></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="arrow_box_right"><a class="dropdown-item" href="#"><span
                                        class="avatar avatar-online"><img
                                            src="{{asset('app-assets/images/portrait/small/avatar-s-19.png')}}"
                                            alt="avatar"><span
                                            class="user-name text-bold-700 ml-1">John Doe</span></span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="user-profile.html"><i class="ft-user"></i> Edit
                                    Profile</a><a class="dropdown-item" href="email-application.html"><i
                                        class="ft-mail"></i> My Inbox</a><a class="dropdown-item"
                                                                            href="project-summary.html"><i
                                        class="ft-check-square"></i> Task</a><a class="dropdown-item"
                                                                                href="chat-application.html"><i
                                        class="ft-message-square"></i> Chats</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="login.html"><i class="ft-power"></i> Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true"
     data-img="{{asset('app-assets/images/backgrounds/04.jpg')}}">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row position-relative">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="index.html">
                    <img class="brand-logo" alt="Chameleon admin logo"
                         src="{{asset('app-assets/images/logo/logo.png')}}"/>
                    <!-- <h3 class="brand-text">Chameleon</h3> -->
                </a>
            </li>
            <li class="nav-item d-none d-md-block nav-toggle">
                <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                    <i class="toggle-icon ft-disc font-medium-3" data-ticon="ft-disc"></i>
                </a>
            </li>
            <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
    </div>
    <div class="navigation-background"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class=" nav-item"><a href="#"><i class="ft-life-buoy"></i><span
                        class="menu-title" data-i18n="">Dashboard</span></a>
            </li>

            <li class=" nav-item">
                <a href="#">
                    <i class="ft-settings"></i>
                    <span class="menu-title" data-i18n="">Settings</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="{{route('contract-type.index')}}">Contract Type</a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{route('education-level.index')}}">Education Level</a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{route('document-type.index')}}">Document Type</a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{route('job-type.index')}}">Job Type</a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{route('job-category.index')}}">Job Category</a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{route('nationality.index')}}">Nationality</a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{route('gender.index')}}">Gender</a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{route('blood-group.index')}}">Blood Group</a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{route('martial-status.index')}}">Martial Status</a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{route('contact-tag.index')}}">Contact Tag</a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{route('contact-title.index')}}">Contact Title</a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{route('industry-and-business.index')}}">Industry & Business</a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{route('country.index')}}">Country</a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{route('city.index')}}">City</a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{route('state.index')}}">State</a>
                    </li>
                    {{--                                <li><a class="menu-item" href="#">Error</a>--}}
                    {{--                                    <ul class="menu-content">--}}
                    {{--                                        <li><a class="menu-item" href="error-400.html">Error 400</a>--}}
                    {{--                                        </li>--}}
                    {{--                                        <li><a class="menu-item" href="error-401.html">Error 401</a>--}}
                    {{--                                        </li>--}}
                    {{--                                        <li><a class="menu-item" href="error-403.html">Error 403</a>--}}
                    {{--                                        </li>--}}
                    {{--                                        <li><a class="menu-item" href="error-404.html">Error 404</a>--}}
                    {{--                                        </li>--}}
                    {{--                                        <li><a class="menu-item" href="error-500.html">Error 500</a>--}}
                    {{--                                        </li>--}}
                    {{--                                    </ul>--}}
                    {{--                                </li>--}}
                </ul>
            </li>


            <li class=" nav-item">
                <a href="#">
                    <i class="ft-user"></i>
                    <span class="menu-title" data-i18n="">Contact</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="{{route('contact.index')}}">List</a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{route('contact.create')}}">Add</a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{route('contact.trash.view')}}">Trash</a>
                    </li>

                </ul>
            </li>


            <li class=" nav-item"><a href="{{route('employee.index')}}"><i class="ft-user"></i><span
                        class="menu-title" data-i18n="">Employee</span></a>
            </li>
            <li class=" nav-item">
                 <a href="#">
                    <i class="ft-settings"></i>
                    <span class="menu-title" data-i18n="">Company</span>
                </a>
                    <ul class="menu-content">
                        <li>
                           <a href="{{route('company.index')}}"><span
                            class="menu-title" data-i18n="">List</span></a>
                        </li>
                         <li>
                           <a href="{{route('branch.index')}}"><span
                            class="menu-title" data-i18n="">Branches</span></a>
                        </li>
                    </ul>
                    
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        @yield('content')
    </div>
</div>
<!-- END: Content-->


<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light navbar-border navbar-shadow">
    <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span
            class="float-md-left d-block d-md-inline-block">2019 &copy; Copyright <a class="text-bold-800 grey darken-2"
                                                                                     href="https://themeselection.com"
                                                                                     target="_blank">ThemeSelection</a></span>
        <ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">
            <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/" target="_blank"> More
                    themes</a></li>
            <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/support" target="_blank">
                    Support</a></li>
        </ul>
    </div>
</footer>
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="{{asset('app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
<!-- BEGIN Vendor JS-->


<!-- BEGIN: Page Vendor JS-->
@yield('page-vendor-js')
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{asset('app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
<script src="{{asset('app-assets/js/core/app.js')}}" type="text/javascript"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
@yield('page-js')
<!-- END: Page JS-->
<script src="{{asset('app-assets/js/scripts/extensions/toastr.js')}}" type="text/javascript"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/datatables.min.js')}}" type="text/javascript"></script>
<script src="{{asset('app-assets/js/scripts/tables/datatables/datatable-basic.js')}}" type="text/javascript"></script>
<script src="{{asset('app-assets/js/hr/contact/contact.js')}}" type="text/javascript"></script>
<script>
    setTimeout(function(){
        document.getElementById('alert-success-message').style.display = 'none'
    }, 3000);
    setTimeout(function(){
        document.getElementById('alert-error-message').style.display = 'none'
    }, 3000);
</script>
@yield('scripts')


</body>
<!-- END: Body-->

</html>
