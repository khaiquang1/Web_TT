<!DOCTYPE html>
<html dir="@if (session()->has('language_direction_from_dropdown')) @if(session()->get('language_direction_from_dropdown') == 1) {{ __('rtl') }} @else {{ __('ltr') }} @endif @else {{ __('ltr') }} @endif" lang="@if (session()->has('language_code_from_dropdown')){{ str_replace('_', '-', session()->get('language_code_from_dropdown')) }}@else{{ str_replace('_', '-',   $language->language_code) }}@endif">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="@if (isset($general_seo)){{ $general_seo->site_name }} @endif">
    <meta name="description" content="@if (isset($general_seo)){{ $general_seo->site_desc }} @endif">
    <meta name="keywords" content="@if (isset($general_seo)){{ $general_seo->site_keywords }} @endif">
    <meta name="author" content="simsiyeka">
    <meta property="fb:app_id" content="@if (isset($general_seo)){{ $general_seo->fb_app_id }} @endif">
    <meta property="og:title" content="@if (isset($general_seo)){{ $general_seo->site_name }} @endif">
    <meta property="og:url" content="@if (isset($general_seo)){{ url()->current() }} @endif">
    <meta property="og:description" content="@if (isset($general_seo)){{ $general_seo->site_desc }} @endif">
    <meta property="og:image" content="@if (!empty($general_site_image->favicon_image)){{ asset('uploads/img/general/'.$general_site_image->favicon_image) }} @endif">
    <meta itemprop="image" content="@if (!empty($general_site_image->favicon_image)){{ asset('uploads/img/general/'.$general_site_image->favicon_image) }} @endif">
    <meta property="og:type" content="website">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="@if (!empty($general_site_image->favicon_image))){{ asset('uploads/img/general/'.$general_site_image->favicon_image) }} @endif">
    <meta property="twitter:title" content="@if (isset($general_seo)){{ $general_seo->site_name }} @endif">
    <meta property="twitter:description" content="@if (isset($general_seo)){{ $general_seo->site_desc }} @endif">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
  <!--   <title>{{ __('frontend.home') }} @if (isset($general_seo)) - {{ $general_seo->site_name }} @endif</title> -->
@yield('tittle')

 <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/bootstrap.min.css')}}">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/fontawesome/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/owl.carousel.min.css')}}">

    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/magnific-popup.min.css')}}">
    <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/loader.min.css')}}">    
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/style.css')}}">
    <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/flaticon.min.css')}}">
    <!-- THEME COLOR CHANGE STYLE SHEET -->
    <link rel="stylesheet" class="skin" type="text/css" href="{{asset('assets/frontend/css/skin/skin-1.css')}}">
    <!-- SIDE SWITCHER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/switcher.css')}}">     

    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/plugins/revolution/revolution/css/settings.css')}}">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/plugins/revolution/revolution/css/navigation.css')}}">
    
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,800,800i,900" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700" rel="stylesheet">    
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    
  <!-- HEADER START -->
        <header class="site-header header-style-1  nav-wide">
            
            <div class="sticky-header main-bar-wraper">
                <div class="main-bar bg-white p-t5">
                    <div class="container clearfix">
                        <div class="header-center">
                            <div class="wt-header-left">
                                <!-- Header left -->
                                    <ul class="list-unstyled e-p-bx">
                                        <li><i class="fa fa-envelope m-r10 text-primary"></i>111@gmail.com</li>
                                        <li><i class="fa fa-phone m-r10 text-primary"></i>(0123) 321 654 1234</li>
                                    </ul>
                                </div>
                            <div class="wt-header-center">
                                <div class="logo-header">
                                    <div class="logo-header-inner logo-header-one">
                                        <a href="index.html">
                                            <img src="{{asset('assets/frontend/images/logo-dark.png')}}" width="171" height="49" alt="" />
                                        </a>
                                    </div>
                                </div>
                            </div>                                          
                            <div class="wt-header-right">

                                <!-- ETRA Nav -->
                                <div class="extra-nav">
                                    <div class="extra-cell">
                                        <a href="#search" class="site-search-btn">Seach<i class="fa fa-search text-primary m-l10"></i></a>
                                    </div>
                                 </div>
                                <!-- ETRA Nav -->
                                <div class="extra-nav">
                                    <div class="extra-cell">
                                        <a href="#social-top-icon" class="site-menu-share">Share<i class="fa fa-share-alt text-primary m-l10"></i></a>
                                    </div>
                                 </div>
                                 
                                <!-- ETRA Nav -->
                                <div class="extra-nav">
                                    <div class="extra-cell">
                                        <div class="menu-btn">
                                            <button type="button" class="btn-open"></button>
                                        </div>
                                    </div>
                                 </div>                         
                                 <!-- ETRA Nav -->                                  
                                                                                         
                            </div>
                        </div>
                         <!-- Search popup -->
                        <div id="search"> 
                            <span class="close"></span>
                            <form role="search" id="searchform" action="/search" method="get" class="radius-xl">
                                <div class="input-group">
                                    <input value="" name="q" type="search" placeholder="Type to search"/>
                                    <span class="input-group-btn"><button type="button" class="search-btn"><i class="fa fa-search"></i></button></span>
                                </div>   
                            </form>
                        </div>
                    
                         <!-- Social popup -->
                        <div id="social-top-icon"> 
                            <span class="close"></span>
                            <div class="full-social-bg">
                                  <ul>
                                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" class="google"><i class="fa fa-google"></i></a></li>
                                        <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#" class="tumblr"><i class="fa fa-tumblr"></i></a></li>
                                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
                                  </ul>
                            </div>
                        </div>                          
                        
                        <div class="full-menu">
                            <button type="button" class="full-menu-close"></button>
                            <!-- ETRA Nav   ======= --> 
                                <div class="vertical-content-wrap">
                                    <div class="vertical-centered">
                                        <!-- MAIN Vav -->
                                        <div class="vertical-nav">
                                            <ul class=" nav navbar-nav">
                                                <li class="active">
                                                    <a href="{{ URL::to('/') }}">Home</a>
                                                                                              
                                                </li>
                                                <li>
                                                    <a href="javascript:;">Pages</a>
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <a href="{{ URL::to('/page-aboutus') }}">About us</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ URL::to('/page-contactus') }}">Contact us</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="{{ URL::to('/page-blog') }}">Blog</a>
                                                    
                                                </li>
                                                <li>
                                                    <a href="{{ URL::to('/page-works') }}">Works</a>
                                                   
                                                </li>
                                                                           
                                            </ul>
                                        </div>
                                    </div> 
                                </div>
                            <!-- ETRA Nav  END ==== -->                               
                        </div> 
        
                    </div>
                </div>
            </div>

</header>
<!-- header End -->







@yield('content')


<!-- Footer Area Start -->
<footer class="site-footer footer-large  footer-light   footer-wide text-black">
            
            <!-- FOOTER BLOCKES START -->  
            <div class="footer-top overlay-wraper">
                <div class="overlay-main"></div>
                
                
               
                
                <div class="container">
                    <div class="row">
                        <!-- ABOUT COMPANY -->
                        <div class="col-lg-5 col-md-5 col-sm-4">  
                            <div class="widget widget_about">
                                <!--<h4 class="widget-title">About Company</h4>-->
                                <div class="logo-footer clearfix p-b15">
                                    <a href="index.html"><img src="{{asset('assets/frontend/images/logo-dark.png')}}" alt=""></a>
                                </div>
                                <p>Today we can tell you, thanks to your passion, hard work creativity, and expertise, you delivered us the most beautiful house great looks. lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <ul class="social-icons f-social-link">
                                    <li><a href="javascript:void(0);" class="fa fa-google"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                </ul>                                    
                            </div>
                     
                        </div> 

                        <!-- TAGS -->
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="widget widget_address_outer m-b20">
                                <h4 class="widget-title">Contact Us</h4>
                                <ul class="widget_address">
                                    <li>92 Princess Road, parkvenue,Greater London, NW18JR, United Kingdom</li>
                                    <li>construxdemo@gmail.com</li>
                                    <li>(+0091) 912-3456-073</li>
                                    <li>(+0091) 912-3456-084</li>
                                </ul>
                           
                            </div>
                        </div>
                                                
                        <!-- USEFUL LINKS -->
                        <div class="col-lg-3 col-md-3 col-sm-4">
                            <div class="widget widget_services inline-links">
                                <h4 class="widget-title">Useful links</h4>
                                <ul>
                                    <li><a href="about-1.html">About</a></li>
                                    <li><a href="post-gallery.html">Gallery</a></li>
                                    <li><a href="news-grid.html">Blog</a></li>
                                    <li><a href="work-masonry.html">Portfolio</a></li>
                                    <li><a href="contact-1.html">Contact Us</a></li>
                                </ul>
                            </div>                           
                        </div>      

                        <!-- NEWSLETTER -->

                    </div>
                    <div class="m-b10">
                        <div class="wt-divider bg-gray-dark"><i class="icon-dot c-square"></i></div>
                    </div>
                    <div class="news-letter-footer">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="newsletter-f-left">
                                    <h4 class="text-uppercase m-t0 m-b10">Subscribe to our newsletter!</h4>
                                    <p>Never Miss Anything From Construx By Signing Up To Our Newsletter. </p>
                                </div>
                            </div>    
                            <div class="col-md-6 col-sm-6">
                                <div class="newsletter-f-right text-center">
                                    <form role="search" method="post">
                                        <div class="input-group">
                                            <input name="news-letter" class="form-control" placeholder="ENTER YOUR EMAIL" type="text">
                                            <span class="input-group-btn">
                                                <button type="submit" class="site-button site-btn-effect"><span>Submit</span></button>
                                            </span>
                                        </div>
                                     </form>
                                </div>
                            </div>
                        </div>                           
                    </div>
                </div>
            </div>
            <!-- FOOTER COPYRIGHT -->
            <div class="footer-bottom overlay-wraper">
                <div class="overlay-main"></div>
                <div class="container">
                    <div class="row">
                        <div class="wt-footer-bot-center">
                            <span class="copyrights-text">© 2018 Your Company. Designed By Thewebmax</span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->

        <!-- BUTTON TOP START -->
        <button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>
        
     
    </div>
 
<!-- LOADING AREA START ===== -->
<div class="loading-area">
    <div class="loading-box"></div>
    <div class="loading-pic">
        <div class="cssload-thecube">
            <div class="cssload-cube cssload-c1"></div>
            <div class="cssload-cube cssload-c2"></div>
            <div class="cssload-cube cssload-c4"></div>
            <div class="cssload-cube cssload-c3"></div>
        </div>
    </div>
</div>
<!-- LOADING AREA  END ====== -->

<!-- Footer Area End -->
<!-- JAVASCRIPT  FILES ========================================= --> 
<script  src="{{asset('assets/frontend/js/jquery-1.12.4.min.js')}}"></script><!-- JQUERY.MIN JS -->
<script  src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->

<script  src="{{asset('assets/frontend/js/magnific-popup.min.js')}}"></script><!-- MAGNIFIC-POPUP JS -->

<script  src="{{asset('assets/frontend/js/waypoints.min.js')}}"></script><!-- WAYPOINTS JS -->
<script  src="{{asset('assets/frontend/js/counterup.min.js')}}"></script><!-- COUNTERUP JS -->
<script  src="{{asset('assets/frontend/js/waypoints-sticky.min.js')}}"></script><!-- COUNTERUP JS -->

<script  src="{{asset('assets/frontend/js/isotope.pkgd.min.js')}}"></script><!-- MASONRY  -->

<script  src="{{asset('assets/frontend/js/owl.carousel.min.js')}}"></script><!-- OWL  SLIDER  -->
<script src="{{asset('assets/frontend/js/jquery.owl-filter.js')}}"></script>

<script  src="{{asset('assets/frontend/js/stellar.min.js')}}"></script><!-- PARALLAX BG IMAGE   --> 




<script  src="{{asset('assets/frontend/js/custom.js')}}"></script><!-- CUSTOM FUCTIONS  -->
<script  src="{{asset('assets/frontend/js/shortcode.js')}}"></script><!-- SHORTCODE FUCTIONS  -->
<script  src="{{asset('assets/frontend/js/switcher.js')}}"></script><!-- SHORTCODE FUCTIONS  -->
<!-- REVOLUTION JS FILES -->

<script  src="{{asset('assets/frontend/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script  src="{{asset('assets/frontend/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->    
<script  src="{{asset('assets/frontend/plugins/revolution/revolution/js/extensions/revolution-plugin.js')}}"></script>

<!-- REVOLUTION SLIDER SCRIPT FILES -->
<script  src="{{asset('assets/frontend/js/rev-script-1.js')}}"></script>



</body>
</html>