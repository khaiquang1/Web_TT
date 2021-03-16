<!DOCTYPE html>
<html dir="<?php if(session()->has('language_direction_from_dropdown')): ?> <?php if(session()->get('language_direction_from_dropdown') == 1): ?> <?php echo e(__('rtl')); ?> <?php else: ?> <?php echo e(__('ltr')); ?> <?php endif; ?> <?php else: ?> <?php echo e(__('ltr')); ?> <?php endif; ?>" lang="<?php if(session()->has('language_code_from_dropdown')): ?><?php echo e(str_replace('_', '-', session()->get('language_code_from_dropdown'))); ?><?php else: ?><?php echo e(str_replace('_', '-',   $language->language_code)); ?><?php endif; ?>">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="<?php if(isset($general_seo)): ?><?php echo e($general_seo->site_name); ?> <?php endif; ?>">
    <meta name="description" content="<?php if(isset($general_seo)): ?><?php echo e($general_seo->site_desc); ?> <?php endif; ?>">
    <meta name="keywords" content="<?php if(isset($general_seo)): ?><?php echo e($general_seo->site_keywords); ?> <?php endif; ?>">
    <meta name="author" content="simsiyeka">
    <meta property="fb:app_id" content="<?php if(isset($general_seo)): ?><?php echo e($general_seo->fb_app_id); ?> <?php endif; ?>">
    <meta property="og:title" content="<?php if(isset($general_seo)): ?><?php echo e($general_seo->site_name); ?> <?php endif; ?>">
    <meta property="og:url" content="<?php if(isset($general_seo)): ?><?php echo e(url()->current()); ?> <?php endif; ?>">
    <meta property="og:description" content="<?php if(isset($general_seo)): ?><?php echo e($general_seo->site_desc); ?> <?php endif; ?>">
    <meta property="og:image" content="<?php if(!empty($general_site_image->favicon_image)): ?><?php echo e(asset('uploads/img/general/'.$general_site_image->favicon_image)); ?> <?php endif; ?>">
    <meta itemprop="image" content="<?php if(!empty($general_site_image->favicon_image)): ?><?php echo e(asset('uploads/img/general/'.$general_site_image->favicon_image)); ?> <?php endif; ?>">
    <meta property="og:type" content="website">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="<?php if(!empty($general_site_image->favicon_image)): ?><?php echo e(asset('uploads/img/general/'.$general_site_image->favicon_image)); ?> <?php endif; ?>">
    <meta property="twitter:title" content="<?php if(isset($general_seo)): ?><?php echo e($general_seo->site_name); ?> <?php endif; ?>">
    <meta property="twitter:description" content="<?php if(isset($general_seo)): ?><?php echo e($general_seo->site_desc); ?> <?php endif; ?>">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <!-- Title -->
    <title><?php echo e(__('frontend.home')); ?> <?php if(isset($general_seo)): ?> - <?php echo e($general_seo->site_name); ?> <?php endif; ?></title>

<?php if(!empty($general_site_image->favicon_image)): ?>
    <!-- Favicon -->
        <link href="<?php echo e(asset('uplods/img/general/'.$general_site_image->favicon_image)); ?>" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
        <link href="<?php echo e(asset('uploads/img/general/'.$general_site_image->favicon_image)); ?>" sizes="128x128" rel="shortcut icon" />
<?php else: ?>
    <!-- Favicon -->
        <link href="<?php echo e(asset('uplods/img/dummy/favicon.png')); ?>" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
        <link href="<?php echo e(asset('uploads/img/dummy/favicon.png')); ?>" sizes="128x128" rel="shortcut icon" />
<?php endif; ?>


    <!-- Theme Css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/responsive.css')); ?>">

    <?php if(isset($color_option)): ?>

        <?php if($color_option->color_option == 1): ?>
            <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/color/black.css')); ?>">
        <?php elseif($color_option->color_option == 2): ?>
            <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/color/blue.css')); ?>">
        <?php elseif($color_option->color_option == 3): ?>
            <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/color/dark_blue.css')); ?>">
        <?php elseif($color_option->color_option == 4): ?>
            <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/color/dark_red.css')); ?>">
        <?php elseif($color_option->color_option == 5): ?>
            <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/color/green.css')); ?>">
        <?php elseif($color_option->color_option == 6): ?>
            <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/color/pink.css')); ?>">
        <?php elseif($color_option->color_option == 7): ?>
            <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/color/yellow.css')); ?>">
        <?php endif; ?>

    <?php endif; ?>

    <!-- Dynamic Css -->
    <style>
        <?php if(!empty($site_info->address) && empty($site_info->email)): ?>
            .header-top-area .header-top-left-part .address:after
        {
            display: none;
        }
        <?php endif; ?>
    </style>

<?php if(isset($google_analytic)): ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo e($google_analytic->google_analytic); ?>"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', '<?php echo e($google_analytic->google_analytic); ?>');
        </script>
    <?php endif; ?>

</head>
<body>

<?php if($section_arr['preloader'] == 1): ?>
    <!-- Preloader Start -->
    <div class="preloader"></div>
    <!-- Preloader End -->
<?php endif; ?>

<!-- header Start -->
<header class="header-style-two" data-scroll-index="0">
    <div class="header-wrapper">
        <div class="header-top-area bg-gradient-color d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 header-top-left-part">
                        <?php if(!empty($site_info->address)): ?> <span class="address" data-toggle="tooltip" data-placement="top" title="<?php echo e($site_info->address); ?>"><i class="webexflaticon flaticon-placeholder-1"></i> <?php echo e(\Illuminate\Support\Str::limit($site_info->address, 30, $end='...')); ?></span> <?php endif; ?>
                        <?php if(!empty($site_info->email)): ?> <span class="phone"><i class="webexflaticon flaticon-send"></i> <?php echo e($site_info->email); ?></span> <?php endif; ?>
                    </div>
                    <div class="col-lg-6 header-top-right-part text-right">
                        <ul class="social-links">
                            <?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e($social->link); ?>" target="_blank"><i class="<?php echo e($social->social_media); ?>"></i></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <?php if(count($display_dropdowns) > 0): ?>
                            <div class="language">
                                <a class="language-btn" href="#"><i class="webexflaticon flaticon-internet"></i>
                                    <?php if(session()->has('language_name_from_dropdown')): ?> <?php echo e(session()->get('language_name_from_dropdown')); ?> <?php else: ?> <?php echo e($language->language_name); ?> <?php endif; ?>
                                </a>
                                <ul class="language-dropdown">
                                    <?php $__currentLoopData = $display_dropdowns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $display_dropdown): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><a href="<?php echo e(url('language/set-locale/'.$display_dropdown->id)); ?>"><?php echo e($display_dropdown->language_name); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-navigation-area two-layers-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <a class="navbar-brand logo f-left mrt-10 mrt-md-0" href="<?php echo e(url('/')); ?>">
                            <?php if(!empty($general_site_image->site_white_logo_image)): ?>
                                <img id="logo-image" class="img-center" src="<?php echo e(asset('uploads/img/general/'.$general_site_image->site_white_logo_image)); ?>" alt="logo image">
                            <?php else: ?>
                                <img id="logo-image" class="img-center" src="<?php echo e(asset('uploads/common_dummy/logo.png')); ?>" alt="logo image">
                            <?php endif; ?>
                        </a>
                        <div class="mobile-menu-right"></div>
                        <div class="header-searchbox-style-two d-none d-xl-block">
                            <div class="side-panel side-panel-trigger text-right d-none d-lg-block">
                                <span class="bar1"></span>
                                <span class="bar2"></span>
                                <span class="bar3"></span>
                            </div>
                            <div class="show-searchbox">
                                <a href="#"><i class="webex-icon-Search"></i></a>
                            </div>
                            <div class="toggle-searchbox">
                                <form id="searchform-all" action="<?php echo e(route('blog-page.search')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <div>
                                        <input type="text" id="s" class="form-control" name="search" placeholder="<?php echo e(__('frontend.search')); ?>" required>
                                        <div class="input-box">
                                            <button type="submit" id="searchsubmit"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="side-panel-content">
                            <div class="close-icon">
                                <button><i class="webex-icon-cross"></i></button>
                            </div>
                            <div class="side-panel-logo mrb-30">
                                <a href="<?php echo e(url('/')); ?>">
                                <?php if(!empty($general_site_image->site_white_logo_image)): ?>
                                    <img src="<?php echo e(asset('uploads/img/general/'.$general_site_image->site_white_logo_image)); ?>" alt="logo image">
                                <?php else: ?>
                                    <img src="<?php echo e(asset('uploads/common_dummy/logo.png')); ?>" alt="logo image">
                                <?php endif; ?>
                                </a>
                            </div>
                            <div class="side-info mrb-30">
                                <div class="side-panel-element mrb-25">
                                    <h4 class="mrb-10"><?php echo e(__('frontend.office_address')); ?></h4>
                                    <ul class="list-items">
                                        <?php if(!empty($site_info->address)): ?> <li><span class="fa fa-map-marker-alt mrr-10 text-primary-color"></span><a href="<?php if(!empty($site_info->address_map_link)): ?> <?php echo e($site_info->address_map_link); ?> <?php else: ?> # <?php endif; ?>"><?php echo e($site_info->address); ?></a></li> <?php endif; ?>
                                        <?php if(!empty($site_info->email)): ?> <li><span class="fas fa-envelope mrr-10 text-primary-color"></span><?php echo e($site_info->email); ?></li> <?php endif; ?>
                                        <?php if(!empty($site_info->phone)): ?> <li><span class="fas fa-phone-alt mrr-10 text-primary-color"></span><?php echo e($site_info->phone); ?></li> <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                            <h4 class="mrb-15"><?php echo e(__('frontend.social_list')); ?></h4>
                            <ul class="social-list">
                                <?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php if(!empty($social->link)): ?> <?php echo e($social->link); ?> <?php else: ?> # <?php endif; ?>"><i class="<?php echo e($social->social_media); ?>"></i></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                        <div class="main-menu f-right">
                            <nav id="mobile-menu-right">
                                <ul class="one-pagenav">
                                    <li><a href="#home" data-scroll-nav="0"><?php echo e(__('frontend.home')); ?></a></li>
                                    <?php if($section_arr['about_section'] == 1): ?> <li><a href="#about" data-scroll-nav="1"><?php echo e(__('frontend.about')); ?></a></li> <?php endif; ?>
                                    <?php if($section_arr['service_section'] == 1): ?> <li><a href="#service" data-scroll-nav="2"><?php echo e(__('frontend.services')); ?></a></li> <?php endif; ?>
                                    <?php if($section_arr['project_section'] == 1): ?> <li><a href="#case-study" data-scroll-nav="4"><?php echo e(__('frontend.projects')); ?></a></li> <?php endif; ?>
                                    <?php if($section_arr['blog_section'] == 1): ?> <li><a href="#news" data-scroll-nav="5"><?php echo e(__('frontend.news')); ?></a></li> <?php endif; ?>
                                    <?php if($section_arr['page_menu'] == 1): ?>
                                        <li class="has-sub right-view">
                                            <a href="#"><?php echo e(__('frontend.pages')); ?></a>
                                            <ul class="sub-menu">
                                                <?php if($section_arr['team_section'] == 1): ?> <li><a href="#team" data-scroll-nav="3"><?php echo e(__('frontend.teams')); ?></a></li> <?php endif; ?>
                                                <?php if($section_arr['gallery_section'] == 1): ?> <li><a href="<?php echo e(url('gallery')); ?>"><?php echo e(__('frontend.gallery')); ?></a></li> <?php endif; ?>
                                                <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($page->display_footer_menu != 1): ?>
                                                        <li><a href="<?php echo e(url('page/'.$page->page_slug)); ?>"><?php echo e($page->page_title); ?></a></li>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php unset($page); ?>
                                            </ul>
                                        </li>
                                    <?php endif; ?>
                                    <?php if($section_arr['contact_section'] == 1): ?> <li><a href="#contact" data-scroll-nav="6"><?php echo e(__('frontend.contact')); ?></a></li> <?php endif; ?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header End -->

<!-- Home Slider Start -->
<?php if(count($sliders) > 0): ?>
    <section id="home" class="banner-section">
        <div class="home-carousel owl-theme owl-carousel">
            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="slide-item">
                    <div class="image-layer" data-background="<?php echo e(asset('uploads/img/sliders/'.$slider->slider_image)); ?>"></div>
                    <div class="auto-container">
                        <div class="row clearfix">
                            <div class="col-xl-8 col-lg-12 col-md-12 content-column">
                                <div class="content-box">
                                    <h1><?php echo e($slider->title); ?></h1>
                                    <p><?php echo e($slider->desc); ?></p>
                                    <?php if(!empty($slider->btn_name)): ?>
                                        <div class="btn-box">
                                            <a href="<?php if(!empty($slider->btn_link)): ?> <?php echo e($slider->btn_link); ?> <?php else: ?> # <?php endif; ?>" class="cs-btn-one btn-gradient-color"><?php echo e($slider->btn_name); ?></a>
                                        </div>
                                    <?php elseif(empty($slider->btn_name) && empty($slider->btn_link) && $section_arr['contact_section'] == 1): ?>
                                        <div class="btn-box">
                                            <a href="#contact" data-scroll-nav="6" class="cs-btn-one btn-gradient-color"><?php echo e(__('frontend.contact_us')); ?></a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>
<?php else: ?>
    <section id="home" class="banner-section">
        <div class="home-carousel owl-theme owl-carousel">
            <div class="slide-item">
                <div class="image-layer" data-background="<?php echo e(asset('uploads/common_dummy/1920x1080.jpg')); ?>"></div>
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-xl-8 col-lg-12 col-md-12 content-column">
                            <div class="content-box">
                                <h1>Make a Good Plan & <br> Grow Your Business</h1>
                                <p>We have almost 35+ years of experience for <br>providing consulting services solutions</p>
                                <div class="btn-box">
                                    <a href="#" class="cs-btn-one btn-gradient-color">Get a Quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-item">
                <div class="image-layer" data-background="<?php echo e(asset('uploads/common_dummy/1920x1080.jpg')); ?>"></div>
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-xl-8 col-lg-12 col-md-12 content-column">
                            <div class="content-box">
                                <h1>Make a Good Plan & <br> Grow Your Business</h1>
                                <p>We have almost 35+ years of experience for <br>providing consulting services solutions</p>
                                <div class="btn-box">
                                    <a href="#" class="cs-btn-one btn-gradient-color">Get a Quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<!-- Home Slider End -->

<!-- Feature Section Start -->
<?php if($section_arr['feature_section'] == 1): ?>
    <?php if(count($features) > 0): ?>
        <section class="feature-section pdt-110 pdb-130 bg-silver-light bg-no-repeat" data-background="<?php echo e(asset('assets/frontend/images/bg/abs-bg5.png')); ?>">
            <div class="container">
                <div class="row">
                    <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-6 col-xl-4">
                            <div class="feature-box mrb-lg-60 <?php if(count($features) > 3): ?> custom-mb-30 <?php endif; ?>">
                                <?php if(!empty($feature->feature_image)): ?>
                                    <div class="feature-thumb">
                                        <img class="img-full" src="<?php echo e(asset('uploads/img/features/'.$feature->feature_image)); ?>" alt="feature image">
                                    </div>
                                <?php endif; ?>
                                <div class="feature-content">
                                    <?php if(!empty($feature->title)): ?>
                                        <div class="title">
                                            <h3><?php echo e($feature->title); ?></h3>
                                        </div>
                                    <?php endif; ?>
                                    <?php if(!empty($feature->desc)): ?>
                                        <div class="para">
                                            <p><?php echo e($feature->desc); ?></p>
                                        </div>
                                    <?php endif; ?>
                                    <?php if(!empty($feature->btn_link)): ?>
                                        <div class="link">
                                            <a href="<?php echo e($feature->btn_link); ?>"><i class="fas fa-long-arrow-alt-right"></i></a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
    <?php else: ?>
        <section class="feature-section pdt-110 pdb-130 bg-silver-light bg-no-repeat" data-background="<?php echo e(asset('assets/frontend/images/bg/abs-bg5.png')); ?>">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xl-4">
                        <div class="feature-box mrb-lg-60">
                            <div class="feature-thumb">
                                <img class="img-full" src="<?php echo e(asset('uploads/common_dummy/375x250.jpg')); ?>" alt="feature image">
                            </div>
                            <div class="feature-content">
                                <div class="title">
                                    <h3>Creative Design</h3>
                                </div>
                                <div class="para">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est amet similique ipsum reprehenderit sed.</p>
                                </div>
                                <div class="link">
                                    <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="feature-box mrb-lg-60">
                            <div class="feature-thumb">
                                <img class="img-full" src="<?php echo e(asset('uploads/common_dummy/375x250.jpg')); ?>" alt="feature image">
                            </div>
                            <div class="feature-content">
                                <div class="title">
                                    <h3>Complete Analysis</h3>
                                </div>
                                <div class="para">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est amet similique ipsum reprehenderit sed.</p>
                                </div>
                                <div class="link">
                                    <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="feature-box">
                            <div class="feature-thumb">
                                <img class="img-full" src="<?php echo e(asset('uploads/common_dummy/375x250.jpg')); ?>" alt="feature image">
                            </div>
                            <div class="feature-content">
                                <div class="title">
                                    <h3>Optimal Solution</h3>
                                </div>
                                <div class="para">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est amet similique ipsum reprehenderit sed.</p>
                                </div>
                                <div class="link">
                                    <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>
<!-- Feature Section End -->

<!-- About Section Start -->
<?php if($section_arr['about_section'] == 1): ?>
    <?php if(isset($about)): ?>
        <section id="about" class="about-section anim-object pdt-110 pdb-110 pdb-lg-80" data-scroll-index="1">
            <div class="container">
                <div class="row align-items-center">
                    <?php if(!empty($about->about_image)): ?>
                        <div class="col-md-12 col-xl-6">
                            <div class="about-image-block mrb-lg-60">
                                <img class="img-full" src="<?php echo e(asset('uploads/img/about/'.$about->about_image)); ?>" alt="about image">
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="col-md-12 col-xl-6">
                        <h2 class="title-under-line mrb-70"><?php echo e($about->title); ?></h2>
                        <p><?php echo html_entity_decode($about->desc); ?></p>
                        <?php if(!empty($about->btn_name)): ?>
                            <a href="<?php if(!empty($about->btn_link)): ?> <?php echo e($about->btn_link); ?> <?php else: ?> # <?php endif; ?>" class="cs-btn-one btn-gradient-color btn-lg"><?php echo e($about->btn_name); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php else: ?>
        <section id="about" class="about-section anim-object pdt-110 pdb-110 pdb-lg-80" data-scroll-index="1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12 col-xl-6">
                        <div class="about-image-block mrb-lg-60">
                            <img class="img-full" src="<?php echo e(asset('uploads/common_dummy/575x645.jpg')); ?>" alt="about image">
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-6">
                        <h2 class="title-under-line mrb-70">We have 32+ Years Business Experiences</h2>
                        <h5 class="mrb-30 text-primary-color">Trusted Business Consulting Service Provider</h5>
                        <p class="mrb-40">Distinctively exploit optimal alignments for intuitive. Quickly coordinate business applications through revolutionary catalysts for chang the Seamlessly optimal testing procedures whereas processes. Synerg stically evolve 2.0 technologies rather than just in web & apps development optimal alignments for intuitive.</p>
                        <a href="#" class="cs-btn-one btn-gradient-color btn-lg">Read More</a>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>
<!-- About Section End -->

<!-- About Section End -->
<?php if($section_arr['counter_section'] == 1): ?>
    <?php if(count($counters) > 0): ?>
        <section id="about" class="about-section minus-mrb-30">
            <div class="container">
                <div class="row mrt-0 mrb-110">
                    <?php $__currentLoopData = $counters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $counter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="funfact mrb-30">
                                <?php if(!empty($counter->icon)): ?>
                                    <div class="icon">
                                        <span class="<?php echo e($counter->icon); ?>"></span>
                                    </div>
                                <?php endif; ?>
                                <h2 class="counter"><?php echo e($counter->timer); ?></h2>
                                <h5 class="title"><?php echo e($counter->desc); ?></h5>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
    <?php else: ?>
        <section id="about" class="about-section minus-mrb-30">
            <div class="container">
                <div class="row mrt-0 mrb-110">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="funfact mrb-30">
                            <div class="icon">
                                <span class="webexflaticon flaticon-man-2"></span>
                            </div>
                            <h2 class="counter">1450</h2>
                            <h5 class="title">Happy Customers</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="funfact mrb-lg-30 mrb-60">
                            <div class="icon">
                                <span class="webexflaticon flaticon-like-3"></span>
                            </div>
                            <h2 class="counter">1864</h2>
                            <h5 class="title">Peoples Likes</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="funfact mrb-lg-30 mrb-60">
                            <div class="icon">
                                <span class="webexflaticon flaticon-trophy-1"></span>
                            </div>
                            <h2 class="counter">1280</h2>
                            <h5 class="title">Awards Achieved</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="funfact mrb-lg-30 mrb-60">
                            <div class="icon">
                                <span class="webexflaticon flaticon-briefcase-1"></span>
                            </div>
                            <h2 class="counter">32</h2>
                            <h5 class="title">Experiences</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>
<!-- About Section End -->

<!-- Service Section Start -->
<?php if($section_arr['service_section'] == 1): ?>
    <?php if(isset($service_section) || count($services) > 0): ?>
        <section id="service" class="serivce-section bg-silver-light pdt-110 pdb-80" data-background="<?php echo e(asset('assets/frontend/images/bg/abs-bg7.png')); ?>" data-scroll-index="2">
            <?php if(isset($service_section)): ?>
                <div class="section-title">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="section-title-left-part mrb-sm-30">
                                    <?php if(!empty($service_section->top_title)): ?>
                                        <div class="section-left-sub-title mb-20">
                                            <h5 class="sub-title text-primary-color"><?php echo e($service_section->top_title); ?></h5>
                                        </div>
                                    <?php endif; ?>
                                    <h2 class="title"><?php echo e($service_section->title); ?></h2>
                                </div>
                            </div>
                            <div class="offset-lg-1 col-lg-6">
                                <div class="section-title-right-part">
                                    <?php if(!empty($service_section->desc)): ?> <p><?php echo e($service_section->desc); ?></p> <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <div class="section-content">
                <div class="container">
                    <div class="row">
                        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-6 col-xl-3">
                                <div class="service-box">
                                    <?php if(!empty($service->icon)): ?>
                                        <div class="service-icon">
                                            <span class="<?php echo e($service->icon); ?>"></span>
                                        </div>
                                    <?php endif; ?>
                                    <div class="service-content">
                                        <?php if(!empty($service->title)): ?>
                                            <div class="title">
                                                <h3><?php echo e($service->title); ?></h3>
                                            </div>
                                        <?php endif; ?>
                                        <?php if(!empty($service->desc)): ?>
                                            <div class="para">
                                                <p><?php echo e($service->desc); ?></p>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </section>
    <?php else: ?>
        <section id="service" class="serivce-section bg-silver-light pdt-110 pdb-80" data-background="<?php echo e(asset('assets/frontend/images/bg/abs-bg7.png')); ?>" data-scroll-index="2">
            <div class="section-title">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="section-title-left-part mrb-sm-30">
                                <div class="section-left-sub-title mb-20">
                                    <h5 class="sub-title text-primary-color">Service We Offer</h5>
                                </div>
                                <h2 class="title">Our Services</h2>
                            </div>
                        </div>
                        <div class="offset-lg-1 col-lg-6">
                            <div class="section-title-right-part">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos aperiam porro necessitatibus, consequuntur, reiciendis dolore doloribus id repellendus tempora vitae quia voluptas ipsum eligendi hic.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-xl-3">
                            <div class="service-box">
                                <div class="service-icon">
                                    <span class="webexflaticon flaticon-plan"></span>
                                </div>
                                <div class="service-content">
                                    <div class="title">
                                        <a href="#"><h3>Online Business</h3></a>
                                    </div>
                                    <div class="para">
                                        <p>We always provide people a complete solution focused of any business.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="service-box">
                                <div class="service-icon">
                                    <span class="webexflaticon flaticon-meeting"></span>
                                </div>
                                <div class="service-content">
                                    <div class="title">
                                        <a href="#"><h3>Human Resource</h3></a>
                                    </div>
                                    <div class="para">
                                        <p>We always provide people a complete solution focused of any business.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="service-box">
                                <div class="service-icon">
                                    <span class="webexflaticon flaticon-growth"></span>
                                </div>
                                <div class="service-content">
                                    <div class="title">
                                        <a href="#"><h3>Market Research</h3></a>
                                    </div>
                                    <div class="para">
                                        <p>We always provide people a complete solution focused of any business.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="service-box">
                                <div class="service-icon">
                                    <span class="webexflaticon flaticon-benchmark"></span>
                                </div>
                                <div class="service-content">
                                    <div class="title">
                                        <a href="#"><h3>Business Strategy</h3></a>
                                    </div>
                                    <div class="para">
                                        <p>We always provide people a complete solution focused of any business.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="service-box">
                                <div class="service-icon">
                                    <span class="webexflaticon flaticon-search-1"></span>
                                </div>
                                <div class="service-content">
                                    <div class="title">
                                        <a href="#"><h3>Project Managment</h3></a>
                                    </div>
                                    <div class="para">
                                        <p>We always provide people a complete solution focused of any business.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="service-box">
                                <div class="service-icon">
                                    <span class="webexflaticon flaticon-wallet"></span>
                                </div>
                                <div class="service-content">
                                    <div class="title">
                                        <a href="#"><h3>Money Management</h3></a>
                                    </div>
                                    <div class="para">
                                        <p>We always provide people a complete solution focused of any business.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="service-box">
                                <div class="service-icon">
                                    <span class="webexflaticon flaticon-profits"></span>
                                </div>
                                <div class="service-content">
                                    <div class="title">
                                        <a href="#"><h3>Online Marketing</h3></a>
                                    </div>
                                    <div class="para">
                                        <p>We always provide people a complete solution focused of any business.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="service-box">
                                <div class="service-icon">
                                    <span class="webexflaticon flaticon-medal-1"></span>
                                </div>
                                <div class="service-content">
                                    <div class="title">
                                        <a href="#"><h3>Business Insurance</h3></a>
                                    </div>
                                    <div class="para">
                                        <p>We always provide people a complete solution focused of any business.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>
<!-- Service Section End -->

<?php if($section_arr['team_section'] == 1): ?>
    <?php if(isset($team_section) || count($teams) > 0): ?>
        <!-- Team Section Title Start -->
        <section id="team" class="pdt-110 <?php if(count($teams) > 0): ?> pdb-150 <?php else: ?> pdb-50 <?php endif; ?> section-white-typo" data-background="<?php if(!empty($team_section->bg_image)): ?> <?php echo e(asset('uploads/img/teams/'.$team_section->bg_image)); ?> <?php endif; ?>" data-overlay-dark="8" data-scroll-index="3">
            <div class="section-title text-center wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="container">
                    <div class="row">
                        <div class="col"></div>
                        <div class="col-lg-8 col-xl-6">
                            <div class="section-title-block">
                                <?php if(!empty($team_section->title)): ?> <h5 class="text-primary-color anim-box-objects line-both-side mrb-15"><?php echo e($team_section->title); ?></h5> <?php endif; ?>
                                <?php if(!empty($team_section->desc)): ?> <h2><?php echo e($team_section->desc); ?></h2> <?php endif; ?>
                            </div>
                        </div>
                        <div class="col"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team Section Title End -->
        <!-- Team Section Start -->
        <?php if(count($teams) > 0): ?>
            <section class="pdt-0 pdb-110 pdb-md-110 minus-mrt-130 bg-pos-center-bottom minus-mrb-30">
                <div class="section-content">
                    <div class="container">
                        <div class="row">
                            <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <div class="team-block mrb-30">
                                        <?php if(!empty($team->team_image)): ?>
                                            <div class="team-upper-part">
                                                <img class="img-full" src="<?php echo e(asset('uploads/img/teams/'.$team->team_image)); ?>" alt="team image">
                                            </div>
                                        <?php endif; ?>
                                        <div class="team-bottom-part">
                                            <?php if(!empty($team->name)): ?> <h4 class="team-title mrb-5"><a href="#0"><?php echo e($team->name); ?></a></h4> <?php endif; ?>
                                            <?php if(!empty($team->job)): ?> <h6 class="designation"><?php echo e($team->job); ?></h6> <?php endif; ?>
                                            <ul class="social-list vertical-style list-sm">
                                                <?php if(!empty($team->link_1)): ?> <li><a href="<?php if(!empty($team->link_1)): ?> <?php else: ?> # <?php endif; ?>"><i class="fab fa-facebook-f"></i></a></li> <?php endif; ?>
                                                <?php if(!empty($team->link_2)): ?> <li><a href="<?php if(!empty($team->link_2)): ?> <?php else: ?> # <?php endif; ?>"><i class="fab fa-twitter"></i></a></li> <?php endif; ?>
                                                <?php if(!empty($team->link_3)): ?> <li><a href="<?php if(!empty($team->link_3)): ?> <?php else: ?> # <?php endif; ?>"><i class="fab fa-instagram"></i></a></li> <?php endif; ?>
                                                <?php if(!empty($team->link_4)): ?> <li><a href="<?php if(!empty($team->link_4)): ?> <?php else: ?> # <?php endif; ?>"><i class="fab fa-linkedin"></i></a></li> <?php endif; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <!-- Team Section End -->
    <?php else: ?>
        <!-- Team Section Title Start -->
        <section id="team" class="pdt-110 pdb-150 section-white-typo" data-background="<?php echo e(asset('uploads/common_dummy/1920x450.jpg')); ?>" data-overlay-dark="8" data-scroll-index="3">
            <div class="section-title text-center wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="container">
                    <div class="row">
                        <div class="col"></div>
                        <div class="col-lg-8 col-xl-6">
                            <div class="section-title-block">
                                <h5 class="text-primary-color anim-box-objects line-both-side mrb-15">Meet Our Team</h5>
                                <h2>We Have a Professional Consulting Team</h2>
                            </div>
                        </div>
                        <div class="col"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team Section Title End -->

        <!-- Team Section Start -->
        <section class="pdt-0 pdb-110 pdb-md-110 minus-mrt-130 bg-pos-center-bottom minus-mrb-30">
            <div class="section-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="team-block mrb-30">
                                <div class="team-upper-part">
                                    <img class="img-full" src="<?php echo e(asset('uploads/common_dummy/270x285.jpg')); ?>" alt="team image">
                                </div>
                                <div class="team-bottom-part">
                                    <h4 class="team-title mrb-5"><a href="#">Jack Mehoff</a></h4>
                                    <h6 class="designation">Engineer</h6>
                                    <ul class="social-list vertical-style list-sm">
                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="team-block mrb-30">
                                <div class="team-upper-part">
                                    <img class="img-full" src="<?php echo e(asset('uploads/common_dummy/270x285.jpg')); ?>" alt="team image">
                                </div>
                                <div class="team-bottom-part">
                                    <h4 class="team-title mrb-5"><a href="#">Jack Mehoff</a></h4>
                                    <h6 class="designation">Engineer</h6>
                                    <ul class="social-list vertical-style list-sm">
                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="team-block mrb-30">
                                <div class="team-upper-part">
                                    <img class="img-full" src="<?php echo e(asset('uploads/common_dummy/270x285.jpg')); ?>" alt="team image">
                                </div>
                                <div class="team-bottom-part">
                                    <h4 class="team-title mrb-5"><a href="#">Jack Mehoff</a></h4>
                                    <h6 class="designation">Engineer</h6>
                                    <ul class="social-list vertical-style list-sm">
                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="team-block mrb-30">
                                <div class="team-upper-part">
                                    <img class="img-full" src="<?php echo e(asset('uploads/common_dummy/270x285.jpg')); ?>" alt="team image">
                                </div>
                                <div class="team-bottom-part">
                                    <h4 class="team-title mrb-5"><a href="#">Jack Mehoff</a></h4>
                                    <h6 class="designation">Engineer</h6>
                                    <ul class="social-list vertical-style list-sm">
                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team Section End -->
    <?php endif; ?>
<?php endif; ?>

<!-- Skill Section Start -->
<?php if($section_arr['skill_section'] == 1): ?>
    <?php if(isset($skill_section) || count($skills) > 0): ?>
        <section class="pdt-110 pdb-110 pdb-md-110 bg-pos-center-bottom"  data-background="<?php echo e(asset('assets/frontend/images/bg/abs-bg1.png')); ?>">
            <div class="section-content">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12 <?php if(!empty($skill_section->skill_image)): ?> col-xl-6 <?php else: ?> col-xl-12 <?php endif; ?>">
                            <?php if(!empty($skill_section->top_title)): ?> <h5 class="mrb-15 text-primary-color sub-title-side-line"><?php echo e($skill_section->top_title); ?></h5> <?php endif; ?>
                            <?php if(!empty($skill_section->title)): ?> <h2 class="mrb-30"><?php echo e($skill_section->title); ?></h2> <?php endif; ?>
                            <?php if(!empty($skill_section->desc)): ?> <p class="mrb-30"><?php echo e($skill_section->desc); ?></p> <?php endif; ?>
                            <?php if(count($skills) > 0): ?>
                                <div class="skills mrb-lg-60">
                                    <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="skill-item">
                                            <div class="skill-header">
                                                <h6 class="skill-title"><?php echo e($skill->title); ?></h6>
                                                <div class="skill-percentage">
                                                    <div class="count-box"><span class="count-text" data-speed="2100" data-stop="<?php echo e($skill->percent_rate); ?>">0</span>%</div>
                                                </div>
                                            </div>
                                            <div class="skill-bar">
                                                <div class="bar-inner">
                                                    <div class="bar progress-line" data-width="<?php echo e($skill->percent_rate); ?>"></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <?php if(!empty($skill_section->skill_image)): ?>
                            <div class="col-md-12 col-xl-6">
                                <div class="about-image-block">
                                    <img class="img-full" src="<?php echo e(asset('uploads/img/skill/'.$skill_section->skill_image)); ?>" alt="skill image">
                                    <?php if(!empty($site_info->phone)): ?>
                                        <div class="call-us-now">
                                            <p class="call-us-title mrb-5 text-white"><?php echo e(__('frontend.call_us_now')); ?></p>
                                            <h3 class="number mrt-0 text-white"><?php echo e($site_info->phone); ?></h3>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php else: ?>
        <section class="pdt-110 pdb-110 pdb-md-110 bg-pos-center-bottom"  data-background="<?php echo e(asset('assets/frontend/images/bg/abs-bg1.png')); ?>">
            <div class="section-content">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12 col-xl-6">
                            <h5 class="mrb-15 text-primary-color sub-title-side-line">Professional Skills</h5>
                            <h2 class="mrb-30">We Help You to Grow <br><span class="f-weight-400">Your Business</span> Quickly</h2>
                            <p class="mrb-30">Distinctively exploit optimal alignments for intuitive. Quickly coordinate business applications through revolutionary cataly technologies rather than development optimal alignments for intuitive.</p>
                            <div class="skills mrb-lg-60">
                                <div class="skill-item">
                                    <div class="skill-header">
                                        <h6 class="skill-title">Business Consulting</h6>
                                        <div class="skill-percentage">
                                            <div class="count-box"><span class="count-text" data-speed="2100" data-stop="85">0</span>%</div>
                                        </div>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="bar-inner">
                                            <div class="bar progress-line" data-width="85"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="skill-item">
                                    <div class="skill-header">
                                        <h6 class="skill-title">Market Analysis</h6>
                                        <div class="skill-percentage">
                                            <div class="count-box"><span class="count-text" data-speed="2000" data-stop="96">0</span>%</div>
                                        </div>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="bar-inner">
                                            <div class="bar progress-line" data-width="96"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="skill-item">
                                    <div class="skill-header">
                                        <h6 class="skill-title">Money Management</h6>
                                        <div class="skill-percentage">
                                            <div class="count-box"><span class="count-text" data-speed="1900" data-stop="90">0</span>%</div>
                                        </div>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="bar-inner">
                                            <div class="bar progress-line" data-width="90"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="skill-item">
                                    <div class="skill-header">
                                        <h6 class="skill-title">Business Growth</h6>
                                        <div class="skill-percentage">
                                            <div class="count-box"><span class="count-text" data-speed="1800" data-stop="88">0</span>%</div>
                                        </div>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="bar-inner">
                                            <div class="bar progress-line" data-width="88"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-6">
                            <div class="about-image-block">
                                <img class="img-full" src="<?php echo e(asset('uploads/common_dummy/575x645.jpg')); ?>" alt="skill image">
                                <div class="call-us-now">
                                    <p class="call-us-title mrb-5 text-white">Call Us Now</p>
                                    <h3 class="number mrt-0 text-white">+01 225 445</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>
<!-- Skill Section End -->

<!-- Case Study Section Start -->
<?php if($section_arr['project_section'] == 1): ?>
    <?php if(isset($project_section) || count($projects) > 0): ?>
        <section id="case-study" class="case-study-section anim-object2 pdt-110 pdb-110" data-scroll-index="4">
            <?php if(isset($project_section)): ?>
                <div class="section-title">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="section-title-left-part mrb-sm-30">
                                    <?php if(!empty($project_section->top_title)): ?>
                                        <div class="section-left-sub-title mb-20">
                                            <h5 class="sub-title text-primary-color"><?php echo e($project_section->top_title); ?></h5>
                                        </div>
                                    <?php endif; ?>
                                    <h2 class="title"><?php echo e($project_section->title); ?></h2>
                                </div>
                            </div>
                            <div class="offset-lg-1 col-lg-6">
                                <div class="section-title-right-part">
                                    <?php if(!empty($project_section->desc)): ?> <p><?php echo e($project_section->desc); ?></p> <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(count($projects) > 0): ?>
                <div class="section-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="owl-carousel project-items-4col long-gap-left">
                                <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="case-study-item">
                                        <div class="case-study-thumb">
                                            <?php if(!empty($project->project_image)): ?> <img class="img-full" src="<?php echo e(asset('uploads/img/projects/'.$project->project_image)); ?>" alt="project image"> <?php else: ?> <img class="img-full" src="<?php echo e(asset('uploads/common_dummy/project.jpg')); ?>" alt="project image"> <?php endif; ?>
                                            <div class="case-study-details p-4">
                                                <?php if(!empty($project->title)): ?> <h4 class="case-study-category side-line mrb-5"><?php echo e($project->title); ?></h4> <?php endif; ?>
                                                <?php if(!empty($project->desc)): ?> <h6 class="case-study-title"><?php echo e($project->desc); ?></h6> <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </section>
    <?php else: ?>
        <section id="case-study" class="case-study-section anim-object2 pdt-110 pdb-110" data-scroll-index="4">
            <div class="section-title">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="section-title-left-part mrb-sm-30">
                                <div class="section-left-sub-title mb-20">
                                    <h5 class="sub-title text-primary-color">Project Completed</h5>
                                </div>
                                <h2 class="title">Consulting Area</h2>
                            </div>
                        </div>
                        <div class="offset-lg-1 col-lg-6">
                            <div class="section-title-right-part">
                                <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos aperiam porro necessitatibus, consequuntur, reiciendis dolore doloribus id repellendus tempora vitae quia voluptas ipsum eligendi hic.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="owl-carousel project-items-4col long-gap-left">
                            <div class="case-study-item">
                                <div class="case-study-thumb">
                                    <img class="img-full" src="<?php echo e(asset('uploads/common_dummy/480x505.jpg')); ?>" alt="project image">
                                    <div class="case-study-link-icon">
                                        <a href="#"><i class="webex-icon-attachment1"></i></a>
                                    </div>
                                    <div class="case-study-details p-4">
                                        <h6 class="case-study-category side-line mrb-5">Consulting</h6>
                                        <h4 class="case-study-title">Business Solution</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="case-study-item">
                                <div class="case-study-thumb">
                                    <img class="img-full" src="<?php echo e(asset('uploads/common_dummy/480x505.jpg')); ?>" alt="project image">
                                    <div class="case-study-link-icon">
                                        <a href="#"><i class="webex-icon-attachment1"></i></a>
                                    </div>
                                    <div class="case-study-details p-4">
                                        <h6 class="case-study-category side-line mrb-5">Consulting</h6>
                                        <h4 class="case-study-title">Business Solution</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="case-study-item">
                                <div class="case-study-thumb">
                                    <img class="img-full" src="<?php echo e(asset('uploads/common_dummy/480x505.jpg')); ?>" alt="project image">
                                    <div class="case-study-link-icon">
                                        <a href="#"><i class="webex-icon-attachment1"></i></a>
                                    </div>
                                    <div class="case-study-details p-4">
                                        <h6 class="case-study-category side-line mrb-5">Consulting</h6>
                                        <h4 class="case-study-title">Business Solution</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="case-study-item">
                                <div class="case-study-thumb">
                                    <img class="img-full" src="<?php echo e(asset('uploads/common_dummy/480x505.jpg')); ?>" alt="project image">
                                    <div class="case-study-link-icon">
                                        <a href="#"><i class="webex-icon-attachment1"></i></a>
                                    </div>
                                    <div class="case-study-details p-4">
                                        <h6 class="case-study-category side-line mrb-5">Consulting</h6>
                                        <h4 class="case-study-title">Business Solution</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="case-study-item">
                                <div class="case-study-thumb">
                                    <img class="img-full" src="<?php echo e(asset('uploads/common_dummy/480x505.jpg')); ?>" alt="project image">
                                    <div class="case-study-link-icon">
                                        <a href="#"><i class="webex-icon-attachment1"></i></a>
                                    </div>
                                    <div class="case-study-details p-4">
                                        <h6 class="case-study-category side-line mrb-5">Consulting</h6>
                                        <h4 class="case-study-title">Business Solution</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="case-study-item">
                                <div class="case-study-thumb">
                                    <img class="img-full" src="<?php echo e(asset('uploads/common_dummy/480x505.jpg')); ?>" alt="project image">
                                    <div class="case-study-link-icon">
                                        <a href="#"><i class="webex-icon-attachment1"></i></a>
                                    </div>
                                    <div class="case-study-details p-4">
                                        <h6 class="case-study-category side-line mrb-5">Consulting</h6>
                                        <h4 class="case-study-title">Business Solution</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>
<!-- Case Study Section End -->

<!-- Clients Section Start -->
<?php if($section_arr['sponsor_section'] == 1): ?>
    <?php if(count($sponsors) > 0): ?>
        <section class="pdt-0 pdb-0">
            <div class="section-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="owl-carousel client-items">
                                <?php $__currentLoopData = $sponsors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sponsor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="client-item">
                                        <img src="<?php echo e(asset('uploads/img/sponsors/'.$sponsor->sponsor_image)); ?>" alt="sponsor image">
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php else: ?>
        <section class="pdt-0 pdb-0">
            <div class="section-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="owl-carousel client-items">
                                <div class="client-item">
                                    <img src="<?php echo e(asset('uploads/common_dummy/160x50.jpg')); ?>" alt="sponsor image">
                                </div>
                                <div class="client-item">
                                    <img src="<?php echo e(asset('uploads/common_dummy/160x50.jpg')); ?>" alt="sponsor image">
                                </div>
                                <div class="client-item">
                                    <img src="<?php echo e(asset('uploads/common_dummy/160x50.jpg')); ?>" alt="sponsor image">
                                </div>
                                <div class="client-item">
                                    <img src="<?php echo e(asset('uploads/common_dummy/160x50.jpg')); ?>" alt="sponsor image">
                                </div>
                                <div class="client-item">
                                    <img src="<?php echo e(asset('uploads/common_dummy/160x50.jpg')); ?>" alt="sponsor image">
                                </div>
                                <div class="client-item">
                                    <img src="<?php echo e(asset('uploads/common_dummy/160x50.jpg')); ?>" alt="sponsor image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>
<!-- Clients Section End -->

<!-- Price Section Start -->
<?php if($section_arr['price_section'] == 1): ?>
    <?php if(count($prices) > 0): ?>
        <section class="price-section pdt-110 pdb-80">
            <div class="container">
                <div class="row">
                    <?php $i = 0; ?>
                    <?php $__currentLoopData = $prices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            // Explode
                             $str = $price->desc;
                             $arr =  explode(";", $str);
                        ?>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="price-table mrb-30 text-center">
                                <div class="table-header">
                                    <?php if(!empty($price->title)): ?> <h4 class="pricing-plan-name"><?php echo e($price->title); ?></h4> <?php endif; ?>
                                    <?php if(!empty($price->currency)): ?> <h3 class="price"><span class="price-currency"><?php echo e($price->currency); ?></span><?php echo e($price->price); ?><span class="price-duration text-primary-color">/ <?php if($price->time == 1): ?> <?php echo e(__('frontend.per_monthly')); ?> <?php else: ?> <?php echo e(__('frontend.per_annual')); ?> <?php endif; ?></span></h3> <?php endif; ?>
                                </div>
                                <div class="table-content">
                                    <ul class="list-items">
                                        <?php for($i = 0; $i < count($arr)-1; $i++): ?>
                                            <li><i class="fa fa-check mrr-10 text-primary-color"></i><?php echo e($arr[$i]); ?></li>
                                        <?php endfor; ?>
                                    </ul>
                                </div>
                                <div class="table-footer">
                                    <?php if(!empty($price->btn_name)): ?> <a class="cs-btn-one btn-gradient-color" href="<?php if(!empty($price->btn_link)): ?> <?php echo e($price->btn_link); ?> <?php else: ?> # <?php endif; ?>"><?php echo e($price->btn_name); ?></a>  <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
    <?php else: ?>
        <section class="price-section pdt-110 pdb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="price-table mrb-30 text-center">
                            <div class="table-header">
                                <h4 class="pricing-plan-name">Basic Plan</h4>
                                <h3 class="price"><span class="price-currency">$</span>8.9<span class="price-duration text-primary-color">/ Per Month</span></h3>
                            </div>
                            <div class="table-content">
                                <ul class="list-items">
                                    <li><i class="fa fa-check mrr-10 text-primary-color"></i>Standard Feature</li>
                                    <li><i class="fa fa-check mrr-10 text-primary-color"></i>Lifetime free support</li>
                                    <li><i class="fa fa-check mrr-10 text-primary-color"></i>Extra features</li>
                                    <li><i class="fa fa-check mrr-10 text-primary-color"></i>Upgrate options</li>
                                    <li><i class="fa fa-check mrr-10 text-primary-color"></i>Full access</li>
                                </ul>
                            </div>
                            <div class="table-footer">
                                <a href="#" class="cs-btn-one btn-gradient-color">Choose Plan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="price-table mrb-30 text-center">
                            <div class="table-header">
                                <h4 class="pricing-plan-name">Popular Plan</h4>
                                <h3 class="price"><span class="price-currency">$</span>29.9<span class="price-duration text-primary-color">/ Per Month</span></h3>
                            </div>
                            <div class="table-content">
                                <ul class="list-items">
                                    <li><i class="fa fa-check mrr-10 text-primary-color"></i>Standard Feature</li>
                                    <li><i class="fa fa-check mrr-10 text-primary-color"></i>Lifetime free support</li>
                                    <li><i class="fa fa-check mrr-10 text-primary-color"></i>Extra features</li>
                                    <li><i class="fa fa-check mrr-10 text-primary-color"></i>Upgrate options</li>
                                    <li><i class="fa fa-check mrr-10 text-primary-color"></i>Full access</li>
                                </ul>
                            </div>
                            <div class="table-footer">
                                <a href="#" class="cs-btn-one btn-gradient-color">Choose Plan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="price-table mrb-30 text-center">
                            <div class="table-header">
                                <h4 class="pricing-plan-name">Premium Plan</h4>
                                <h3 class="price"><span class="price-currency">$</span>89.9<span class="price-duration text-primary-color">/ Per Month</span></h3>
                            </div>
                            <div class="table-content">
                                <ul class="list-items">
                                    <li><i class="fa fa-check mrr-10 text-primary-color"></i>Standard Feature</li>
                                    <li><i class="fa fa-check mrr-10 text-primary-color"></i>Lifetime free support</li>
                                    <li><i class="fa fa-check mrr-10 text-primary-color"></i>Extra features</li>
                                    <li><i class="fa fa-check mrr-10 text-primary-color"></i>Upgrate options</li>
                                    <li><i class="fa fa-check mrr-10 text-primary-color"></i>Full access</li>
                                </ul>
                            </div>
                            <div class="table-footer">
                                <a href="#" class="cs-btn-one btn-gradient-color">Choose Plan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>
<!-- Price Section End -->

<!-- FAQ Section Start -->
<?php if($section_arr['faq_section']): ?>
    <?php if(isset($faq_section) || count($faqs) > 0): ?>
        <section class="request-a-call-back pdt-110 pdb-110"  data-background="<?php echo e(asset('assets/frontend/images/bg/6.jpg')); ?>">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <?php if(!empty($faq_section->top_title)): ?> <h5 class="sub-title-side-line text-primary-color mrt-0 mrb-15"><?php echo e($faq_section->top_title); ?></h5> <?php endif; ?>
                        <?php if(!empty($faq_section->title)): ?> <h2 class="faq-title mrb-30"><?php echo e($faq_section->title); ?></h2> <?php endif; ?>
                        <?php if(!empty($faq_section->desc)): ?> <p class="mrb-40"><?php echo e($faq_section->desc); ?></p> <?php endif; ?>
                        <?php if($section_arr['contact_section'] == 1): ?> <a href="#contact" data-scroll-nav="6" class="cs-btn-one btn-gradient-color btn-md mrb-lg-60"><?php echo e(__('frontend.more_question')); ?></a> <?php endif; ?>
                    </div>
                    <div class="col-lg-7">
                        <div class="faq-block">
                            <div class="accordion">
                                <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="accordion-item">
                                        <div class="accordion-header <?php if($loop->first): ?> active <?php endif; ?>">
                                            <h5 class="title"><?php echo e($faq->question); ?></h5>
                                            <span class="fas fa-arrow-right"></span>
                                        </div>
                                        <div class="accordion-body">
                                            <p><?php echo e($faq->answer); ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php else: ?>
        <section class="request-a-call-back pdt-110 pdb-110"  data-background="<?php echo e(asset('assets/frontend/images/bg/6.jpg')); ?>">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <h5 class="sub-title-side-line text-primary-color mrt-0 mrb-15">Frequently Asked Question</h5>
                        <h2 class="faq-title mrb-30">Have Any Questions?</h2>
                        <p class="mrb-40">Distinctively exploit revolutionary catalysts for chang the Seamlessly optimal rather than just in web & apps development optimal alignments for intuitive.</p>
                        <a href="#" class="cs-btn-one btn-gradient-color btn-md mrb-lg-60">More Question?</a>
                    </div>
                    <div class="col-lg-7">
                        <div class="faq-block">
                            <div class="accordion">
                                <div class="accordion-item">
                                    <div class="accordion-header active">
                                        <h5 class="title">Q: What happens during Freshers' Week?</h5>
                                        <span class="fas fa-arrow-right"></span>
                                    </div>
                                    <div class="accordion-body">
                                        <p>A: Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</p>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <h5 class="title">Q: What is the transfer application process?</h5>
                                        <span class="fas fa-arrow-right"></span>
                                    </div>
                                    <div class="accordion-body">
                                        <p>A: Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</p>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <h5 class="title">Q: Why should I attend community college?</h5>
                                        <span class="fas fa-arrow-right"></span>
                                    </div>
                                    <div class="accordion-body">
                                        <p>A: Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</p>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <h5 class="title">Q: What is a liberal arts of college students?</h5>
                                        <span class="fas fa-arrow-right"></span>
                                    </div>
                                    <div class="accordion-body">
                                        <p>A: Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</p>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <h5 class="title">Q: What is the transfer application process?</h5>
                                        <span class="fas fa-arrow-right"></span>
                                    </div>
                                    <div class="accordion-body">
                                        <p>A: Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</p>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <h5 class="title">Q: Why should I attend community college?</h5>
                                        <span class="fas fa-arrow-right"></span>
                                    </div>
                                    <div class="accordion-body">
                                        <p>A: Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>
<!-- FAQ Section End -->

<!-- Testimonials Section Start -->
<?php if($section_arr['client_section'] == 1): ?>
    <?php if(isset($testimonial_section) || count($testimonials) > 0): ?>
        <section class="request-a-call-back pdt-80 pdb-110 pdb-lg-70" data-background="<?php echo e(asset('assets/frontend/images/bg/abs-bg7.png')); ?>">
            <div class="section-title text-center wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="container">
                    <div class="row">
                        <div class="col"></div>
                        <div class="col-lg-8">
                            <div class="title-box-center">
                                <?php if(!empty($testimonial_section->shadow_text)): ?> <h5 class="shadow-text"><?php echo e($testimonial_section->shadow_text); ?></h5> <?php endif; ?>
                                <?php if(!empty($testimonial_section->top_title)): ?> <h5 class="sub-title-center text-primary-color line-top-center mrb-30"><?php echo e($testimonial_section->top_title); ?></h5> <?php endif; ?>
                                <?php if(!empty($testimonial_section->title)): ?> <h2 class="title"><?php echo e($testimonial_section->title); ?></h2> <?php endif; ?>
                            </div>
                        </div>
                        <div class="col"></div>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="container">
                    <div class="row">
                        <div class="owl-carousel testimonial-items-2col mrb-lg-40">
                            <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="testimonial-item">
                                    <span class="quote-icon fas fa-quote-right"></span>
                                    <?php if(!empty($testimonial->testimonial_image)): ?>
                                        <div class="testimonial-thumb">
                                            <img src="<?php echo e(asset('uploads/img/testimonials/'.$testimonial->testimonial_image)); ?>" alt="testimonial image">
                                        </div>
                                    <?php endif; ?>
                                    <?php if(!empty($testimonial->name)): ?> <h4 class="client-name"><?php echo e($testimonial->name); ?></h4> <?php endif; ?>
                                    <?php if(!empty($testimonial->job)): ?> <h6 class="client-designation"><?php echo e($testimonial->job); ?></h6> <?php endif; ?>
                                    <div class="testimonial-content">
                                        <?php if(!empty($testimonial->desc)): ?> <p class="comments"><?php echo e($testimonial->desc); ?></p> <?php endif; ?>
                                        <ul class="star-rating">
                                            <?php for($i = 0; $i <= 5; $i++): ?>
                                                <?php if($i < 3): ?>
                                                    <?php for($i = 0; $i < $testimonial->star; $i++): ?>
                                                        <li><i class="webex-icon-star-full  text-primary-color"></i></li>
                                                    <?php endfor; ?>
                                                <?php else: ?>
                                                    <li><i class=" webex-icon-star-empty text-primary-color"></i></li>
                                                <?php endif; ?>
                                            <?php endfor; ?>
                                        </ul>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php else: ?>
        <section class="request-a-call-back pdt-80 pdb-110 pdb-lg-70" data-background="<?php echo e(asset('assets/frontend/images/bg/abs-bg7.png')); ?>">
            <div class="section-title text-center wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="container">
                    <div class="row">
                        <div class="col"></div>
                        <div class="col-lg-8">
                            <div class="title-box-center">
                                <h5 class="shadow-text">Reviews</h5>
                                <h5 class="sub-title-center text-primary-color line-top-center mrb-30">Testimonials</h5>
                                <h2 class="title">What People and Clients Think About Us?</h2>
                            </div>
                        </div>
                        <div class="col"></div>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="container">
                    <div class="row">
                        <div class="owl-carousel testimonial-items-2col mrb-lg-40">
                            <div class="testimonial-item">
                                <span class="quote-icon fas fa-quote-right"></span>
                                <div class="testimonial-thumb">
                                    <img src="<?php echo e(asset('uploads/common_dummy/80x80.jpg')); ?>" alt="testimonial image">
                                </div>
                                <h4 class="client-name">Aurther Maxwell</h4>
                                <h6 class="client-designation">CEO, Apple Inc.</h6>
                                <div class="testimonial-content">
                                    <p class="comments">Lorem ipsum dolor sit amet, consectetur adipisicing elit oluptatibus blanditiis amet optio fugiat nisi est repellendus iusto quis harum laboriosam nostrum unde distinctio</p>
                                    <ul class="star-rating">
                                        <li><i class="webex-icon-star-full text-primary-color"></i></li>
                                        <li><i class="webex-icon-star-full text-primary-color"></i></li>
                                        <li><i class="webex-icon-star-full text-primary-color"></i></li>
                                        <li><i class="webex-icon-star-half text-primary-color"></i></li>
                                        <li><i class="webex-icon-star-empty text-primary-color"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="testimonial-item">
                                <span class="quote-icon fas fa-quote-right"></span>
                                <div class="testimonial-thumb">
                                    <img src="<?php echo e(asset('uploads/common_dummy/80x80.jpg')); ?>" alt="testimonial image">
                                </div>
                                <h4 class="client-name">Aurther Maxwell</h4>
                                <h6 class="client-designation">CEO, Apple Inc.</h6>
                                <div class="testimonial-content">
                                    <p class="comments">Lorem ipsum dolor sit amet, consectetur adipisicing elit oluptatibus blanditiis amet optio fugiat nisi est repellendus iusto quis harum laboriosam nostrum unde distinctio</p>
                                    <ul class="star-rating">
                                        <li><i class="webex-icon-star-full text-primary-color"></i></li>
                                        <li><i class="webex-icon-star-full text-primary-color"></i></li>
                                        <li><i class="webex-icon-star-full text-primary-color"></i></li>
                                        <li><i class="webex-icon-star-half text-primary-color"></i></li>
                                        <li><i class="webex-icon-star-empty text-primary-color"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="testimonial-item">
                                <span class="quote-icon fas fa-quote-right"></span>
                                <div class="testimonial-thumb">
                                    <img src="<?php echo e(asset('uploads/common_dummy/80x80.jpg')); ?>" alt="testimonial image">
                                </div>
                                <h4 class="client-name">Aurther Maxwell</h4>
                                <h6 class="client-designation">CEO, Apple Inc.</h6>
                                <div class="testimonial-content">
                                    <p class="comments">Lorem ipsum dolor sit amet, consectetur adipisicing elit oluptatibus blanditiis amet optio fugiat nisi est repellendus iusto quis harum laboriosam nostrum unde distinctio</p>
                                    <ul class="star-rating">
                                        <li><i class="webex-icon-star-full text-primary-color"></i></li>
                                        <li><i class="webex-icon-star-full text-primary-color"></i></li>
                                        <li><i class="webex-icon-star-full text-primary-color"></i></li>
                                        <li><i class="webex-icon-star-half text-primary-color"></i></li>
                                        <li><i class="webex-icon-star-empty text-primary-color"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>
<!-- Testimonials Section End -->

<!-- News Section Start -->
<?php if($section_arr['blog_section'] == 1): ?>
    <?php if(isset($blog_section) || count($recent_posts)): ?>
        <section id="news" class="bg-silver-light pdt-105 pdb-80" data-background="<?php echo e(asset('assets/frontend/images/bg/abs-bg4.png')); ?>" data-scroll-index="5">
            <div class="section-title mrb-30 mrb-md-60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-xl-6">
                            <?php if(!empty($blog_section->top_title)): ?> <h5 class="mrb-15 text-primary-color sub-title-side-line"><?php echo e($blog_section->top_title); ?></h5> <?php endif; ?>
                            <?php if(!empty($blog_section->title)): ?> <h2 class="mrb-30"><?php echo e($blog_section->title); ?></h2> <?php endif; ?>
                        </div>
                        <?php if(count($recent_posts) > 2): ?>
                            <div class="col-lg-4 col-xl-6 align-self-center text-left text-lg-right">
                                <a href="<?php echo e(url('blogs')); ?>" class="cs-btn-one btn-gradient-color btn-md"><?php echo e(__('frontend.all_news')); ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="container">
                    <div class="row">
                        <?php $__currentLoopData = $recent_posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recent_post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-6 col-lg-6 col-xl-4">
                                <div class="news-wrapper mrb-30 mrb-sm-40">
                                    <div class="news-thumb">
                                        <?php if(!empty($recent_post->blog_image)): ?>
                                            <img src="<?php echo e(asset('uploads/img/blogs/'.$recent_post->blog_image)); ?>" class="img-full" alt="blog image" >
                                        <?php else: ?>
                                            <img src="<?php echo e(asset('uploads/img/dummy/no-image.jpg')); ?>" class="img-full" alt="blog image">
                                        <?php endif; ?>
                                        <div class="news-top-meta">
                                            <span class="entry-category"><?php echo e($recent_post->category->category_name); ?></span>
                                        </div>
                                    </div>
                                    <div class="news-details">
                                        <div class="news-description mb-20">
                                            <h4 class="the-title mrb-30"><a href="<?php echo e(url('blog/'.$recent_post->slug)); ?>"><?php echo e($recent_post->title); ?></a></h4>
                                            <div class="news-bottom-meta">
                                                <span class="entry-date mrr-20"><i class="far fa-calendar-alt mrr-10 text-primary-color"></i><?php echo e(Carbon\Carbon::parse($recent_post->created_at)->isoFormat('DD')); ?> <?php echo e(Carbon\Carbon::parse($recent_post->created_at)->isoFormat('MMM')); ?> <?php echo e(Carbon\Carbon::parse($recent_post->created_at)->isoFormat('GGGG')); ?></span>
                                                <span class="entry-author"><i class="far fa-user mrr-10 text-primary-color"></i><?php if(!empty($recent_post->author)): ?> <?php echo e($recent_post->author); ?> <?php else: ?> <?php echo e(__('frontend.admin')); ?> <?php endif; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </section>
    <?php else: ?>
        <section id="news" class="bg-silver-light pdt-105 pdb-80" data-background="<?php echo e(asset('assets/frontend/images/bg/abs-bg4.png')); ?>" data-scroll-index="5">
            <div class="section-title mrb-30 mrb-md-60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-xl-6">
                            <h5 class="mrb-15 text-primary-color sub-title-side-line">News And Updates</h5>
                            <h2 class="mrb-30">Let's Checkout our All Latest News</h2>
                        </div>
                        <div class="col-lg-4 col-xl-6 align-self-center text-left text-lg-right">
                            <a href="#" class="cs-btn-one btn-gradient-color btn-md">All News</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-xl-4">
                            <div class="news-wrapper mrb-30 mrb-sm-40">
                                <div class="news-thumb">
                                    <img class="img-full" src="<?php echo e(asset('uploads/common_dummy/775x575.jpg')); ?>" alt="blog image">
                                    <div class="news-top-meta">
                                        <span class="entry-category">Business</span>
                                    </div>
                                </div>
                                <div class="news-details">
                                    <div class="news-description mb-20">
                                        <h4 class="the-title mrb-30"><a href="#">Tech Entrepreneur Credits Paper For Success</a></h4>
                                        <div class="news-bottom-meta">
                                            <span class="entry-date mrr-20"><i class="far fa-calendar-alt mrr-10 text-primary-color"></i>01 Jan, 2020</span>
                                            <span class="entry-author"><i class="far fa-user mrr-10 text-primary-color"></i>Admin</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-4">
                            <div class="news-wrapper mrb-30 mrb-sm-40">
                                <div class="news-thumb">
                                    <img class="img-full" src="<?php echo e(asset('uploads/common_dummy/775x575.jpg')); ?>" alt="blog image">
                                    <div class="news-top-meta">
                                        <span class="entry-category">Business</span>
                                    </div>
                                </div>
                                <div class="news-details">
                                    <div class="news-description mb-20">
                                        <h4 class="the-title mrb-30"><a href="#">Tech Entrepreneur Credits Paper For Success</a></h4>
                                        <div class="news-bottom-meta">
                                            <span class="entry-date mrr-20"><i class="far fa-calendar-alt mrr-10 text-primary-color"></i>01 Jan, 2020</span>
                                            <span class="entry-author"><i class="far fa-user mrr-10 text-primary-color"></i>Admin</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-4">
                            <div class="news-wrapper mrb-30 mrb-sm-40">
                                <div class="news-thumb">
                                    <img class="img-full" src="<?php echo e(asset('uploads/common_dummy/775x575.jpg')); ?>" alt="blog image">
                                    <div class="news-top-meta">
                                        <span class="entry-category">Business</span>
                                    </div>
                                </div>
                                <div class="news-details">
                                    <div class="news-description mb-20">
                                        <h4 class="the-title mrb-30"><a href="#">Tech Entrepreneur Credits Paper For Success</a></h4>
                                        <div class="news-bottom-meta">
                                            <span class="entry-date mrr-20"><i class="far fa-calendar-alt mrr-10 text-primary-color"></i>01 Jan, 2020</span>
                                            <span class="entry-author"><i class="far fa-user mrr-10 text-primary-color"></i>Admin</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>
<!-- News Section End -->

<!-- Contact Section Start -->
<?php if($section_arr['contact_section'] == 1): ?>
    <?php if(isset($contact_section) || count($contacts) > 0): ?>
        <section id="contact" class="contact-section pdt-110 pdb-95 pdb-lg-90" data-background="<?php echo e(asset('assets/frontend/images/bg/abs-bg1.png')); ?>"  data-scroll-index="6">
            <div class="container">
                <?php if(count($contacts) > 0): ?>
                    <div class="row mrb-40">
                        <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-6 col-xl-4">
                                <div class="contact-block d-flex mrb-30">
                                    <?php if(!empty($contact->icon)): ?>
                                        <div class="contact-icon">
                                            <i class="<?php echo e($contact->icon); ?>"></i>
                                        </div>
                                    <?php endif; ?>
                                    <div class="contact-details <?php if(empty($contact->icon)): ?> mrl-30 <?php endif; ?>">
                                        <?php if(!empty($contact->title)): ?> <h5 class="icon-box-title mrb-10"><?php echo e($contact->title); ?></h5> <?php endif; ?>
                                        <?php if(!empty($contact->desc)): ?> <p class="mrb-0"><?php echo e($contact->desc); ?></p> <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
                <div class="row">
                    <div class="col-lg-5 col-xl-5">
                        <?php if(!empty($contact_section->top_title)): ?> <h5 class="sub-title-side-line text-primary-color mrt-0 mrb-15"><?php echo e($contact_section->top_title); ?></h5> <?php endif; ?>
                        <?php if(!empty($contact_section->title)): ?> <h2 class="faq-title mrb-30"><?php echo e($contact_section->title); ?></h2> <?php endif; ?>
                        <?php if(!empty($contact_section->desc)): ?> <p class="mrb-40"><?php echo e($contact_section->desc); ?></p> <?php endif; ?>
                        <ul class="social-list list-lg list-primary-color list-flat mrb-md-60 clearfix">
                            <?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e($social->link); ?>" target="_blank"><i class="<?php echo e($social->social_media); ?>"></i></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    <div class="col-lg-7 col-xl-7">
                        <!-- Include Alert Blade -->
                        <?php echo $__env->make('admin.alert.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <div class="contact-form">
                            <form action="<?php echo e(route('message.store')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group mrb-25">
                                            <input type="text" name="name" class="form-control" placeholder="<?php echo e(__('frontend.name')); ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mrb-25">
                                            <input type="email" name="email" class="form-control" placeholder="<?php echo e(__('frontend.email')); ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mrb-25">
                                            <input type="text" name="subject" class="form-control" placeholder="<?php echo e(__('frontend.subject')); ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mrb-25">
                                            <textarea rows="4" name="message" class="form-control" placeholder="<?php echo e(__('frontend.message')); ?>" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <button type="submit" class="cs-btn-one btn-md btn-round btn-primary-color element-shadow"><?php echo e(__('frontend.submit_now')); ?></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php if(!empty($contact_section->map_iframe)): ?>
            <div class="contact-section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 p-0">
                            <!-- Google Map Start -->
                            <div class="mapouter fixed-height">
                                <div class="gmap_canvas">
                                    <iframe id="gmap_canvas" src="<?php echo e($contact_section->map_iframe); ?>"></iframe>
                                </div>
                            </div>
                            <!-- Google Map End -->
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php else: ?>
        <section id="contact" class="contact-section pdt-110 pdb-95 pdb-lg-90" data-background="<?php echo e(asset('assets/frontend/images/bg/abs-bg1.png')); ?>"  data-scroll-index="6">
            <div class="container">
                <div class="row mrb-40">
                    <div class="col-lg-6 col-xl-4">
                        <div class="contact-block d-flex mrb-30">
                            <div class="contact-icon">
                                <i class="webex-icon-map1"></i>
                            </div>
                            <div class="contact-details mrl-30">
                                <h5 class="icon-box-title mrb-10">Our Address</h5>
                                <p class="mrb-0">60 Broklyn Street USA</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="contact-block d-flex mrb-30">
                            <div class="contact-icon">
                                <i class="webex-icon-Phone2"></i>
                            </div>
                            <div class="contact-details mrl-30">
                                <h5 class="icon-box-title mrb-10">Phone Number</h5>
                                <p class="mrb-0">+96 223-528-8542</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="contact-block d-flex mrb-30">
                            <div class="contact-icon">
                                <i class="webex-icon-envelope"></i>
                            </div>
                            <div class="contact-details mrl-30">
                                <h5 class="icon-box-title mrb-10">Email Us</h5>
                                <p class="mrb-0">example@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-xl-5">
                        <h5 class="sub-title-side-line text-primary-color mrt-0 mrb-15">Get In Touch</h5>
                        <h2 class="faq-title mrb-30">Have Any Questions?</h2>
                        <p class="mrb-40">Distinctively exploit revolutionary catalysts for chang the Seamlessly optimal rather than just in web &amp; apps development optimal alignments for intuitive.</p>
                        <ul class="social-list list-lg list-primary-color list-flat mrb-md-60 clearfix">
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-7 col-xl-7">
                        <div class="contact-form">
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group mrb-25">
                                            <input type="text" placeholder="Name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mrb-25">
                                            <input type="text" placeholder="Phone" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mrb-25">
                                            <input type="email" placeholder="Email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mrb-25">
                                            <textarea rows="4" placeholder="Messages" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <button type="submit" class="cs-btn-one btn-md btn-round btn-primary-color element-shadow">Submit Now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="contact-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 p-0">
                        <!-- Google Map Start -->
                        <div class="mapouter fixed-height">
                            <div class="gmap_canvas">
                                <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Graz&t=&z=11&ie=UTF8&iwloc=&output=embed"></iframe>
                                <a href="https://www.whatismyip-address.com"></a>
                            </div>
                        </div>
                        <!-- Google Map End -->
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php endif; ?>
<!-- Contact Section End -->

<!-- Footer Area Start -->
<?php if($section_arr['footer_section'] == 1): ?>
    <?php if(isset($site_info) || count($socials) > 0 || count($pages) > 0 || count($contacts) > 0): ?>
        <footer class="footer">
            <div class="footer-main-area" data-background="<?php echo e(asset('assets/frontend/images/footer-bg.png')); ?>">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="widget footer-widget">
                                <?php if(!empty($general_site_image->site_white_logo_image)): ?> <img src="<?php echo e(asset('uploads/img/general/'.$general_site_image->site_colored_logo_image)); ?>" class="mrb-20" alt="footer image"> <?php endif; ?>
                                <address class="mrb-25">
                                    <?php if(!empty($site_info->short_desc)): ?> <p class="text-light-gray"><?php echo e($site_info->short_desc); ?></p> <?php endif; ?>
                                </address>
                                <ul class="social-list">
                                    <?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><a href="<?php if(!empty($social->link)): ?> <?php echo e($social->link); ?> <?php else: ?> # <?php endif; ?>"><i class="<?php echo e($social->social_media); ?>"></i></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6">
                            <div class="widget footer-widget">
                                <h5 class="widget-title text-white mrb-30">Useful Links</h5>
                                <ul class="footer-widget-list">
                                    <li><a href="#home" data-scroll-nav="0"><?php echo e(__('frontend.home')); ?></a></li>
                                    <?php if($section_arr['about_section'] == 1): ?> <li><a href="#about" data-scroll-nav="1"><?php echo e(__('frontend.about')); ?></a></li> <?php endif; ?>
                                    <?php if($section_arr['service_section'] == 1): ?> <li><a href="#service" data-scroll-nav="2"><?php echo e(__('frontend.services')); ?></a></li> <?php endif; ?>
                                    <?php if($section_arr['team_section'] == 1): ?> <li><a href="#team" data-scroll-nav="3"><?php echo e(__('frontend.teams')); ?></a></li> <?php endif; ?>
                                    <?php if($section_arr['project_section'] == 1): ?> <li><a href="#case-study" data-scroll-nav="4"><?php echo e(__('frontend.projects')); ?></a></li> <?php endif; ?>
                                    <?php if($section_arr['blog_section'] == 1): ?> <li><a href="#news" data-scroll-nav="5"><?php echo e(__('frontend.news')); ?></a></li> <?php endif; ?>
                                    <?php if($section_arr['contact_section'] == 1): ?> <li><a href="#contact" data-scroll-nav="6"><?php echo e(__('frontend.contact')); ?></a></li> <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="widget footer-widget">
                                <h5 class="widget-title text-white mrb-30"><?php echo e(__('frontend.help')); ?></h5>
                                <ul class="footer-widget-list">
                                    <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($page->display_footer_menu == 1): ?>
                                            <li>
                                                <a href="<?php echo e(url('page/'.$page->page_slug)); ?>"><?php echo e($page->page_title); ?></a>
                                            </li>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="widget footer-widget">
                                <h5 class="widget-title text-white mrb-30"><?php echo e(__('frontend.contact_info')); ?></h5>
                                <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="mrb-10"><a href="#" class="text-light-gray"><?php if(!empty($contact->icon)): ?> <i class="<?php echo e($contact->icon); ?> mrr-10"></i> <?php endif; ?> <?php echo e($contact->desc); ?></a></div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="text-center">
                                <span class="text-light-gray"><?php if(!empty($site_info->copyright)): ?> <?php echo e($site_info->copyright); ?> <?php endif; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    <?php else: ?>
        <footer class="footer">
            <div class="footer-main-area" data-background="<?php echo e(asset('assets/frontend/images/footer-bg.png')); ?>">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="widget footer-widget">
                                <img src="<?php echo e(asset('uploads/common_dummy/logo-white.png')); ?>" alt="footer image" class="mrb-20">
                                <address class="mrb-25">
                                    <p class="text-light-gray">32 Dora Creek, tuntable creek, New South Wales 2480, Australia</p>
                                    <div class="mrb-10"><a href="#" class="text-light-gray"><i class="fas fa-phone-alt mrr-10"></i>+088 234 432 15565</a></div>
                                    <div class="mrb-10"><a href="#" class="text-light-gray"><i class="fas fa-envelope mrr-10"></i>sample@yourdomain.com</a></div>
                                    <div class="mrb-0"><a href="#" class="text-light-gray"><i class="fas fa-globe mrr-10"></i>www.domainname.com</a></div>
                                </address>
                                <ul class="social-list">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6">
                            <div class="widget footer-widget">
                                <h5 class="widget-title text-white mrb-30">Useful Links</h5>
                                <ul class="footer-widget-list">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Team</a></li>
                                    <li><a href="#">Service</a></li>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">Policy</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6">
                            <div class="widget footer-widget">
                                <h5 class="widget-title text-white mrb-30">Help</h5>
                                <ul class="footer-widget-list">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Team</a></li>
                                    <li><a href="#">Service</a></li>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">Policy</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="widget footer-widget">
                                <h5 class="widget-title text-white mrb-30">Contact Info</h5>
                                <div class="mrb-10"><a href="#" class="text-light-gray"><i class="fas fa-phone-alt mrr-10"></i>+088 234 432 15565</a></div>
                                <div class="mrb-10"><a href="#" class="text-light-gray"><i class="fas fa-envelope mrr-10"></i>sample@yourdomain.com</a></div>
                                <div class="mrb-0"><a href="#" class="text-light-gray"><i class="fas fa-globe mrr-10"></i>www.domainname.com</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="text-center">
                                <span class="text-light-gray">Copyright © 2020 by <a class="text-primary-color" target="_blank" href="https://themeforest.net/user/simsiyeka"> Simsiyeka</a> | All rights reserved </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    <?php endif; ?>
<?php endif; ?>
<!-- Footer Area End -->

<!-- BACK TO TOP SECTION -->
<div class="back-to-top bg-gradient-color">
    <i class="fab fa-angle-up"></i>
</div>











<!-- Scripts -->
<script src="<?php echo e(asset('assets/frontend/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/frontend/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/frontend/js/scroll.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/frontend/js/jquery-core-plugins.js')); ?>"></script>
<script src="<?php echo e(asset('assets/frontend/js/main.js')); ?>"></script>

<!-- Soft scrolling -->
<script>
    $.scrollIt({
        upKey: 38,                // key code to navigate to the next section
        downKey: 40,              // the easing function for animation
        scrollTime: 800,          // how long (in ms) the animation takes
        activeClass: 'active',    // class given to the active nav element
        onPageChange: null,       // function(pageIndex) that is called when page is changed
        topOffset: -80            // offste (in px) for fixed top navigation
    });
</script>

</body>
</html><?php /**PATH C:\xampp\htdocs\novaly\resources\views/frontend/home/index.blade.php ENDPATH**/ ?>