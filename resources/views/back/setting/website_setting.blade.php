@extends('back.layouts.app')
@section('title','Website Setting')
@section('content')

<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-6">
                <div class="page-title-box">
                    <h4 class="page-title">Website Setting</h4>
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
          <h3 class="card-title">Website Setting</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{route('website.setting.update',$setting->id)}}" method="Post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Currency</label>
                 <select class="form-control" name="currency">
                      <option value="৳" {{ ($setting->currency == '৳') ? 'selected': '' }} >Taka (৳)</option>
                      <option value="$" {{ ($setting->currency == '$') ? 'selected': '' }}>USD ($)</option>
                   <option value="₹" {{ ($setting->currency == '₹') ? 'selected': '' }}>Rupee (₹)</option>
                 </select>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Phone One</label>
                <input type="text" class="form-control" name="phone_one" value="{{$setting->phone_one}}" required="">
              </div>
               <div class="form-group">
                <label for="exampleInputEmail1">Phone Two</label>
                <input type="text" class="form-control" name="phone_two" value="{{$setting->phone_two}}" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Main Email</label>
                <input type="email" class="form-control" name="main_email" value="{{$setting->main_email}}" >
              </div>
               <div class="form-group">
                <label for="exampleInputEmail1">Support Email</label>
                <input type="email" class="form-control" name="support_email" value="{{$setting->support_email}}" >
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Address</label>
                <input type="text" class="form-control" name="address" value="{{$setting->address}}" >
              </div>
             
              <strong class="text-info">Social Link</strong>
              
              <div class="form-group">
                <label for="exampleInputEmail1">Facebook</label>
                <input type="text" class="form-control" name="facebook" value="{{$setting->facebook}}" >
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Twitter</label>
                <input type="text" class="form-control" name="twitter" value="{{$setting->twitter}}" >
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Instagram</label>
                <input type="text" class="form-control" name="instagram" value="{{$setting->instagram}}" >
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Linkedin</label>
                <input type="text" class="form-control" name="linkedin" value="{{$setting->linkedin}}" >
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Youtube</label>
                <input type="text" class="form-control" name="youtube" value="{{$setting->youtube}}" >
              </div>

              <strong class="text-info">Logo & Favicon</strong>
              <div class="form-group">
                <label for="exampleInputEmail1">Main Logo</label>
                <input type="file" class="form-control" name="logo" >
                <input type="hidden" name="old_logo" value="{{$setting->logo}}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Favicon</label>
                <input type="file" class="form-control" name="favicon">
                <input type="hidden" name="old_favicon" value="{{$setting->favicon}}">
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </form>
        <!-- form end -->
      </div>
    </div>
  </div><!--end row-->
</div><!--/. container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
  
 

@endsection