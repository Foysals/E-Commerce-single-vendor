@extends('back.layouts.app')
@section('title','SUB CATEGORY')
@section('content')

<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-6">
                <div class="page-title-box">
                    <h4 class="page-title">Sub Category</h4>
                </div>
            </div>
            <div class="col-6">
                <ol class="breadcrumb float-sm-right">
                  <button class="btn btn-primary" data-toggle="modal" data-target="#addModal"> + Add New</button>
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
              <h3 class="card-title">All Sub Categories list here</h3>
            </div>
            <!-- /.card-header -->
              <div class="card-body">
                <table id="" class="table table-bordered table-striped table-sm ytable">
                    <thead>
                    <tr>
                      <th>SL</th>
                      <th>Sub Category Name</th>
                      <th>Sub Category Slug</th>
                      <th>Category Name</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                  
                    </tbody>
                  </table>
              </div>
            </div>
        </div>
    </div>
  </div>
</section>
{{-- category insert modal --}}
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New Sub Category</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('subcategory.store') }}" method="Post">
          @csrf
      <div class="modal-body">
            <div class="form-group">
            <label for="category_name">Category Name</label>
            <select class="form-control" name="category_id" required="">
                @foreach($category as $row)
                  <option value="{{ $row->id }}">{{ $row->category_name }}</option>
                @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="category_name">SubCategory Name</label>
            <input type="text" class="form-control"  name="subcategory_name" required="">
            <small id="emailHelp" class="form-text text-muted">This is your sub category</small>
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
        <h5 class="modal-title" id="exampleModalLabel">Edit Subategory</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     <div id="modal_body">
             
     </div>	
    </div>
  </div>
</div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


  <script type="text/javascript">
      $(function subcategory(){
          var table=$('.ytable').DataTable({
              processing:true,
              serverSide:true,
              ajax:"{{ route('subcategory.index') }}",
              columns:[
                  {data:'DT_RowIndex',name:'DT_RowIndex'},
                  {data:'subcategory_name'  ,name:'subcategory_name'},
                  {data:'subcat_slug',name:'subcat_slug'},
                  {data:'category_name',name:'category_name'},
                  {data:'action',name:'action',orderable:true, searchable:true},
  
              ]
          });
      });
  
      $('body').on('click','.edit', function(){
		let subcat_id=$(this).data('id');
    $.get("subcategory/edit/"+subcat_id, function(data){
			$("#modal_body").html(data);
      });
    });
      
  
  </script>

  
  
@endsection