<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-5 pt-5">
                <div class="card">
                    <div class="card-header text-white text-center text-uppercase" style="background-color: #038C01;"><?php echo e(__('Reset Password')); ?></div>

                    <div class="card-header"></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <form method="POST" action="<?php echo e(route('password.email')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="md-form">
                                <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required>
                                <label for="email"><?php echo e(__('E-Mail Address')); ?></label>

                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                        </div>

                        <div class="formbutton">
                                <button class="btn text-white btn-rounded btn-block my-4 waves-effect z-depth-0 mx-auto" type="submit" style="width:60%;"> <?php echo e(__('Recover Password')); ?>

                                </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\astrolife\resources\views/auth/passwords/email.blade.php ENDPATH**/ ?>