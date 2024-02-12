<?php $__env->startSection('title'); ?>
Tamplates
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<!-- links for css here -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Tamplates <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Forms <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>
<div class="row">
    <div class="col">
        <div class="h-100">
            <div class="row mb-3 pb-1">
                <div class="col-12">
                    <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                        <div class="flex-grow-1">
                            <h4 class="fs-16 mb-1">Forms tamplates!</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<!-- scripts here -->
<script></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vinscent/Desktop/NMB SWITCH/card-admin-v2/resources/views/tamplates/forms.blade.php ENDPATH**/ ?>