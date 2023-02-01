
@extends('admin.master')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


<!DOCTYPE html>
<html>
<head>
<style>
table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}
table {
  border-collapse: collapse;
  width: 100%;
}
th, td {
  padding: 15px;
}
</style>
</head>
<body>

<h1>Student Profile</h1>

<form action="" method="get">
    
<select name="department" id="department">
    <option value="">-- select department --</option>
    @if (!empty($departments))
       @foreach ($registrations as $dept)
          <option value="{{$dept->department }}">{{$dept->department}}</option>
       @endforeach
    @endif
</select>
<button type="submit">Search</button>
<br><br>
</form>


<table> 

<tr>
<th>Id</th>
 <th>Name</th>
<th>E-mail</th>
<th>Password</th>
<th>gender</th>
<th>dept_Name</th>
<th>Action</th>

</tr>

@if(!empty($registrations))
@foreach($registrations as $d)
<tr>
    <td>{{$d->student_id}}</td>
    <td>{{$d->name}}</td>
    <td>{{$d->email}}</td>
    <td>{{$d->password}}</td>
    <td>{{$d->gender}}</td>
    <td>{{$d->department}}</td>
    <td>
    <a href="{{url('editStudent/'.$d->student_id)}}" class="btn btn-info btn-alert">Edit</a> 
     <a href="{{url('delete/'.$d->student_id)}}" class="btn btn-info btn-danger">Delete</a>  
    </td>
    
</tr>

@endforeach
@endif
</table>
</body>
</html>
    
 
  @endsection