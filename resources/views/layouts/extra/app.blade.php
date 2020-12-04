<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Casetoanswer') }}</title>
    
     <!-- Favicon icon -->
<!--    <link rel="icon" href="{{ asset('backend/assets/images/favicon.ico')}}" type="image/x-icon">-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <link href="{{ asset('backend/assets/css/bootstrap/css/bootstrap.min.css')}}" rel='stylesheet' type='text/css'>
    <link href="{{ asset('backend/assets/icon/themify-icons/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/icon/icofont/css/icofont.css') }}" rel="stylesheet">
	<link href="{{ asset('backend/assets/pages/notification/notification.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/css/animate.css/css/animate.css') }}" rel="stylesheet">    
    <link href="{{ asset('backend/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/css/jquery.mCustomScrollbar.css') }}" rel="stylesheet">

   
    <!--STYLESHEET-->
 
</head>

<body>
   
        <!-- Pre-loader start -->
        <div class="theme-loader">
        <div class="ball-scale">
        <div class='contain'>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div> 
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>           
        </div>
        </div>
        </div>
        <!-- Pre-loader end -->

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <a class="mobile-search morphsearch-search" href="#">
                            <i class="ti-search"></i>
                        </a>
                        <a href="index.html">
                            <img class="img-fluid" src="{{ asset('backend/assets/images/logo.png') }}" alt="Logo" />
                        </a>
                        <a class="mobile-options">
                            <i class="ti-more"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>
                            
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                           <!-- <li class="header-notification">
                                <a href="#!">
                                    <i class="ti-bell"></i>
                                    <span class="badge bg-c-pink"></span>
                                </a>
                                <ul class="show-notification">
                                    <li>
                                        <h6>Notifications</h6>
                                        <label class="label label-danger">New</label>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center" src="assets/images/user.png" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">John Doe</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center" src="assets/images/user.png" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Joseph William</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center" src="assets/images/user.png" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Sara Soudein</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>-->
                            <li class="user-profile header-notification">
                                <a href="#!">
                                    <img src="{{ asset('backend/assets/images/logo.png') }}" class="img-radius" alt="User-Profile-Image">
                                    <span>{{ Auth::user()->firstname }}</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                     @if (Auth::user()->role == '1') 
                                    <li>
                                        <a href="{{url('profile')}}">
                                            <i class="ti-user"></i> Profile
                                        </a>
                                    </li>
                                    
                                    <li>
                                        <a href="{{url('password')}}">
                                            <i class="ti-lock"></i> Password
                                        </a>
                                    </li>
                                    @endif
                                    <li>
                                                                               
                                         <a href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                   <i class="ti-layout-sidebar-left"></i>  {{ __('Logout') }}
                                                </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                        
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                           
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation"></div>
                            <ul class="pcoded-item pcoded-left-item">
                               @if (Auth::user()->role == '1') 
                                <li class="">
                                    <a href="{{url('home')}}">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                 <li class="">
                                    <a href="{{url('users')}}">
                                        <span class="pcoded-micon"><i class="ti-user"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Users</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                 <li class="">
                                    <a href="{{url('whitelists')}}">
                                        <span class="pcoded-micon"><i class="ti-shield"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Whitelists</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="{{url('lenders')}}">
                                        <span class="pcoded-micon"><i class="ti-credit-card"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Lender</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                
                                <li class="">
                                    <a href="{{url('accounts')}}">
                                        <span class="pcoded-micon"><i class="ti-id-badge"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Account Type</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                 <li class="">
                                    <a href="{{url('leadsources')}}">
                                        <span class="pcoded-micon"><i class="ti-magnet"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Lead Source</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                @endif
                                <li class="">
                                    <a href="{{url('cases')}}">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Opt In</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                
                                <li class="">
                                    <a href="{{url('loas')}}">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">LOA</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                
                              
                                
                                <!--<li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style6">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.basic-components.main">LOA</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="{{url('loas/create')}}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Create New</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="{{url('loas')}}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">View List</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                       
                                    </ul>
                                </li>-->
                                
                               
                            </ul>
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">

                            <!-- Main-body start -->
                            @yield('content')
                            <!-- Main-body end -->
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 
 
 </body>   
    
  
    <script src="{{ asset('backend/assets/js/jquery/jquery.min.js') }}" ></script>
    <script src="{{ asset('backend/assets/js/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/js/popper.js/popper.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/bootstrap/js/bootstrap.min.js') }}" ></script>
    <script src="{{ asset('backend/assets/js/jquery-slimscroll/jquery.slimscroll.js') }}" ></script>
    <script src="{{ asset('backend/assets/js/modernizr/modernizr.js') }}" ></script>
    <script src="{{ asset('backend/assets/js/modernizr/css-scrollbars.js') }}" ></script>
    <script src="{{ asset('backend/assets/js/classie/classie.js') }}" ></script>
<!--    <script src="{{ asset('backend/assets/js/bootstrap-growl.min.js') }}"></script>
    <script src="{{ asset('backend/assets/pages/notification/notification.js') }}"></script>-->
    <script src="{{ asset('backend/assets/js/script.js') }}" ></script>
    <script src="{{ asset('backend/assets/js/pcoded.min.js') }}" ></script>
    <script src="{{ asset('backend/assets/js/demo-12.js') }}" ></script>
    <script src="{{ asset('backend/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    


</body>
</html>
