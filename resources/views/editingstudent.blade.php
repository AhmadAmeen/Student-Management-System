 @if(!Session::has('admin_name_session'))
<script>window.location = "adminlogin";</script>
@endif

@extends('layout.default')

@section('content')
<style>
img {
  border-radius: 50%;
  display: block;
  margin: 0 auto;
  padding: 10px;
}
</style>
  <link rel="stylesheet" type="text/css" href="{{ asset('public/css/checkbox-etc-css.css') }}" />
  <div class="right_col" role="main">
   <div class="clearfix"></div>
     <div class="row">
       <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
           <div class="x_title">
             <h2>Welcome <small>Edit Student</small></h2>
             <ul class="nav navbar-right panel_toolbox">
               <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
               </li>
               <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                   <i class="fa fa-wrench"></i></a>
                 <ul class="dropdown-menu" role="menu">
                   <li><a href="#">Settings 1</a>
                   </li>
                   <li><a href="#">Settings 2</a>
                   </li>
                 </ul>
                 </li>
                 <li><a class="close-link"><i class="fa fa-close"></i></a>
                 </li>
               </ul>
               <div class="clearfix"></div>
             </div>
          <div class="x_content">
            <br>
            <form action="{{ url ('updatestudent', $student->id) }}" method="post" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
              @csrf
              <h1 style="text-align: center; margin-down: 20px">Edit Student</h1>
              <!--student image-->
              <img src="data:image/png;base64,{{ chunk_split(base64_encode($student->simg)) }}" alt="student_img" style="width:150px; height:150px;"></img>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="simg">Change Student Image <span class="required"></span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="file" id="simg" name="simg" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <!--student School-ID-->
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="s_school_id">Student School ID <span class="required"></span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="s_school_id" name="s_school_id"  value="{{ $student->s_school_id }}" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <!--Student B-Form/ID No-->
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="s_bform_id">Student B-Form No <span class="required"></span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="s_bform_id" name="s_bform_id"  value="{{ $student->s_bform_id }}" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sname">Student Name <span class="required"></span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="sname" name="sname"  value="{{ $student->sname }}" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fname">Father Name <span class="required"></span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="fname" name="fname"  value="{{ $student->fname }}" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="class">Edit Class *<span class="required"></span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">

                  <p style="font-weight: bold;">( Current {{ $student->class }} )</p>
                  @for ($i = 1; $i <= 10; $i++)
                    <label class="b-contain">
                      <input name="class" value="Class {{$i}}" type="radio" required="required">
                      <span class="required">Class {{ $i }}</span>
                      <div class="b-input"></div>
                    </label>
                  @endfor
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Phone No <span class="required"></span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="phno" name="phno" class="date-picker form-control col-md-7 col-xs-12" value="{{ $student->phno }}"  type="number">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">E-mail <span class="required"></span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="email" name="email" class="date-picker form-control col-md-7 col-xs-12" value="{{ $student->email }}"  type="email">
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button class="btn btn-primary" type="button">Cancel</button>
                  <button type="submit" name="submit" class="btn btn-success">Update</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
