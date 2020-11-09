@if(!Session::has('admin_name_session'))
<script>window.location = "adminlogin";</script>
@endif

@extends ('layout.default')

@section('content')
<div class="right_col" role="main">
<table class="table table-hover" style="background-color: white; color: black; padding-left: 10px">
  <h2>All Disciplines</h2>
  <tr>
    <th>Disciplines Name</th>
    <!--
    <th>Edit</th>
    -->
    <th>Delete</th>
  </tr>
  @foreach ($disciplines as $discipline)
  <tr>
    <td>{{$discipline->dname}}</td>
    <!--
    <td><a href="editingstudent/{{$discipline->id}}">Edit</a></td>
    -->
    <td><a href="deletediscipline/{{$discipline->id}}">Delete</a></td>

  </tr>
  @endforeach
  {{$disciplines->links()}}
</table>
<hr>
</div>
@endsection
