
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
<table> 

<tr>
<th>Id</th>
 <th>Name</th>
<th>E-mail</th>
<th>Password</th>
<th>DOB</th>
<th>Adhar</th>
<th>mobile</th>
<th>address</th>
<th>gender</th>
<th>Department</th>

</tr>

@foreach($data as $d)
<tr>
    <td>{{$d->student_id}}</td>
    <td>{{$d->name}}</td>
    <td>{{$d->email}}</td>
    <td>{{$d->password}}</td>
    <td>{{$d->dob}}</td>
    <td>{{$d->adhar}}</td>
    <td>{{$d->mobile}}</td>
    <td>{{$d->address}}</td>
    <td>{{$d->gender}}</td>
    <td>{{$d->department}}</td>
    
</tr>

@endforeach
</table>
</body>
</html>
    
 
  @endsection