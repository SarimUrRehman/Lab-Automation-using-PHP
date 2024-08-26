<!doctype html>
<html lang="en" >

<head>
    <meta charset="utf-8" />
    <title>Dripicons | Qovex - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style"  rel="stylesheet" type="text/css" />

</head>

<body data-layout="detached" data-topbar="colored">



    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

<div class="container-fluid">
    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                <div class="container-fluid">
                    <div class="float-end">

                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item noti-icon waves-effect"
                                id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">

                                <form class="p-3">
                                    <div class="m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..."
                                                aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i
                                                        class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="dropdown d-none d-sm-inline-block">
                            <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img class="" src="assets/images/flags/us.jpg" alt="Header Language" height="16">
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span
                                        class="align-middle">Spanish</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span
                                        class="align-middle">German</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span
                                        class="align-middle">Italian</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span
                                        class="align-middle">Russian</span>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                                <i class="mdi mdi-fullscreen"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon waves-effect"
                                id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="mdi mdi-bell-outline"></i>
                                <span class="badge rounded-pill bg-danger ">3</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0"> Notifications </h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#!" class="small"> View All</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 230px;">
                                    <a href="" class="text-reset notification-item">
                                        <div class="d-flex align-items-start">
                                            <div class="avatar-xs me-3">
                                                <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                    <i class="bx bx-cart"></i>
                                                </span>
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mt-0 mb-1">Your order is placed</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">If several languages coalesce the grammar</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="text-reset notification-item">
                                        <div class="d-flex align-items-start">
                                            <img src="assets/images/users/avatar-3.jpg" class="me-3 rounded-circle avatar-xs"
                                                alt="user-pic">
                                            <div class="flex-1">
                                                <h6 class="mt-0 mb-1">James Lemire</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">It will seem like simplified English.</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="text-reset notification-item">
                                        <div class="d-flex align-items-start">
                                            <div class="avatar-xs me-3">
                                                <span class="avatar-title bg-success rounded-circle font-size-16">
                                                    <i class="bx bx-badge-check"></i>
                                                </span>
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mt-0 mb-1">Your item is shipped</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">If several languages coalesce the grammar</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="" class="text-reset notification-item">
                                        <div class="d-flex align-items-start">
                                            <img src="assets/images/users/avatar-4.jpg" class="me-3 rounded-circle avatar-xs"
                                                alt="user-pic">
                                            <div class="flex-1">
                                                <h6 class="mt-0 mb-1">Salena Layfield</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 border-top d-grid">
                                    <a class="btn btn-sm btn-link font-size-14 " href="javascript:void(0)">
                                        <i class="mdi mdi-arrow-right-circle me-1"></i> View More..
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-2.jpg"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1">Patrick</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i>
                                    Profile</a>
                                <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle me-1"></i> My
                                    Wallet</a>
                                <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">11</span><i
                                        class="bx bx-wrench font-size-16 align-middle me-1"></i> Settings</a>
                                <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i>
                                    Lock screen</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#"><i
                                        class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> Logout</a>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button  type="button" class="btn header-item noti-icon right-bar-toggle waves-effect" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                                <i class="mdi mdi-settings-outline"></i>
                            </button>
                        </div>

                    </div>
                    <div>
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm.png" alt="" height="20">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-dark.png" alt="" height="17">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm.png" alt="" height="20">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-light.png" alt="" height="19">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item toggle-btn waves-effect"
                            id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-lg-inline-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="bx bx-search-alt"></span>
                            </div>
                        </form>

                        <div class="dropdown dropdown-mega d-none d-lg-inline-block ms-2">
                            <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown"
                                aria-haspopup="false" aria-expanded="false">
                                Mega Menu
                                <i class="mdi mdi-chevron-down"></i>
                            </button>
                            <div class="dropdown-menu dropdown-megamenu">
                                <div class="row">
                                    <div class="col-sm-6">

                                        <div class="row">
                                            <div class="col-md-4">
                                                <h5 class="font-size-14 mt-0">UI Components</h5>
                                                <ul class="list-unstyled megamenu-list text-muted">
                                                    <li>
                                                        <a href="javascript:void(0);">Lightbox</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Range Slider</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Sweet Alert</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Rating</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Forms</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Tables</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Charts</a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="col-md-4">
                                                <h5 class="font-size-14 mt-0">Applications</h5>
                                                <ul class="list-unstyled megamenu-list">
                                                    <li>
                                                        <a href="javascript:void(0);">Ecommerce</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Calendar</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Email</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Projects</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Tasks</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Contacts</a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="col-md-4">
                                                <h5 class="font-size-14 mt-0">Extra Pages</h5>
                                                <ul class="list-unstyled megamenu-list">
                                                    <li>
                                                        <a href="javascript:void(0);">Light Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Compact Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Horizontal layout</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Maintenance</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Coming Soon</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Timeline</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">FAQs</a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h5 class="font-size-14 mt-0">Components</h5>
                                                <div class="px-lg-2">
                                                    <div class="row g-0">
                                                        <div class="col">
                                                            <a class="dropdown-icon-item" href="#">
                                                                <img src="assets/images/brands/github.png" alt="Github">
                                                                <span>GitHub</span>
                                                            </a>
                                                        </div>
                                                        <div class="col">
                                                            <a class="dropdown-icon-item" href="#">
                                                                <img src="assets/images/brands/bitbucket.png" alt="bitbucket">
                                                                <span>Bitbucket</span>
                                                            </a>
                                                        </div>
                                                        <div class="col">
                                                            <a class="dropdown-icon-item" href="#">
                                                                <img src="assets/images/brands/dribbble.png" alt="dribbble">
                                                                <span>Dribbble</span>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="row g-0">
                                                        <div class="col">
                                                            <a class="dropdown-icon-item" href="#">
                                                                <img src="assets/images/brands/dropbox.png" alt="dropbox">
                                                                <span>Dropbox</span>
                                                            </a>
                                                        </div>
                                                        <div class="col">
                                                            <a class="dropdown-icon-item" href="#">
                                                                <img src="assets/images/brands/mail_chimp.png" alt="mail_chimp">
                                                                <span>Mail Chimp</span>
                                                            </a>
                                                        </div>
                                                        <div class="col">
                                                            <a class="dropdown-icon-item" href="#">
                                                                <img src="assets/images/brands/slack.png" alt="slack">
                                                                <span>Slack</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div>
                                                    <div class="card text-white mb-0 overflow-hidden text-white-50"
                                                        style="background-image: url('assets/images/megamenu-img.png');background-size: cover;">
                                                        <div class="card-img-overlay"></div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-xl-6">
                                                                    <h4 class="text-white mb-3">Sale</h4>

                                                                    <h5 class="text-white-50">Up to <span
                                                                            class="font-size-24 text-white">50 %</span> Off</h5>
                                                                    <p>At vero eos accusamus et iusto odio.</p>
                                                                    <div class="mb-4">
                                                                        <a href="#" class="btn btn-success btn-sm">View more</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </header> <!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div class="h-100">

        <div class="user-wid text-center py-4">
            <div class="user-img">
                <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-md mx-auto rounded-circle">
            </div>

            <div class="mt-3">

                <a href="#" class="text-reset fw-medium font-size-16">Patrick Becker</a>
                <p class="text-muted mt-1 mb-0 font-size-13">UI/UX Designer</p>

            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="mdi mdi-airplay"></i><span class="badge rounded-pill bg-info float-end">2</span>
                        <span>Dashboard</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="index.html">Dashboard 1</a></li>
                        <li><a href="index-2.html">Dashboard 2</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-flip-horizontal"></i>
                        <span>Layouts</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="javascript: void(0);" class="has-arrow">Vertical</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="layouts-compact-sidebar.html">Compact Sidebar</a></li>
                                <li><a href="layouts-icon-sidebar.html">Icon Sidebar</a></li>
                                <li><a href="layouts-boxed.html">Boxed Layout</a></li>
                                <li><a href="layouts-preloader.html">Preloader</a></li>
                            </ul>
                        </li>

                        <li><a href="javascript: void(0);" class="has-arrow">Horizontal</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="layouts-horizontal.html">Horizontal</a></li>
                                <li><a href="layouts-hori-topbarlight.html">Topbar Light</a></li>
                                <li><a href="layouts-hori-boxed.html">Boxed Layout</a></li>
                                <li><a href="layouts-hori-preloader.html">Preloader</a></li>
                            </ul>
                        </li>
                    </ul>

                </li>

                <li>
                    <a href="calendar.html" class=" waves-effect">
                        <i class="mdi mdi-calendar-text"></i>
                        <span>Calendar</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-inbox-full"></i>
                        <span>Email</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="email-inbox.html">Inbox</a></li>
                        <li><a href="email-read.html">Read Email</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-calendar-check"></i>
                        <span>Tasks</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tasks-list.html">Task List</a></li>
                        <li><a href="tasks-kanban.html">Kanban Board</a></li>
                        <li><a href="tasks-create.html">Create Task</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-account-circle-outline"></i>
                        <span>Pages</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-login.html">Login</a></li>
                        <li><a href="pages-register.html">Register</a></li>
                        <li><a href="pages-recoverpw.html">Recover Password</a></li>
                        <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                        <li><a href="pages-starter.html">Starter Page</a></li>
                        <li><a href="pages-invoice.html">Invoice</a></li>
                        <li><a href="pages-profile.html">Profile</a></li>
                        <li><a href="pages-maintenance.html">Maintenance</a></li>
                        <li><a href="pages-comingsoon.html">Coming Soon</a></li>
                        <li><a href="pages-timeline.html">Timeline</a></li>
                        <li><a href="pages-faqs.html">FAQs</a></li>
                        <li><a href="pages-pricing.html">Pricing</a></li>
                        <li><a href="pages-404.html">Error 404</a></li>
                        <li><a href="pages-500.html">Error 500</a></li>
                    </ul>
                </li>

                <li class="menu-title">Components</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-checkbox-multiple-blank-outline"></i>
                        <span>UI Elements</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ui-alerts.html">Alerts</a></li>
                        <li><a href="ui-buttons.html">Buttons</a></li>
                        <li><a href="ui-cards.html">Cards</a></li>
                        <li><a href="ui-carousel.html">Carousel</a></li>
                        <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                        <li><a href="ui-grid.html">Grid</a></li>
                        <li><a href="ui-images.html">Images</a></li>
                        <li><a href="ui-lightbox.html">Lightbox</a></li>
                        <li><a href="ui-modals.html">Modals</a></li>
                        <li><a href="ui-rangeslider.html">Range Slider</a></li>
                        <li><a href="ui-session-timeout.html">Session Timeout</a></li>
                        <li><a href="ui-progressbars.html">Progress Bars</a></li>
                        <li><a href="ui-sweet-alert.html">Sweet-Alert</a></li>
                        <li><a href="ui-tabs-accordions.html">Tabs & Accordions</a></li>
                        <li><a href="ui-typography.html">Typography</a></li>
                        <li><a href="ui-video.html">Video</a></li>
                        <li><a href="ui-general.html">General</a></li>
                        <li><a href="ui-colors.html">Colors</a></li>
                        <li><a href="ui-rating.html">Rating</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="mdi mdi-newspaper"></i>
                        <span class="badge rounded-pill bg-danger float-end">6</span>
                        <span>Forms</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="form-elements.html">Form Elements</a></li>
                        <li><a href="form-validation.html">Form Validation</a></li>
                        <li><a href="form-advanced.html">Form Advanced</a></li>
                        <li><a href="form-editors.html">Form Editors</a></li>
                        <li><a href="form-uploads.html">Form File Upload</a></li>
                        <li><a href="form-xeditable.html">Form Xeditable</a></li>
                        <li><a href="form-repeater.html">Form Repeater</a></li>
                        <li><a href="form-wizard.html">Form Wizard</a></li>
                        <li><a href="form-mask.html">Form Mask</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-clipboard-list-outline"></i>
                        <span>Tables</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tables-basic.html">Basic Tables</a></li>
                        <li><a href="tables-datatable.html">Data Tables</a></li>
                        <li><a href="tables-responsive.html">Responsive Table</a></li>
                        <li><a href="tables-editable.html">Editable Table</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-chart-donut"></i>
                        <span>Charts</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="charts-apex.html">Apex charts</a></li>
                        <li><a href="charts-chartjs.html">Chartjs Chart</a></li>
                        <li><a href="charts-flot.html">Flot Chart</a></li>
                        <li><a href="charts-knob.html">Jquery Knob Chart</a></li>
                        <li><a href="charts-sparkline.html">Sparkline Chart</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-emoticon-happy-outline"></i>
                        <span>Icons</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="icons-boxicons.html">Boxicons</a></li>
                        <li><a href="icons-materialdesign.html">Material Design</a></li>
                        <li><a href="icons-dripicons.html">Dripicons</a></li>
                        <li><a href="icons-fontawesome.html">Font awesome</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-map-marker-outline"></i>
                        <span>Maps</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="maps-google.html">Google Maps</a></li>
                        <li><a href="maps-vector.html">Vector Maps</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-file-tree"></i>
                        <span>Multi Level</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="javascript: void(0);">Level 1.1</a></li>
                        <li><a href="javascript: void(0);" class="has-arrow">Level 1.2</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);">Level 2.1</a></li>
                                <li><a href="javascript: void(0);">Level 2.2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="page-title mb-0 font-size-18">Dripicons</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Icons</a></li>
                                    <li class="breadcrumb-item active">Dripicons</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Examples</h4>
                                <p class="card-title-desc mb-2">Use <code>&lt;i
                                            class="dripicons-alarm"&gt;&lt;/i&gt;</code>.
                                </p>

                                <div class="row icon-demo-content">
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-alarm"></i> dripicons-alarm
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-align-center"></i> dripicons-align-center
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-align-justify"></i> dripicons-align-justify
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-align-left"></i> dripicons-align-left
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-align-right"></i> dripicons-align-right
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-anchor"></i> dripicons-anchor
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-archive"></i> dripicons-archive
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-arrow-down"></i> dripicons-arrow-down
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-arrow-left"></i> dripicons-arrow-left
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-arrow-right"></i> dripicons-arrow-right
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-arrow-thin-down"></i> dripicons-arrow-thin-down
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-arrow-thin-left"></i> dripicons-arrow-thin-left
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-arrow-thin-right"></i> dripicons-arrow-thin-right
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-arrow-thin-up"></i> dripicons-arrow-thin-up
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-arrow-up"></i> dripicons-arrow-up
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class=" dripicons-article"></i> dripicons-article
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-backspace"></i> dripicons-backspace
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-basket"></i> dripicons-basket
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-basketball"></i> dripicons-basketball
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-battery-empty"></i> dripicons-battery-empty
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-battery-full"></i> dripicons-battery-full
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-battery-low"></i> dripicons-battery-low
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-battery-medium"></i> dripicons-battery-medium
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-bell"></i> dripicons-bell
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-blog"></i> dripicons-blog
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-bluetooth"></i> dripicons-bluetooth
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-bold"></i> dripicons-bold
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-bookmark"></i> dripicons-bookmark
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-bookmarks"></i> dripicons-bookmarks
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-box"></i> dripicons-box
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-briefcase"></i> dripicons-briefcase
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-brightness-low"></i> dripicons-brightness-low
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-brightness-max"></i> dripicons-brightness-max
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-brightness-medium"></i> dripicons-brightness-medium
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-broadcast"></i> dripicons-broadcast
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-browser"></i> dripicons-browser
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-browser-upload"></i> dripicons-browser-upload
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-brush"></i> dripicons-brush
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-calendar"></i> dripicons-calendar
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-camcorder"></i> dripicons-camcorder
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-camera"></i> dripicons-camera
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-card"></i> dripicons-card
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-cart"></i> dripicons-cart
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-checklist"></i> dripicons-checklist
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-checkmark"></i> dripicons-checkmark
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-chevron-down"></i> dripicons-chevron-down
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-chevron-left"></i> dripicons-chevron-left
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-chevron-right"></i> dripicons-chevron-right
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-chevron-up"></i> dripicons-chevron-up
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-clipboard"></i> dripicons-clipboard
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-clock"></i> dripicons-clock
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-clockwise"></i> dripicons-clockwise
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-cloud"></i> dripicons-cloud
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-cloud-download"></i> dripicons-cloud-download
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-cloud-upload"></i> dripicons-cloud-upload
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-code"></i> dripicons-code
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-contract"></i> dripicons-contract
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-contract-2"></i> dripicons-contract-2
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-conversation"></i> dripicons-conversation
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-copy"></i> dripicons-copy
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-crop"></i> dripicons-crop
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-cross"></i> dripicons-cross
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-crosshair"></i> dripicons-crosshair
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-cutlery"></i> dripicons-cutlery
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-device-desktop"></i> dripicons-device-desktop
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-device-mobile"></i> dripicons-device-mobile
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-device-tablet"></i> dripicons-device-tablet
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-direction"></i> dripicons-direction
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-disc"></i> dripicons-disc
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-document"></i> dripicons-document
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-document-delete"></i> dripicons-document-delete
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-document-edit"></i> dripicons-document-edit
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-document-new"></i> dripicons-document-new
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-document-remove"></i> dripicons-document-remove
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-dot"></i> dripicons-dot
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-dots-2"></i> dripicons-dots-2
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-dots-3"></i> dripicons-dots-3
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-download"></i> dripicons-download
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-duplicate"></i> dripicons-duplicate
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-enter"></i> dripicons-enter
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-exit"></i> dripicons-exit
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-expand"></i> dripicons-expand
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-expand-2"></i> dripicons-expand-2
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-experiment"></i> dripicons-experiment
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-export"></i> dripicons-export
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-feed"></i> dripicons-feed
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-flag"></i> dripicons-flag
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-flashlight"></i> dripicons-flashlight
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-folder"></i> dripicons-folder
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-folder-open"></i> dripicons-folder-open
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-forward"></i> dripicons-forward
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-gaming"></i> dripicons-gaming
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-gear"></i> dripicons-gear
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-graduation"></i> dripicons-graduation
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-graph-bar"></i> dripicons-graph-bar
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-graph-line"></i> dripicons-graph-line
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-graph-pie"></i> dripicons-graph-pie
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-headset"></i> dripicons-headset
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-heart"></i> dripicons-heart
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-help"></i> dripicons-help
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-home"></i> dripicons-home
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-hourglass"></i> dripicons-hourglass
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-inbox"></i> dripicons-inbox
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-information"></i> dripicons-information
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-italic"></i> dripicons-italic
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-jewel"></i> dripicons-jewel
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-lifting"></i> dripicons-lifting
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-lightbulb"></i> dripicons-lightbulb
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-link"></i> dripicons-link
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-link-broken"></i> dripicons-link-broken
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-list"></i> dripicons-list
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-loading"></i> dripicons-loading
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-location"></i> dripicons-location
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-lock"></i> dripicons-lock
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-lock-open"></i> dripicons-lock-open
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-mail"></i> dripicons-mail
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-map"></i> dripicons-map
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-media-loop"></i> dripicons-media-loop
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-media-next"></i> dripicons-media-next
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-media-pause"></i> dripicons-media-pause
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-media-play"></i> dripicons-media-play
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-media-previous"></i> dripicons-media-previous
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-media-record"></i> dripicons-media-record
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-media-shuffle"></i> dripicons-media-shuffle
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-media-stop"></i> dripicons-media-stop
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-medical"></i> dripicons-medical
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-menu"></i> dripicons-menu
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-message"></i> dripicons-message
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-meter"></i> dripicons-meter
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-microphone"></i> dripicons-microphone
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-minus"></i> dripicons-minus
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-monitor"></i> dripicons-monitor
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-move"></i> dripicons-move
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-music"></i> dripicons-music
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-network-1"></i> dripicons-network-1
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-network-2"></i> dripicons-network-2
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-network-3"></i> dripicons-network-3
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-network-4"></i> dripicons-network-4
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-network-5"></i> dripicons-network-5
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-pamphlet"></i> dripicons-pamphlet
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-paperclip"></i> dripicons-paperclip
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-pencil"></i> dripicons-pencil
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-phone"></i> dripicons-phone
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-photo"></i> dripicons-photo
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-photo-group"></i> dripicons-photo-group
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-pill"></i> dripicons-pill
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-pin"></i> dripicons-pin
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-plus"></i> dripicons-plus
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-power"></i> dripicons-power
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-preview"></i> dripicons-preview
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-print"></i> dripicons-print
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-pulse"></i> dripicons-pulse
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-question"></i> dripicons-question
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-reply"></i> dripicons-reply
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-reply-all"></i> dripicons-reply-all
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-return"></i> dripicons-return
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-retweet"></i> dripicons-retweet
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-rocket"></i> dripicons-rocket
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-scale"></i> dripicons-scale
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-search"></i> dripicons-search
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-shopping-bag"></i> dripicons-shopping-bag
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-skip"></i> dripicons-skip
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-stack"></i> dripicons-stack
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-star"></i> dripicons-star
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-stopwatch"></i> dripicons-stopwatch
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-store"></i> dripicons-store
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-suitcase"></i> dripicons-suitcase
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-swap"></i> dripicons-swap
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-tag"></i> dripicons-tag
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-tag-delete"></i> dripicons-tag-delete
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-tags"></i> dripicons-tags
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-thumbs-down"></i> dripicons-thumbs-down
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-thumbs-up"></i> dripicons-thumbs-up
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-ticket"></i> dripicons-ticket
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-time-reverse"></i> dripicons-time-reverse
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-to-do"></i> dripicons-to-do
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-toggles"></i> dripicons-toggles
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-trash"></i> dripicons-trash
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-trophy"></i> dripicons-trophy
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-upload"></i> dripicons-upload
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-user"></i> dripicons-user
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-user-group"></i> dripicons-user-group
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-user-id"></i> dripicons-user-id
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-vibrate"></i> dripicons-vibrate
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-view-apps"></i> dripicons-view-apps
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-view-list"></i> dripicons-view-list
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-view-list-large"></i> dripicons-view-list-large
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-view-thumb"></i> dripicons-view-thumb
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-volume-full"></i> dripicons-volume-full
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-volume-low"></i> dripicons-volume-low
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-volume-medium"></i> dripicons-volume-medium
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-volume-off"></i> dripicons-volume-off
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-wallet"></i> dripicons-wallet
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-warning"></i> dripicons-warning
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-web"></i> dripicons-web
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-weight"></i> dripicons-weight
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-wifi"></i> dripicons-wifi
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-wrong"></i> dripicons-wrong
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-zoom-in"></i> dripicons-zoom-in
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <i class="dripicons-zoom-out"></i> dripicons-zoom-out
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © Qovex.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Themesbrand
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

</div>
<!-- end container-fluid -->

<!-- Right Sidebar -->

<div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-body rightbar">
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title px-3 py-4">
                    <a href="javascript:void(0);" class="right-bar-toggle float-end" data-bs-dismiss="offcanvas" aria-label="Close" >
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                    <h5 class="m-0">Settings</h5>
                </div>
        
                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>
        
                <div class="p-4">
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
        
                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input theme-choice" id="light-mode-switch" checked />
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>
        
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
        
                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input theme-choice" id="dark-mode-switch"  />
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
        
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="form-check form-switch mb-5">
                        <input type="checkbox" class="form-check-input theme-choice" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css" />
                        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>
        
                </div>
        
            </div>
            <!-- end slimscroll-menu-->
        </div>
    </div>
   
</div>


<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<!-- JAVASCRIPT -->
<script src="assets/libs/jquery/jquery.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/metismenu/metisMenu.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>
<script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>

</body>

</html>