@if(!Session::has('admin_name_session'))
<script>window.location = "adminlogin";</script>
@endif

@extends ('layout.default')

@section('content')
<div class="right_col" role="main">
<table class="table table-hover" style="background-color: white; color: black; padding-left: 10px">
  <h2>All Branches Record</h2>
  <tr>
    <th>Branch Name</th>
    <th>Branch Address</th>
    <th>Branch Revenue</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  @foreach ($branches as $branch)
  <tr>
    <td>{{$branch->bname}}</td>
    <td>{{$branch->baddress}}</td>
    <td>{{$branch->brevenue}}</td>
    <td><a href="editbranch/{{$branch->id}}">Edit</a></td>
    <td><a href="deletebranch/{{$branch->id}}">Delete</a></td>
  </tr>
  @endforeach
  {{$branches->links()}}
</table>
<hr>
</div>
@endsection
