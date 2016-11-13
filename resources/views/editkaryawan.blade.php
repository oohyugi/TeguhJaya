@extends('admin')
@section('page')
<h1>
        Edit karyawan
        <small>Data karyawan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/admin')}}"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li><a href="{{url('/admin/karyawan')}}"><i class="fa fa-dashboard"></i> Karyawan</a></li>
        <li class="active">Edit Karyawan</li>
      </ol>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
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
            <div class="box-body">
        
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{route('karyawan.update', $users->id)}}">
                    <input name="_method" type="hidden" value="PATCH">
                    {{csrf_field()}}
                        

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $users->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $users->email }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                          <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Username</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="{{ $users->username }}" required>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                       <!--  jabatan -->

                         <div class="form-group{{ $errors->has('jabatan') ? ' has-error' : '' }}">
                            <label for="jabatan" class="col-md-4 control-label">Jabatan</label>

                            <div class="col-md-6">
                                <select id="jabatan" class="form-control" name="jabatan">

                                    <option value="Super Admin"> Super Admin</option>
                                    <option value="karyawan"> Karyawan</option>
                                    </select>
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">katasandi</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password"required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">konfirmasi katasandi</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" value="post">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

