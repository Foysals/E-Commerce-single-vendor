@extends('back.layouts.app')
@section('title','Campaign: {{ $campaign->title }}')
@section('content')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css">
<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-6">
                <div class="page-title-box">
                    <h4 class="page-title">Campaign</h4>
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
              <h3 class="card-title">All Products For Campaign Exist</h3>
            </div>
            <!-- /.card-header -->
              <div class="card-body">
                <table id="" class="table table-bordered table-striped table-sm ytable">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Code</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                   @foreach($products as $key=>$row) 
                   <tr>
                     <td>{{ $key+1 }}</td>
                     <td>{{ $row->name }}</td>
                     <td><img src="{{ asset('files/product/'.$row->thumbnail) }}" height="32" width="32"></td>
                     <td>{{ $row->code }}</td>
                     <td>{{ $row->price }}</td>
                     <td>
                         <a href="{{ route('product.remove.campaign',$row->id) }}" id="delete" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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
  
@endsection