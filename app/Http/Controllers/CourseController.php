<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\course;
use App\discipline;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function addnewcourse(Request $request)
    {
      $course = new course;
      $course->branch_id = $request->dname;
      $len = count($request->cname);
      $str = $request->cname[0];
      for($i = 1; $i < $len; $i++) {
        $str = $str . ", " . $request->cname[$i];
      }
      $course->cname = $str;
      $course->save();
      return redirect('addcourse');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $disciplines = discipline::get();
      return view ('addcourse')->with('disciplines', $disciplines);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /**
     * Display the specified resource.
     *
     * @param  \App\course  $course
     * @return \Illuminate\Http\Response
     */

    public function show(course $course)
    {
        $courses = course::select('disciplines.dname', 'courses.cname', 'courses.id')
        ->join('disciplines', 'courses.branch_id', 'disciplines.id')
        ->get();
        return view('viewcourses')->with('courses', $courses);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\course  $course
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $course = course::find($id);
        $course->delete();
        return redirect ('viewcourses');
    }
}
