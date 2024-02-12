<?php $__env->startSection('title'); ?>
    Permissions
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <!-- links for css here -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>User Permissions@endslot
        <?php $__env->slot('title'); ?>Edit <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="fs-16 mb-1">Edit Permission</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('permissions.update', $permission->id)); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo e($permission->name); ?>">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <!-- scripts here -->
    <script></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vinscent/Desktop/NMB SWITCH/SWITCH-ADMIN/resources/views/permissions/edit.blade.php ENDPATH**/ ?>