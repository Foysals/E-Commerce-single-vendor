@extends('back.layouts.app')
@section('title','SMTP Mail Settings Settings')
@section('content')

<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-6">
                <div class="page-title-box">
                    <h4 class="page-title">SMTP Mail</h4>
                </div>
            </div>
           
        </div>
      

    </div> <!-- container -->

</div> <!-- content -->
<section class="content">
<div class="container-fluid">
  <!-- Info boxes -->
  <div class="row">
    <div class="col-12 col-xl-6 col-sm-6 ">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">SMTP Mail Settings</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{route('smtp.setting.update')}}" method="Post">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Mail Mailer</label>
                <input type="hidden" name="types[]" value="MAIL_MAILER">
                <input type="text" class="form-control" name="MAIL_MAILER" value="{{env('MAIL_MAILER')}}" placeholder="Mail Lailer Example: smtp">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Mail Host</label>
                <input type="hidden" name="types[]" value="MAIL_HOST">
                <input type="text" class="form-control" name="MAIL_HOST" value="{{env('MAIL_HOST')}}"  placeholder="Mail Host">
              </div>
               <div class="form-group">
                <label for="exampleInputEmail1">Mail Port</label>
                <input type="hidden" name="types[]" value="MAIL_PORT">
                <input type="text" class="form-control" name="MAIL_PORT" value="{{env('MAIL_PORT')}}" placeholder="Mail Port Example: 2525">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Mail Username</label>
                <input type="hidden" name="types[]" value="MAIL_USERNAME">
                <input type="text" class="form-control" name="MAIL_USERNAME" value="{{env('MAIL_USERNAME')}}" placeholder="Mail Username">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Mail Password</label>
                <input type="hidden" name="types[]" value="MAIL_PASSWORD">
                <input type="text" class="form-control" name="MAIL_PASSWORD" value="{{env('MAIL_PASSWORD')}}"  placeholder="Mail Password">
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </form>
      </div>
    </div>
  </div><!--end row-->
</div><!--/. container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
  
 

@endsection