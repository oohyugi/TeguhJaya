@extends('admin')
@section('page')
<h1>
        Stok Gudang
        <small>Semua barang yang ada di gudang</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/admin')}}"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Stok Gudang</li>
      </ol>
@endsection
@section('content')

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
             @if (Session::has('message'))

  <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                {{ Session::get('message') }}
              </div>
        </div>



          @endif
            </div>
             
            <!-- /.box-header -->
           

            <div class="box-body">
              <a href="{{url('/admin/karyawan/create')}}"><button type="submit" class="btn btn-primary">Tambah Stok</button>
              </a> 
            </div>
           
            <div class="box-body">

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama Barang</th>
                  <th>Pabrik</th>
                  <th>Jumlah Barang</th>
                  <th>Harga Bawah</th>
                  <th>Harga Atas</th>
                  <th>Action</th>
                 
                </tr>
                </thead>
                <tbody>

                  @foreach($data as $value)
                  <?php 

           // $jumlah_barang = $value->jumlah_barang;
            if ($value->jumlah_barang >=12 ) {
               // $jumlah_barang = (number_format($value->jumlah_barang/12,0))." Lusin";

               $lusin = (floor($value->jumlah_barang/12));
               $pcs = ($value->jumlah_barang%12);
               if ($pcs != 0) {
                    $jumlah_barang = $lusin. " Lusin  "."+  ". $pcs. " Pcs";
               }else{
                $jumlah_barang = $lusin. " Lusin  ";
               }
              


            }else{
                $jumlah_barang = ($value->jumlah_barang). " Pcs"; 
            }
              //Format uang
            $harga_bawah ="Rp. ".number_format($value->harga_bawah,'0',',','.')."-";
             $harga_atas = "Rp. ".number_format($value->harga_atas,'0',',','.')."-";

             ?>
                <tr>
                  <td>{{$value->nama_barang}}</td>
                  <td>{{$value->pabrik}}
                  </td>
                   
                  <td>{{$jumlah_barang }}</td>
                  
                  <td> {{$harga_bawah}}</td>
                  <td> {{$harga_atas}}</td>

                     
                      
                     <td>

                       <form class="form-horizontal" action="/admin/karyawan/{{$value->id}}"  method="post" >
                      {{ csrf_field() }}
                       <input name="_method" type="hidden" value="DELETE">
                    <!--   <button type="button" class="btn btn-danger"
                        data-toggle="modal"
                        data-id="{{$value->id}}"
                        data-title="{{$value->name}}"
                        data-target="#favoritesModal">
                          <span class="glyphicon glyphicon-trash"></span> Hapus
                      </button>
 -->
                       <a href="{{route('karyawan.edit', $value->id)}}" class="btn btn-primary">Edit</a>
                    
                      <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ?');" value="Delete"><span class="glyphicon glyphicon-trash"></span> Hapus </button> 
                      </form>
                     
              </td>
                          

                 
                 
                 


                   </td>
                
                </tr>

                 @endforeach

            
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
    @endsection