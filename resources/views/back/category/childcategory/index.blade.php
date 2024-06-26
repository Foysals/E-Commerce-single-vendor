@extends('back.layouts.app')
@section('title','Child Category')
@section('content')

<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-6">
                <div class="page-title-box">
                    <h4 class="page-title">Child Category</h4>
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
              <h3 class="card-title">All child categories list here</h3>
            </div>
            <!-- /.card-header -->
              <div class="card-body">
                <table id="" class="table table-bordered table-striped table-sm ytable">
                    <thead>
                    <tr>
                      <th>SL</th>
                      <th>ChildCategory Name</th>
                      <th>Category Name</th>
                      <th>SubCategory Name</th>
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
          <h5 class="modal-title" id="exampleModalLabel">Add New Child Category</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
       <form action="{{ route('childcategory.store') }}" method="Post" id="add-form">
        @csrf
        <div class="modal-body">
              <div class="form-group">
              <label for="category_name">Category/Subcategory </label>
              <select class="form-control" name="subcategory_id" required="">
                  @foreach($category as $row)
                    @php 
                      $subcat=DB::table('subcategories')->where('category_id',$row->id)->get();
                    @endphp
                    <option disabled="" style="color: blue;"
                    >{{ $row->category_name }}</option>
                    @foreach($subcat as $row)
                          <option value="{{ $row->id }}"> ---- {{ $row->subcategory_name }}</option>
                    @endforeach    
                  @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="category_name">Child Category Name</label>
              <input type="text" class="form-control"  name="childcategory_name" required="">
              <small id="emailHelp" class="form-text text-muted">This is your childcategory category</small>
            </div>   
        </div>
        <div class="modal-footer">
          <button type="Submit" class="btn btn-primary"> <span class="d-none"> loading..... </span>  Submit</button>
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
          <h5 class="modal-title" id="exampleModalLabel">Edit Child Category</h5>
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
      $(function childcategory(){
          var table=$('.ytable').DataTable({
              processing:true,
              serverSide:true,
              ajax:"{{ route('childcategory.index') }}",
              columns:[
                  {data:'DT_RowIndex',name:'DT_RowIndex'},
                  {data:'childcategory_name'  ,name:'childcategory_name'},
                  {data:'category_name',name:'category_name'},
                  {data:'subcategory_name',name:'subcategory_name'},
                  {data:'action',name:'action',orderable:true, searchable:true},
  
              ]
          });
      });
  
  
    $('body').on('click','.edit', function(){
      let id=$(this).data('id');
      $.get("childcategory/edit/"+id, function(data){
          $("#modal_body").html(data);
      });
    });
  
  </script>
@endsection