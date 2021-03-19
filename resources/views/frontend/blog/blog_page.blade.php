@extends('layouts.frontend.master')
@section('tittle')
	<title>Blog</title>
@endsection

@section('content')
            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-parallax bg-top-center"  data-stellar-background-ratio="0.5"  style="background-image:url(images/banner/1.jpg);">
            	<div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                    	<div class="banner-title-outer">
                        	<div class="banner-title-name">
                        		<h2 class="text-white  font-80 font-weight-900">Blogs</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="{{ URL::to('/') }}">Home</a></li>
                                    <li>Blog</li>
                                </ul>
                            </div>
                        
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>


                    <!-- OUR BLOG START -->
                    <div class="section-full bg-white">
                        <div class="container">
                        
                            <!-- TITLE START -->
                            <div class="section-head text-left">
                                <h2 class="text-uppercase font-45 font-weight-500 m-b5">posts</h2>
                            </div>
                            <!-- TITLE END -->  
             
                            <!-- IMAGE CAROUSEL START -->
                            <div class="section-content">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6	">
                                        <div class="blog-post latest-blog-1 date-style-1">
                                            <div class="wt-post-media wt-img-effect zoom-slow">
                                                <a href="javascript:;"><img src="{{asset('assets/frontend/images/blog/latest-blog/pic1.jpg')}}" alt=""></a>
                                            </div>
                                            <div class="wt-post-info  bg-white">
                                            
                                                    <div class="wt-post-meta ">
                                                        <ul>
                                                            <li class="post-author"><i class="fa fa-user"></i><strong>By Admin</strong></li>                                                
                                                            <li class="post-date"><i class="fa fa-calendar"></i><strong>20 Sep 2018 </strong></li>
                                                        </ul>
                                                    </div>                                    
                                                    <div class="wt-post-title ">
                                                        <h4 class="post-title"><a href="javascript:;">Your first source for architecture, dsign and art news</a></h4>
                                                    </div>
                                                    <div class="wt-post-readmore">
                                                        <a href="Javascript:;" class="text-primary">Read More</a>
                                                    </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4 col-sm-6">
                                        <div class="blog-post latest-blog-1 date-style-1">
                                            <div class="wt-post-media wt-img-effect zoom-slow">
                                                <a href="javascript:;"><img src="{{asset('assets/frontend/images/blog/latest-blog/pic2.jpg')}}" alt=""></a>
                                            </div>
                                            <div class="wt-post-info bg-white">
                                                
                                                    <div class="wt-post-meta ">
                                                        <ul>
                                                            <li class="post-author"><i class="fa fa-user"></i><strong>By Admin</strong></li>                                                
                                                            <li class="post-date"><i class="fa fa-calendar"></i><strong>20 Sep 2018 </strong></li>
                                                        </ul>
                                                    </div>                                    
                                                    <div class="wt-post-title ">
                                                        <h4 class="post-title"><a href="javascript:;">Your first source for architecture, dsign and art news</a></h4>
                                                    </div>
                                                    <div class="wt-post-readmore">
                                                        <a href="Javascript:;" class="text-primary">Read More</a>
                                                    </div>
        
                                               
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4 col-sm-12">
                                        <div class="blog-post latest-blog-1 date-style-1">
                                            <div class="wt-post-media wt-img-effect zoom-slow">
                                                <a href="javascript:;"><img src="{{asset('assets/frontend/images/blog/latest-blog/pic3.jpg')}}" alt=""></a>
                                            </div>
                                            <div class="wt-post-info  bg-white">
                                                
                                                    <div class="wt-post-meta ">
                                                        <ul>
                                                            <li class="post-date"><i class="fa fa-calendar"></i><strong>20 Sep 2018 </strong></li>
                                                            <li class="post-author"><i class="fa fa-user"></i><strong>By Admin</strong></li>
                                                        </ul>
                                                    </div>                                    
                                                    <div class="wt-post-title ">
                                                        <h4 class="post-title"><a href="javascript:;">Your first source for architecture, dsign and art news</a></h4>
                                                    </div>
                                                    <div class="wt-post-readmore">
                                                        <a href="Javascript:;" class="text-primary">Read More</a>
                                                    </div>
                                             
                                            </div>
                                        </div>
                                    </div>                            
                                                                                                                  
                                </div>
                            </div>
                        </div>
                        
                     </div>   
                    <!-- OUR BLOG END -->   
                    
                   
@endsection