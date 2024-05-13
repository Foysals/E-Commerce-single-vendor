@php 
$setting=DB::table('settings')->first();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield("title") :: {{config('constants.software.name')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{url($setting->favicon)}}" style="border-radius:5px; opacity: .8">

    <!-- jvectormap -->
    <link href="{{ asset("assets/libs/jqvmap/jqvmap.min.css")}}" rel="stylesheet" />

     <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/summernote/summernote-bs4.css') }}">
    
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/toastr/toastr.css') }}">
     <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    
  <!--backend folder--->
    <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/plugins/toastr/toastr.css') }}">
 
   <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/summernote/summernote-bs4.css') }}">

 <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">


 @yield("style")

    <link href="{{ asset("assets/libs/select2/select2.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- App css -->
    <link href="{{ asset("assets/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("assets/css/icons.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("assets/css/app.min.css")}}" rel="stylesheet" type="text/css" />

</head>

<body>

<!-- Begin page -->
<div id="wrapper">
@include("back.layouts.header")
@include("back.layouts.sidebar")
    <div class="content-page">
@yield("content")  <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-center">
                       {{ config('constants.development.session') }} &copy; {{ config('constants.software.name') }} Developed by <a href="{{ config('constants.developer.url') }}" target="_blank">{{ config('constants.developer.name') }}</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>
</div>
<!-- END wrapper -->



<!-- Vendor js -->
<script src="{{ asset("assets/js/vendor.min.js") }}"></script>
<!-- select2 js -->
<script src="{{ asset("assets/libs/select2/select2.full.min.js") }}"></script>

<!-- KNOB JS -->
<script src="{{ asset("assets/libs/jquery-knob/jquery.knob.min.js") }}"></script>
<!-- Chart JS -->
<script src="{{ asset("assets/libs/chart-js/Chart.bundle.min.js") }}"></script>

{{--<!-- Datatable js -->--}}
{{--<script src="{{ asset("assets/libs/datatables/jquery.dataTables.min.js") }}"></script>--}}
{{--<script src="{{ asset("assets/libs/datatables/dataTables.bootstrap4.min.js") }}"></script>--}}
{{--<script src="{{ asset("assets/libs/datatables/dataTables.responsive.min.js") }}"></script>--}}
{{--<script src="{{ asset("assets/libs/datatables/responsive.bootstrap4.min.js") }}"></script>--}}


<!-- Init js-->
<script src="{{ asset("assets/js/pages/form-advanced.init.js") }}"></script>

@yield("script")
<script src="{{ asset('assets/plugins/sweetalert/sweetalert.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/toastr/toastr.min.js') }}"></script>
<script>  
    $(document).on("click", "#delete", function(e){
        e.preventDefault();
        var link = $(this).attr("href");
           swal({
             title: "Are you Want to delete?",
             text: "Once Delete, This will be Permanently Delete!",
             icon: "warning",
             buttons: true,
             dangerMode: true,
           })
           .then((willDelete) => {
             if (willDelete) {
                  window.location.href = link;
             } else {
               swal("Safe Data!");
             }
           });
       });
</script>
{{-- before  logout showing alert message --}}
<script>  
    $(document).on("click", "#logout", function(e){
        e.preventDefault();
        var link = $(this).attr("href");
           swal({
             title: "Are you Want to logout?",
             text: "",
             icon: "warning",
             buttons: true,
             dangerMode: true,
           })
           .then((willDelete) => {
             if (willDelete) {
                  window.location.href = link;
             } else {
               swal("Not Logout!");
             }
           });
       });
</script>


<script>
   @if(Session::has('messege'))
     var type="{{Session::get('alert-type','info')}}"
     switch(type){
         case 'info':
              toastr.info("{{ Session::get('messege') }}");
              break;
         case 'success':
             toastr.success("{{ Session::get('messege') }}");
             break;
         case 'warning':
            toastr.warning("{{ Session::get('messege') }}");
             break;
         case 'error':
             toastr.error("{{ Session::get('messege') }}");
             break;
           }
   @endif
 </script>

<!-- App js -->
<script src="{{ asset("assets/js/app.min.js") }}"></script>
<!-- DATA TABLE SCRIPT LINK --->
<script src="{{ asset('assets//plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>
</body>

</html>