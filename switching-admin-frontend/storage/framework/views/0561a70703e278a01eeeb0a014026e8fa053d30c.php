

<?php $__env->startSection('content'); ?>

    <div class="row">
        <!--end col-->
        <div class="col-xxl-12">
            <div class="card">
                <div class="card-header">
                <div id="timeout">
                           <?php if(Session::has('success')): ?>
                     <p class="alert alert-info"><?php echo e(Session('success')); ?></p>
                      <?php endif; ?>
                      <?php if(Session::has('error')): ?>
                     <p class="alert alert-danger"><?php echo e(Session('error')); ?></p>
                      <?php endif; ?>
                      </div>
                    <div class="row g-2">
                        <div class="col-md-3">
                            <div class="search-box">
                           <h4>Merchant Register</h4>
                            </div>
                        </div>
                        <div class="col-md-auto ms-auto">
                            <div class="d-flex align-items-center gap-2">
                                <div class="flex-grow-1">
                                    <a href="<?php echo e(route('merchants.create')); ?>"><button class="btn btn-info add-btn" data-bs-toggle="modal" data-bs-target="#showModal"><i
                                                class="ri-add-fill me-1 align-bottom"></i> Add Merchant</button></a>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">

                            <div class="card-body">
                            <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                                <thead class="table-light">
                                <tr>
                                    <th class="sort" data-sort="id">ID</th>
                                    <th class="sort" data-sort="name">Merchant Name</th>
                                    <th class="sort" data-sort="email">Email</th>
                                    <th class="sort" data-sort="cellphone">Cellphone</th>
                                    <th class="sort" data-sort="company_name">Company Name</th>
                                    <th class="sort" data-sort="registration_date">Registration Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   
                                        <td class="id"><?php echo e($record->id); ?></td>
                                        <td class="name"><?php echo e($record->name); ?></td>
                                        <td class="email"><?php echo e($record->email); ?></td>
                                        <td class="cellphone"><?php echo e($record->cellphone); ?></td>
                                        <td class="company_name"><?php echo e($record->company_name); ?></td>
                                        <td class="registration_date"><?php echo e($record->registration_date); ?></td>
                                        <td>
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                           <?php echo $__env->make('merchants.modals.show', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-trigger="hover"
                                                       data-bs-placement="top" href="#showModal<?php echo e($record->id); ?>">
                                                        <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                        View</a></li>
                                                    </li>
                                                <li><a class="dropdown-item" href="<?php echo e(route('merchants.edit',[$record->id])); ?>"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                        Edit</a></li>
                                                       
                                                
                                                <li class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" href="<?php echo e(route('device.create',[$record->id])); ?>">
                                                    <i class="ri-computer-line text-primary align-middle"></i>
                                                            Assign POS Device</a></li>
                                            </ul>
                                            </div>
                                        </td>


                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </table>

                        </div>
                       <div>
                    </div>
                    <!--end add modal-->


                </div>
            </div>
            <!--end card-->
        </div>



<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
            <script src="<?php echo e(URL::asset('/assets/libs/list.js/list.js.min.js')); ?>"></script>
            <script src="<?php echo e(URL::asset('/assets/libs/list.pagination.js/list.pagination.js.min.js')); ?>"></script>
            <script src="<?php echo e(URL::asset('/assets/js/pages/crm-companies.init.js')); ?>"></script>
            <script src="<?php echo e(URL::asset('assets/libs/sweetalert2/sweetalert2.min.js')); ?>"></script>
            <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>


<?php $__env->stopSection(); ?>














<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\diana\Desktop\Laravel\Internship Project\switching-admin-frontend\resources\views/merchants/index.blade.php ENDPATH**/ ?>