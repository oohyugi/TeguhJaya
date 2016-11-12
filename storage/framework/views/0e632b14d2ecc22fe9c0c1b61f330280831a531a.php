<?php $__env->startSection('content'); ?>
    <div class='row'>
        <div class='col-md-6'>
            <!-- Box -->
            
            <?php if(Auth::users()->jabatan == 'Super Admin'): ?>
                <div class="panel-body">
                    Halaman Admin!
                </div>
            <?php endif; ?>
        </div><!-- /.col -->
        

    </div><!-- /.row -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>