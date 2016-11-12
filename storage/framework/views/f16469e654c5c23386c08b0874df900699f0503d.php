<?php $__env->startSection('content'); ?>


      <div class="row">
        <div class="col-xs-12">
          

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Karyawan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               <button type="submit" class="btn btn-primary">Tambah Karyawan</button>
            </div>
           
            <div class="box-body">

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama Karyawan</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Action</th>
                 
                </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <tr>
                  <td><?php echo e($value->name); ?></td>
                  <td><?php echo e($value->username); ?>

                  </td>
                  <td><?php echo e($value->email); ?></td>
                  <td>  
                  <button type="submit" class="btn btn-danger">Hapus</button> 
                  <button type="submit" class="btn btn-warning">Edit</button>
                  <button type="submit" class="btn btn-info">Detail</button>
                   </td>
                
                </tr>

                 <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

            
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
     
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>