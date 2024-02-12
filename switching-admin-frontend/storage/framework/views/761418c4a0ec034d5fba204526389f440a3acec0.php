
<?php $__env->startSection('title'); ?> Create Device <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('assets/libs/dropzone/dropzone.min.css')); ?>" rel="stylesheet">
    <!-- Sweet Alert css-->
    <link href="<?php echo e(URL::asset('assets/libs/dropzone/sweetalert2/sweetalert2.min.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row justify-content-center">
        <div class="col-xxl-9">
            <div class="card">
                <form  action="<?php echo e(route('device.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('POST'); ?>
                    <div class="card-body border-bottom border-bottom-dashed p-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1"><strong>CREATE DEVICE<strong></h4>
                                </div><!-- end card header --><br><br>
                                <div class="col-lg-4">
                                <label><strong>Merchant Name: <?php echo e($merchant->name); ?></strong></label>
                                <input type="hidden" name="agent_id" class="form-control" value="<?php echo e($merchant->id); ?>">
                                </div><br>
                                <div class="card-body">
                                    <div >
                                        <div class="row align-items-center g-3">
                                            <div class="col-lg-4">
                                                <label><strong>Imei:</strong></label>
                                                <input class="form-control form-control-sm" type="text" name="imei">
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <label><strong>Name:</strong></label>
                                                <input class="form-control form-control-sm" type="text" name="name">
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <label><strong>Pos Sim Number:</strong></label>
                                                <input class="form-control form-control-sm" type="text" name="pos_sim_number">
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <br><br>
                                        <!--end row-->
                                        <div class="row align-items-center g-3">
                                            <div class="col-lg-4">
                                                <label><strong>Terminal ID:</strong></label>
                                                <input class="form-control form-control-sm" type="text" name="terminal_id">
                                            </div>
                                            <div class="col-lg-4">
                                                <label><strong>Serial Number:</strong></label>
                                                <input class="form-control form-control-sm" type="text" name="serial_number">
                                            </div>
                                            <div class="col-lg-4">
                                                <label><strong>Pos Type:</strong></label>
                                                <input class="form-control form-control-sm" type="text" name="pos_type">
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="row align-items-center g-3">
                                        <div class="col-lg-4">
                                            <label><strong>Status:</strong></label>
                                            <select name="status" class="form-control form-control-sm">
                                            <option value="" disabled selected>Please select an option</option>
                                            <option value="ACTIVE">ACTIVE</option>
                                            <option value="BLOCKED">BLOCKED</option>
                                            <option value="SUSPENDED">SUSPENDED</option>
                                        </select>
                                        </div>
                    
                                    </div>
                                    <br><br>
                                    
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\diana\Desktop\Laravel\Internship Project\switching-admin-frontend\resources\views/devices/create.blade.php ENDPATH**/ ?>