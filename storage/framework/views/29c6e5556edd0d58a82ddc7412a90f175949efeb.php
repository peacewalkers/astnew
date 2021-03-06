<?php $__env->startSection('content'); ?>


    <!--Main layout-->
    <div class="container  pb-5 page-content">
        <!--Section: Cards-->
            <section class="text-center ">

                <!--Grid row-->
                <div class="row mb-4 wow fadeIn">

                    <!--Grid column-->
                    <div class="d-none d-md-block col-lg-3 col-md-3 mb-4">

                        <!--Card one-->
                        <div class="card mb-4 serviceside ">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="<?php echo e(asset('astrolifeguide')); ?>/img/services/Career.webp" style="width:40%;" class="mx-auto card-img-top"
                                     alt="">
                                <a href="/services/career" target="_blank">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!--Card content-->
                            <div class="card-body  px-1 py-0">
                                <!--Title-->
                                <a href="/services/career">
                                <div style="font-size: 18px;" class="card-title">Career Report</div>
                                <!--Text-->
                                <p class="card-text"> The Career Prediction and remedies are given on the basis of accurate horoscope birth chart reading.  </p>
                                </a>
                            </div>

                        </div>
                        <!--/.Card-->


                        <!--Card two-->
                        <div class="card mb-4 serviceside ">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="<?php echo e(asset('astrolifeguide')); ?>/img/services/marriage3.jpg" style="width: 40%;" class="mx-auto card-img-top"
                                     alt="">
                                <a href="/services/marriage" target="_blank">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!--Card content-->
                            <div class="card-body px-1 py-0">
                                <!--Title-->
                                <a href="/services/marriage">
                                    <div style="font-size: 18px;" class="card-title">Marriage Report</div>
                                    <!--Text-->
                                    <p class="card-text"> Get your marriage predictions and appropriate time for marriage according to your horoscope.  </p>
                                </a>
                            </div>

                        </div>
                        <!--/.Card-->

                        <!--Card three-->
                        <div class="card mb-4 serviceside ">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="<?php echo e(asset('astrolifeguide')); ?>/img/services/child.webp" style="width:40%;" class="mx-auto card-img-top"
                                     alt="">
                                <a href="/services/child" target="_blank">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!--Card content-->
                            <div class="card-body px-0 py-1">
                                <!--Title-->
                                <a href="/services/child">
                                    <div style="font-size: 18px;" class="card-title">Child Report</div>
                                    <!--Text-->
                                    <p class="card-text  px-1 py-0"> The Career Prediction and remedies are given on the basis of accurate horoscope birth chart reading.  </p>
                                </a>
                            </div>

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-6 col-md-3 mb-4 serviceform">

                        <!--Horoscope Form-->
                        <form class="card" action="/vastu" enctype="multipart/form-data" method="post" style="width: 100%;">
                            <?php echo csrf_field(); ?>
                            <h5 class="my-3  py-2 text-uppercase text-white" style="background-color:#038c01    ;"> Vastu Report</h5>
                            <input type="hidden" name="reptype" value="Vastu">

                            <div class="card-body mx-4">
                                <!--Body-->
                                <div class="row">

                                    <div class="md-form mt-4 col">
                                        <input type="text" id="Form-name" name="name" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>"  value="<?php echo e(old('name')); ?>" required>
                                        <label for="Form-name">Full Name</label>
                                    </div>
                                    <?php if($errors->has('name')): ?>
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>


                                <div class="row">
                                    <div class="md-form col">

                                    <input type="email" id="Form-email1" name="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>"  <?php if(isset(auth()->user()->email)): ?>
                                    value="<?php echo e(auth()->user()->email); ?>"                                        required>
                                        <?php endif; ?>
                                        <label for="Form-email1">Email Address</label>
                                        <?php if($errors->has('email')): ?>
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                        <?php endif; ?>
                                    </div>


                                    <div class="md-form col">
                                        <input type="tel" id="phone" name="phone" class="form-control<?php echo e($errors->has('phone') ? ' is-invalid' : ''); ?>"  <?php if(isset(auth()->user()->phone)): ?>
                                                value="<?php echo e(auth()->user()->phone); ?>"                                        required>
                                        <?php endif; ?>
                                        <label for="phone">Phone Number</label>
                                        <?php if($errors->has('phone')): ?>
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong><?php echo e($errors->first('phone')); ?></strong>
                                    </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="md-form col">
                                        <input type="text" id="date-picker-example" name="dob" class="datepicker form-control<?php echo e($errors->has('dob') ? ' is-invalid' : ''); ?>"  value="<?php echo e(old('dob')); ?>" required>
                                        <label for="date-picker-example">Date Of Birth</label>
                                        <?php if($errors->has('dob')): ?>
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong><?php echo e($errors->first('dob')); ?></strong>
                                    </span>
                                        <?php endif; ?>
                                    </div>

                                    <div class="md-form col">
                                        <input type="text" id="input_starttime" name="tob" class="timepicker form-control<?php echo e($errors->has('tob') ? ' is-invalid' : ''); ?>"  value="<?php echo e(old('tob')); ?>" required>
                                        <label for="input_starttime">Time Of Birth</label>
                                        <?php if($errors->has('tob')): ?>
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong><?php echo e($errors->first('tob')); ?></strong>
                                    </span>
                                        <?php endif; ?>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="md-form col">
                                        <input type="text" id="country" name="cob" class="form-control<?php echo e($errors->has('cob') ? ' is-invalid' : ''); ?>"  value="<?php echo e(old('cob')); ?>" required>
                                        <label for="country">Country Of Birth</label>
                                        <?php if($errors->has('cob')): ?>
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong><?php echo e($errors->first('cob')); ?></strong>
                                    </span>
                                        <?php endif; ?>
                                    </div>

                                    <div class="md-form col">
                                        <input type="text"  required id="city" name="pob" class="form-control<?php echo e($errors->has('pob') ? ' is-invalid' : ''); ?>"  value="<?php echo e(old('pob')); ?>">
                                        <label for="city">City Of Birth</label>
                                        <?php if($errors->has('pob')): ?>
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong><?php echo e($errors->first('pob')); ?></strong>
                                    </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="mt-4  row d-flex justify-content-center">
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" id="materialInline1" value="Male" name="gender" required>
                                        <label class="form-check-label" for="materialInline1">Male</label>
                                    </div>
                                    <!-- Material inline 2 -->
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" id="materialInline2" value="Female" name="gender"  required>
                                        <label class="form-check-label" for="materialInline2">Female</label>
                                    </div>
                                </div>


                                <div class="md-form">
                                    <textarea id="textarea-char-counter" class="md-textarea form-control<?php echo e($errors->has('comments') ? ' is-invalid' : ''); ?>"  value="<?php echo e(old('comments')); ?>" name="comments" length="120" rows="3" required></textarea>
                                    <label for="textarea-char-counter">Please post your Query*</label>
                                    <?php if($errors->has('comments')): ?>
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong><?php echo e($errors->first('comments')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>

                                <div class="md-form m-4">
                                    <input type="file" id="file-input" class="text-left" name="propertyImages[]" multiple />
                                    <small id="fileHelp" class="form-text text-muted">Please upload only image files. Size of image should not be more than 2MB.</small>
                                              </div>

                                <select class="mdb-select md-form mt-5" name="reftype" id="reftype" onchange="changeFunc();" required>
                                    <option value="" disabled selected>How Did You Know About Astrolifeguide.com</option>
                                    <option value="SMM">Social Media</option>
                                    <option value="EU">Existing User</option>
                                    <option value="PM">Print Media</option>
                                    <option value="WOM">Friend Or Relative</option>
                                </select>

                                <div class="md-form ">
                                    <textarea id="refdetails" class="form-control md-textarea" name="refdetails" id="refdetails" style="display:none;" length="50" rows="1"></textarea>
                                    <label style="display:none;" for="refdetails">Referred By Details</label>
                                </div>


                                <div class="col-sm-12 mt-4 text-center formbutton">
                                    <p class="  my-2"> Detailed Report :  1500/-</p>
                                    <button type="submit"  name="submit" data-amount="1000"  class=" mt-3 btn text-white btn-md">Submit Details</button>
                                </div>
                            </div>
                        </form>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-3 mb-4">

                        <!--Card one-->
                        <div class="card mb-4 serviceside ">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="<?php echo e(asset('astrolifeguide')); ?>/img/services/kalasarpa.png" style="width:40%;" class="mx-auto card-img-top"
                                     alt="">
                                <a href="/services/kalasarpadosha" target="_blank">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!--Card content-->
                            <div class="card-body px-1 py-0">
                                <!--Title-->
                                <a href="/services/kalasarpadosha">
                                    <div style="font-size: 18px;" class="card-title">Kalasarpa Dosha Report</div>
                                    <!--Text-->
                                    <p class="card-text">  Know whether there is a Kala Sarpa Dosh in your birth chart or not ,Don't know or unsure</p>
                                </a>
                            </div>

                        </div>
                        <!--/.Card-->

                        <!--Card two-->
                        <div class="card mb-4 serviceside ">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="<?php echo e(asset('astrolifeguide')); ?>/img/services/manglik.webp" style="width:55%;" class="mx-auto card-img-top"
                                     alt="">
                                <a href="/services/matchmaker" target="_blank">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!--Card content-->
                            <div class="card-body px-0 py-1">
                                <!--Title-->
                                <a href="/services/matchmaker">
                                    <div style="font-size: 18px;" class="card-title">Compatibility Report</div>
                                    <!--Text-->
                                    <p class="card-text"> The Career Prediction and remedies are given on the basis of accurate horoscope birth chart reading.  </p>
                                </a>
                            </div>

                        </div>
                        <!--/.Card-->

                        <!--Card three-->
                        <div class="card mb-4 serviceside ">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="<?php echo e(asset('astrolifeguide')); ?>/img/services/saturday.webp" style="width:40%;" class="mx-auto card-img-top"
                                     alt="">
                                <a href="/services/sadesati" target="_blank">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!--Card content-->
                            <div class="card-body px-0 py-1">
                                <!--Title-->
                                <a href="/services/sadesati">
                                    <div style="font-size: 18px;" class="card-title">SadeSati Report</div>
                                    <!--Text-->
                                    <p class="card-text"> The Career Prediction and remedies are given on the basis of accurate horoscope birth chart reading.  </p>
                                </a>
                            </div>

                        </div>
                        <!--/.Card-->


                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
            <!--Section: Cards-->

        </div>
    <!--Main layout-->

    <!--/.Footer-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer_scripts'); ?>

    <?php echo $__env->make('scripts.vastu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\astrolife\resources\views/services/vastu.blade.php ENDPATH**/ ?>