<!doctype html>
<html lang="en" >

    <head>
        <meta charset="utf-8" />
        <title>Boxed | Qovex - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- jquery.vectormap css -->
        <link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet"
            type="text/css" />

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style"  rel="stylesheet" type="text/css" />

    </head>

    <body data-layout="detached" data-topbar="colored" data-keep-enlarged="true" class="vertical-collpsed"
        data-layout-size="boxed">

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
                                    <h4 class="page-title mb-0 font-size-18">Boxed</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Layouts</a></li>
                                            <li class="breadcrumb-item active">Boxed</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start">
                                            <div class="avatar-sm font-size-20 me-3">
                                                <span class="avatar-title bg-soft-primary text-primary rounded">
                                                    <i class="mdi mdi-tag-plus-outline"></i>
                                                </span>
                                            </div>
                                            <div class="flex-1">
                                                <div class="font-size-16 mt-2">New Orders</div>
                                            </div>
                                        </div>
                                        <h4 class="mt-4">1,368</h4>
                                        <div class="row">
                                            <div class="col-7">
                                                <p class="mb-0"><span class="text-success me-2"> 0.28% <i
                                                            class="mdi mdi-arrow-up"></i> </span></p>
                                            </div>
                                            <div class="col-5 align-self-center">
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 62%"
                                                        aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start">
                                            <div class="avatar-sm font-size-20 me-3">
                                                <span class="avatar-title bg-soft-primary text-primary rounded">
                                                    <i class="mdi mdi-account-multiple-outline"></i>
                                                </span>
                                            </div>
                                            <div class="flex-1">
                                                <div class="font-size-16 mt-2">New Users</div>
    
                                            </div>
                                        </div>
                                        <h4 class="mt-4">2,456</h4>
                                        <div class="row">
                                            <div class="col-7">
                                                <p class="mb-0"><span class="text-success me-2"> 0.16% <i
                                                            class="mdi mdi-arrow-up"></i> </span></p>
                                            </div>
                                            <div class="col-5 align-self-center">
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 62%"
                                                        aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Sales Report</h4>
    
                                        <div id="line-chart" class="apex-charts"></div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Revenue</h4>
    
                                        <div id="column-chart" class="apex-charts"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
    
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Sales Analytics</h4>
    
                                        <div class="row align-items-center">
                                            <div class="col-sm-6">
                                                <div id="donut-chart" class="apex-charts"></div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="py-3">
                                                                <p class="mb-1 text-truncate"><i
                                                                        class="mdi mdi-circle text-primary me-1"></i> Online
                                                                </p>
                                                                <h5>$ 2,652</h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="py-3">
                                                                <p class="mb-1 text-truncate"><i
                                                                        class="mdi mdi-circle text-success me-1"></i>
                                                                    Offline</p>
                                                                <h5>$ 2,284</h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="py-3">
                                                                <p class="mb-1 text-truncate"><i
                                                                        class="mdi mdi-circle text-warning me-1"></i>
                                                                    Marketing</p>
                                                                <h5>$ 1,753</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Monthly Sales</h4>
    
                                        <div id="scatter-chart" class="apex-charts"></div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-xl-3">
                                <div class="card bg-primary">
                                    <div class="card-body">
                                        <div class="text-white-50">
                                            <h5 class="text-white">2400 + New Users</h5>
                                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus</p>
                                            <div>
                                                <a href="#" class="btn btn-outline-success btn-sm">View more</a>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-8">
                                                <div class="mt-4">
                                                    <img src="assets/images/widget-img.png" alt=""
                                                        class="img-fluid mx-auto d-block">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
    
                        <div class="row">
                            <div class="col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Overview</h4>
    
                                        <div>
                                            <div class="pb-3 border-bottom">
                                                <div class="row align-items-center">
                                                    <div class="col-8">
                                                        <p class="mb-2">New Visitors</p>
                                                        <h4 class="mb-0">3,524</h4>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="text-end">
                                                            <div>
                                                                2.06 % <i class="mdi mdi-arrow-up text-success ms-1"></i>
                                                            </div>
                                                            <div class="progress progress-sm mt-3">
                                                                <div class="progress-bar" role="progressbar" style="width: 62%"
                                                                    aria-valuenow="62" aria-valuemin="0" aria-valuemax="100">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="py-3 border-bottom">
                                                <div class="row align-items-center">
                                                    <div class="col-8">
                                                        <p class="mb-2">Product Views</p>
                                                        <h4 class="mb-0">2,465</h4>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="text-end">
                                                            <div>
                                                                0.37 % <i class="mdi mdi-arrow-up text-success ms-1"></i>
                                                            </div>
                                                            <div class="progress progress-sm mt-3">
                                                                <div class="progress-bar bg-warning" role="progressbar"
                                                                    style="width: 48%" aria-valuenow="48" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pt-3">
                                                <div class="row align-items-center">
                                                    <div class="col-8">
                                                        <p class="mb-2">Revenue</p>
                                                        <h4 class="mb-0">$ 4,653</h4>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="text-end">
                                                            <div>
                                                                2.18 % <i class="mdi mdi-arrow-up text-success ms-1"></i>
                                                            </div>
                                                            <div class="progress progress-sm mt-3">
                                                                <div class="progress-bar bg-success" role="progressbar"
                                                                    style="width: 78%" aria-valuenow="78" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Reviews</h4>
                                        <div class="mb-4">
                                            <h5><span class="text-primary">500</span>+ Satisfied clients</h5>
                                        </div>
                                        <div class="mb-3">
                                            <i class="fas fa-quote-left h4 text-primary"></i>
                                        </div>
                                        <div id="reviewExampleControls" class="carousel slide review-carousel"
                                            data-ride="carousel">
    
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <div>
                                                        <p>To achieve this, it would be necessary to have uniform grammar,
                                                            pronunciation and more common words</p>
                                                        <div class="d-flex align-items-start mt-4">
                                                            <div class="avatar-sm me-3">
                                                                <span
                                                                    class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                                    J
                                                                </span>
                                                            </div>
                                                            <div class="flex-1">
                                                                <h5 class="font-size-16 mb-1">Jessie Mitchell</h5>
                                                                <p class="mb-2">CEO of ABC Company</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div>
                                                        <p>For science, music, sport, etc, Europe uses the same vocabulary
                                                            languages only differ in their grammar</p>
                                                        <div class="d-flex align-items-start mt-4">
                                                            <div class="avatar-sm me-3">
                                                                <img src="assets/images/users/avatar-4.jpg" alt=""
                                                                    class="img-fluid rounded-circle">
                                                            </div>
                                                            <div class="flex-1">
                                                                <h5 class="font-size-16 mb-1">Kelly Rivera</h5>
                                                                <p class="mb-2">Web Developer</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div>
                                                        <p>The new common language will be more simple and regular than the
                                                            existing European languages.</p>
                                                        <div class="d-flex align-items-start mt-4">
                                                            <div class="avatar-sm me-3">
                                                                <span
                                                                    class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                                    S
                                                                </span>
                                                            </div>
                                                            <div class="flex-1">
                                                                <h5 class="font-size-16 mb-1">Simon Hawkins</h5>
                                                                <p class="mb-2">CEO of XYZ Company</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
    
                                            <a class="carousel-control-prev" href="#reviewExampleControls" role="button"
                                                data-bs-slide="prev">
                                                <i class="mdi mdi-chevron-left carousel-control-icon"></i>
                                            </a>
                                            <a class="carousel-control-next" href="#reviewExampleControls" role="button"
                                                data-bs-slide="next">
                                                <i class="mdi mdi-chevron-right carousel-control-icon"></i>
                                            </a>
                                        </div>
    
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Revenue by location</h4>
    
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div id="usa-vectormap" style="height: 230px"></div>
                                            </div>
    
                                            <div class="col-sm-5 ms-auto">
                                                <div class="mt-4 mt-sm-0">
                                                    <p>Last month Revenue</p>
    
                                                    <div class="d-flex align-items-start py-3">
                                                        <div class="flex-1">
                                                            <p class="mb-2">California</p>
                                                            <h5 class="mb-0">$ 2,256</h5>
                                                        </div>
                                                        <div class="ms-auto">
                                                            2.52 % <i class="mdi mdi-arrow-up text-success ms-1"></i>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-start py-3 border-top">
                                                        <div class="flex-1">
                                                            <p class="mb-2">Nevada</p>
                                                            <h5 class="mb-0">$ 1,853</h5>
                                                        </div>
                                                        <div class="ms-auto">
                                                            1.26 % <i class="mdi mdi-arrow-up text-success ms-1"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
    
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Inbox</h4>
    
                                        <ul class="inbox-wid list-unstyled">
                                            <li class="inbox-list-item">
                                                <a href="#">
                                                    <div class="d-flex align-items-start">
                                                        <div class="me-3 align-self-center">
                                                            <img src="assets/images/users/avatar-3.jpg" alt=""
                                                                class="avatar-sm rounded-circle">
                                                        </div>
                                                        <div class="flex-1 overflow-hidden">
                                                            <h5 class="font-size-16 mb-1">Paul</h5>
                                                            <p class="text-truncate mb-0">Hey! there I'm available</p>
                                                        </div>
                                                        <div class="font-size-12 ms-auto">
                                                            05 min
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="inbox-list-item">
                                                <a href="#">
                                                    <div class="d-flex align-items-start">
                                                        <div class="me-3 align-self-center">
                                                            <img src="assets/images/users/avatar-4.jpg" alt=""
                                                                class="avatar-sm rounded-circle">
                                                        </div>
                                                        <div class="flex-1 overflow-hidden">
                                                            <h5 class="font-size-16 mb-1">Mary</h5>
                                                            <p class="text-truncate mb-0">This theme is awesome!</p>
                                                        </div>
                                                        <div class="font-size-12 ms-auto">
                                                            12 min
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="inbox-list-item">
                                                <a href="#">
                                                    <div class="d-flex align-items-start">
                                                        <div class="me-3 align-self-center">
                                                            <img src="assets/images/users/avatar-5.jpg" alt=""
                                                                class="avatar-sm rounded-circle">
                                                        </div>
                                                        <div class="flex-1 overflow-hidden">
                                                            <h5 class="font-size-16 mb-1">Cynthia</h5>
                                                            <p class="text-truncate mb-0">Nice to meet you</p>
                                                        </div>
                                                        <div class="font-size-12 ms-auto">
                                                            18 min
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="inbox-list-item">
                                                <a href="#">
                                                    <div class="d-flex align-items-start">
                                                        <div class="me-3 align-self-center">
                                                            <img src="assets/images/users/avatar-6.jpg" alt=""
                                                                class="avatar-sm rounded-circle">
                                                        </div>
                                                        <div class="flex-1 overflow-hidden">
                                                            <h5 class="font-size-16 mb-1">Darren</h5>
                                                            <p class="text-truncate mb-0">I've finished it! See you so</p>
                                                        </div>
                                                        <div class="font-size-12 ms-auto">
                                                            2hr ago
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
    
                                        <div class="text-center">
                                            <a href="#" class="btn btn-primary btn-sm">Load more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Latest Transactions</h4>
    
                                        <div class="table-responsive">
                                            <table class="table table-centered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Id no.</th>
                                                        <th scope="col">Billing Name</th>
                                                        <th scope="col">Amount</th>
                                                        <th scope="col" colspan="2">Payment Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>15/01/2020</td>
                                                        <td>
                                                            <a href="#" class="text-body fw-medium">#SK1235</a>
                                                        </td>
                                                        <td>Werner Berlin</td>
                                                        <td>$ 125</td>
                                                        <td><span class="badge badge-soft-success font-size-12">Paid</span>
                                                        </td>
                                                        <td><a href="#" class="btn btn-primary btn-sm">View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>16/01/2020</td>
                                                        <td>
                                                            <a href="#" class="text-body fw-medium">#SK1236</a>
                                                        </td>
                                                        <td>Robert Jordan</td>
                                                        <td>$ 118</td>
                                                        <td><span class="badge badge-soft-danger font-size-12">Chargeback</span>
                                                        </td>
                                                        <td><a href="#" class="btn btn-primary btn-sm">View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>17/01/2020</td>
                                                        <td>
                                                            <a href="#" class="text-body fw-medium">#SK1237</a>
                                                        </td>
                                                        <td>Daniel Finch</td>
                                                        <td>$ 115</td>
                                                        <td><span class="badge badge-soft-success font-size-12">Paid</span>
                                                        </td>
                                                        <td><a href="#" class="btn btn-primary btn-sm">View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>18/01/2020</td>
                                                        <td>
                                                            <a href="#" class="text-body fw-medium">#SK1238</a>
                                                        </td>
                                                        <td>James Hawkins</td>
                                                        <td>$ 121</td>
                                                        <td><span class="badge badge-soft-warning font-size-12">Refund</span>
                                                        </td>
                                                        <td><a href="#" class="btn btn-primary btn-sm">View</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
    
                                        <div class="mt-3">
                                            <ul class="pagination pagination-rounded justify-content-center mb-0">
                                                <li class="page-item">
                                                    <a class="page-link" href="#">Previous</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                            </ul>
                                        </div>
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

        <!-- apexcharts -->
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- jquery.vectormap map -->
        <script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js"></script>

        <script src="assets/js/pages/dashboard.init.js"></script>

        <script src="assets/js/app.js"></script>

    </body>

</html>