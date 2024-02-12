<div class="modal fade" id="showModal<?php echo e($record->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0">
            <div class="modal-header bg-soft-info p-3">
                <h5 class="modal-title" id="exampleModalLabel">Device  Information</h5>
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
                                <label class="form-label">Imei</label>
                                <input type="text"class="form-control"
                                       value="<?php echo e($record->imei); ?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div>
                                <label  class="form-label"><strong>Pos Sim Number</strong></label>
                                <input type="text"  class="form-control"
                                       value="<?php echo e($record->pos_sim_number); ?>">

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div>
                            <label  class="form-label"><strong>Pos Type</strong></label>
                                <input type="text"  class="form-control"
                                     value="<?php echo e($record->pos_type); ?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div>
                            <label  class="form-label"><strong>Terminal ID</strong></label>
                                <input type="text" class="form-control"
                                       value="<?php echo e($record->terminal_id); ?>">

                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div>
                            <label  class="form-label"><strong>Serial Number</strong></label>
                                <input type="text" class="form-control"
                                   value="<?php echo e($record->serial_number); ?>">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div>
                                <label  class="form-label"><strong>Agent Id</strong></label>
                                <input type="text"  class="form-control"
                                     value="<?php echo e($record->agent_id); ?>">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div>
                                <label  class="form-label"><strong>Date Added</strong></label>
                                <input type="text"  class="form-control"
                                       value="<?php echo e($record->created_at); ?>">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div>
                                <label  class="form-label"><strong>Status</strong></label>
                                <input type="text"  class="form-control"
                                       value="<?php echo e($record->status); ?>">
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
<?php /**PATH C:\Users\diana\OneDrive\Desktop\Laravel\Internship Project\switching-admin-frontend\resources\views/devices/modals/show.blade.php ENDPATH**/ ?>