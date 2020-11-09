@if(!Session::has('admin_name_session'))
<script>window.location = "adminlogin";</script>
@endif

@extends('layout.default')

@section('content')

  <link rel="stylesheet" type="text/css" href="{{ asset('public/css/checkbox-etc-css.css') }}" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
  $("#toggle_box").hide();
    $("#toggle").click(function(){
      $("#toggle_box").toggle();
    });
  });
  </script>

  <div class="right_col" role="main">
   <div class="clearfix"></div>
             <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
                 <div class="x_panel">
                   <div class="x_title">
                     <h2>Welcome <small>Add Teacher</small></h2>
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
                    <form action="{{url('addnewteacher')}}" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                      @csrf
                      <h1 style="text-align: center; margin-down: 20px">Add New Teacher</h1>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tname">Teacher Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="tname" name="tname" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="classes">Classes <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          @for ($i = 1; $i <= 10; $i++)
                          <label class="b-contain">
                            <input name="classes[]" value="Class {{$i}}" type="checkbox">
                            <span>Class {{ $i }}</span>
                            <div class="b-input"></div>
                          </label>
                          @endfor
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="courses" class="control-label col-md-3 col-sm-3 col-xs-12">Courses <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          @for ($i = 0; $i < count($courses); $i++)
                            <label class="b-contain">
                            	<input name="courses[]" value="{{$courses[$i]}}" type="checkbox">
                              <span>{{ $courses[$i] }}</span>
                            	<div class="b-input"></div>
                            </label>
                          @endfor
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Is Coordinator <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <label class="b-contain">
                            <input id="toggle" value="TRUE" name="iscoordinator" type="checkbox">
                            <span></span>
                            <div class="b-input"></div>
                          </label>
                        </div>
                      </div>

                      <p>
                        <div class="form-group" id="toggle_box">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dcoordinator">Discipline Coordinator<span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <select name="disp_coordinator" class="form-control col-md-7 col-xs-12">
                              @foreach($disciplines as $discipline)
                              <option value="{{$discipline->dname}}">{{$discipline->dname}}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                      </p>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Phone No <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="phno" name="phno" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">E-mail <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="email" name="email" class="date-picker form-control col-md-7 col-xs-12" required="required" type="email">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
                          <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" name="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection
