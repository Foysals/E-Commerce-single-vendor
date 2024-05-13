@extends('back.layouts.app')
@section('title','Warehouse')
@section('content')

<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-6">
                <div class="page-title-box">
                    <h4 class="page-title">Warehouse</h4>
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
              <h3 class="card-title">All Brand Categories list here</h3>
            </div>
            <!-- /.card-header -->
              <div class="card-body">
                <table id="" class="table table-bordered table-striped table-sm ytable">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Warehouse Name</th>
                        <th>Warehouse Address</th>
                        <th>Warehouse Phone</th>
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
          <h5 class="modal-title" id="exampleModalLabel">New Warehouse</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
       <form action="{{ route('warehouse.store') }}"  method="Post" id="add-form">
        @csrf
        <div class="modal-body">
            <div class="form-group">
              <label for="warehouse_name">Warehouse Name</label>
              <input type="text" class="form-control"  name="warehouse_name" required="" placeholder="Warehouse Name">
            </div>   
  
            <div class="form-group">
              <label for="warehouse_address">Warehouse Address</label>
              <input type="text" class="form-control"  name="warehouse_address" required="" placeholder="Warehouse Address">
            </div>   
  
            <div class="form-group">
              <label for="warehouse_phone">Warehouse Phone</label>
              <input type="text" class="form-control"  name="warehouse_phone" required="" placeholder="Warehouse Phone">
            </div>   
        </div>
        <div class="modal-footer">
          <button type="Submit" class="btn btn-primary"> <span class="d-none loader"><i class="fas fa-spinner"></i> Loading..</span> <span class="submit_btn"> Submit </span> </button>
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
          <h5 class="modal-title" id="exampleModalLabel">Update Warehouse</h5>
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
              ajax:"{{ route('warehouse.index') }}",
              columns:[
                  {data:'DT_RowIndex',name:'DT_RowIndex'},
                  {data:'warehouse_name'  ,name:'warehouse_name'},
                  {data:'warehouse_address',name:'warehouse_address'},
                  {data:'warehouse_phone',name:'warehouse_phone'},
                  {data:'action',name:'action',orderable:true, searchable:true},
  
              ]
          });
      });
  
  
  
  
    $('body').on('click','.edit', function(){
      let id=$(this).data('id');
      $.get("warehouse/edit/"+id, function(data){
          $("#modal_body").html(data);
      });
    });
  
    //form submit
    $('#add-form').on('submit',function(){
        $('.loader').removeClass('d-none');
        $('.submit_btn').addClass('d-none');
    });
  
  </script>
@endsection