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
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-5">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{URL::to('/public/images/'.$u->image)}}"
                       style="width:90px; height:90px;"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{$u->name}}</h3>

                <p class="text-muted text-center">Software Engineer</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right">{{$u->email}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Cell</b> <a class="float-right">543</a>
                  </li>
                  <li class="list-group-item">
                    <b>Location</b> <a class="float-right">{{$u->address}}</a>
                  </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          
          
          <div class="col-md-5">

          
            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                
              <!-- <i class="fas fa-briefcase"></i> -->
                <strong><i class="fas fa-briefcase"></i> Working Experience</strong>

                <p class="text-muted">Malibu, California</p>

                <hr>

                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                <p class="text-muted">
                  B.S. in Computer Science from the University of Tennessee at Knoxville
                </p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">UI Design</span>
                  <span class="tag tag-success">Coding</span>
                  <span class="tag tag-info">Javascript</span>
                  <span class="tag tag-warning">PHP</span>
                  <span class="tag tag-primary">Node.js</span>
                </p>

                <hr>
                <!-- <i class="fas fa-blog"></i> -->
                <strong><i class="fas fa-blog"></i> Personal Information</strong>

                <p class="text-muted">Malibu, California</p>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <div class="col-md-1"></div>
         
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>




@stop
