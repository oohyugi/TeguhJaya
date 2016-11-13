<?php $__env->startSection('page'); ?>
<h1>
        Karyawan
        <small>Data karyawan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo e(url('/admin')); ?>"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">karyawan</li>
      </ol>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<!-- open modal -->
<div class="modal fade" id="favoritesModal" 
     tabindex="-1" role="dialog" 
     aria-labelledby="favoritesModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" 
          data-dismiss="modal" 
          aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" 
        id="favoritesModalLabel">Hapus Data Karyawan</h4>
      </div>
      <div class="modal-body">
        <p>
        Apakah anda yakin ingin menghapus  
        <b><span id="fav-title"></span></b> 
        ?
        </p>
      </div>
      <div class="modal-footer">
       
      
          <button type="button" 
           class="btn btn-default" 
           data-dismiss="modal">Close</button>
              
              <form id="hapusData" action="/admin/karyawan" >
                
              <button type="sumbit" class="btn btn-danger" >
            Hapus
          </button>
              </form>
           
        
        </span>
      </div>
    </div>
  </div>
</div>
<!-- end modal -->

      <div class="row">
        <div class="col-xs-12">
                       

          <div class="box">
             <div class="box-body">
             <?php if(Session::has('message')): ?>

  <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                <?php echo e(Session::get('message')); ?>

              </div>
        </div>



          <?php endif; ?>
            </div>
             
            <!-- /.box-header -->
           

            <div class="box-body">
              <a href="<?php echo e(url('/admin/karyawan/create')); ?>"><button type="submit" class="btn btn-primary">Tambah Karyawan</button>
              </a> 
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

                     
                      
                     

                       <form class="form-horizontal" action="/admin/karyawan/<?php echo e($value->id); ?>"  method="post" >
                      <?php echo e(csrf_field()); ?>

                       <input name="_method" type="hidden" value="DELETE">
                    <!--   <button type="button" class="btn btn-danger"
                        data-toggle="modal"
                        data-id="<?php echo e($value->id); ?>"
                        data-title="<?php echo e($value->name); ?>"
                        data-target="#favoritesModal">
                          <span class="glyphicon glyphicon-trash"></span> Hapus
                      </button>
 -->
                       <a href="<?php echo e(route('karyawan.edit', $value->id)); ?>" class="btn btn-warning" > <span class="glyphicon glyphicon-pencil"></span> Edit
                      </a>
                    
                      <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ?');" value="Delete"><span class="glyphicon glyphicon-trash"></span> Hapus </button> 
                      </form>
                     
              </td>
                          

                 
                 
                 


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
     
<script>
  $(function() {
    $('#favoritesModal').on("show.bs.modal", function (e) {
         
         $("#fav-title").html($(e.relatedTarget).data('title'));
          $("#hapusData").val($(e.relatedTarget).data('id'));

    });

});

</script>



 
   <!-- Dialog show event handler -->
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>