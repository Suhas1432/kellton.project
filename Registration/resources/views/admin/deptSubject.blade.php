@extends('admin.master')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <a href="add-subjects-for-department" class="btn btn-info btn-success">Add Departmentwise Subjects</a> 

            <h1>Department Subjects</h1>
            {{session('message')}}

          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Department Subjects</li>

            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List of Student departments & subjects.</h3>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>id</th>
                    <th>Department Name</th>
                    <th>Subject</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($subjects as $d)                  
                  <tr>
                   <td>{{$d->id}}</td>
                   <td>{{$d->department}}</td>
                   <td>{{$d->subject}}</td>
                   <td>
                     <a href="{{url('editSubject/'.$d->id)}}" class="btn btn-info btn-alert">Edit</a> 
                   </td>
                </tr>                
                @endforeach
                  </tbody>
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            @endsection