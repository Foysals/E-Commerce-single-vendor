@extends('back.layouts.app')
@section('title','Page Create')
@section('content')

<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-6">
                <div class="page-title-box">
                    <h4 class="page-title">Create a new page</h4>
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
          <h3 class="card-title">Create a new page</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{route('page.store')}}" method="Post">
            @csrf
            <div class="card-body">
             <div class="form-group">
                <label for="exampleInputEmail1">Page Position</label>
               <select class="form-control" name="page_position">
                     <option value="1">Line One</option>
                     <option value="2">Line Two</option>
               </select>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Page Name</label>
                <input type="text" class="form-control" name="page_name" id="exampleInputEmail1" placeholder="Page Name">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword2">Page Title</label>
                <input type="text" class="form-control" name="page_title" id="exampleInputPassword2" placeholder="Page Title">
              </div>
              

              <div class="form-group">
                <label for="exampleInputPassword3">Page Desciption</label>
                <textarea class="form-control textarea" rows="4" name="page_description"></textarea>
                <small>This data will show on your webpage.</small>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Create Page</button>
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