@extends('back.layouts.app')
@section('title','SEO Settings')
@section('content')

<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-6">
                <div class="page-title-box">
                    <h4 class="page-title">OnPage SEO</h4>
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
          <h3 class="card-title">Your SEO Settings</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{route('seo.setting.update',$data->id)}}" method="Post">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Meta Title</label>
                <input type="text" class="form-control" name="meta_title" value="{{$data->meta_title}}" placeholder="Meta Title">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Meta Author</label>
                <input type="text" class="form-control" name="meta_author" value="{{$data->meta_author}}" placeholder="Meta Author">
              </div>
               <div class="form-group">
                <label for="exampleInputEmail1">Meta Tags</label>
                <input type="text" class="form-control" name="meta_tag" value="{{$data->meta_tag}}" placeholder="Meta Tags">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Meta Keyword</label>
                <input type="text" class="form-control" name="meta_keyword" value="{{$data->meta_keyword}}" placeholder="Meta Keyword">
                <small>Example:ecommerce,online shop,online market</small>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Meta Description</label>
                <textarea class="form-control" name="meta_description">{{$data->meta_description}}</textarea>
              </div>

              <strong class="text-center text-success"> -- Other Option -- </strong><br>

              <div class="form-group">
                <label for="exampleInputEmail1">Google Verification</label>
                <input type="text" class="form-control" name="google_verification" value="{{$data->google_verification}}" placeholder="Google Verification">
                 <small>Put here only verification code</small>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Alexa verification </label>
                <input type="text" class="form-control" name="alexa_verification" value="{{$data->alexa_verification}}" placeholder="Alexa Verification">
                 <small>Put here only verification code</small>
              </div>
              
              <div class="form-group">
                <label for="exampleInputEmail1">Google Analytics</label>
                <textarea class="form-control" name="google_analytics">{{$data->google_analytics}}</textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Google Adsense</label>
                <textarea class="form-control" name="google_adsense">{{$data->google_adsense}}</textarea>
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