<?php $__env->startSection('content'); ?>

    <!-- Include Alert Blade -->
    <?php echo $__env->make('admin.alert.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="row">

            <div class="col-12 col-sm-6 col-xl-4">
                <!-- Card -->
                <div class="card box-margin">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <!-- Title -->
                                <h6 class="text-uppercase font-14"><?php echo e(__('content.blogs')); ?></h6>

                                <!-- Heading -->
                                <span class="font-24 text-dark mb-0">
                                 <?php if($blogs_count == 0): ?> 0 <?php else: ?> <?php echo e($blogs_count); ?> <?php endif; ?>
                                </span>
                            </div>

                            <div class="col-auto">
                                <!-- Icon -->
                                <div class="icon">
                                    <i class="fab fa-blogger-b font-46 text-primary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        <div class="col-12 col-sm-6 col-xl-4">
            <!-- Card -->
            <div class="card box-margin">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- Title -->
                            <h6 class="text-uppercase font-14"><?php echo e(__('content.features')); ?></h6>

                            <!-- Heading -->
                            <span class="font-24 text-dark mb-0">
                                 <?php if($features_count == 0): ?> 0 <?php else: ?> <?php echo e($features_count); ?> <?php endif; ?>
                                </span>
                        </div>

                        <div class="col-auto">
                            <!-- Icon -->
                            <div class="icon">
                                <i class="fas fa-puzzle-piece font-46 text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-4">
            <!-- Card -->
            <div class="card box-margin">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- Title -->
                            <h6 class="text-uppercase font-14"><?php echo e(__('content.counters')); ?></h6>

                            <!-- Heading -->
                            <span class="font-24 text-dark mb-0">
                                 <?php if($counters_count == 0): ?> 0 <?php else: ?> <?php echo e($counters_count); ?> <?php endif; ?>
                                </span>
                        </div>

                        <div class="col-auto">
                            <!-- Icon -->
                            <div class="icon">
                                <i class="fas fa-clock font-46 text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-4">
            <!-- Card -->
            <div class="card box-margin">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- Title -->
                            <h6 class="text-uppercase font-14"><?php echo e(__('content.services')); ?></h6>

                            <!-- Heading -->
                            <span class="font-24 text-dark mb-0">
                                 <?php if($services_count == 0): ?> 0 <?php else: ?> <?php echo e($services_count); ?> <?php endif; ?>
                                </span>
                        </div>

                        <div class="col-auto">
                            <!-- Icon -->
                            <div class="icon">
                                <i class="fas fa-people-carry font-46 text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-4">
            <!-- Card -->
            <div class="card box-margin">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- Title -->
                            <h6 class="text-uppercase font-14"><?php echo e(__('content.teams')); ?></h6>

                            <!-- Heading -->
                            <span class="font-24 text-dark mb-0">
                                 <?php if($teams_count == 0): ?> 0 <?php else: ?> <?php echo e($teams_count); ?> <?php endif; ?>
                                </span>
                        </div>

                        <div class="col-auto">
                            <!-- Icon -->
                            <div class="icon">
                                <i class="fas fa-users font-46 text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-12 col-sm-6 col-xl-4">
            <!-- Card -->
            <div class="card box-margin">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- Title -->
                            <h6 class="text-uppercase font-14"><?php echo e(__('content.skills')); ?></h6>

                            <!-- Heading -->
                            <span class="font-24 text-dark mb-0">
                                 <?php if($skills_count == 0): ?> 0 <?php else: ?> <?php echo e($skills_count); ?> <?php endif; ?>
                                </span>
                        </div>

                        <div class="col-auto">
                            <!-- Icon -->
                            <div class="icon">
                                <i class="fas fa-toolbox font-46 text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-4">
            <!-- Card -->
            <div class="card box-margin">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- Title -->
                            <h6 class="text-uppercase font-14"><?php echo e(__('content.projects')); ?></h6>

                            <!-- Heading -->
                            <span class="font-24 text-dark mb-0">
                                 <?php if($projects_count == 0): ?> 0 <?php else: ?> <?php echo e($projects_count); ?> <?php endif; ?>
                                </span>
                        </div>

                        <div class="col-auto">
                            <!-- Icon -->
                            <div class="icon">
                                <i class="fas fa-project-diagram font-46 text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-4">
            <!-- Card -->
            <div class="card box-margin">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- Title -->
                            <h6 class="text-uppercase font-14"><?php echo e(__('content.sponsors')); ?></h6>

                            <!-- Heading -->
                            <span class="font-24 text-dark mb-0">
                                 <?php if($sponsors_count == 0): ?> 0 <?php else: ?> <?php echo e($sponsors_count); ?> <?php endif; ?>
                                </span>
                        </div>

                        <div class="col-auto">
                            <!-- Icon -->
                            <div class="icon">
                                <i class="fas fa-handshake font-46 text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-4">
            <!-- Card -->
            <div class="card box-margin">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- Title -->
                            <h6 class="text-uppercase font-14"><?php echo e(__('content.prices')); ?></h6>

                            <!-- Heading -->
                            <span class="font-24 text-dark mb-0">
                                 <?php if($prices_count == 0): ?> 0 <?php else: ?> <?php echo e($prices_count); ?> <?php endif; ?>
                                </span>
                        </div>

                        <div class="col-auto">
                            <!-- Icon -->
                            <div class="icon">
                                <i class="fas fa-money-bill font-46 text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-12 col-sm-6 col-xl-4">
            <!-- Card -->
            <div class="card box-margin">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- Title -->
                            <h6 class="text-uppercase font-14"><?php echo e(__('content.faqs')); ?></h6>

                            <!-- Heading -->
                            <span class="font-24 text-dark mb-0">
                                 <?php if($faqs_count == 0): ?> 0 <?php else: ?> <?php echo e($faqs_count); ?> <?php endif; ?>
                                </span>
                        </div>

                        <div class="col-auto">
                            <!-- Icon -->
                            <div class="icon">
                                <i class="fas fa-question-circle font-46 text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-4">
            <!-- Card -->
            <div class="card box-margin">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- Title -->
                            <h6 class="text-uppercase font-14"><?php echo e(__('content.testimonials')); ?></h6>

                            <!-- Heading -->
                            <span class="font-24 text-dark mb-0">
                                 <?php if($testimonials_count == 0): ?> 0 <?php else: ?> <?php echo e($testimonials_count); ?> <?php endif; ?>
                                </span>
                        </div>

                        <div class="col-auto">
                            <!-- Icon -->
                            <div class="icon">
                                <i class="fas fa-comment-alt font-46 text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-4">
            <!-- Card -->
            <div class="card box-margin">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- Title -->
                            <h6 class="text-uppercase font-14"><?php echo e(__('content.pages')); ?></h6>

                            <!-- Heading -->
                            <span class="font-24 text-dark mb-0">
                                 <?php if($pages_count == 0): ?> 0 <?php else: ?> <?php echo e($pages_count); ?> <?php endif; ?>
                                </span>
                        </div>

                        <div class="col-auto">
                            <!-- Icon -->
                            <div class="icon">
                                <i class="fas fa-file-alt font-46 text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl">
            <!-- Card -->
            <div class="card box-margin">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- Title -->
                            <h6 class="font-14 text-uppercase">
                                <?php echo e(__('content.sections')); ?>

                            </h6>
                            <!-- Heading -->
                            <a href="<?php echo e(url('admin/section/create')); ?>">
                                <span class="font-24 text-dark mb-0">
                                    <?php echo e(__('content.show')); ?> / <?php echo e(__('content.hide')); ?>

                                </span>
                            </a>
                        </div>
                        <div class="col-auto">
                            <!-- Icon -->
                            <div class="icon">
                                <i class="fas fa-puzzle-piece font-46 text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- / .row -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\novaly\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>