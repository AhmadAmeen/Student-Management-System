<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\teacher;
use App\discipline;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $disciplines = discipline::get();
      $courses = array("Maths", "English", "Urdu", "Agriculture", "Biology", "Pyhsics", "Chemistry", "Pak Studies");
      return view ('addteacher')->with('courses', $courses)->with('disciplines', $disciplines);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $teacher = new teacher;
      $teacher->tname = $request->tname;
      $teacher->classes = implode(', ', $request->classes);
      $teacher->courses = implode(', ', $request->courses);
      if($request->iscoordinator == "TRUE") {
        $teacher->iscoordinator = $request->iscoordinator;
        $teacher->disp_coordinator = $request->disp_coordinator;
        } else {
        $teacher->iscoordinator = "FALSE";
        $teacher->disp_coordinator = "";
        }
      $teacher->phno = $request->phno;
      $teacher->email = $request->email;
      $teacher->save();
      return redirect('addteacher');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
      $teachers = teacher::get();
      return view('viewteachers')->with('teachers', $teachers);
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
    public function delete($id)
    {
        $teacher = teacher::find($id);
        $teacher->delete();
        return redirect ('viewteachers');
    }
}
