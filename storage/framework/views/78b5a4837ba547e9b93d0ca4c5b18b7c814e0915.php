<?php $__env->startSection('template_title'); ?>
  <?php echo trans('usersmanagement.showing-user', ['name' => $matchmakers->name]); ?>

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
              <?php echo trans('horoscopes.showing-horoscopes-title', ['name' => $matchmakers->orderID]); ?>

              <div class="float-right">
                <a href="/matchmakers" class="btn btn-light btn-sm float-right" data-toggle="tooltip" data-placement="left" title="<?php echo e(trans('Matchmakers Orders')); ?>">
                  <i class="fa fa-fw fa-mail-reply" aria-hidden="true"></i>
                  <?php echo trans('Back to All Orders'); ?>

                </a>
              </div>
            </div>
          </div>

          <div class="card-body">

            <div class="row">
              <div class="col-sm-4 col-md-6 mx-auto">
                <h4 class="text-muted margin-top-sm-1 text-center text-left-tablet">
                  <?php echo e($matchmakers->name); ?>

                </h4>
                <p class="text-center text-left-tablet">
                  <strong>
                    <?php echo e($matchmakers->reptype); ?>

                  </strong>
                  <?php if($matchmakers->email): ?>
                    <br />
                    <span class="text-center" data-toggle="tooltip" data-placement="top" title="<?php echo e(trans('usersmanagement.tooltips.email-user', ['user' => $matchmakers->email])); ?>">
                      <?php echo e(Html::mailto($matchmakers->email, $matchmakers->email)); ?>

                    </span>
                  <?php endif; ?>
                </p>
                <div class="text-center text-left-tablet mb-4">
                  <a href="/horoscope/<?php echo e($matchmakers->id); ?>/edit" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="<?php echo e(trans('Prepare Report')); ?>">
                    <i class="fa fa-pencil fa-fw" aria-hidden="true"></i> <span class="hidden-xs hidden-sm hidden-md"> <?php echo e(trans('Prepare Report')); ?> </span>
                  </a>
                  <?php echo Form::open(array('url' => 'horoscope/' . $matchmakers->id, 'class' => 'form-inline', 'data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => trans('Delete Order'))); ?>

                  <?php echo Form::hidden('_method', 'DELETE'); ?>

                  <?php echo Form::button('<i class="fa fa-trash-o fa-fw" aria-hidden="true"></i> <span class="hidden-xs hidden-sm hidden-md">' . trans('Delete Order') . '</span>' , array('class' => 'btn btn-danger btn-sm','type' => 'button', 'data-toggle' => 'modal', 'data-target' => '#confirmDelete', 'data-title' => 'Delete User', 'data-message' => 'Are you sure you want to delete this user?')); ?>

                  <?php echo Form::close(); ?>

                </div>
              </div>
            </div>

            <div class="clearfix"></div>
            <div class="border-bottom"></div>
    <div class="row">
         <div class="col-md-6">
            <?php if($matchmakers->razorpayOrderId): ?>

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  <?php echo e(trans('Payment Order ID')); ?>

                </strong>
              </div>

              <div class="col-sm-7">
                <?php echo e($matchmakers->razorpayOrderId); ?>

              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            <?php endif; ?>

            <?php if($matchmakers->name): ?>

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  <?php echo e(trans('horoscopes.users-table.fname')); ?>

                </strong>
              </div>

              <div class="col-sm-7">
                <?php echo e($matchmakers->name); ?>

              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            <?php endif; ?>

            <?php if($matchmakers->email): ?>

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  <?php echo e(trans('horoscopes.users-table.email')); ?>

                </strong>
              </div>

              <div class="col-sm-7">
              <span data-toggle="tooltip" data-placement="top" title="<?php echo e(trans('usersmanagement.tooltips.email-user', ['user' => $matchmakers->email])); ?>">
                <?php echo e(HTML::mailto($matchmakers->email, $matchmakers->email)); ?>

              </span>
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            <?php endif; ?>

            <?php if($matchmakers->phone): ?>

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  <?php echo e(trans('horoscopes.users-table.phone')); ?>

                </strong>
              </div>

              <div class="col-sm-7">
                <?php echo e($matchmakers->phone); ?>

              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            <?php endif; ?>

            <?php if($matchmakers->gender): ?>

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  <?php echo e(trans('horoscopes.users-table.gender')); ?>

                </strong>
              </div>

              <div class="col-sm-7">
                <?php echo e($matchmakers->gender); ?>

              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            <?php endif; ?>

            <?php if($matchmakers->dob): ?>

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  <?php echo e(trans('horoscopes.users-table.dob')); ?>

                </strong>
              </div>

              <div class="col-sm-7">
                <?php echo e($matchmakers->dob); ?>

              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            <?php endif; ?>

            <?php if($matchmakers->tob): ?>

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  <?php echo e(trans('horoscopes.users-table.tob')); ?>

                </strong>
              </div>

              <div class="col-sm-7">
                <?php echo e($matchmakers->tob); ?>

              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            <?php endif; ?>

            <?php if($matchmakers->pob): ?>

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  <?php echo e(trans('horoscopes.users-table.pob')); ?>

                </strong>
              </div>

              <div class="col-sm-7">
                <?php echo e($matchmakers->pob); ?>

              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            <?php endif; ?>

            <?php if($matchmakers->cob): ?>

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  <?php echo e(trans('horoscopes.users-table.cob')); ?>

                </strong>
              </div>

              <div class="col-sm-7">
                <?php echo e($matchmakers->cob); ?>

              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            <?php endif; ?>


            <?php if($matchmakers->comments): ?>

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  <?php echo e(trans('horoscopes.users-table.tob')); ?>

                </strong>
              </div>

              <div class="col-sm-7">
                <?php echo e($matchmakers->comments); ?>

              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            <?php endif; ?>

            <?php if($matchmakers->reftype ): ?>

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  <?php echo e(trans('horoscopes.users-table.reftype')); ?>

                </strong>
              </div>

              <div class="col-sm-7">
                <?php echo e($matchmakers->reftype); ?>

              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            <?php endif; ?>

            <?php if(empty($matchmakers->refdetails)): ?>


            <?php else: ?>
              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  <?php echo e(trans('horoscopes.users-table.refdetails')); ?>

                </strong>
              </div>

              <div class="col-sm-7">
                <?php echo e($matchmakers->refdetails); ?>

              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            <?php endif; ?>


            <?php if(empty($matchmakers->horoscope)): ?>
            <?php else: ?>
              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  <?php echo e(trans('horoscopes.users-table.horoscope')); ?>

                </strong>
              </div>

              <div class="col-sm-7">
                <?php echo e($matchmakers->horoscope); ?>

              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            <?php endif; ?>

            <?php if(empty($matchmakers->productamount)): ?>
            <?php else: ?>
              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  <?php echo e(trans('horoscopes.users-table.productamount')); ?>

                </strong>
              </div>

              <div class="col-sm-7">
                <?php echo e($matchmakers->productamount); ?>

              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            <?php endif; ?>

            <?php if(empty($matchmakers->status)): ?>
            <?php else: ?>
              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  <?php echo e(trans('horoscopes.users-table.status')); ?>

                </strong>
              </div>

              <div class="col-sm-7">
                <?php echo e($matchmakers->status); ?>

              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            <?php endif; ?>

            <?php if($matchmakers->created_at): ?>

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  <?php echo e(trans('usersmanagement.labelCreatedAt')); ?>

                </strong>
              </div>

              <div class="col-sm-7">
                <?php echo e($matchmakers->created_at); ?>

              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            <?php endif; ?>

            <?php if($matchmakers->updated_at): ?>

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  <?php echo e(trans('usersmanagement.labelUpdatedAt')); ?>

                </strong>
              </div>

              <div class="col-sm-7">
                <?php echo e($matchmakers->updated_at); ?>

              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            <?php endif; ?>

          </div>
            <div class="col-md-6">
                <!--Accordion wrapper-->
                <div class="accordion md-accordion accordion-2" id="accordionEx7" role="tablist"
                     aria-multiselectable="true">

                    <!-- Accordion card -->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header rgba-stylish-strong z-depth-1 mb-1 pt-3" role="tab" id="heading1">
                            <a data-toggle="collapse" data-parent="#accordionEx7" href="#collapse1" aria-expanded="true"
                               aria-controls="collapse1">
                                <h6 class="mb-0 text-uppercase font-thin">
                                    #1 Matching Partner<i class="fas fa-angle-down rotate-icon"></i>
                                </h6>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse1" class="collapse show" role="tabpanel" aria-labelledby="heading1"
                             data-parent="#accordionEx7">
                            <div class=" mb-1 mt-3">

                                <?php if($matchmakers->nameone): ?>

                                    <div class="col-sm-5 col-6 text-larger">
                                        <strong>
                                            <?php echo e(trans('Partner Name')); ?>

                                        </strong>
                                    </div>

                                    <div class="col-sm-7">
                                        <?php echo e($matchmakers->nameone); ?>

                                    </div>

                                    <div class="clearfix"></div>
                                    <div class="border-bottom"></div>

                                <?php endif; ?>

                                    <?php if($matchmakers->dpobone): ?>

                                        <div class="col-sm-5 col-6 text-larger">
                                            <strong>
                                                <?php echo e(trans('Date Of Birth')); ?>

                                            </strong>
                                        </div>

                                        <div class="col-sm-7">
                                            <?php echo e($matchmakers->dobone); ?>

                                        </div>

                                        <div class="clearfix"></div>
                                        <div class="border-bottom"></div>

                                    <?php endif; ?>

                                    <?php if($matchmakers->tobone): ?>

                                        <div class="col-sm-5 col-6 text-larger">
                                            <strong>
                                                <?php echo e(trans('Time Of Birth')); ?>

                                            </strong>
                                        </div>

                                        <div class="col-sm-7">
                                            <?php echo e($matchmakers->tobone); ?>

                                        </div>

                                        <div class="clearfix"></div>
                                        <div class="border-bottom"></div>

                                    <?php endif; ?>

                                    <?php if($matchmakers->pobone): ?>

                                        <div class="col-sm-5 col-6 text-larger">
                                            <strong>
                                                <?php echo e(trans('Place Of Birth')); ?>

                                            </strong>
                                        </div>

                                        <div class="col-sm-7">
                                            <?php echo e($matchmakers->pobone); ?>

                                        </div>

                                        <div class="clearfix"></div>
                                        <div class="border-bottom"></div>

                                    <?php endif; ?>
                                    <?php if($matchmakers->cobone): ?>

                                        <div class="col-sm-5 col-6 text-larger">
                                            <strong>
                                                <?php echo e(trans('Country Of Birth')); ?>

                                            </strong>
                                        </div>

                                        <div class="col-sm-7">
                                            <?php echo e($matchmakers->cobone); ?>

                                        </div>

                                        <div class="clearfix"></div>
                                        <div class="border-bottom"></div>

                                    <?php endif; ?>
                            </div>
                        </div>
                        <!-- Accordion card -->
                    </div>
                    <!-- Accordion card -->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header rgba-stylish-strong z-depth-1 mb-1" role="tab" id="heading2">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx7" href="#collapse2"
                               aria-expanded="false" aria-controls="collapse2">
                                <h6 class="mb-0 text-uppercase font-thin">
                                    #2  Matching Partner<i class="fas fa-angle-down rotate-icon"></i>
                                </h6>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="heading2"
                             data-parent="#accordionEx7">
                            <div class="mt-3 mb-1 ">

                                <?php if($matchmakers->nametwo): ?>

                                    <div class="col-sm-5 col-6 text-larger">
                                        <strong>
                                            <?php echo e(trans('Partner Name')); ?>

                                        </strong>
                                    </div>

                                    <div class="col-sm-7">
                                        <?php echo e($matchmakers->nametwo); ?>

                                    </div>

                                    <div class="clearfix"></div>
                                    <div class="border-bottom"></div>

                                <?php endif; ?>

                                <?php if($matchmakers->dobtwo): ?>

                                    <div class="col-sm-5 col-6 text-larger">
                                        <strong>
                                            <?php echo e(trans('Date Of Birth')); ?>

                                        </strong>
                                    </div>

                                    <div class="col-sm-7">
                                        <?php echo e($matchmakers->dobtwo); ?>

                                    </div>

                                    <div class="clearfix"></div>
                                    <div class="border-bottom"></div>

                                <?php endif; ?>

                                <?php if($matchmakers->tobtwo): ?>

                                    <div class="col-sm-5 col-6 text-larger">
                                        <strong>
                                            <?php echo e(trans('Time Of Birth')); ?>

                                        </strong>
                                    </div>

                                    <div class="col-sm-7">
                                        <?php echo e($matchmakers->tobtwo); ?>

                                    </div>

                                    <div class="clearfix"></div>
                                    <div class="border-bottom"></div>

                                <?php endif; ?>

                                <?php if($matchmakers->pobtwo): ?>

                                    <div class="col-sm-5 col-6 text-larger">
                                        <strong>
                                            <?php echo e(trans('Place Of Birth')); ?>

                                        </strong>
                                    </div>

                                    <div class="col-sm-7">
                                        <?php echo e($matchmakers->pobtwo); ?>

                                    </div>

                                    <div class="clearfix"></div>
                                    <div class="border-bottom"></div>

                                <?php endif; ?>
                                <?php if($matchmakers->cobtwo): ?>

                                    <div class="col-sm-5 col-6 text-larger">
                                        <strong>
                                            <?php echo e(trans('Country Of Birth')); ?>

                                        </strong>
                                    </div>

                                    <div class="col-sm-7">
                                        <?php echo e($matchmakers->cobtwo); ?>

                                    </div>

                                    <div class="clearfix"></div>
                                    <div class="border-bottom"></div>

                                <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header rgba-stylish-strong z-depth-1 mb-1" role="tab" id="heading3">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx7" href="#collapse3"
                               aria-expanded="false" aria-controls="collapse3">
                                <h6 class="mb-0 text-uppercase font-thin">
                                    #3  Matching Partner <i class="fas fa-angle-down rotate-icon"></i>
                                </h6>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="heading3"
                             data-parent="#accordionEx7">
                            <div class="mt-3 mb-1 ">

                                <?php if($matchmakers->nametwo): ?>

                                    <div class="col-sm-5 col-6 text-larger">
                                        <strong>
                                            <?php echo e(trans('Partner Name')); ?>

                                        </strong>
                                    </div>

                                    <div class="col-sm-7">
                                        <?php echo e($matchmakers->nametwo); ?>

                                    </div>

                                    <div class="clearfix"></div>
                                    <div class="border-bottom"></div>

                                <?php endif; ?>

                                <?php if($matchmakers->dobtwo): ?>

                                    <div class="col-sm-5 col-6 text-larger">
                                        <strong>
                                            <?php echo e(trans('Date Of Birth')); ?>

                                        </strong>
                                    </div>

                                    <div class="col-sm-7">
                                        <?php echo e($matchmakers->dobtwo); ?>

                                    </div>

                                    <div class="clearfix"></div>
                                    <div class="border-bottom"></div>

                                <?php endif; ?>

                                <?php if($matchmakers->tobtwo): ?>

                                    <div class="col-sm-5 col-6 text-larger">
                                        <strong>
                                            <?php echo e(trans('Time Of Birth')); ?>

                                        </strong>
                                    </div>

                                    <div class="col-sm-7">
                                        <?php echo e($matchmakers->tobtwo); ?>

                                    </div>

                                    <div class="clearfix"></div>
                                    <div class="border-bottom"></div>

                                <?php endif; ?>

                                <?php if($matchmakers->pobtwo): ?>

                                    <div class="col-sm-5 col-6 text-larger">
                                        <strong>
                                            <?php echo e(trans('Place Of Birth')); ?>

                                        </strong>
                                    </div>

                                    <div class="col-sm-7">
                                        <?php echo e($matchmakers->pobtwo); ?>

                                    </div>

                                    <div class="clearfix"></div>
                                    <div class="border-bottom"></div>

                                <?php endif; ?>
                                <?php if($matchmakers->cobtwo): ?>

                                    <div class="col-sm-5 col-6 text-larger">
                                        <strong>
                                            <?php echo e(trans('Country Of Birth')); ?>

                                        </strong>
                                    </div>

                                    <div class="col-sm-7">
                                        <?php echo e($matchmakers->cobtwo); ?>

                                    </div>

                                    <div class="clearfix"></div>
                                    <div class="border-bottom"></div>

                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card -->
                    <!--/.Accordion wrapper-->
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\astrolife\resources\views/matchmaker/show-report.blade.php ENDPATH**/ ?>