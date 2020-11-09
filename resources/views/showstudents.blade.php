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
}
</style>
<div class="right_col" role="main">
<table class="table table-hover" style="background-color: white; color: black; padding-left: 10px">
  <h2>All Students Record</h2>
  <tr>
    <th>Student Image</th>
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
    <td><img src="data:image/png;base64,{{ chunk_split(base64_encode($student->simg)) }}" width="80" height="80" > </img></td>
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
  {{$students->links()}}
</table>
<hr>
</div>
@endsection
