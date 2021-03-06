<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="" class="site_title"> <span>School Management</span></a>

          </div>

          <div class="clearfix"></div>


<!-- menu profile quick info -->
<div class="profile clearfix">
  <div class="profile_pic">
    <img src="{{url('public/gentelella-master/production/images/img.jpg')}}" alt="..." class="img-circle profile_img">
  </div>
  <div class="profile_info">
   <span>Welcome,</span>
    <h2>Dear {{session('admin_name_session')}}</h2>
  </div>
</div>
    <!-- /menu profile quick info -->
  <br />

<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3>General</h3>
    <ul class="nav side-menu">
      <li>
          <li><a href="{{url('adminschat')}}">Chat</a></li>
          <li><a href="{{url('studentregistrationform')}}">Student Registation</a></li>
          <li><a href="{{url('showstudents')}}">Show All Students</a></li>
          <li><a></i> Disciplines ↓ <span class="fa fa-chevron-down"></span></a>
             <ul class="nav child_menu">
               <li><a href="{{url('adddiscipline')}}">Add Disciplines</a></li>
               <li><a href="{{url('viewdisciplines')}}">View Disciplines</a></li>
            </ul>
          </li>
          <!--
          <li><a></i> Courses ↓ <span class="fa fa-chevron-down"></span></a>
             <ul class="nav child_menu">
               <li><a href="{{url('addcourse')}}">Add Courses</a></li>
               <li><a href="{{url('viewcourses')}}">View Courses</a></li>
            </ul>
          </li>
        -->
          <li><a></i> Teachers ↓ <span class="fa fa-chevron-down"></span></a>
             <ul class="nav child_menu">
               <li><a href="{{url('addteacher')}}">Add Teacher</a></li>
               <li><a href="{{url('viewteachers')}}">View Teachers</a></li>
            </ul>
          </li>
          <li><a href="{{url('allclassesdetails')}}"></i> Classes <span class="fa fa-chevron-down"></span></a>
            <!--
             <ul class="nav child_menu">
               @for ($class = 1; $class <= 10; $class++)
                  <li><a href="classinfo/{{ $class }}">Class {{ $class }}</a></li>
                @endfor
              </ul>
            -->
          </li>
          <li><a></i> School Branches ↓ <span class="fa fa-chevron-down"></span></a>
             <ul class="nav child_menu">
               <li><a href="{{url('addbranch')}}">Add Branch</a></li>
               <li><a href="{{url('showbranch')}}">View Branches</a></li>
            </ul>
          </li>
      </li>
    </ul>
  </div>

</div>
</div>
</div>
