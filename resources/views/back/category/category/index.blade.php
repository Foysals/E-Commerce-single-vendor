@extends('back.layouts.app')
@section('title','All CATEGORY')
@section('content')

<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-6">
                <div class="page-title-box">
                    <h4 class="page-title">All Product</h4>
                </div>
            </div>
            <div class="col-6">
                <ol class="breadcrumb float-sm-right">
                  <button class="btn btn-primary" data-toggle="modal" data-target="#categoryModal"> + Add New</button>
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
              <h3 class="card-title">All categories list here</h3>
            </div>
            <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped table-sm">
                  <thead>
                  <tr>
                    <th>SL</th>
                      <th>Category Name</th>
                      <th>Category Slug</th>
                      <th>Icon</th>
                      <th>Home Page</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                   @foreach($data as $key=>$row) 	
                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td>{{ $row->category_name }}</td>
                      <td>{{ $row->category_slug }}</td>
                      <td><img src="{{ asset($row->icon) }}" height="32" width="32"></td>
                      <td>
                         @if($row->home_page==1)
                           <span class="badge badge-success">Home Page</span>
                         @endif   
                      </td>
                      <td>
                      	<a href="#" class="btn btn-info btn-sm edit" data-id="{{ $row->id }}" data-toggle="modal" data-target="#editModal" ><i class="fas fa-edit"></i></a>
                      	<a href="{{ route('category.delete',$row->id) }}" class="btn btn-danger btn-sm" id="delete"><i class="fas fa-trash"></i></a>
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
{{-- category insert modal --}}
<div class="modal fade" id="categoryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('category.store') }}" method="Post" enctype="multipart/form-data">
      	@csrf
      <div class="modal-body">
          <div class="form-group">
            <label for="category_name">Category Name</label>
            <input type="text" class="form-control" id="category_name" name="category_name" required="">
            <small id="emailHelp" class="form-text text-muted">This is your main category</small>
          </div> 
          <div class="form-group">
            <label for="category_name">Category Icon</label>
            <input type="file" class="dropify" id="icon" name="icon" required="">
          </div>  
          <div class="form-group">
            <label for="category_name">Show on Homepage</label>
           <select class="form-control" name="home_page">
             <option value="1">Yes</option>
             <option value="0">No</option>
           </select>
            <small id="emailHelp" class="form-text text-muted">If yes it will be show on your home page</small>
          </div>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="Submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>

{{-- edit modal --}}
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modal_body">
        
      </div>
    </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.js"></script>

<script type="text/javascript">
  $('.dropify').dropify();

</script>

<script type="text/javascript">
	$('body').on('click','.edit', function(){
		let cat_id=$(this).data('id');
		$.get("category/edit/"+cat_id, function(data){
			 $("#modal_body").html(data);
		});
	});

</script>

@endsection