<?php $__env->startSection('template_title'); ?>
    <?php echo trans('usersmanagement.showing-user', ['name' => $horoscopes->name]); ?>

<?php $__env->stopSection(); ?>


<link href="<?php echo e(mix('/css/app.css')); ?>" rel="stylesheet">

<?php $__env->startSection('content'); ?>
    <div class="container mt-5 ">
        <div class="row">
            <?php echo $__env->make('layouts.sidenav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="col-sm-10">

                <div class="card">

                    <div class="card-header text-dark">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <?php echo trans('horoscopes.showing-horoscopes-title', ['name' => $horoscopes->orderID]); ?>

                            <div class="float-right">
                                <a href="/horoscopes" class="btn btn-light btn-sm float-right" data-toggle="tooltip" data-placement="left" title="<?php echo e(trans('Back to Horoscope Orders')); ?>">
                                    <i class="fa fa-fw fa-mail-reply" aria-hidden="true"></i>
                                    <?php echo trans('Back to all Orders'); ?>

                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="row">
                            <div class="col-sm-4 col-md-6 mx-auto">
                                <h4 class="text-muted margin-top-sm-1 text-center text-left-tablet">
                                    <?php echo e($horoscopes->name); ?>

                                </h4>
                                <p class="text-center text-left-tablet">
                                    <strong>
                                        Report Name: <?php echo e($horoscopes->reptype); ?>

                                    </strong>
                                <br>
                                    <?php if($horoscopes->phone): ?>
                                        <span class="text-center" data-toggle="tooltip" data-placement="top" title="<?php echo e(trans('usersmanagement.tooltips.email-user', ['user' => $horoscopes->email])); ?>">
                                        <?php echo e($horoscopes->phone); ?>

                                            <?php endif; ?>
                                    <?php if($horoscopes->email): ?>
                                        <br />
                    </span>
                                    <?php endif; ?>
                                </br>

                                </p>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                        <div class="border-bottom"></div>
                            <div class="row">
                                <div class="col-xl-12 order-xl-1">
                                    <div class="row px-5 py-3">
                                        <div class="col">
                                            <h5> 1. Time of Birth</h5>
                                            <p class="pl-3 ml-2"> <?php echo e($horoscopes->tob); ?></p>
                                        </div>

                                        <div class="col">
                                            <h5> 2. Date of Birth</h5>
                                            <p class="pl-3 ml-2"> <?php echo e($horoscopes->dob); ?></p>
                                        </div>
                                    </div>

                                    <div class="row px-5 py-3">
                                            <div class="col">
                                                <h5> 3. Place of Birth</h5>
                                                <p class="pl-3 ml-2"> <?php echo e($horoscopes->pob); ?></p>
                                            </div>

                                            <div class="col">
                                                <h5> 4. Country of Birth</h5>
                                                <p class="pl-3 ml-2"> <?php echo e($horoscopes->cob); ?></p>
                                            </div>
                                        </div>

                                    <div class="col px-5 py-3 mx-auto">
                                        <h5> 5. Query</h5>
                                        <p class="pl-3 ml-2"> <?php echo e($horoscopes->comments); ?></p>
                                    </div>
                                    <div class="row px-5 py-3">
                                        <div class="col">
                                            <h5> 6. Refferal Type</h5>
                                            <p class="pl-3 ml-2"> <?php echo e($horoscopes->reftype); ?></p>
                                        </div>

                                        <div class="col">
                                            <h5> 7. Refferal Details</h5>
                                            <p class="pl-3 ml-2"> <?php echo e($horoscopes->refdetails); ?></p>
                                        </div>
                                    </div>

                                            <form method="post" action="/horoscope/<?php echo e($horoscopes->id); ?>" autocomplete="off" enctype="multipart/form-data">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('put'); ?>

                                                <div class="form-group px-5 py-3">
                                                    <label for="suggestions">Recommendations/Solutions</label>
                                                    <textarea type="text" name="suggestions" id="suggestions" class="form-control form-control-alternative"> </textarea>
                                                </div>


                                                <div class="form-group px-5 mx-auto ">
                                                    <label for="report">Please upload the report document</label>
                                                    <input type="file" class="form-control-file" id="image" name="image">
                                                </div>

                                                <div class="input-group px-5 mb-3">
                                                    <select class="custom-select" name="status" id="inputGroupSelect01">
                                                        <option value="pending">Pending</option>
                                                        <option value="completed">Completed</option>
                                                    </select>
                                                </div>

                                                <div class="col-sm-12 mt-4 text-center formbutton">
                                                    <button type="submit" name="submit" class=" mt-3 btn text-white btn-md">Submit Details</button>
                                                </div>
                                            </form>
                                </div>
                            </div>


                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php echo $__env->make('modals.modal-delete', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer_scripts'); ?>
    <?php echo $__env->make('scripts.delete-modal-script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php if(config('usersmanagement.tooltipsEnabled')): ?>
        <?php echo $__env->make('scripts.tooltips', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\astrolife\resources\views/horoscope/edit.blade.php ENDPATH**/ ?>