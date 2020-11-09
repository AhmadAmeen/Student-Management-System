@if(!Session::has('admin_name_session'))
<script>window.location = "adminlogin";</script>
@endif

@extends ('layout.default')

@section('content')
<style>
img {
  border-radius: 50%;
  display: block;
  margin: 0 auto;
  padding: 10px;
}
</style>
<div class="right_col" role="main">

<!--<form action="{{url('getseachedclassesinfo')}}" method="get">-->

<form action="getseachedstudentsclassesinfo" method="get">
  <input type="text" id="dname" name="dname" required="required">
  <button type="submit" name="submit" class="btn btn-success">Search Student</button>
</form>

<table class="table table-hover" style="background-color: white; color: black; padding-left: 10px">
  <h2>All Students Record</h2>
  <tr>
    <th>Student School ID</th>
    <th>Student B-Form/CNIC ID</th>
    <th>Student Name</th>
    <th>Father's Name</th>
    <th>Class</th>
    <th>Phone No</th>
    <th>Email</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  @foreach ($students as $student)
  <tr>
    <td>{{$student->s_school_id}}</td>
    <td>{{$student->s_bform_id}}</td>
    <td>{{$student->sname}}</td>
    <td>{{$student->fname}}</td>
    <td>{{$student->class}}</td>
    <td>{{$student->phno}}</td>
    <td>{{$student->email}}</td>
    <td><a href="editingstudent/{{$student->id}}">Edit</a></td>
    <td><a href="deletestudent/{{$student->id}}">Delete</a></td>
  </tr>
  @endforeach
</table>
<hr>


<form action="getseachedteachersclassesinfo" method="get">
  <input type="text" id="dname" name="dname" required="required">
  <button type="submit" name="submit" class="btn btn-success">Search Teacher</button>
</form>


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
