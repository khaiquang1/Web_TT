@extends('layouts.frontend.master')
@section('tittle')
	<title>About Us</title>
@endsection


@section('content')
<div class="page-content">
        
            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-parallax bg-top-center"  data-stellar-background-ratio="0.5"  style="background-image:url({{asset('assets/frontend/images/banner/1.jpg')}};">
            	<div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                    	<div class="banner-title-outer">
                        	<div class="banner-title-name">
                        		<h2 class="text-white  font-80 font-weight-900">About Us</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="{{ URL::to('/') }}">Home</a></li>
                                    <li>About Us</li>
                                </ul>
                            </div>
                        
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->
             
            <!-- ABOUT COMPANY -->
            <div class="section-full small-device  p-tb80 bg-white">

				<div class="container">
                
                    <!-- IMAGE CAROUSEL START -->
                    <div class="section-content">
                    	<div class="col-md-12">
                        	<div class="row  no-col-gap">
                                <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc">
                                    <div class="wt-icon-box-wraper center p-lr30  p-b50 p-t50 bdr-1 bdr-solid bdr-gray-light hover-border-outer hover-border">
                                        <div class="icon-lg text-primary m-b15">
                                            <span class="icon-cell text-primary"><i class="flaticon-decorating"></i></span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="wt-tilte text-uppercase font-weight-600 m-b20">Interior</h4>
                                            <p>There are many variations of pass ages of Ipsum</p>
                                        </div>
                                    </div>
                                </div>                          
                                <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc">
                                    <div class="wt-icon-box-wraper center p-lr30  p-b50 p-t50 bdr-1 bdr-solid bdr-gray-light hover-border-outer hover-border">
                                        <div class="icon-lg text-primary m-b15">
                                            <span class="icon-cell text-primary"><i class="flaticon-skyline"></i></span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="wt-tilte text-uppercase font-weight-600 m-b20">Architecture</h4>
                                            <p>There are many variations of pass ages of Ipsum.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc">
                                    <div class="wt-icon-box-wraper center p-lr30  p-b50 p-t50 bdr-1 bdr-solid bdr-gray-light hover-border-outer hover-border">
                                        <div class="icon-lg text-primary m-b15">
                                            <span class="icon-cell text-primary"><i class="flaticon-sketch "></i></span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="wt-tilte text-uppercase font-weight-600 m-b20">Planing</h4>
                                            <p>There are many variations of pass ages of Ipsum.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc">
                                    <div class="wt-icon-box-wraper center p-lr30  p-b50 p-t50 bdr-1 bdr-solid bdr-gray-light hover-border-outer hover-border">
                                        <div class="icon-lg text-primary m-b15">
                                            <span class="icon-cell text-primary"><i class="flaticon-crane"></i></span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="wt-tilte text-uppercase font-weight-600 m-b20">Construction</h4>
                                            <p>There are many variations of pass ages of Ipsum.</p>
                                        </div>
                                    </div>
                                </div>
                                                                                  
                            </div>
                        </div>
                    </div>
                </div>
                
             </div>   
            <!-- ABOUT COMPANY END -->
            
            <!-- OUR TEAM START -->
            <div class="section-full small-device p-t80 bg-gray">
				<div class="container">
                

                    <!-- TITLE START -->
                    <div class="section-head text-left">
                        <h4 class="text-primary text-uppercase wt-title-small">Our best team</h4>
                        <h2 class="text-uppercase font-45 font-weight-500 m-b5">Our team</h2>
                    </div>
                    <!-- TITLE END --> 
                   
     
                    <!-- IMAGE CAROUSEL START -->
                    <div class="row">
                        
                            <!-- COLUMNS 1 -->
                            <div class="col-md-4 col-sm-6  col-xs-6 col-xs-100pc m-t15 m-b90">
                                <div class="wt-team-one">
                                    <div class="wt-team-media">
                                        <a href="javascript:void(0);"><img src="{{asset('assets/frontend/images/our-team5/pic1.jpg')}}" alt=""></a>
                                   
                                        <div class="social-overlay">
                                        	<div class="team-social-center">
                                                <ul class="team-social-icon">
                                                    <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                                    <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                                    <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                                    <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                                    <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                                                              
                                    </div>
                                    <div class="wt-team-info text-center p-tb20 p-lr50">
                                        <h4 class="wt-team-title text-uppercase font-weight-600"><a href="javascript:void(0);">Richard Wagner</a></h4>
                                        <p class="m-b10">Contractor</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 2 -->
                            <div class="col-md-4 col-sm-6 col-xs-6 col-xs-100pc m-t15 m-b90">
                                <div class="wt-team-one">
                                    <div class="wt-team-media ">
                                        <a href="javascript:void(0);"><img src="{{asset('assets/frontend/images/our-team5/pic2.jpg')}}" alt=""></a>
                                        
                                        <div class="social-overlay">
                                        	<div class="team-social-center">
                                                <ul class="team-social-icon">
                                                    <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                                    <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                                    <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                                    <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                                    <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                                                                
                                    </div>
                                    <div class="wt-team-info text-center  p-tb20 p-lr50">
                                        <h4 class="wt-team-title text-uppercase font-weight-600"><a href="javascript:void(0);">Lisa Anderson</a></h4>
                                        <p class="m-b10">Contractor</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 3 -->
                            <div class="col-md-4 col-sm-12 col-xs-12 m-t15 m-b90">
                                <div class="wt-team-one">
                                    <div class="wt-team-media">
                                        <a href="javascript:void(0);"><img src="{{asset('assets/frontend/images/our-team5/pic3.jpg')}}" alt=""></a>
                                        
                                        <div class="social-overlay">
                                        	<div class="team-social-center">
                                                <ul class="team-social-icon">
                                                    <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                                    <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                                    <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                                    <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                                    <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                                                                
                                    </div>
                                    <div class="wt-team-info text-center p-tb20 p-lr50">
                                        <h4 class="wt-team-title text-uppercase font-weight-600"><a href="javascript:void(0);">Tommy Atkins</a></h4>
                                        <p  class="m-b10">Contractor</p>
                                    </div>
                                </div>
                            </div>
                
                            
                        </div>
                </div>
                
             </div>   
            <!-- OUR TEAM END -->
            
            <!-- WELCOME SECTION START -->
            <div class="section-full small-device  p-tb80 bg-white bg-bottom-right bg-no-repeat" style="background-image:url(images/background/bg-4.jpg);">
                <div class="container">
                
                    <div class="section-content">

                    	<div class="row">
                        	<div class="col-md-5 col-sm-12">
                            	<div class="why-choose-half-section">
                                	<div class="wt-media">
                            			<img src="{{asset('assets/frontend/images/people-1.png')}}" alt="">
                                    </div>
                                    
                               </div>
                            </div>                        
                    		<div class="col-md-7 col-sm-12">
                                <!-- TITLE START -->
                                <div class="section-head text-left">
                                    <h4 class="text-primary text-uppercase wt-title-small">Our specialization</h4>
                                    <h2 class="text-uppercase font-45 font-weight-500 m-b5">About our company</h2>
                                </div>
                                <!-- TITLE END -->                              
								<div class="wt-box">
                                      	<h2>Industry is older than modern humans. Over time, the methods used have varied considerably.</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non libero consectetur, blandit mauris eget, imperdiet nisl. Etiam commodo ex nec erat tempor varius. Nunc rutrum pretium nunc in malesuada. Curabitur mollis urna ac sapien vulputate, ut congue sapien vehicula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam et suscipit dui. Maecenas velit quam, mollis id erat eget, scelerisque elementum odio. Maecenas ac sagittis erat. Quisque hendrerit dapibus diam, a venenatis dui efficitur nec. Aenean tincidunt ullamcorper fermentum. </p>
                                        <div class="text-left">
                                        	<img src="{{asset('assets/frontend/images/sign.jpg')}}" alt="">
                                        </div>                                                                    
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>   
            <!-- WELCOME  SECTION END -->  
                        
            <!-- TESTIMONIALS SECTION START -->
            <div class="section-full small-device  p-t80 p-b80 bg-gray">
                <div class="container">
                    <div class="section-content">
                    
                    <!-- TITLE START -->
                    <div class="section-head text-left">
                        <h4 class="text-primary text-uppercase wt-title-small">Client Says</h4>
                        <h2 class="text-uppercase font-45 font-weight-500 m-b5">Testimonials</h2>
                    </div>
                    <!-- TITLE END -->  
                    
                        <!-- TESTIMONIAL 4 START ON BACKGROUND -->   
                        <div class="section-content">
                            <div class="owl-carousel testimonial-home">
                                <div class="item">
                                    <div class="testimonial-5 bg-white">
                                        <div class="testimonial-pic-block radius-bx"> 
                                            <div class="testimonial-pic radius">
                                                <img src="{{asset('assets/frontend/images/testimonials/pic1.jpg')}}" width="132" height="132" alt="">
                                            </div>
                                        </div>
                                        <div class="testimonial-text clearfix">
                                        <div class="testimonial-paragraph">
                                            <span class="fa fa-quote-right text-primary"></span>
                                            <p>Nulla metus metus ullamcorper vel tincidunt sed euismod nibh Quisque volutpat condimentum velit class aptent taciti sociosqu ad litora torquent per conubia nostra.
                                            </p>
                                        </div>
                                        <div class="testimonial-detail clearfix">
                                            <strong class="testimonial-name text-black">RINDA SMITH</strong>
                                            <span class="testimonial-position p-t20">Contractor</span>
                                        </div>
                                    </div>
                                        
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-5 bg-white">
                                        <div class="testimonial-pic-block radius-bx"> 
                                            <div class="testimonial-pic radius">
                                                <img src="{{asset('assets/frontend/images/testimonials/pic2.jpg')}}" width="132" height="132" alt="">
                                            </div>
                                        </div>
                                        <div class="testimonial-text clearfix">
                                        <div class="testimonial-paragraph">
                                            <span class="fa fa-quote-right text-primary"></span>
                                            <p>Nulla metus metus ullamcorper vel tincidunt sed euismod nibh Quisque volutpat condimentum velit class aptent taciti sociosqu ad litora torquent per conubia nostra.
                                            </p>
                                        </div>
                                        <div class="testimonial-detail clearfix">
                                            <strong class="testimonial-name text-black">RINDA SMITH</strong>
                                            <span class="testimonial-position p-t20">Founder</span>
                                        </div>
                                    </div>
                                        
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-5 bg-white">
                                        <div class="testimonial-pic-block radius-bx"> 
                                            <div class="testimonial-pic radius">
                                                <img src="{{asset('assets/frontend/images/testimonials/pic1.jpg')}}" width="132" height="132" alt="">
                                            </div>
                                        </div>
                                        <div class="testimonial-text clearfix">
                                        <div class="testimonial-paragraph">
                                            <span class="fa fa-quote-right text-primary"></span>
                                            <p>Nulla metus metus ullamcorper vel tincidunt sed euismod nibh Quisque volutpat condimentum velit class aptent taciti sociosqu ad litora torquent per conubia nostra.
                                            </p>
                                        </div>
                                        <div class="testimonial-detail clearfix">
                                            <strong class="testimonial-name text-black">RINDA SMITH</strong>
                                            <span class="testimonial-position p-t20">Founder</span>
                                        </div>
                                    </div>
                                        
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-5 bg-white">
                                        <div class="testimonial-pic-block radius-bx"> 
                                            <div class="testimonial-pic radius">
                                                <img src="{{asset('assets/frontend/images/testimonials/pic1.jpg')}}" width="132" height="132" alt="">
                                            </div>
                                        </div>
                                        <div class="testimonial-text clearfix">
                                        <div class="testimonial-paragraph">
                                            <span class="fa fa-quote-right text-primary"></span>
                                            <p>Nulla metus metus ullamcorper vel tincidunt sed euismod nibh Quisque volutpat condimentum velit class aptent taciti sociosqu ad litora torquent per conubia nostra.
                                            </p>
                                        </div>
                                        <div class="testimonial-detail clearfix">
                                            <strong class="testimonial-name text-black">RINDA SMITH</strong>
                                            <span class="testimonial-position p-t20">Contractor</span>
                                        </div>
                                    </div>
                                        
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-5 bg-white">
                                        <div class="testimonial-pic-block radius-bx"> 
                                            <div class="testimonial-pic radius">
                                                <img src="{{asset('assets/frontend/images/testimonials/pic2.jpg')}}" width="132" height="132" alt="">
                                            </div>
                                        </div>
                                        <div class="testimonial-text clearfix">
                                        <div class="testimonial-paragraph">
                                            <span class="fa fa-quote-right text-primary"></span>
                                            <p>Nulla metus metus ullamcorper vel tincidunt sed euismod nibh Quisque volutpat condimentum velit class aptent taciti sociosqu ad litora torquent per conubia nostra.
                                            </p>
                                        </div>
                                        <div class="testimonial-detail clearfix">
                                            <strong class="testimonial-name text-black">RINDA SMITH</strong>
                                            <span class="testimonial-position p-t20">Founder</span>
                                        </div>
                                    </div>
                                        
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-5 bg-white">
                                        <div class="testimonial-pic-block radius-bx"> 
                                            <div class="testimonial-pic radius">
                                                <img src="{{asset('assets/frontend/images/testimonials/pic1.jpg')}}" width="132" height="132" alt="">
                                            </div>
                                        </div>
                                        <div class="testimonial-text clearfix">
                                        <div class="testimonial-paragraph">
                                            <span class="fa fa-quote-right text-primary"></span>
                                            <p>Nulla metus metus ullamcorper vel tincidunt sed euismod nibh Quisque volutpat condimentum velit class aptent taciti sociosqu ad litora torquent per conubia nostra.
                                            </p>
                                        </div>
                                        <div class="testimonial-detail clearfix">
                                            <strong class="testimonial-name text-black">RINDA SMITH</strong>
                                            <span class="testimonial-position p-t20">Founder</span>
                                        </div>
                                    </div>
                                        
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
            <!-- TESTIMONIALS SECTION END --> 
                        
                        
            
        </div>
        <!-- CONTENT END -->
@endsection