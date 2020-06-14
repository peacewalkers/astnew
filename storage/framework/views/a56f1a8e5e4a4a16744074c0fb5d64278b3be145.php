<?php $__env->startSection('template_title'); ?>
  <?php echo trans('usersmanagement.showing-user', ['name' => $horoscopes->name]); ?>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
  <div class="container mt-5 ">
    <div class="row">
      <?php echo $__env->make('layouts.sidenav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <div class="col-sm-10">

        <div class="" style="border: 1px solid #f05f1e">

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
                          <div class="clearfix"></div>
            <div class="border-bottom"></div>
            <?php if($horoscopes->razorpayOrderId): ?>

        <div class="col">
              <div class="col-sm-4 text-larger">
                <strong>
                  <?php echo e(trans('horoscopes.users-table.id')); ?>

                </strong>
              </div>

              <div class="col-sm-7">
                <?php echo e($horoscopes->razorpayOrderId); ?>

              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>
            </div>
            <?php endif; ?>

              <div class="row row-cols-1 row-cols-md-2">
                  <div class="col mb-12">
                      <!-- Card -->
                      <div class="card">

                          <!--Card image-->

                          <!--Card content-->
                          <div class="card-body">
                              <!--Title-->
                              <h4 class="card-title text-center mb-3 "><?php echo e($horoscopes->reptype); ?> Report</h4>
                              <div class="row">
                                  <?php if($horoscopes->name): ?>
                                      <div class="col-md-12 text-center">
                                          <div class="col-sm-12 text-larger">
                                              <strong>
                                                  Name:
                                              </strong>
                                          </div>

                                          <div class="col-sm-12">
                                              <?php echo e($horoscopes->name); ?>

                                          </div>

                                          <div class="clearfix"></div>
                                          <div class="border-bottom"></div>
                                      </div>
                                  <?php endif; ?>

                              </div>

                              <div class="row mt-2 mb-2">
                                  <?php if($horoscopes->email): ?>
                                      <div class="col-sm-4 text-center">
                                          <div class="col-sm-12 text-larger">
                                              <strong>
                                                  <?php echo e(trans('horoscopes.users-table.email')); ?>

                                              </strong>
                                          </div>

                                          <div class="col-sm-12">
                      <span data-toggle="tooltip" data-placement="top" title="<?php echo e(trans('usersmanagement.tooltips.email-user', ['user' => $horoscopes->email])); ?>">
                        <?php echo e(HTML::mailto($horoscopes->email, $horoscopes->email)); ?>

                      </span>
                                          </div>

                                      </div>
                                  <?php endif; ?>

                                  <?php if($horoscopes->phone): ?>
                                      <div class="col-sm-4 text-center">
                                          <div class="col-sm-12 text-larger">
                                              <strong>
                                                  <?php echo e(trans('horoscopes.users-table.phone')); ?>

                                              </strong>
                                          </div>

                                          <div class="col-sm-12">
                                              <?php echo e($horoscopes->phone); ?>

                                          </div>

                                      </div>
                                  <?php endif; ?>
                                  <?php if($horoscopes->name): ?>
                                      <div class="col-sm-4 text-center">
                                          <div class="col-sm-12 text-larger">
                                              <strong>
                                                  Gender
                                              </strong>
                                          </div>
                                          <div class="col-sm-12">
                                              <?php echo e($horoscopes->gender); ?>

                                          </div>

                                      </div>
                                  <?php endif; ?>
                              </div>
                              <div class="clearfix"></div>
                              <div class="border-bottom"></div>

                              <div class="row mt-2 mb-2">
                                  <?php if($horoscopes->created_at): ?>
                                  <div class="col-md-4 text-center">
                                          <div class="col-sm-12 text-larger">
                                              <strong>
                                                  Order Received
                                              </strong>
                                          </div>

                                          <div class="col-sm-12">
                                                <?php echo e($horoscopes->created_at); ?>

                                          </div>
                                      </div>

                                  <?php if($horoscopes->updated_at): ?>
                                      <div class="col-sm-4 text-center">
                                          <div class="col-sm-12 text-larger">
                                              <strong>
                                                 Report Updated
                                              </strong>
                                          </div>

                                          <div class="col-sm-12">
                                              <?php echo e($horoscopes->updated_at); ?>

                                          </div>

                                      </div>
                                  <?php endif; ?>
                                      <div class="col-sm-4 text-center">
                                          <div class="col-sm-12 text-larger">
                                              <strong>
                                                  Status
                                              </strong>
                                          </div>
                                          <div class="col-sm-12">
                                              <?php echo e($horoscopes->status); ?>

                                          </div>

                                      </div>
                                  <?php endif; ?>

                              </div>
                              <div class="clearfix"></div>
                              <div class="border-bottom"></div>

                              <div class="row mt-2 mb-2">
                                  <?php if($horoscopes->created_at): ?>
                                      <div class="col-md-6 text-center">
                                          <div class="col-sm-12 text-larger">
                                              <strong>
                                                  Refferal Source
                                              </strong>
                                          </div>

                                          <div class="col-sm-12">
                                              <?php echo e($horoscopes->reftype); ?>

                                          </div>
                                      </div>

                                          <div class="col-sm-6 text-center">
                                              <div class="col-sm-12 text-larger">
                                                  <strong>
                                                      Refferal Details
                                                  </strong>
                                              </div>
                                              <div class="col-sm-12">
                                                  <?php echo e($horoscopes->refdetails); ?>

                                              </div>
                                          </div>
                                  <?php endif; ?>
                              </div>
                              <div class="clearfix"></div>
                              <div class="border-bottom"></div>
                              <div class="text-center mt-3">
                              <a href="/horoscope/<?php echo e($horoscopes->id); ?>/edit" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="<?php echo e(trans('Prepare Report')); ?>">
                                  <i class="fa fa-pencil fa-fw" aria-hidden="true"></i> <span class="hidden-xs hidden-sm hidden-md"> <?php echo e(trans('Prepare Report')); ?> </span>
                              </a>
                              </div>
                          </div>

                      </div>
                      <!-- Card -->
                  </div>

              </div>

              <div class="row row-cols-1 row-cols-md-2 mt-5">
                  <div class="col mb-12">
                      <!-- Card -->
                      <div class="card">
                          <!--Card content-->
                          <div class="card-body">
                              <!--Title-->
                              <h4 class="card-title text-center">Birth Details</h4>
                              <div class="row">
                                  <?php if($horoscopes->dob): ?>
                                      <div class="col-md-6 text-center">
                                          <div class="col-sm-12 text-larger">
                                              <strong>
                                                  Date Of Birth:
                                              </strong>
                                          </div>

                                          <div class="col-sm-12">
                                              <?php echo e($horoscopes->dob); ?>

                                          </div>
                                      </div>
                                  <?php endif; ?>

                                  <?php if($horoscopes->tob): ?>
                                      <div class="col-md-6 text-center">
                                          <div class="col-sm-12 text-larger">
                                              <strong>
                                                  Time Of Birth
                                              </strong>
                                          </div>

                                          <div class="col-sm-12">
                                              <?php echo e($horoscopes->tob); ?>

                                          </div>


                                      </div>
                                  <?php endif; ?>
                              </div>
                              <div class="clearfix"></div>
                              <div class="border-bottom"></div>

                              <div class="row">
                                  <?php if($horoscopes->pob): ?>
                                      <div class="col-sm-6 text-center">
                                          <div class="col-sm-12 text-larger">
                                              <strong>
                                                  Place Of Birth
                                              </strong>
                                          </div>

                                          <div class="col-sm-12">
                                              <?php echo e($horoscopes->pob); ?>


                                          </div>

                                      </div>
                                  <?php endif; ?>

                                  <?php if($horoscopes->cob): ?>
                                      <div class="col-sm-6 text-center">
                                          <div class="col-sm-12 text-larger">
                                              <strong>
                                                  Country Of Birth
                                              </strong>
                                          </div>

                                          <div class="col-sm-12">
                                              <?php echo e($horoscopes->cob); ?>

                                          </div>
                                      </div>
                                  <?php endif; ?>
                              </div>
                              <div class="clearfix"></div>
                              <div class="border-bottom"></div>

                                <div class="col text-center">
                                      <?php if($horoscopes->comments): ?>
                                          <div class="col-md-12 text-center">
                                              <div class="col-sm-12 text-larger">
                                                  <strong>
                                                      Query
                                                  </strong>
                                              </div>

                                              <div class="col-md-12">
                                                  <?php echo e($horoscopes->comments); ?>

                                              </div>

                                              <div class="clearfix"></div>
                                              <div class="border-bottom"></div>
                                          </div>
                                      <?php endif; ?>
                                </div>

                              <div class="clearfix"></div>
                              <div class="border-bottom"></div>

                              <div class="col text-center">
                                      <div class="col-md-12 text-center">
                                          <div class="col-sm-12 text-larger">
                                              <strong>
                                                  Suggestions/Recommendations
                                              </strong>
                                          </div>

                                          <div class="col-md-12">
                                              <?php echo e($horoscopes->suggestions); ?>

                                          </div>

                                          <div class="clearfix"></div>
                                          <div class="border-bottom"></div>
                                      </div>

                              </div>

                              <div class="clearfix"></div>
                              <div class="border-bottom"></div>

                              <?php if($horoscopes->image): ?>

                                  <div class="col-sm-5 col-6 text-larger">
                                      <strong>
                                          Detailed Report
                                      </strong>
                                  </div>

                                  <div class="col-sm-12">
                                      <iframe src="<?php echo e(URL::to('/')); ?>/uploads/<?php echo e($horoscopes->image); ?>" width="100%" height="500px">
                                  </div>

                                  <div class="clearfix"></div>
                                  <div class="border-bottom"></div>

                              <?php endif; ?>

                          </div>
                          </div>

                      </div>
                      <!-- Card -->
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\astrolife\resources\views/horoscope/show-report.blade.php ENDPATH**/ ?>