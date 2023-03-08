@extends('layouts.admin')
@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Service Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
              <li class="breadcrumb-item active">Service Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
        <h3 class="card-title">Service List</h3>
          <a href="{{route('admin_servicecreate')}}" type="button" class="btn btn-block btn-info" style="width:200px; float:right">Add Service</a>
        </div>
        <div class="card-body">
          <table id='services' class='table table-bordered table-striped dataTable dtr-inline'>
            <thead>
              <tr>
                <th>Icon</th>
                <th>Name</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead> 
            <tbody>          
              @foreach($services as $key => $value)
                <tr>
                  <td>{{$value->icon}}</td>
                  <td>{{$value->name}}</td>
                  <td>{{$value->description}}</td>
                  <td>
                    <a class='btn btn-info btn-sm' href='#'><i class='fas fa-pencil-alt'></i>Edit</a>
                  </td>
                  <td>
                    <a class='btn btn-danger btn-sm' href="{{route('admin_servicedelete',['id'=> $value->id])}}" onclick= "return confirm('Are you sure?')"><i class='fas fa-trash'></i>Delete</a>
                  </td>
                </tr>
              @endforeach  
            <tbody>         
          </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer"></div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
@section('js')

  <script src="{{asset('assets')}}/admin/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="{{asset('assets')}}/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="{{asset('assets')}}/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="{{asset('assets')}}/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

  <script>
    $(function () {
      $("#services").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
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
@endsection