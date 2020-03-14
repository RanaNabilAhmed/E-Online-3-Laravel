@extends('backend/layouts/default')

@section('content')
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{URL::to('')}}/admin">Home</a></li>
              <li class="breadcrumb-item active">All Users</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    {{-- ye kaam jb addtocart ho jae to upar message show krwany k liye h jquery k through. --}}

      @if(session()->has('message'))
      <div class="alert alert-success" style="color: white; background: blue;">
        {{ session()->get('message') }}
      </div>
      @endif
      
    {{-- ye kaam jb addtocart ho jae to upar message show krwany k liye h jquery k through. end --}}
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
              <a href="{{URL::to('')}}/pages/contact" type="button" class="btn btn-block btn-info">View All User Data</a>
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $u)
                <tr>
                  <td>{{$u->id}}</td>
                  <td><a href="{{URL::to('')}}/pages/profile/{{ $u->id }}"><img class="image-fluid" src="{{URL::to('/public/images/'.$u->image)}}" style="width:50px; height:50px;" alt=""></a></td>
                  <td>{{$u->name}}</td>
                  <td>{{$u->email}}</td>
                  <td>{{$u->address}}</td>
                  <td>
                      <a href="{{URL::to('')}}/user/edit/{{ $u->id }}" type="button" class="btn btn-block btn-info">
                        Edit
                      </a>
                      <a href="{{URL::to('')}}/user/block/{{ $u->id }}" type="button" class="btn btn-block btn-warning">
                        Block
                      </a>
                  </td>
                </tr> 
                @endforeach              
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
 




@stop
