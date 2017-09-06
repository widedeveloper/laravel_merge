<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->

<head>
    <meta charset="utf-8" />
    <title> Merge Transit | Premier Dispatching Service</title>
    <meta name="keywords" content="HTML5,CSS3,Template" />
    <meta name="description" content="" />
    <meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />
    <!-- mobile settings -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- WEB FONTS : use %7C instead of | (pipe) -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

    <!-- CORE CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- REVOLUTION SLIDER -->
    <link href="assets/plugins/slider.revolution/css/extralayers.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/slider.revolution/css/settings.css" rel="stylesheet" type="text/css" />

    <!-- THEME CSS -->
    <link href="assets/css/essentials.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/layout.css" rel="stylesheet" type="text/css" />

    <!-- PAGE LEVEL SCRIPTS -->
    <link href="assets/css/header-1.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />
    <!-- Custome css style -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style_end.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/ultimate.min.css" rel="stylesheet" type="text/css" />

    <link href="assets/css/Defaults.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/flexslider.css" rel="stylesheet" type="text/css" />

    <script data-no-minify="1" data-cfasync="false">
        (function(w, d) {
            function a() {
                var b = d.createElement("script");
                b.async = !0;
                b.src = "http://mergetransit.com/wp-content/plugins/wprocket/inc/front/js/lazyload.1.0.5.min.js";
                var a = d.getElementsByTagName("script")[0];
                a.parentNode.insertBefore(b, a)
            }
            w.attachEvent ? w.attachEvent("onload", a) : w.addEventListener("load", a, !1)
        })(window, document);
    </script>

    <style>
        .uvc-seperator-3052971311260.top_seperator .separator-icon {
            -webkit-transform: translate(-50%, calc(-50% + 15px));
            -moz-transform: translate(-50%, calc(-50% + 15px));
            -ms-transform: translate(-50%, calc(-50% + 15px));
            -o-transform: translate(-50%, calc(-50% + 15px));
            transform: translate(-50%, calc(-50% + 15px));
        }
        
        .uvc-seperator-3052971311260.bottom_seperator .separator-icon {
            -webkit-transform: translate(-50%, calc(-50% - 15px));
            -moz-transform: translate(-50%, calc(-50% - 15px));
            -ms-transform: translate(-50%, calc(-50% - 15px));
            -o-transform: translate(-50%, calc(-50% - 15px));
            transform: translate(-50%, calc(-50% - 15px));
        }
    </style>

</head>

<!--
		AVAILABLE BODY CLASSES:

		smoothscroll 			= create a browser smooth scroll
		enable-animation		= enable WOW animations

		bg-grey					= grey background
		grain-grey				= grey grain background
		grain-blue				= blue grain background
		grain-green				= green grain background
		grain-blue				= blue grain background
		grain-orange			= orange grain background
		grain-yellow			= yellow grain background

		boxed 					= boxed layout
		pattern1 ... patern11	= pattern background
		menu-vertical-hide		= hidden, open on click

		BACKGROUND IMAGE [together with .boxed class]
		data-background="assets/images/boxed_background/1.jpg"
	-->

<body class="smoothscroll enable-animation">

    <!-- wrapper -->
    <div id="wrapper">

        <!-- Top Bar -->
        <!-- New top bar-->
        <div id="top_bar" class="topbar_type_3">
            <div class="container">
                <div class="top_phone">Call Us: (866) 272-8001</div>
                <div class="top_email"><a href="mailto:Info@MergeTransit.com">Info@MergeTransit.com</a></div>
                <div id="header_socials" class="header_top_si si_float_right">
                    <div id="facebook"> <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></div>
                    <div id="twitter"> <a href="https://www.Twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></div>
                </div>
            </div>
        </div>
      
        <div id="header" class="sticky shadow-after-3 clearfix">

            <!-- TOP NAV -->
            <header id="topNav">
                <div class="container">

                    <!-- Mobile Menu Button -->
                    <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
							<i class="fa fa-bars"></i>
						</button>

                    <!-- Logo -->
                    <a class="logo pull-left" href="{{url('index')}}">
                        <img src="assets/images/logo.png" alt="" />
                    </a>
                    <div class="navbar-collapse pull-right nav-main-collapse collapse submenu-dark">

                        <nav class="nav-main">

                            <ul id="topMain" class="nav nav-pills nav-main">
                                <li class="dropdown active"><a class="dropdown-toggle" href="/">HOME</a></li>
                                @if(Auth::guest())
                                    <li class="dropdown "><a class="dropdown-toggle" href="/aboutus">ABOUT US</a></li>
                                    <li class="dropdown "><a class="dropdown-toggle" href="/service">SERVICES</a></li>
                                    <li class="dropdown "><a class="dropdown-toggle" href="/pricing">PRICING</a></li>
                                    <li class="dropdown "><a class="dropdown-toggle" href="/factoring">FACTORING</a></li>
                                @else
                                    <li class="dropdown "><a class="dropdown-toggle" href="/report/{{Auth::user()->id}}">REPORT</a></li>
                                @endif
                                <li class="dropdown "><a class="dropdown-toggle" href="/contactus">CONTACT US</a></li>
                                
								 
								<!-- @if(!Auth::guest() && Auth::user()->role == 3 )
								<li class="dropdown ">
                                	<a class="" href="pdf">
                                		Reports
                                	</a>                                	
                                </li>
                                @endif
								@if(!Auth::guest() && Auth::user()->role == 2 )								
								<li class="dropdown ">
                                	<a class="" href="itemCRUD">
                                		Details
                                	</a>                                	
                                </li>
                                @endif -->
                                
                                <li class="dropdown"><!-- PAGES -->
                                @if(Auth::guest())
                                    <a class="dropdown-toggle" href="{{url('login')}}">
                                        SIGN IN
                                    </a>
                                @else
                                    <a class="dropdown-toggle" href="#">
                                        <i class="fa fa-user"></i> {{Auth::user()->email}}
                                    </a>
                                        <ul class="dropdown-menu">
                                        <li class="dropdown">
                                                <a >
                                                    <i class="fa fa-user"></i> {{Auth::user()->firstname}} {{Auth::user()->lastname}} 
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-toggle" href="{{url('/change-password')}}">
                                                    <i class="fa fa-lock"></i> Change Password
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-toggle" href="{{url('logout')}}">
                                                    <i class="fa fa-sign-out"></i> Log Out
                                                </a>
                                            </li>
                                        </ul>
                                @endif
                                </li>
                                <li>
                                    <a id="sidepanel_btn" href="#" class="fa fa-bars"></a>
                                </li>
                            </ul>

                        </nav>
                    </div>

                </div>
            </header>
            <!-- /Top Nav -->

        </div>



@yield("contents")





        <!-- FOOTER -->
        <div id="footer_bg">
            <div id="footer_coms">
                <div class="wrapper">
                    <div class="f_menu_left m_normal"></div>
                    <div class="footer_si_ctn f_si_right f_si_type1">
                        <div id="f_social_icons">
                            <div id="facebook"> <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></div>
                            <div id="twitter"> <a href="https://www.Twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></div>
                        </div>
                    </div>
                    <div class="footer_message f_message_left"> Copyright © 2017 <a>MERGE TRANSIT </a> | Powered by <a href="http://aana.tech">Aana Tech</a></div>
                </div>
            </div>
        </div>
        <!-- /FOOTER -->

    </div>
    <!-- /wrapper -->


    <!--
			SIDE PANEL

				sidepanel-dark 			= dark color
				sidepanel-light			= light color (white)
				sidepanel-theme-color		= theme color

				sidepanel-inverse		= By default, sidepanel is placed on right (left for RTL)
								If you add "sidepanel-inverse", will be placed on left side (right on RTL).
		-->
    <div id="sidepanel" class="sidepanel-light">
        <a id="sidepanel_close" href="#">
            <!-- close -->
            <i class="glyphicon glyphicon-remove"></i>
        </a>

        <div class="sidepanel-content">
            <h2 class="sidepanel-title">MERGE TRANSIT</h2>

            <!-- SIDE NAV -->
            <ul class="list-group">

                <li class="list-group-item"><a href="/"><i class="fa fa-home" aria-hidden="true"></i>HOME</a></li>
                <li class="list-group-item "><a href="/aboutus">ABOUT US</a></li>
                <li class="list-group-item "><a href="/service">SERVICES</a></li>
                <li class="list-group-item "><a href="/pricing">PRICING</a></li>
                <li class="list-group-item "><a href="/factoring">FACTORING</a></li>
                <li class="list-group-item "><a href="contactus">CONTACT US</a></li>
            </ul>
            <!-- /SIDE NAV -->

            <!-- social icons -->
            <div class="text-center margin-bottom-30">
                <a href="#" class="social-icon social-icon-sm social-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
                    <i class="icon-facebook"></i>
                    <i class="icon-facebook"></i>
                </a>

                <a href="#" class="social-icon social-icon-sm social-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
                    <i class="icon-twitter"></i>
                    <i class="icon-twitter"></i>
                </a>

                <a href="#" class="social-icon social-icon-sm social-linkedin" data-toggle="tooltip" data-placement="top" title="Linkedin">
                    <i class="icon-linkedin"></i>
                    <i class="icon-linkedin"></i>
                </a>

                <a href="#" class="social-icon social-icon-sm social-rss" data-toggle="tooltip" data-placement="top" title="RSS">
                    <i class="icon-rss"></i>
                    <i class="icon-rss"></i>
                </a>

            </div>
            <!-- /social icons -->

        </div>

    </div>
    <!-- /SIDE PANEL -->


    <!-- SCROLL TO TOP -->
    <a href="#" id="toTop"></a>


    <!-- PRELOADER -->
    <div id="preloader">
        <div class="inner">
            <span class="loader"></span>
        </div>
    </div>
    <!-- /PRELOADER -->


    <!-- JAVASCRIPT FILES -->
    <script type="text/javascript">
        var plugin_path = 'assets/plugins/';
    </script>
    <script type="text/javascript" src="assets/plugins/jquery/jquery-2.2.3.min.js"></script>

    <script type="text/javascript" src="assets/js/scripts.js"></script>

    <!-- STYLESWITCHER - REMOVE >
		<script async type="text/javascript" src="assets/plugins/styleswitcher/styleswitcher.js"></script>

		<! REVOLUTION SLIDER -->
    <script type="text/javascript" src="assets/plugins/slider.revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="assets/plugins/slider.revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="assets/js/view/demo.revolution_slider.js"></script>
    <script type="text/javascript" src="assets/js/jquery.easypiechart.min.js"></script>
    <script type="text/javascript" src="assets/js/ultimate.min.js"></script>



</body>

</html>