@extends('admin')

@section('content')


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
                  @foreach($data as $value)
                <tr>
                  <td>{{$value->name}}</td>
                  <td>{{$value->username}}
                  </td>
                  <td>{{$value->email}}</td>
                  <td>  
                  <button type="submit" class="btn btn-danger">Hapus</button> 
                  <button type="submit" class="btn btn-warning">Edit</button>
                  <button type="submit" class="btn btn-info">Detail</button>
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
     
    @endsection