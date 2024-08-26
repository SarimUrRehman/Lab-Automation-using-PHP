<!doctype html>
<html lang="en" >

<head>

    <meta charset="utf-8" />
    <title>Modals | Qovex - Admin & Dashboard Template</title>
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
                            <h4 class="page-title mb-0 font-size-18">Modals</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">UI Elements</a></li>
                                    <li class="breadcrumb-item active">Modals</li>
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

                                <h4 class="card-title">Modals Examples</h4>
                                <p class="card-title-desc">Modals are streamlined, but flexible dialog prompts
                                    powered by JavaScript. They support a number of use cases from user notification
                                    to completely custom content and feature a handful of helpful subcomponents,
                                    sizes, and more.</p>

                                <div class="modal bs-example-modal" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title mt-0">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>One fine body&hellip;</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->

                                <div class="row">

                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <div class="my-4 text-center">
                                            <p class="text-muted">Standard modal</p>
                                            <button type="button" class="btn btn-primary waves-effect waves-light"
                                                data-bs-toggle="modal" data-bs-target="#myModal">Standard
                                                modal</button>
                                        </div>

                                        <!-- sample modal content -->
                                        <div id="myModal" class="modal fade" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title mt-0" id="myModalLabel">Modal Heading
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h5 class="font-size-16">Overflowing text to show scroll
                                                            behavior</h5>
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras
                                                            justo odio, dapibus ac facilisis in, egestas eget quam.
                                                            Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                            eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                            consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                            rutrum faucibus dolor auctor.</p>
                                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                            commodo cursus magna, vel scelerisque nisl consectetur
                                                            et. Donec sed odio dui. Donec ullamcorper nulla non
                                                            metus auctor fringilla.
                                                        </p>
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras
                                                            justo odio, dapibus ac facilisis in, egestas eget quam.
                                                            Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                            eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                            consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                            rutrum faucibus dolor auctor.</p>
                                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                            commodo cursus magna, vel scelerisque nisl consectetur
                                                            et. Donec sed odio dui. Donec ullamcorper nulla non
                                                            metus auctor fringilla.
                                                        </p>
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras
                                                            justo odio, dapibus ac facilisis in, egestas eget quam.
                                                            Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                            eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                            consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                            rutrum faucibus dolor auctor.</p>
                                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                            commodo cursus magna, vel scelerisque nisl consectetur
                                                            et. Donec sed odio dui. Donec ullamcorper nulla non
                                                            metus auctor fringilla.
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary waves-effect"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="button"
                                                            class="btn btn-primary waves-effect waves-light">Save
                                                            changes</button>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- /.modal -->
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <div class="my-4 text-center">
                                            <p class="text-muted">Extra large modal</p>
                                            <!-- Extra Large modal -->
                                            <button type="button" class="btn btn-primary waves-effect waves-light"
                                                data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">Extra
                                                large
                                                modal</button>
                                        </div>

                                        <!--  Modal content for the above example -->
                                        <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog"
                                            aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title mt-0" id="myExtraLargeModalLabel">
                                                            Extra large modal</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras
                                                            justo odio, dapibus ac facilisis in, egestas eget quam.
                                                            Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                            eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                            consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                            rutrum faucibus dolor auctor.</p>
                                                        <p class="mb-0">Aenean lacinia bibendum nulla sed
                                                            consectetur. Praesent commodo cursus magna, vel
                                                            scelerisque nisl consectetur et. Donec sed odio dui.
                                                            Donec ullamcorper nulla non metus auctor fringilla.
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- /.modal -->
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <div class="my-4 text-center">
                                            <p class="text-muted">Large modal</p>
                                            <!-- Large modal -->
                                            <button type="button" class="btn btn-primary waves-effect waves-light"
                                                data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">Large
                                                modal</button>
                                        </div>

                                        <!--  Modal content for the above example -->
                                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
                                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title mt-0" id="myLargeModalLabel">Large
                                                            modal</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras
                                                            justo odio, dapibus ac facilisis in, egestas eget quam.
                                                            Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                            eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                            consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                            rutrum faucibus dolor auctor.</p>
                                                        <p class="mb-0">Aenean lacinia bibendum nulla sed
                                                            consectetur. Praesent commodo cursus magna, vel
                                                            scelerisque nisl consectetur et. Donec sed odio dui.
                                                            Donec ullamcorper nulla non metus auctor fringilla.
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- /.modal -->
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <div class="my-4 text-center">
                                            <p class="text-muted">Small modal</p>
                                            <!-- Small modal -->
                                            <button type="button" class="btn btn-primary waves-effect waves-light"
                                                data-bs-toggle="modal" data-bs-target=".bs-example-modal-sm">Small
                                                modal</button>
                                        </div>

                                        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog"
                                            aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title mt-0" id="mySmallModalLabel">Small
                                                            modal</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras
                                                            justo odio, dapibus ac facilisis in, egestas eget quam.
                                                            Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                            eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                            consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                            rutrum faucibus dolor auctor.</p>
                                                        <p class="mb-0">Aenean lacinia bibendum nulla sed
                                                            consectetur. Praesent commodo cursus magna, vel
                                                            scelerisque nisl consectetur et. Donec sed odio dui.
                                                            Donec ullamcorper nulla non metus auctor fringilla.
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- /.modal -->
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <div class="my-4 text-center">
                                            <p class="text-muted">Center modal</p>
                                            <!-- Small modal -->
                                            <button type="button" class="btn btn-primary waves-effect waves-light"
                                                data-bs-toggle="modal" data-bs-target=".bs-example-modal-center">Center
                                                modal</button>
                                        </div>

                                        <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog"
                                            aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title mt-0">Center modal</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras
                                                            justo odio, dapibus ac facilisis in, egestas eget quam.
                                                            Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                            eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                            consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                            rutrum faucibus dolor auctor.</p>
                                                        <p class="mb-0">Aenean lacinia bibendum nulla sed
                                                            consectetur. Praesent commodo cursus magna, vel
                                                            scelerisque nisl consectetur et. Donec sed odio dui.
                                                            Donec ullamcorper nulla non metus auctor fringilla.
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- /.modal -->
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <div class="my-4 text-center">
                                            <p class="text-muted">Scrollable modal</p>
                                            <!-- Small modal -->
                                            <button type="button" class="btn btn-primary waves-effect waves-light"
                                                data-bs-toggle="modal"
                                                data-bs-target="#exampleModalScrollable">Scrollable
                                                modal</button>
                                        </div>

                                        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title mt-0" id="exampleModalScrollableTitle">
                                                            Scrollable Modal</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras
                                                            justo odio, dapibus ac facilisis in, egestas eget quam.
                                                            Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                            eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                            consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                            rutrum faucibus dolor auctor.</p>
                                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                            commodo cursus magna, vel scelerisque nisl consectetur
                                                            et. Donec sed odio dui. Donec ullamcorper nulla non
                                                            metus auctor fringilla.</p>
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras
                                                            justo odio, dapibus ac facilisis in, egestas eget quam.
                                                            Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                            eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                            consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                            rutrum faucibus dolor auctor.</p>
                                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                            commodo cursus magna, vel scelerisque nisl consectetur
                                                            et. Donec sed odio dui. Donec ullamcorper nulla non
                                                            metus auctor fringilla.</p>
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras
                                                            justo odio, dapibus ac facilisis in, egestas eget quam.
                                                            Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                            eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                            consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                            rutrum faucibus dolor auctor.</p>
                                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                            commodo cursus magna, vel scelerisque nisl consectetur
                                                            et. Donec sed odio dui. Donec ullamcorper nulla non
                                                            metus auctor fringilla.</p>
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras
                                                            justo odio, dapibus ac facilisis in, egestas eget quam.
                                                            Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                            eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                            consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                            rutrum faucibus dolor auctor.</p>
                                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                            commodo cursus magna, vel scelerisque nisl consectetur
                                                            et. Donec sed odio dui. Donec ullamcorper nulla non
                                                            metus auctor fringilla.</p>
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras
                                                            justo odio, dapibus ac facilisis in, egestas eget quam.
                                                            Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                            eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                            consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                            rutrum faucibus dolor auctor.</p>
                                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                            commodo cursus magna, vel scelerisque nisl consectetur
                                                            et. Donec sed odio dui. Donec ullamcorper nulla non
                                                            metus auctor fringilla.</p>
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras
                                                            justo odio, dapibus ac facilisis in, egestas eget quam.
                                                            Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                            eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                            consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                            rutrum faucibus dolor auctor.</p>
                                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                            commodo cursus magna, vel scelerisque nisl consectetur
                                                            et. Donec sed odio dui. Donec ullamcorper nulla non
                                                            metus auctor fringilla.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save
                                                            changes</button>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- /.modal -->
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <div class="my-4 text-center">
                                            <p class="text-muted">Static backdrop
                                                modal</p>
                                            <!-- Satic modal -->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop">
                                                Static backdrop modal
                                            </button>
                                        </div>

                                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">Modal title
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        I will not close if you click outside me. Don't even try to
                                                        press escape key.
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="button"
                                                            class="btn btn-primary">Understood</button>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- /.modal -->
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <div class="my-4 text-center">
                                            <p class="text-muted">Full Screen</p>
                                            <button type="button" class="btn btn-primary waves-effect waves-light"
                                                data-bs-toggle="modal" data-bs-target="#fullscreenModal">Fullscreen
                                                modal</button>
                                        </div>

                                        <!-- sample modal content -->
                                        <div id="fullscreenModal" class="modal fade" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel1" aria-hidden="true">
                                            <div class="modal-dialog modal-fullscreen">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title mt-0" id="myModalLabel1">Modal
                                                            Heading
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h5 class="font-size-16">Overflowing text to show scroll
                                                            behavior</h5>
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras
                                                            justo odio, dapibus ac facilisis in, egestas eget quam.
                                                            Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                            eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                            consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                            rutrum faucibus dolor auctor.</p>
                                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                            commodo cursus magna, vel scelerisque nisl consectetur
                                                            et. Donec sed odio dui. Donec ullamcorper nulla non
                                                            metus auctor fringilla.
                                                        </p>
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras
                                                            justo odio, dapibus ac facilisis in, egestas eget quam.
                                                            Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                            eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                            consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                            rutrum faucibus dolor auctor.</p>
                                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                            commodo cursus magna, vel scelerisque nisl consectetur
                                                            et. Donec sed odio dui. Donec ullamcorper nulla non
                                                            metus auctor fringilla.
                                                        </p>
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras
                                                            justo odio, dapibus ac facilisis in, egestas eget quam.
                                                            Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                            eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                            consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                            rutrum faucibus dolor auctor.</p>
                                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                            commodo cursus magna, vel scelerisque nisl consectetur
                                                            et. Donec sed odio dui. Donec ullamcorper nulla non
                                                            metus auctor fringilla.
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary waves-effect"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="button"
                                                            class="btn btn-primary waves-effect waves-light">Save
                                                            changes</button>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- /.modal -->
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <div class="my-4 text-center">
                                            <p class="text-muted">Tooltips and popovers</p>
                                            <button type="button" class="btn btn-primary waves-effect waves-light"
                                                data-bs-toggle="modal" data-bs-target="#exampleModalPopovers">Tooltips and popovers</button>
                                        </div>
                                        

                                        <div class="modal fade" id="exampleModalPopovers" tabindex="-1" aria-labelledby="exampleModalPopoversLabel" aria-hidden="true" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalPopoversLabel">Modal title</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h5>Popover in a modal</h5>
                                                        <p>This <a href="#" role="button" class="btn btn-secondary" data-bs-toggle="popover" data-bs-content="Popover body content is set in this attribute." data-bs-container="#exampleModalPopovers">button</a> triggers a popover on click.</p>
                                                        <hr>
                                                        <h5>Tooltips in a modal</h5>
                                                        <p><a href="#" data-bs-toggle="tooltip" data-bs-container="#exampleModalPopovers">This link</a> and <a href="#" data-bs-toggle="tooltip" data-bs-container="#exampleModalPopovers">that link</a> have tooltips on hover.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!--end modal-->
                                    </div> <!--end col-->

                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <div class="my-4 text-center">
                                            <p class="text-muted">Using grid</p>
                                            <button type="button" class="btn btn-primary waves-effect waves-light"
                                                data-bs-toggle="modal" data-bs-target="#gridSystemModal">Using grid</button>
                                        </div>
                                        

                                        <div class="modal fade" id="gridSystemModal" tabindex="-1" aria-labelledby="gridModalLabel" aria-hidden="true" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="gridModalLabel">Grids in modals</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                      </div>
                                                    <div class="modal-body">
                                                        <div class="container-fluid">
                                                          <div class="row">
                                                            <div class="col-md-4">.col-md-4</div>
                                                            <div class="col-md-4 ms-auto">.col-md-4 .ms-auto</div>
                                                          </div>
                                                          <div class="row">
                                                            <div class="col-md-3 ms-auto">.col-md-3 .ms-auto</div>
                                                            <div class="col-md-2 ms-auto">.col-md-2 .ms-auto</div>
                                                          </div>
                                                          <div class="row">
                                                            <div class="col-md-6 ms-auto">.col-md-6 .ms-auto</div>
                                                          </div>
                                                          <div class="row">
                                                            <div class="col-sm-9">
                                                              Level 1: .col-sm-9
                                                              <div class="row">
                                                                <div class="col-8 col-sm-6">
                                                                  Level 2: .col-8 .col-sm-6
                                                                </div>
                                                                <div class="col-4 col-sm-6">
                                                                  Level 2: .col-4 .col-sm-6
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!--end modal-->
                                    </div> <!--end col-->

                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <div class="my-4 text-center">
                                            <p class="text-muted">Varying modal content</p>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Open modal for @getbootstrap</button>
                                        </div>
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                  <form>
                                                    <div class="mb-3">
                                                      <label for="recipient-name" class="col-form-label">Recipient:</label>
                                                      <input type="text" class="form-control" placeholder="@getbootstrap" id="recipient-name">
                                                    </div>
                                                    <div class="mb-3">
                                                      <label for="message-text" class="col-form-label">Message:</label>
                                                      <textarea class="form-control" id="message-text"></textarea>
                                                    </div>
                                                  </form>
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                  <button type="button" class="btn btn-primary">Send message</button>
                                                </div>
                                              </div>
                                            </div>
                                        </div> <!--end modal-->
                                    </div> <!--end col-->

                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <div class="my-4 text-center">
                                            <p class="text-muted">Toggle between modal</p>
                                            <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Toggle between modal</a>
                                        </div>
                                        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                  Show a second modal and hide this one with the button below.
                                                </div>
                                                <div class="modal-footer">
                                                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Open second modal</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalToggleLabel2">Modal 2</h5>
                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                  Hide this modal and show the first with the button below.
                                                </div>
                                                <div class="modal-footer">
                                                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                    </div>
                                </div> <!-- end row -->
                            </div>
                        </div>
                    </div>
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