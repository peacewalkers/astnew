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
                                <a href="#">
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
                                <a href="#">
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
                                <a href="#">
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
                        <form class="card" action="/horoscope" enctype="multipart/form-data" method="post" style="width: 100%;">
                            <?php echo csrf_field(); ?>
                            <h5 class="my-3  py-2 text-uppercase text-white" style="background-color:#038c01;"> Kalasarpa Dosha Report</h5>
                            <input type="hidden" name="reptype" value="kalasarpadosha">
                            <div class="p-3 text-left">
                            <p>The kaal Sarp Yoga happens when all the 7 planets such as Sun, Moon, Mars, Mercury, Jupiter, Venus and Saturn including Lagna are placed in between Rahu and Ketu. If planets are moving towards Rahu, it’s called Kaal Sarpa Dosha and if they’re going the other direction i.e., Ketu, it’s termed as Kaal Sarpa Yoga.</p>

                            <p>Kaal sarp yoga report gives you the detailed effects of the dosha as well as yoga in a horoscope and the remedies for the dosha. </p>

                            <p> Kaal sarp dosha could affect the native’s health, happiness and take away one’s peace of mind for years and in some cases, even longer or throughout lifetime depending on the planet’s position in one’s horoscope.  </p>
                         </div>
                            <?php echo $__env->make('services/servicesform', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


                                <div class="col-sm-12 text-center formbutton">
                                    <p class="  my-2"> Detailed Report :  1200/-</p>

                                    <button type="submit"  name="submit" data-amount="1000"  class="mt-4 btn text-white btn-md">Submit Details</button>
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
                                <img src="<?php echo e(asset('astrolifeguide')); ?>/img/services/vastu.webp" style="width:40%;" class="mx-auto card-img-top"
                                     alt="">
                                <a href="/services/remedies" target="_blank">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!--Card content-->
                            <div class="card-body px-1 py-0">
                                <!--Title-->
                                <a href="/services/remedies">
                                    <div style="font-size: 18px;" class="card-title">Remedies</div>
                                    <!--Text-->
                                    <p class="card-text">  Know whether the time is auspicious or not for your special events and celebrations</p>
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

    <?php echo $__env->make('scripts.datetime', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\astrolife\resources\views/services/kalasarpadosha.blade.php ENDPATH**/ ?>