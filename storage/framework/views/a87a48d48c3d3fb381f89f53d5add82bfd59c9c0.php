<!DOCTYPE html>
<html dir="<?php if(session()->has('language_direction_from_dropdown')): ?> <?php if(session()->get('language_direction_from_dropdown') == 1): ?> <?php echo e(__('rtl')); ?> <?php else: ?> <?php echo e(__('ltr')); ?> <?php endif; ?> <?php else: ?> <?php echo e(__('ltr')); ?> <?php endif; ?>" lang="<?php if(session()->has('language_code_from_dropdown')): ?><?php echo e(str_replace('_', '-', session()->get('language_code_from_dropdown'))); ?><?php else: ?><?php echo e(str_replace('_', '-',   $language->language_code)); ?><?php endif; ?>">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Required meta tags -->

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Favicon -->
    <?php if(isset($general_site_image)): ?>

        <?php if(!empty($general_site_image->favicon_image)): ?>
            <link href="<?php echo e(asset('uploads/img/general/'.$general_site_image->favicon_image)); ?>" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
            <link href="<?php echo e(asset('uploads/img/general/'.$general_site_image->favicon_image)); ?>" sizes="128x128" rel="shortcut icon" />
        <?php endif; ?>

    <?php else: ?>

        <link href="<?php echo e(asset('uploads/img/dummy/favicon.png')); ?>" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
        <link href="<?php echo e(asset('uploads/img/dummy/favicon.png')); ?>" sizes="128x128" rel="shortcut icon" />

    <?php endif; ?>

<!-- Fonts -->
    <link href="<?php echo e(asset('assets/admin/side_menu/vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/admin/side_menu/vendor/fontawesome-free/css/fontawesome-iconpicker.min.css')); ?>" rel="stylesheet">


    <!-- Master Stylesheet CSS -->
    <?php if(session()->has('language_direction_from_dropdown')): ?>

        <?php if(session()->get('language_direction_from_dropdown') == 1): ?>

            <link rel="stylesheet" href="<?php echo e(asset('assets/admin/side_menu/version_rtl/style.css')); ?>">

        <?php endif; ?>

        <?php if(session()->get('language_direction_from_dropdown') == 0): ?>

            <link rel="stylesheet" href="<?php echo e(asset('assets/admin/side_menu/style.css')); ?>">

        <?php endif; ?>

    <?php else: ?>

        <link rel="stylesheet" href="<?php echo e(asset('assets/admin/side_menu/style.css')); ?>">

<?php endif; ?>

    <!-- Lihtbox CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/side_menu/css/default-assets/new/ekko-lightbox.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/side_menu/css/default-assets/new/lightbox.min.css')); ?>">

    <!-- Datatables CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/side_menu/css/default-assets/datatables.bootstrap4.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/side_menu/css/default-assets/responsive.bootstrap4.css')); ?>">

    <!-- Summernote Css -->
    <link href="<?php echo e(asset('assets/admin/side_menu/css/summernote-bs4.min.css')); ?>" rel="stylesheet">


</head>

<body  <?php if(session()->has('language_direction_from_dropdown')): ?> <?php if(session()->get('language_direction_from_dropdown') == 1): ?>  class="rtl-version" <?php endif; ?> <?php endif; ?> >
<!-- Preloader -->
<?php if($section_arr['preloader'] == 1): ?>
    <div id="preloader-area">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <?php endif; ?>
<!-- Preloader -->

<!-- ======================================
******* Main Page Wrapper **********
======================================= -->

<div class="main-container-wrapper">
    <!-- Top bar area -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <?php if(isset($general_site_image)): ?>

                <?php if(!empty($general_site_image->admin_logo_image)): ?>
                    <a class="navbar-brand brand-logo mr-5" href="<?php echo e(url('dashboard')); ?>">
                        <img src="<?php echo e(asset('uploads/img/general/'.$general_site_image->admin_logo_image)); ?>" class="mr-2" alt="logo" />
                    </a>
                <?php endif; ?>

                <?php if(!empty($general_site_image->admin_small_logo_image)): ?>
                    <a class="navbar-brand brand-logo-mini" href="<?php echo e(url('dashboard')); ?>">
                        <img src="<?php echo e(asset('uploads/img/general/'.$general_site_image->admin_small_logo_image)); ?>" alt="logo" />
                    </a>
                <?php endif; ?>

            <?php endif; ?>
            <?php if(isset($general_creative_site_image)): ?>

                <?php if(!empty($general_creative_site_image->admin_logo_image)): ?>
                    <a class="navbar-brand brand-logo mr-5" href="<?php echo e(url('dashboard')); ?>">
                        <img src="<?php echo e(asset('uploads/creative/img/general/'.$general_creative_site_image->admin_logo_image)); ?>" class="mr-2" alt="logo" />
                    </a>
                <?php endif; ?>

                <?php if(!empty($general_creative_site_image->admin_small_logo_image)): ?>
                    <a class="navbar-brand brand-logo-mini" href="<?php echo e(url('dashboard')); ?>">
                        <img src="<?php echo e(asset('uploads/creative/img/general/'.$general_creative_site_image->admin_small_logo_image)); ?>" alt="logo" />
                    </a>
                <?php endif; ?>

            <?php endif; ?>

        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </button>
            <ul class="navbar-nav mr-lg-2">
                <li class="nav-item d-none d-md-block">
                    <span class="badge badge-primary">
                    <?php echo e(__('menu.data_language')); ?>: <?php echo e($data_language->language_name); ?> <i class="fas fa-hand-point-right ml-1"></i>

                    </span>
                </li>
                <li  class="nav-item dropdown dropdown-animate">
                    <a href="#" class="count-indicator"  data-toggle="modal" data-target="#processedLanguageModal">
                        <i class="fas fa-globe-europe"></i>
                    </a>
                </li>
            </ul>
            <ul class="top-navbar-area navbar-nav navbar-nav-right">
                <li  class="nav-item dropdown dropdown-animate">
                    <a href="<?php echo e(url('/')); ?>" class="badge badge-primary d-none d-md-block">
                        Site
                    </a>
                </li>

                <?php if(count($display_dropdowns) > 0): ?>
                    <li class="nav-item dropdown dropdown-animate">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                            <?php if(session()->has('language_name_from_dropdown')): ?> <?php echo e(session()->get('language_name_from_dropdown')); ?> <?php else: ?> <?php echo e($language->language_name); ?> <?php endif; ?><i class="arrow_carrot-down"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                            <p class="mb-0 font-weight-normal float-left dropdown-header"><?php echo e(__('content.languages')); ?></p>

                            <?php $__currentLoopData = $display_dropdowns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $display_dropdown): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e(url('language/set-locale/'.$display_dropdown->id)); ?>" class="dropdown-item preview-item d-flex align-items-center"><?php echo e($display_dropdown->language_name); ?></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </li>
                    <?php endif; ?>

                <li class="nav-item dropdown dropdown-animate">
                    <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                        <i class="far fa-bell"></i>
                        <?php if(count($general_unread_message_count) > 0 || count($general_unread_comment_count) > 0): ?>
                        <span class="count"></span>
                            <?php endif; ?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                        <p class="mb-0 font-weight-normal float-left dropdown-header"><?php echo e(__('menu.notifications')); ?></p>
                        <a href="<?php echo e(url('admin/message')); ?>" class="dropdown-item preview-item d-flex align-items-center">
                            <div class="notification-thumbnail">
                                <div class="preview-icon bg-primary">
                                    <i class="ti-info-alt mx-0"></i>
                                </div>
                            </div>
                            <div class="notification-item-content">
                                <h6><?php echo e(__('menu.messages')); ?></h6>
                                <p class="mb-0">
                                    <?php echo e(count($general_unread_message_count)); ?>

                                </p>
                            </div>
                        </a>

                        <a href="<?php echo e(url('admin/comment')); ?>" class="dropdown-item preview-item d-flex align-items-center">
                            <div class="notification-thumbnail">
                                <div class="preview-icon bg-success">
                                    <i class="ti-info-alt mx-0"></i>
                                </div>
                            </div>
                            <div class="notification-item-content">
                                <h6><?php echo e(__('menu.comments')); ?></h6>
                                <p class="mb-0">
                                    <?php echo e(count($general_unread_comment_count)); ?>

                                </p>
                            </div>
                        </a>

                    </div>
                </li>

                <li class="nav-item nav-profile dropdown dropdown-animate">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                        <?php if(Auth::user()->profile_photo_path != null): ?>
                            <img src="<?php echo e(asset('uploads/img/profile/'.Auth::user()->profile_photo_path)); ?>" class="img-profile rounded-circle" alt="profile image">
                        <?php else: ?>
                            <img src="<?php echo e(asset('uploads/img/dummy/128x128.png')); ?>" class="img-profile rounded-circle" alt="profile image">
                        <?php endif; ?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown profile-top" aria-labelledby="profileDropdown">
                        <a href="<?php echo e(url('admin/profile/edit')); ?>" class="dropdown-item"><i class="fas fa-user profile-icon" aria-hidden="true"></i> <?php echo e(__('menu.profile')); ?></a>
                        <a href="<?php echo e(url('admin/profile/change-password')); ?>" class="dropdown-item"><i class="fas fa-unlock-alt profile-icon" aria-hidden="true"></i> <?php echo e(__('menu.change_password')); ?></a>

                        <!-- Authentication -->
                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="fas fa-link profile-icon" aria-hidden="true"></i>
                            <?php echo e(__('menu.logout')); ?>

                        </a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo csrf_field(); ?>
                        </form>

                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-xl-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="ti-layout-grid2"></span>
            </button>
        </div>
    </nav>

    <div class="container-fluid page-body-wrapper">
        <!-- Side Menu area -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item <?php echo e((request()->is('dashboard')) ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(url('dashboard')); ?>">
                        <i class="fas fa-th-large menu-icon"></i>
                        <span class="menu-title"><?php echo e(__('menu.dashboard')); ?></span>
                    </a>
                </li>

                <li class="nav-item <?php echo e((request()->is('admin/slider/create') ||
                                            request()->is('admin/slider/*/edit')) ? 'active' : ''); ?>">
                    <a class="nav-link" data-toggle="collapse" href="#advanced" aria-expanded="false" aria-controls="advanced">
                        <i class="fas fa-photo-video menu-icon"></i>
                        <span class="menu-title"><?php echo e(__('menu.banner')); ?></span>
                        <i class="ti-angle-right"></i>
                    </a>
                    <div class="collapse <?php echo e((request()->is('admin/slider/create') ||
                                                 request()->is('admin/slider/*/edit')) ? 'show' : ''); ?>" id="advanced">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link <?php echo e((request()->is('admin/slider/create') || request()->is('admin/slider/*/edit')) ? 'active' : ''); ?>" href="<?php echo e(url('admin/slider/create')); ?>"><?php echo e(__('menu.sliders')); ?></a></li>
                        </ul>
                    </div>
                </li>
                <?php if($section_arr['blog_section'] == 1): ?>
                    <li class="nav-item <?php echo e((request()->is('admin/blog') ||
                                            request()->is('admin/blog/create') ||
                                            request()->is('admin/blog/*/edit') ||
                                            request()->is('admin/category/create') ||
                                            request()->is('admin/category/*/edit')) ? 'active' : ''); ?>">
                        <a class="nav-link" data-toggle="collapse" href="#blogs" aria-expanded="false" aria-controls="blogs">
                            <i class="fab fa-blogger-b menu-icon"></i>
                            <span class="menu-title"><?php echo e(__('menu.blogs')); ?></span>
                            <i class="ti-angle-right"></i>
                        </a>
                        <div class="collapse <?php echo e((request()->is('admin/blog') ||
                                                  request()->is('admin/blog/create') ||
                                                  request()->is('admin/blog/*/edit') ||
                                                  request()->is('admin/category/create') ||
                                                  request()->is('admin/category/*/edit')) ? 'show' : ''); ?>" id="blogs">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link <?php echo e((request()->is('admin/category/create') ||
                                                                             request()->is('admin/category/*/edit')) ? 'active' : ''); ?>" href="<?php echo e(url('admin/category/create')); ?>"><?php echo e(__('menu.categories')); ?></a></li>
                                <li class="nav-item"> <a class="nav-link <?php echo e((request()->is('admin/blog') ||
                                                                             request()->is('admin/blog/create') ||
                                                                             request()->is('admin/blog/*/edit')) ? 'active' : ''); ?>" href="<?php echo e(url('admin/blog')); ?>"><?php echo e(__('menu.blogs')); ?></a></li>
                            </ul>
                        </div>
                    </li>
                <?php endif; ?>
                <?php if($section_arr['feature_section'] == 1): ?>
                    <li class="nav-item <?php echo e((request()->is('admin/feature/create') ||
                                            request()->is('admin/feature/*/edit')) ? 'active' : ''); ?>">
                        <a class="nav-link" href="<?php echo e(url('admin/feature/create')); ?>">
                            <i class="fas fa-puzzle-piece menu-icon"></i>
                            <span class="menu-title"><?php echo e(__('menu.features')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>
                   <?php if($section_arr['about_section'] == 1): ?>
                        <li class="nav-item <?php echo e((request()->is('admin/about/create') ||
                                            request()->is('admin/info-list/*/edit')) ? 'active' : ''); ?>">
                            <a class="nav-link" href="<?php echo e(url('admin/about/create')); ?>">
                                <i class="fas fa-address-card menu-icon"></i>
                                <span class="menu-title"><?php echo e(__('menu.about')); ?></span>
                            </a>
                        </li>
                       <?php endif; ?>
                <?php if($section_arr['counter_section'] == 1): ?>
                    <li class="nav-item <?php echo e((request()->is('admin/counter/create') ||
                                            request()->is('admin/counter/*/edit')) ? 'active' : ''); ?>">
                        <a class="nav-link" href="<?php echo e(url('admin/counter/create')); ?>">
                            <i class="fas fa-clock menu-icon"></i>
                            <span class="menu-title"><?php echo e(__('menu.counters')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>
                   <?php if($section_arr['service_section'] == 1): ?>
                        <li class="nav-item <?php echo e((request()->is('admin/service/create') ||
                                            request()->is('admin/service/*/edit')) ? 'active' : ''); ?>">
                            <a class="nav-link" href="<?php echo e(url('admin/service/create')); ?>">
                                <i class="fas fa-people-carry menu-icon"></i>
                                <span class="menu-title"><?php echo e(__('menu.services')); ?></span>
                            </a>
                        </li>
                       <?php endif; ?>
                <?php if($section_arr['team_section'] == 1): ?>
                    <li class="nav-item <?php echo e((request()->is('admin/team/create') ||
                                            request()->is('admin/team/*/edit')) ? 'active' : ''); ?>">
                        <a class="nav-link" href="<?php echo e(url('admin/team/create')); ?>">
                            <i class="fas fa-users menu-icon"></i>
                            <span class="menu-title"><?php echo e(__('menu.teams')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if($section_arr['skill_section'] == 1): ?>
                    <li class="nav-item <?php echo e((request()->is('admin/skill/create') ||
                                            request()->is('admin/skill/*/edit')) ? 'active' : ''); ?>">
                        <a class="nav-link" href="<?php echo e(url('admin/skill/create')); ?>">
                            <i class="fas fa-toolbox menu-icon"></i>
                            <span class="menu-title"><?php echo e(__('menu.skills')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>
                    <?php if($section_arr['project_section'] == 1): ?>
                        <li class="nav-item <?php echo e((request()->is('admin/project/create') ||
                                            request()->is('admin/project/*/edit')) ? 'active' : ''); ?>">
                            <a class="nav-link" href="<?php echo e(url('admin/project/create')); ?>">
                                <i class="fas fa-project-diagram menu-icon"></i>
                                <span class="menu-title"><?php echo e(__('menu.projects')); ?></span>
                            </a>
                        </li>
                        <?php endif; ?>

                <?php if($section_arr['sponsor_section'] == 1): ?>
                    <li class="nav-item <?php echo e((request()->is('admin/sponsor/create') ||
                                            request()->is('admin/sponsor/*/edit')) ? 'active' : ''); ?>">
                        <a class="nav-link" href="<?php echo e(url('admin/sponsor/create')); ?>">
                            <i class="fas fa-handshake menu-icon"></i>
                            <span class="menu-title"><?php echo e(__('menu.sponsors')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if($section_arr['price_section'] == 1): ?>
                    <li class="nav-item <?php echo e((request()->is('admin/price/create') ||
                                            request()->is('admin/price/*/edit')) ? 'active' : ''); ?>">
                        <a class="nav-link" href="<?php echo e(url('admin/price/create')); ?>">
                            <i class="fas fa-money-bill menu-icon"></i>
                            <span class="menu-title"><?php echo e(__('menu.prices')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if($section_arr['faq_section'] == 1): ?>
                    <li class="nav-item <?php echo e((request()->is('admin/faq/create') ||
                                            request()->is('admin/faq/*/edit')) ? 'active' : ''); ?>">
                        <a class="nav-link" href="<?php echo e(url('admin/faq/create')); ?>">
                            <i class="fas fa-question-circle menu-icon"></i>
                            <span class="menu-title"><?php echo e(__('menu.faqs')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if($section_arr['client_section'] == 1): ?>
                    <li class="nav-item <?php echo e((request()->is('admin/testimonial/create') ||
                                            request()->is('admin/testimonial/*/edit')) ? 'active' : ''); ?>">
                        <a class="nav-link" href="<?php echo e(url('admin/testimonial/create')); ?>">
                            <i class="fas fa-comment-alt menu-icon"></i>
                            <span class="menu-title"><?php echo e(__('menu.testimonials')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if($section_arr['gallery_section'] == 1): ?>
                    <li class="nav-item  <?php echo e((request()->is('admin/gallery/create') ||
                                             request()->is('admin/gallery/*/edit')) ? 'active' : ''); ?>">
                        <a class="nav-link" href="<?php echo e(url('admin/gallery/create')); ?>">
                            <i class="fas fa-images menu-icon"></i>
                            <span class="menu-title"><?php echo e(__('menu.galleries')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>
                <li class="nav-item <?php echo e((request()->is('admin/page') ||
                                            request()->is('admin/page/create') ||
                                            request()->is('admin/page/*/edit')) ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(url('admin/page')); ?>">
                        <i class="fas fa-file-alt menu-icon"></i>
                        <span class="menu-title"><?php echo e(__('menu.pages')); ?></span>
                    </a>
                </li>
                    <li class="nav-item <?php echo e((request()->is('admin/contact/create') ||
                                            request()->is('admin/contact/*/edit') ||
                                            request()->is('admin/message') ||
                                            request()->is('admin/social/create') ||
                                            request()->is('admin/social/*/edit')) ? 'active' : ''); ?>">
                        <a class="nav-link" data-toggle="collapse" href="#contact" aria-expanded="false" aria-controls="contact">
                            <i class="fas fa-map-marked menu-icon"></i>
                            <span class="menu-title"><?php echo e(__('menu.contact')); ?></span>
                            <i class="ti-angle-right"></i>
                        </a>
                        <div class="collapse <?php echo e((request()->is('admin/contact/create') ||
                                                 request()->is('admin/contact/*/edit') ||
                                                 request()->is('admin/message') ||
                                                 request()->is('admin/social/create') ||
                                                 request()->is('admin/social/*/edit')) ? 'show' : ''); ?>" id="contact">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link <?php echo e((request()->is('admin/contact/create') ||
                                                                             request()->is('admin/contact/*/edit')) ? 'active' : ''); ?>" href="<?php echo e(url('admin/contact/create')); ?>"><?php echo e(__('menu.contact_info')); ?></a></li>
                                <li class="nav-item"> <a class="nav-link <?php echo e((request()->is('admin/social/create') ||
                                                                             request()->is('admin/social/*/edit')) ? 'active' : ''); ?>" href="<?php echo e(url('admin/social/create')); ?>"><?php echo e(__('menu.socials')); ?></a></li>
                                <li class="nav-item"> <a class="nav-link <?php echo e((request()->is('admin/message')) ? 'active' : ''); ?>" href="<?php echo e(url('admin/message')); ?>"><?php echo e(__('menu.messages')); ?></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item <?php echo e((request()->is('admin/site-info/create') ||
                                            request()->is('admin/site-image/create') ||
                                            request()->is('admin/breadcrumb/create') ||
                                            request()->is('admin/section/create') ||
                                            request()->is('admin/color-option/create') ||
                                            request()->is('admin/google-analytic/create') ||
                                            request()->is('admin/seo/create')) ? 'active' : ''); ?>">
                        <a class="nav-link" data-toggle="collapse" href="#settings" aria-expanded="false" aria-controls="settings">
                            <i class="fas fa-fw fa-cog menu-icon"></i>
                            <span class="menu-title"><?php echo e(__('menu.settings')); ?></span>
                            <i class="ti-angle-right"></i>
                        </a>
                        <div class="collapse <?php echo e((request()->is('admin/site-info/create') ||
                                                 request()->is('admin/site-image/create') ||
                                                 request()->is('admin/breadcrumb/create') ||
                                                 request()->is('admin/section/create') ||
                                                 request()->is('admin/color-option/create') ||
                                                 request()->is('admin/google-analytic/create') ||
                                                 request()->is('admin/seo/create')) ? 'show' : ''); ?>" id="settings">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link <?php echo e((request()->is('admin/site-info/create')) ? 'active' : ''); ?>" href="<?php echo e(url('admin/site-info/create')); ?>"><?php echo e(__('menu.site_info')); ?></a></li>
                                <li class="nav-item"> <a class="nav-link <?php echo e((request()->is('admin/site-image/create')) ? 'active' : ''); ?>" href="<?php echo e(url('admin/site-image/create')); ?>"><?php echo e(__('menu.site_images')); ?></a></li>
                                <li class="nav-item"> <a class="nav-link <?php echo e((request()->is('admin/google-analytic/create')) ? 'active' : ''); ?>" href="<?php echo e(url('admin/google-analytic/create')); ?>"><?php echo e(__('menu.google_analytic')); ?></a></li>
                                <li class="nav-item"> <a class="nav-link <?php echo e((request()->is('admin/breadcrumb/create')) ? 'active' : ''); ?>" href="<?php echo e(url('admin/breadcrumb/create')); ?>"><?php echo e(__('menu.breadcrumb')); ?></a></li>
                                <li class="nav-item"> <a class="nav-link <?php echo e((request()->is('admin/section/create')) ? 'active' : ''); ?>" href="<?php echo e(url('admin/section/create')); ?>"><?php echo e(__('menu.sections')); ?></a></li>
                                <li class="nav-item"> <a class="nav-link <?php echo e((request()->is('admin/color-option/create')) ? 'active' : ''); ?>" href="<?php echo e(url('admin/color-option/create')); ?>"><?php echo e(__('menu.color_option')); ?></a></li>
                                <li class="nav-item"> <a class="nav-link <?php echo e((request()->is('admin/seo/create')) ? 'active' : ''); ?>" href="<?php echo e(url('admin/seo/create')); ?>"><?php echo e(__('menu.seo')); ?></a></li>
                            </ul>
                        </div>
                    </li>

                   <li class="nav-item  <?php echo e((request()->is('admin/language/create') ||
                                            request()->is('admin/language/*/edit') ||
                                            request()->is('admin/language-keyword-for-adminpanel/create/*') ||
                                            request()->is('admin/language/*/edit') ||
                                            request()->is('admin/language/*/edit')) ? 'active' : ''); ?>">
                       <a class="nav-link" href="<?php echo e(url('admin/language/create')); ?>">
                           <i class="fas fa-language menu-icon"></i>
                           <span class="menu-title"><?php echo e(__('menu.languages')); ?></span>
                       </a>
                   </li>
                <li class="nav-item <?php echo e((request()->is('admin/clear-cache')) ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(url('admin/clear-cache')); ?>">
                        <i class="fab fa-cloudscale menu-icon"></i>
                        <span class="menu-title"><?php echo e(__('menu.optimizer')); ?></span>
                    </a>
                </li>

            </ul>
        </nav>

        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="container-fluid">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="processedLanguageModal" tabindex="-1" role="dialog" aria-labelledby="processedLanguageModalLabel" aria-modal="false">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0 font-16" id="processedLanguageModalLabel"><?php echo e(__('content.which_language')); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo e(route('language.update_processed_language')); ?>" method="POST">
                        <?php echo method_field('PATCH'); ?>
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="language_id"><?php echo e(__('content.languages')); ?></label>
                                    <select class="form-control" name="language_id" id="language_id" required>
                                        <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($lang->id); ?>" <?php echo e($lang->status == 1 ? 'selected' : ''); ?>><?php echo e($lang->language_name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php unset($lang); ?>
                                    </select>
                                    <small id="language_id" class="form-text text-muted"><?php echo e(__('content.reminding')); ?></small>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('content.submit')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

</div>


<!-- Plugins Js -->
<script src="<?php echo e(asset('assets/admin/side_menu/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/side_menu/js/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/side_menu/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/side_menu/js/bundle.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/side_menu/js/default-assets/fullscreen.js')); ?>"></script>

<!-- Active JS -->
<script src="<?php echo e(asset('assets/admin/side_menu/js/canvas.js')); ?>" defer></script>
<script src="<?php echo e(asset('assets/admin/side_menu/js/collapse.js')); ?>" defer></script>
<script src="<?php echo e(asset('assets/admin/side_menu/js/settings.js')); ?>" defer></script>
<script src="<?php echo e(asset('assets/admin/side_menu/js/template.js')); ?>" defer></script>
<script src="<?php echo e(asset('assets/admin/side_menu/js/default-assets/active.js')); ?>" defer></script>

<?php if(isset($galleries)): ?>
    <!-- Lightbox JS -->
    <script src="<?php echo e(asset('assets/admin/side_menu/js/default-assets/ekko-lightbox.min.js')); ?>" defer></script>
    <script src="<?php echo e(asset('assets/admin/side_menu/js/default-assets/lightbox.min.js')); ?>" defer></script>
    <script src="<?php echo e(asset('assets/admin/side_menu/js/default-assets/light-box-active.js')); ?>" defer></script>
<?php endif; ?>

    <!-- Datatable JS -->
    <script src="<?php echo e(asset('assets/admin/side_menu/js/default-assets/jquery.datatables.min.js')); ?>" defer></script>
    <script src="<?php echo e(asset('assets/admin/side_menu/js/default-assets/datatables.bootstrap4.js')); ?>" defer></script>
    <script src="<?php echo e(asset('assets/admin/side_menu/js/default-assets/datatable-responsive.min.js')); ?>" defer></script>
    <script src="<?php echo e(asset('assets/admin/side_menu/js/default-assets/responsive.bootstrap4.min.js')); ?>" defer></script>
    <script src="<?php echo e(asset('assets/admin/side_menu/js/default-assets/demo.datatable-init.js')); ?>" defer></script>


<!-- Summernote scripts -->
<script src="<?php echo e(asset('assets/admin/side_menu/js/summernote-bs4.min.js')); ?>"></script>
<script>
    $('#summernote').summernote({
        placeholder: '<?php echo e(__('content.desc')); ?>',
        tabsize: 2,
        height: 100
    });
</script>

<!-- Custom JS -->
<script src="<?php echo e(asset('assets/admin/side_menu/js/custom.js')); ?>"></script>

<!-- Icon Picker JS -->
<script src="<?php echo e(asset('assets/admin/side_menu/vendor/fontawesome-free/js/fontawesome-iconpicker.min.js')); ?>"> </script>


</body>

</html><?php /**PATH C:\xampp\htdocs\novaly\resources\views/layouts/admin/master.blade.php ENDPATH**/ ?>