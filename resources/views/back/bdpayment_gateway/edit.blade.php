@extends('back.layouts.app')
@section('title','Payment gateway setting')
@section('content')

<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-6">
                <div class="page-title-box">
                    <h4 class="page-title">Payment gateway setting</h4>
                </div>
            </div>
           
        </div>
      

    </div> <!-- container -->

</div> <!-- content -->
<section class="content">
<div class="container-fluid">
  <!-- Info boxes -->
  <div class="row">
    <div class="col-4 col-xl-4 col-sm-4 ">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title" style="color: #000">Aamarpay Payment gateway</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{ route('update.aamarpay') }}" method="Post">
            @csrf
            <input type="hidden" name="id" value="{{ $aamarpay->id }}">
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">StoreID</label>
                <input type="text" class="form-control" name="store_id" value="{{ $aamarpay->store_id }}" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Signature KEY</label>
                <input type="text" class="form-control" name="signature_key" value="{{ $aamarpay->signature_key }}" required> 
              </div>
              <div class="form-group">
                <input type="checkbox"  name="status" value="1" @if($aamarpay->status==1) checked @endif > 
                <label for="exampleInputEmail1">Live Server</label>
                <small>(If checbox are not checked it working for sandbox only)</small>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </form>
      </div>
    </div>
    <div class="col-4 col-xl-4 col-sm-4">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title" style="color: #000">SurjoPay Payment gateway</h3>
              </div>
               <!-- form start -->
               <form role="form" action="{{ route('update.surjopay') }}" method="Post">
                @csrf
                <input type="hidden" name="id" value="{{ $surjopay->id }}">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">StoreID</label>
                    <input type="text" class="form-control" name="store_id" value="{{ $surjopay->store_id }}" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Signature KEY</label>
                    <input type="text" class="form-control" name="signature_key" value="{{ $surjopay->signature_key }}" required>
                  </div>
                  <div class="form-group">
                    <input type="checkbox"  name="status" value="1" @if($surjopay->status==1) checked @endif > 
                    <label for="exampleInputEmail1">Live </label> <small>(If checbox are not checked it working for sandbox only)</small>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
        </div>
    </div>
    <div class="col-4 col-xl-4 col-sm-4">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title" style="color: #000">SSL Commerz Payment gateway</h3>
              </div>
              <form role="form" action="{{route('update.sslcommerz')}}" method="Post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">StoreID</label>
                    <input type="text" class="form-control" name="store_id" value="{{ $ssl->store_id }}" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Signature KEY</label>
                    <input type="text" class="form-control" name="signature_key" value="{{ $ssl->signature_key }}" required> 
                  </div>
                  <div class="form-group">
                    <input type="checkbox"  name="status" value="1" @if($ssl->status==1) checked @endif > 
                    <label for="exampleInputEmail1">Live (If checbox are not checked it working for sandbox only)</label>
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