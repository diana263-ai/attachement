<div class="modal fade" id="showModal<?php echo e($record->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0">
            <div class="modal-header bg-soft-info p-3">
                <h5 class="modal-title" id="exampleModalLabel">Merchant  Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        id="close-modal"></button>
            </div>
            <form action="">
                <div class="modal-body">
                    <input type="hidden" id="id-field" />
                    <div class="row g-3">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <div class="position-relative d-inline-block">

                                </div>

                                <h3><?php echo e($record->name); ?></h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div>
                                <label for="owner-field" class="form-label">First Name</label>
                                <input type="text" id="owner-field" class="form-control"
                                       value="<?php echo e($record->firstname); ?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div>
                                <label  class="form-label"><strong>Last Name</strong></label>
                                <input type="text"  class="form-control"
                                       value="<?php echo e($record->lastname); ?>">

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div>
                            <label  class="form-label"><strong>Email</strong></label>
                                <input type="text"  class="form-control"
                                     value="<?php echo e($record->email); ?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div>
                            <label  class="form-label"><strong>Cellphone</strong></label>
                                <input type="text" class="form-control"
                                       value="<?php echo e($record->cellphone); ?>">

                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div>
                            <label  class="form-label"><strong>Company Name</strong></label>
                                <input type="text" class="form-control"
                                   value="<?php echo e($record->company_name); ?>">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div>
                                <label  class="form-label"><strong>Registration Date</strong></label>
                                <input type="text"  class="form-control"
                                     value="<?php echo e($record->registration_date); ?>">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div>
                                <label  class="form-label"><strong>Bank Name</strong></label>
                                <input type="text"  class="form-control"
                                       value="<?php echo e($record->bank_name); ?>">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div>
                                <label  class="form-label"><strong>Bank Account</strong></label>
                                <input type="text"  class="form-control"
                                       value="<?php echo e($record->account); ?>">
                            </div>
                            
                        </div>
                        <div class="col-lg-4">
                            <div>
                                <label  class="form-label"><strong>Address</strong></label>
                                <input type="text"  class="form-control"
                                       value="<?php echo e($record->address); ?>">
                            </div>
                            
                        </div>








                    </div>
                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-light"
                                data-bs-dismiss="modal">Close</button>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\diana\Desktop\Laravel\Internship Project\switching-admin-frontend\resources\views/merchants/modals/show.blade.php ENDPATH**/ ?>