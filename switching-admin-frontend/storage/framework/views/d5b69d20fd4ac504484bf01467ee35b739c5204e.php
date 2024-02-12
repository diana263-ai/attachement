
    <?php $__env->startSection('content'); ?>
        <div class="col-lg-12">
                <div class="card">
                <div class="card-header">
                    <button class="btn btn-primary" style="width:100%">TRANSACTIONS</button>
                </div>
                    <div class="card-body">
                        <div id="timeout">
                           <?php if(Session::has('success')): ?>
                     <p class="alert alert-info"><?php echo e(Session('success')); ?></p>
                      <?php endif; ?>
                      <?php if(Session::has('error')): ?>
                     <p class="alert alert-danger"><?php echo e(Session('error')); ?></p>
                      <?php endif; ?>
                      </div>
                      <div class="card">
                    <div class="card-body">
            <div class="row align-items-center-g3">
            <div class="col-lg-4">
                    <form action="/filter-transactions" method="GET"> 
                        <label>Filter Dates</label>
                        <div class="input-group mb-3">
                            <input type="date" class="form-control form-control-sm" name="start_date"  >
                            <input type="date" class="form-control form-control-sm" name="end_date" >
                            <button class="btn btn-primary" type="submit">GET</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <form action="<?php echo e(route('transactions.filterByTerminalId')); ?>" method="POST"> 
                    <?php echo csrf_field(); ?>
                        <label>Filter By Terminal ID</label>
                        <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-sm" name="terminal_id">
                            <button class="btn btn-primary" type="submit">GET</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <form action="<?php echo e(route('transactions.filterByAgentId')); ?>" method="POST"> 
                    <?php echo csrf_field(); ?>
                        <label>Filter By Agent ID</label>
                        <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-sm" name="agent_id">
                            <button class="btn btn-primary" type="submit">GET</button>
                        </div>
                    </form>
                </div>
                </div>
                <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
            <thead class="thead-dark">
            <tr>

                <th>ID</th>
                <th>Reference</th>
                <th>Transaction Date</th>
                <th>Terminal ID</th>
                <th>Agent ID</th>
                <th>Status</th>
                <th>Debit</th>
                <th>Credit</th>
                <th>Commission</th>
                <th>Fees</th>
                <th>Tax</th>
                <th>Amount</th>
                

            </tr>
            </thead>


                <tbody>
                <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>

                    <td><?php echo e($transaction['id']); ?></td>
                    <td><?php echo e($transaction['reference']); ?></td>
                    <td><?php echo e($transaction['transaction_date']); ?></td>
                    <td><?php echo e($transaction['terminal_id']); ?></td>
                    <td><?php echo e($transaction['agent_id']); ?></td>
                    <td><?php echo e($transaction['status']); ?></td>
                    <td><?php echo e($transaction['debit']); ?></td>
                    <td><?php echo e($transaction['credit']); ?></td>
                    <td><?php echo e($transaction['commission']); ?></td>
                    <td><?php echo e($transaction['fees']); ?></td>
                    <td><?php echo e($transaction['tax']); ?></td>
                    <td><?php echo e($transaction['amount']); ?></td>
                    </td>

                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>

                </table>
                
                    </div>
                </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\diana\Desktop\Laravel\Internship Project\switching-admin-frontend\resources\views/transactions/view.blade.php ENDPATH**/ ?>