@extends('admin')

@section('content')
    <div class='row'>
        <div class='col-md-6'>
            <!-- Box -->
            
            @if(Auth::users()->jabatan == 'Super Admin')
                <div class="panel-body">
                    Halaman Admin!
                </div>
            @endif
        </div><!-- /.col -->
        

    </div><!-- /.row -->
@endsection