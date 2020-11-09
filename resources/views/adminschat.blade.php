@if(!Session::has('admin_name_session'))
<script>window.location = "adminlogin";</script>
@endif

@extends ('layout.default')

@section('content')
<div class="right_col" role="main">
<table class="table table-hover" style="background-color: white; color: black; padding-left: 10px">
  <h2>All Students Record</h2>
  <tr>
    <th>Admin Name</th>
    <th>Chat</th>
  </tr>
  @foreach ($admins as $admin)
  <tr>
    <td>{{$admin->username}}</td>
    <td><a href="chatwithadmin/{{session('admin_session')}}/{{$admin->id}}">Chat</a></td>
  </tr>
  @endforeach
</table>
<hr>
</div>
@endsection
