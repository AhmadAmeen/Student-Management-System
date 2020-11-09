@if(!Session::has('admin_name_session'))
<script>window.location = "adminlogin";</script>
@endif

@extends('layout.default')

@section('content')

  <link rel="stylesheet" type="text/css" href="{{ asset('public/css/checkbox-etc-css.css') }}" />

  <div class="right_col" role="main">
   <div class="clearfix"></div>
             <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
                 <div class="x_panel">
                   <div class="x_title">
                     <h2>Welcome <small>Add Courses</small></h2>
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
                    <form action="{{url('addnewcourse')}}" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                      @csrf
                      <h1 style="text-align: center; margin-down: 20px">Add Courses</h1>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dname">Discipline <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <!-- <input type="text" id="dname" name="dname" required="required" class="form-control col-md-7 col-xs-12">-->
                          <select name="dname" class="form-control col-md-7 col-xs-12">
                            @foreach($disciplines as $discipline)
                            <option value="{{$discipline->id}}">{{$discipline->dname}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cname">Courses Included <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12" style="padding: 5px">
                          <label class="b-contain">
                          	<input name="cname[]" value="Biology" type="checkbox">
                            <span>Biology</span>
                          	<div class="b-input"></div>
                          </label>
                          <label class="b-contain">
                          	<input name="cname[]" value="Maths" type="checkbox">
                            <span>Maths</span>
                          	<div class="b-input"></div>
                          </label>
                          <label class="b-contain">
                          	<input name="cname[]" value="Chemistry" type="checkbox">
                            <span>Chemistry</span>
                          	<div class="b-input"></div>
                          </label>
                          <label class="b-contain">
                          	<input name="cname[]" value="Computer" type="checkbox">
                            <span>Computer</span>
                          	<div class="b-input"></div>
                          </label>
                          <label class="b-contain">
                          	<input name="cname[]" value="Urdu & English" type="checkbox">
                            <span>Urdu & English</span>
                          	<div class="b-input"></div>
                          </label>
                          <label class="b-contain">
                          	<input name="cname[]" value="Agriculture" type="checkbox">
                            <span>Agriculture</span>
                          	<div class="b-input"></div>
                          </label>
                          <!--<input type="text" id="cname" name="cname" required="required" class="form-control col-md-7 col-xs-12">
                          <input type="checkbox" id="cname" name="cname" value="Biology">
                            <label> Biology</label>
                          <input type="checkbox" id="cname" name="cname" value="Chemistry">
                            <label for="cname"> Chemistry</label>
                          <input type="checkbox" id="cname" name="cname" value="Maths">
                            <label> Maths</label>
                          <input type="checkbox" id="cname" name="cname" value="Physics">
                            <label> Physics</label>
                          <input type="checkbox" id="cname" name="cname" value="Urdu & English">
                            <label> Urdu & English</label>
                        -->
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
