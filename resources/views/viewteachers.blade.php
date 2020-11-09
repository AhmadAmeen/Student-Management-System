@if(!Session::has('admin_name_session'))
<script>window.location = "adminlogin";</script>
@endif

@extends ('layout.default')

@section('content')
<div class="right_col" role="main">
<table class="table table-hover" style="background-color: white; color: black; padding-left: 10px">
  <h2>All Students Record</h2>
  <tr>
    <th>Teacher Name</th>
    <th>Classes</th>
    <th>Courses</th>
    <th>Coordinator of Discipline</th>
    <th>Phone No</th>
    <th>Email</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  @foreach ($teachers as $teacher)
  <tr>
    <td>{{$teacher->tname}}</td>
    <td>{{$teacher->classes}}</td>
    <td>{{$teacher->courses}}</td>
    <td>{{$teacher->disp_coordinator}}</td>
    <td>{{$teacher->phno}}</td>
    <td>{{$teacher->email}}</td>
    <td><a href="editingteacher/{{$teacher->id}}">Edit</a></td>
    <td><a href="deleteteacher/{{$teacher->id}}">Delete</a></td>
  </tr>
  @endforeach
</table>
<hr>
</div>
@endsection
