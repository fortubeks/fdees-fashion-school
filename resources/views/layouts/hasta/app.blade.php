<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ env('APP_NAME') }}</title>
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="76x76" href="images/favicon.png">
        <link rel="icon" type="image/png" href="images/favicon.png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        
        <!-- Icons -->
        
        <!-- Google fonts - witch you want to use - (rest you can just remove) -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Stylesheets -->
        <link rel="stylesheet" media="screen" href="js/bootstrap/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="js/mainmenu/menu.css" type="text/css" />
        <link rel="stylesheet" href="css/default.css" type="text/css" />
        <link rel="stylesheet" href="css/layouts.css" type="text/css" />
        <link rel="stylesheet" href="css/shortcodes.css" type="text/css" />
        <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" media="screen" href="css/responsive-leyouts.css" type="text/css" />
        <link rel="stylesheet" href="js/masterslider/style/masterslider.css" />
        <link rel="stylesheet" type="text/css" href="css/Simple-Line-Icons-Webfont/simple-line-icons.css" media="screen" />
        <link rel="stylesheet" href="css/et-line-font/et-line-font.css">
        <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="js/tabs/assets/css/responsive-tabs.css">



        <!-- Remove the below comments to use your color option -->
        <!--<link rel="stylesheet" href="css/colors/lightblue.css" />-->
        <!--<link rel="stylesheet" href="css/colors/orange.css" />-->
        <!--<link rel="stylesheet" href="css/colors/green.css" />-->
        <!--<link rel="stylesheet" href="css/colors/pink.css" />-->
        <!--<link rel="stylesheet" href="css/colors/red.css" />-->
        <!--<link rel="stylesheet" href="css/colors/purple.css" />-->
        <!--<link rel="stylesheet" href="css/colors/bridge.css" />-->
        <!--<link rel="stylesheet" href="css/colors/yellow.css" />-->
        <!--<link rel="stylesheet" href="css/colors/violet.css" />-->
        <!--<link rel="stylesheet" href="css/colors/cyan.css" />-->
        <!--<link rel="stylesheet" href="css/colors/mossgreen.css" />-->

    </head>
    <div class="site_wrapper">
        <div class="topbar white topbar-padding">
            <div class="container">
            <div class="topbar-left-items">
                <ul class="toplist toppadding pull-left paddtop1">
                <li class="rightl">Call us</li>
                <li><a href="tel:+234 80 0944 0084">+234 809 9019 989 </a></li>
                </ul>
            </div>
            <!--end left-->
            
            <div class="topbar-right-items pull-right">
                <ul class="toplist toppadding">
                <li><a href="{{url('/student-register')}}" class=" btn btn-pink-3 less-top-bottom-padding btn-round btn-small-2">Register</a></li>
                </ul>
            </div>
            </div>
        </div>
        <div class="clearfix"></div>
        
        @yield('content')
        
        <section class="section-pink-3 section-less-padding">
            <div class="container">
            <div class="row">
                <div class="col-md-7 col-centered text-center">
                <h3 class="less-mar3 roboto-slab text-white text-center font-weight-3">Fdees Fashion Academy</h3>
                <br/>
                <p class="text-white">Ready to make your mark in the world of fashion? Apply now and join a community of aspiring designers, marketers, and innovators.</p>
                <br/>
                <a class="btn btn-border white btn-large" href="#">Apply now</a> </div>
            </div>
            </div>
        </section>
        <!--end section-->
        <div class="clearfix"></div>
        
        <section class="section-fulldark sec-padding">
            <div class="container">
            <div class="row">
                <div class="col-md-4 clearfix">
                <h4 class="uppercase footer-title less-mar3 roboto-slab font-weight-3">Information About</h4>
                <div class="clearfix"></div>
                <div class="footer-title-bottomstrip"></div>
                <ul class="usefull-links no-border">
                    <li><a href="#"><i class="fa fa-angle-right"></i> About the academy</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i> Our approach</a></li>
                </ul>
                </div>
                <!--end item-->
                
                <div style="display: none;" class="col-md-3 clearfix">
                <div class="item-holder">
                    <h4 class="uppercase footer-title less-mar3 roboto-slab font-weight-3">Recent Posts</h4>
                    <div class="footer-title-bottomstrip"></div>
                    <div class="clearfix"></div>
                    <div class="image-left"><img src="http://placehold.it/80x80" alt=""/></div>
                    <div class="text-box-right">
                    <h6 class="text-white less-mar3 nopadding roboto-slab font-weight-3 nopadding"><a href="#">Clean And Modern</a></h6>
                    <p>Lorem ipsum dolor sit</p>
                    <div class="footer-post-info"> <span>By John Doe</span><span> May 20</span> </div>
                    </div>
                    <div class="divider-line solid dark margin opacity-6"></div>
                    <div class="clearfix"></div>
                    <div class="image-left"><img src="http://placehold.it/80x80" alt=""/></div>
                    <div class="text-box-right">
                    <h6 class="text-white less-mar3 roboto-slab font-weight-3 nopadding"><a href="#">Layered PSD Files</a></h6>
                    <p>Lorem ipsum dolor sit</p>
                    <div class="footer-post-info"> <span>By John Doe</span><span> May 20</span> </div>
                    </div>
                </div>
                </div>
                <!--end item-->
                
                <div class="col-md-4 clearfix">
                <h4 class="uppercase footer-title less-mar3 roboto-slab font-weight-3">Courses</h4>
                <div class="clearfix"></div>
                <div class="footer-title-bottomstrip"></div>
                <ul class="usefull-links no-border">
                    <li><a href="#"><i class="fa fa-angle-right"></i> Beginner</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i> Intermediate</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i> Advanced</a></li>
                </ul>
                </div>
                <!--end item-->
                
                
                
                <!--end item--> 
                
            </div>
            </div>
        </section>
        <!--end section-->
        <div class="clearfix"></div>
        
        <section class="section-copyrights sec-moreless-padding">
            <div class="container">
            <div class="row">
                <div class="col-md-12"> <span>Copyright © 2024 <a href="#">Fdees Fashion Academy</a> By <a href="https://fortranhouse.com">Fortran House</a> | All rights reserved.</span></div>
            </div>
            </div>
        </section>
        <!--end section-->
        <div class="clearfix"></div>
        
        <a href="#" class="scrollup pink-3"></a><!-- end scroll to top of the page--> 
        </div>
        <!-- end site wraper --> 

        <!-- ============ JS FILES ============ -->
        
        <script type="text/javascript" src="js/universal/jquery.js"></script> 
        <script src="js/bootstrap/bootstrap.min.js" type="text/javascript"></script> 
        <script src="js/masterslider/jquery.easing.min.js"></script> 
        <script src="js/masterslider/masterslider.min.js"></script> 
        <script type="text/javascript">
        (function($) {
        "use strict";
            var slider = new MasterSlider();
            // adds Arrows navigation control to the slider.
            slider.control('arrows');
            slider.control('bullets');
            
            slider.setup('masterslider' , {
                width:1600,    // slider standard width
                height:630,   // slider standard height
                space:0,
                speed:45,
                layout:'fullwidth',
                loop:true,
                preload:0,
                autoplay:true,
                view:"parallaxMask"
            });

        })(jQuery);
        </script> 
        <script type="text/javascript">
        (function($) {
        "use strict";
            var slider = new MasterSlider();

            slider.setup('masterslider2' , {
                width:570,    // slider standard width
                height:300,   // slider standard height
                space:0,
                speed:27,
                layout:'boxed',
                loop:true,
                preload:0,
                autoplay:true,
                view:"basic",
            });
        })(jQuery);
        </script>  
        <script src="js/mainmenu/customeUI.js"></script> 
        <script src="js/owl-carousel/owl.carousel.js"></script> 
        <script src="js/owl-carousel/custom.js"></script> 
        <script type="text/javascript" src="js/tabs/smk-accordion.js"></script>
        <script type="text/javascript" src="js/tabs/custom.js"></script> 
        <script src="js/scrolltotop/totop.js"></script> 
        <script src="js/mainmenu/jquery.sticky.js"></script> 
        
        <script src="js/scripts/functions.js" type="text/javascript"></script>
    </body>
</html>

