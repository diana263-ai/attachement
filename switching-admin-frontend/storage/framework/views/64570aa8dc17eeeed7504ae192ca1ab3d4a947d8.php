
<?php $__env->startSection('title'); ?> Create Merchant <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('assets/libs/dropzone/dropzone.min.css')); ?>" rel="stylesheet">
    <!-- Sweet Alert css-->
    <link href="<?php echo e(URL::asset('assets/libs/dropzone/sweetalert2/sweetalert2.min.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row justify-content-center">
        <div class="col-xxl-9">
            <div class="card">
                <form  action="<?php echo e(route('merchants.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="card-body border-bottom border-bottom-dashed p-4">
                        <div class="row">

                            <!--end col-->
                         
                        <!--end row-->
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1"><strong>CREATE MERCHANT<strong></h4>
                                </div><!-- end card header --><br><br>
                                <div class="card-body">
                                    <div >
                                        <div class="row align-items-center g-3">
                                            <div class="col-lg-4">
                                                <label><strong>Merchant Name:</strong></label>
                                                <input class="form-control form-control-sm" type="text" name="name">
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <label><strong>First Name:</strong></label>
                                                <input class="form-control form-control-sm" type="text" name="firstname">
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <label><strong>Last Name:</strong></label>
                                                <input class="form-control form-control-sm" type="text" name="lastname">
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <br><br>
                                        <!--end row-->
                                        <div class="row align-items-center g-3">
                                            <div class="col-lg-4">
                                                <label><strong>Email:</strong></label>
                                                <input class="form-control form-control-sm" type="text" name="email">
                                            </div>
                                            <div class="col-lg-4">
                                                <label><strong>Cellphone:</strong></label>
                                                <input class="form-control form-control-sm" type="text" name="cellphone">
                                            </div>
                                            <div class="col-lg-4">
                                                <label><strong>Company Name:</strong></label>
                                                <input class="form-control form-control-sm" type="text" name="company_name">
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="row align-items-center g-3">
                                        <div class="col-lg-4">
                                            <label><strong>Registration Date:</strong></label>
                                            <input class="form-control form-control-sm" type="date" name="registration_date">
                                        </div>
                                        <div class="col-lg-4">
                                            <label><strong>Bank Name:</strong></label>
                                            <input class="form-control form-control-sm" type="text" name="bank_name">
                                        </div>
                                        <div class="col-lg-4">
                                            <label><strong>Bank Account Number:</strong></label>
                                            <input class="form-control form-control-sm" type="text" name="account">
                                        </div>
                                    </div>
                                    <br><br>
                                    <label><strong>Address:</strong></label>
                                    <div class="mb-2" style="width:100%">
                                        <textarea class="form-control bg-light border-0" rows="6" name="address"></textarea>
                                    </div>
                                                                </div>
                                                                <!--end row-->

                                                            

                                                                                    <div class="hstack gap-2 justify-content-end d-print-none mt-4">
                                                                                        <button type="submit" class="btn btn-primary" style="width:100%">Submit</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--end row-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('assets/libs/dropzone/dropzone.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/libs/cleave.js/cleave.js.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/js/pages/invoicecreate.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/libs/sweetalert2/sweetalert2.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\diana\Desktop\Laravel\Internship Project\switching-admin-frontend\resources\views/merchants/create.blade.php ENDPATH**/ ?>