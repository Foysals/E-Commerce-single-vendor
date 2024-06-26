@extends('back.layouts.app')
@section('title','password change')
@section('content')

<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-6">
                <div class="page-title-box">
                    <h4 class="page-title">Password change</h4>
                </div>
            </div>
           
        </div>
      

    </div> <!-- container -->

</div> <!-- content -->
<section class="content">
<div class="container-fluid">
  <!-- Info boxes -->
  <div class="row">
    <div class="col-6">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Change Your Password</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{route('admin.password.update')}}" method="Post">
          @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Old Password</label>
              <input type="password" class="form-control" name="old_password" id="exampleInputEmail1" placeholder="Old Password">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword2">New Password</label>
              <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="exampleInputPassword2" placeholder="New Password">
              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            

            <div class="form-group">
              <label for="exampleInputPassword3">Confirm Password</label>
              <input type="password" class="form-control" name="password_confirmation" id="exampleInputPassword3" placeholder="Confirm Password">
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-rounded  btn-primary">Update Password</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div><!--/. container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
  
 

@endsection