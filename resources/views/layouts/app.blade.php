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
    <link href="assets/css/bootstrap/css/bootstrap.min.css" rel='stylesheet' type='text/css'>
    <link href="assets/icon/themify-icons/themify-icons.css" rel="stylesheet">
    <link href="assets/icon/icofont/css/icofont.css" rel="stylesheet">
	<link href="assets/pages/notification/notification.css" rel="stylesheet">
    <link href="assets/css/animate.css/css/animate.css" rel="stylesheet"> 
    
    <link href="assets/css/select2.min.css" rel="stylesheet"> 
    <link href="assets/css/bootstrap-multiselect.css" rel="stylesheet"> 
    <link href="assets/css/multi-select.css" rel="stylesheet"> 
    
    <link href="assets/css/dataTables.bootstrap4.min.css" rel="stylesheet"> 
     <link href="assets/css/buttons.dataTables.min.css" rel="stylesheet"> 
    <link href="assets/css/responsive.bootstrap4.min.css" rel="stylesheet"> 
    
    
       
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/jquery.mCustomScrollbar.css" rel="stylesheet">

   
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
                      
                        <a href="index.html">
                            <img class="img-fluid" src="assets/images/logo.png" alt="Logo" />
                        </a>
                       
                    </div>

                    <div class="navbar-container container-fluid">
                        
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
                                    <img src="assets/images/logo.png" class="img-radius" alt="User-Profile-Image">
                                   
                                    <i class="ti-angle-down"></i>
                                </a>
                               
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
    
  
    <script src="assets/js/jquery/jquery.min.js" ></script>
    <script src="assets/js/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="assets/js/popper.js/popper.min.js"></script>
    <script src="assets/js/bootstrap/js/bootstrap.min.js" ></script>
    <script src="assets/js/jquery-slimscroll/jquery.slimscroll.js" ></script>
    <script src="assets/js/modernizr/modernizr.js" ></script>
    <script src="assets/js/modernizr/css-scrollbars.js" ></script>
    <script src="assets/js/classie/classie.js" ></script>
<!--    <script src="{{ asset('backend/assets/js/bootstrap-growl.min.js') }}"></script>
    <script src="{{ asset('backend/assets/pages/notification/notification.js') }}"></script>-->
    
	<script type="text/javascript" src="assets/js/select2.full.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap-multiselect.js"></script>
    <script type="text/javascript" src="assets/js/jquery.multi-select.js"></script>
<!--    <script type="text/javascript" src="{{ asset('backend/assets/js/jquery.quicksearch.js')}}"></script>-->
    <script type="text/javascript" src="assets/js/select2-custom.js"></script>
    
    

	<script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>
    <!--<script src="{{ asset('backend/assets/js/dataTables.responsive.min.js') }}"></script>-->
    <script src="assets/js/responsive.bootstrap4.min.js"></script>
    <script src="assets/js/data-table-custom.js"></script>


    <script src="assets/js/script.js" ></script>
    <script src="assets/js/pcoded.min.js" ></script>
    <script src="assets/js/demo-12.js" ></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    


</body>
</html>
