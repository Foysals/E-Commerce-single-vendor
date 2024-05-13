@extends('back.layouts.app')
@section('title','PAGE CREATE')
@section('content')

<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-6">
                <div class="page-title-box">
                    <h4 class="page-title">All Pages</h4>
                </div>
            </div>
            <div class="col-6">
                <ol class="breadcrumb float-sm-right">
                    <a href="{{route('create.page')}}" class="btn btn-primary"> + Add New</a>
                  </ol>
              </div><!-- /.col -->
        </div>
      

    </div> <!-- container -->

</div> <!-- content -->
 <!-- /.content-header -->
 <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">All Pages</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped table-sm">
                  <thead>
                  <tr>
                    <th>SL</th>
                    <th>Page Name</th>
                    <th>Page Title</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

                 @foreach($page as $key=>$row) 	
                  <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $row->page_name }}</td>
                    <td>{{ $row->page_title }}</td>
                    <td>
                        <a href="{{route('page.edit',$row->id)}}" class="btn btn-info btn-sm edit" ><i class="fas fa-edit"></i></a>
                        <a href="{{route('page.delete',$row->id)}}" class="btn btn-danger btn-sm" id="delete"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                 @endforeach	
                  </tbody>
                </table>
              </div>
            </div>
        </div>
    </div>
  </div>
</section>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.js"></script>
<script type="text/javascript">
    $('.dropify').dropify();
  
  </script>
  
 
@endsection