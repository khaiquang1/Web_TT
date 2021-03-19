@extends('layouts.frontend.master')
@section('tittle')
	<title>Works</title>
@endsection


@section('content')
<!-- CONTENT START -->
        <div class="page-content">
            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-parallax bg-top-center"  data-stellar-background-ratio="0.5"  style="background-image:url({{asset('assets/frontend/images/banner/2.jpg')}});">
            	<div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                    	<div class="banner-title-outer">
                        	<div class="banner-title-name">
                        		<h2 class="text-white  font-80 font-weight-900">Work</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="{{ URL::to('/') }};">Home</a></li>
                                    <li>Works</li>
                                </ul>
                            </div>
                        
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->
            
			<!-- SECTION CONTENT START -->
            <div class="section-full small-device  p-tb80 bg-gray">
            	<div class="container">
                    <!-- PAGINATION START -->
                    <div class="filter-wrap p-tb50 text-center">
                        <ul class="masonry-filter link-style  text-uppercase">
                                <li class="active"><a data-filter="*" href="#">All</a></li>
                                <li><a data-filter=".cat-1" href="#">House</a></li>
                                <li><a data-filter=".cat-2" href="#">Building</a></li>
                                <li><a data-filter=".cat-3" href="#">Office</a></li>
                                <li><a data-filter=".cat-4" href="#">Garden</a></li>
                                <li><a data-filter=".cat-5" href="#">Interior</a></li>
                        </ul>
                    </div>
                    <!-- PAGINATION END -->
                    
                    <!-- GALLERY CONTENT START -->
                     <div class="portfolio-wrap mfp-gallery work-grid row clearfix">
                        <!-- COLUMNS 1 -->
                        <div class="masonry-item cat-1  col-md-4 col-sm-6 m-b30">
                            <div class="wt-box  work-hover-content">
                                <div class="wt-thum-bx  img-center-icon">
                                    <img src="{{asset('assets/frontend/images/gallery/pic1.jpg')}}" alt="">
                                </div>
                                
                            	<div class="wt-info bg-white p-a20">
                                    <h4 class="wt-tilte text-uppercase font-weight-600 m-b10 m-t0"><a href="#">Rooms & Halls</a></h4>
                                    <p class="m-b0">Web Design / Graphic</p>
                                </div>                                 
                            </div>
                                      
                        </div>
                        <!-- COLUMNS 2 -->
                        <div class="masonry-item cat-2 col-md-4 col-sm-6 m-b30">
                            <div class="wt-box   work-hover-content">
                                <div class="wt-thum-bx img-center-icon">
                                    <img src="{{asset('assets/frontend/images/gallery/pic2.jpg')}}" alt="">
                                    
                                </div>
                            	<div class="wt-info bg-white p-a20">
                                <h4 class="wt-tilte text-uppercase font-weight-600 m-b10 m-t0"><a href="#">To-Do Dashboard</a></h4>
                                <p class="m-b0">Web Design / Graphic</p>      
                            </div>                                    
                            </div>

                        </div>
                        <!-- COLUMNS 3 -->
                        <div class="masonry-item cat-3 col-md-4 col-sm-6 m-b30">
                            <div class="wt-box   work-hover-content">
                                <div class="wt-thum-bx img-center-icon">
                                    <img src="{{asset('assets/frontend/images/gallery/pic4.jpg')}}" alt="">
                                </div>
                            	<div class="wt-info bg-white p-a20">
                                <h4 class="wt-tilte text-uppercase font-weight-600 m-b10 m-t0"><a href="#">WhereTO App</a></h4>
                                <p class="m-b0">Web Design / Graphic</p>      
                            </div>                                 
                            </div>
  
                        </div>
                        <!-- COLUMNS 4 -->
                        <div class="masonry-item cat-4 col-md-4 col-sm-6 m-b30">
                            <div class="wt-box   work-hover-content">
                                <div class="wt-thum-bx img-center-icon">
                                    <img src="{{asset('assets/frontend/images/gallery/pic4.jpg')}}" alt="">
                                </div>
                            	<div class="wt-info bg-white p-a20">
                                <h4 class="wt-tilte text-uppercase font-weight-600 m-b10 m-t0"><a href="#">Rooms & Halls</a></h4>
                                <p class="m-b0">Web Design / Graphic</p>      
                            </div>                                 
                            </div>
   
                        </div>
                        <!-- COLUMNS 5 -->
                        <div class="masonry-item cat-5 col-md-4 col-sm-6 m-b30">
                          <div class="wt-box   work-hover-content">
                                <div class="wt-thum-bx img-center-icon">
                                    <img src="{{asset('assets/frontend/images/gallery/pic5.jpg')}}" alt="">
                                </div>
                            	<div class="wt-info bg-white p-a20">
                                <h4 class="wt-tilte text-uppercase font-weight-600 m-b10 m-t0"><a href="#">Events and More</a></h4>
                                <p class="m-b0">Web Design / Graphic</p>      
                            </div>                                 
                            </div>
   
                        </div>
                        <!-- COLUMNS 6 -->
                        <div class="masonry-item cat-4 col-md-4 col-sm-6 m-b30">
                            <div class="wt-box   work-hover-content">
                                <div class="wt-thum-bx  img-center-icon">
                                    <img src="{{asset('assets/frontend/images/gallery/pic6.jpg')}}" alt="">
                                </div>
                            	<div class="wt-info bg-white p-a20">
                                <h4 class="wt-tilte text-uppercase font-weight-600 m-b10 m-t0"><a href="#">Remind~Me More</a></h4>
                                <p class="m-b0">Web Design / Graphic</p>      
                            </div>                                   
                            </div>
 
                        </div>
                        <!-- COLUMNS 7 -->
                        <div class="masonry-item cat-3 col-md-4 col-sm-6 m-b30">
                            <div class="wt-box   work-hover-content">
                                <div class="wt-thum-bx  img-center-icon">
                                    <img src="{{asset('assets/frontend/images/gallery/pic7.jpg')}}" alt="">
                                </div>
                            	<div class="wt-info bg-white p-a20">
                                <h4 class="wt-tilte text-uppercase font-weight-600 m-b10 m-t0"><a href="#">Workout Buddy</a></h4>
                                <p class="m-b0">Web Design / Graphic</p>      
                            </div>                                   
                            </div>
 
                        </div>
                        <!-- COLUMNS 5 -->
                        <div class="masonry-item cat-2 col-md-4 col-sm-6 m-b30">
                            <div class="wt-box   work-hover-content">
                                <div class="wt-thum-bx img-center-icon">
                                    <img src="{{asset('assets/frontend/images/gallery/pic8.jpg')}}" alt="">
                                </div>
                                <div class="wt-info bg-white p-a20">
                                    <h4 class="wt-tilte text-uppercase font-weight-600 m-b10 m-t0"><a href="#">Speed Detector</a></h4>
                                    <p class="m-b0">Web Design / Graphic</p>      
                                </div>                                  
                            </div>
  
                        </div>
                        <!-- COLUMNS 6 -->
                        <div class="masonry-item cat-1 col-md-4 col-sm-6 m-b30">
                            <div class="wt-box   work-hover-content">
                                <div class="wt-thum-bx img-center-icon">
                                    <img src="{{asset('assets/frontend/images/gallery/pic9.jpg')}}" alt="">
                                </div>
                            	<div class="wt-info bg-white p-a20">
                                <h4 class="wt-tilte text-uppercase font-weight-600 m-b10 m-t0"><a href="#">Generic Apps</a></h4>
                                <p class="m-b0">Web Design / Graphic</p>      
                            </div>                                   
                            </div>
 
                        </div>                                   
                     </div>
                    <!-- GALLERY CONTENT END -->                    
            	</div>
            </div>
            <!-- SECTION CONTENT END  -->

        </div>
        <!-- CONTENT END -->
@endsection