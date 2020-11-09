@if(!Session::has('admin_name_session'))
<script>window.location = "adminlogin";</script>
@endif

@extends ('layout.default')

@section('content')
<div class="right_col" role="main">
<table class="table table-hover" style="background-color: white; color: black; padding-left: 10px">
  <h2>All Courses</h2>
  <tr>
    <th>Discipline</th>
    <th>Course Name</th>
    <!--<th>Edit</th>-->
    <th>Delete</th>
  </tr>
  @foreach ($courses as $course)
  <tr>
    <td>{{$course->dname}}</td>
    <td>{{$course->cname}}</td>
    <!--<td><a href="editingcourse/{{$course->id}}">Edit</a></td>-->
    <td><a href="deletecourse/{{$course->id}}">Delete</a></td>
  </tr>
  @endforeach
</table>
<hr>
</div>
@endsection
