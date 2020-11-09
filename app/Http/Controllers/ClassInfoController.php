<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\classinfo;
use App\student;
use App\teacher;
use DB;

class ClassInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allClassesDetails()
    {
      $students = student::get();
      $teachers = teacher::get();
        return view ('allclassesdetails')->with('students', $students)->with('teachers', $teachers);
    }

    public function classinfo($class)
    {
        return view ('classinfo')->with('class', $class);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function getseachedstudentsclassesinfo(Request $request)
     {
       $students = student::where('class' ,$request->dname)
       ->orwhere('s_school_id' ,$request->dname)
       ->orwhere('s_bform_id' ,$request->dname)
       ->orwhere('sname' ,$request->dname)
       ->orwhere('fname' ,$request->dname)
       ->orwhere('phno' ,$request->dname)
       ->orwhere('email' ,$request->dname)
       ->get();
       $teachers = teacher::get();
       return view ('allclassesdetails')->with('students', $students)->with('teachers', $teachers);
     }

     public function getseachedteachersclassesinfo(Request $request)
     {
       $students = student::get();
       $teachers = teacher::where('classes' , '' ,$request->dname)
       ->orwhere('courses' ,$request->dname)
       ->orwhere('tname' ,$request->dname)
       ->orwhere('phno' ,$request->dname)
       ->orwhere('email' ,$request->dname)
       ->get();
       return view ('allclassesdetails')->with('students', $students)->with('teachers', $teachers);
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
