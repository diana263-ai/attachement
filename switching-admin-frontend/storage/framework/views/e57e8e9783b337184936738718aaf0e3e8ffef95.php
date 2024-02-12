
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
                <form  action="<?php echo e(route('merchants.destroy', $records->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                    <div class="card-body border-bottom border-bottom-dashed p-4">
                        <div class="row">

                        <button type="submit">Delete</button>
                         
                        <!--end row-->
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1"><strong>DELETE MERCHANT<strong></h4>
                                </div><!-- end card header --><br><br>
                                <div class="card-body">
                                    <div >
                                        <div class="row align-items-center g-3">
                                        
                                        
                                    
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\diana\Desktop\Laravel\Internship Project\switching-admin-frontend\resources\views/merchants/delete.blade.php ENDPATH**/ ?>