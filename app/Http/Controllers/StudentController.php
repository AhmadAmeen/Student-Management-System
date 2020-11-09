<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
use Illuminate\Facades\Response;
use Image;

class StudentController extends Controller
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

    public function datasubmitted()
    {
       return redirect ('studentregister');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('studentregister');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
      $request->validate([
        'simg' => 'required|image|max:2048'
        ]);

        $student = new student;

        //$image_file = $request->file('simg');
        //$image_resize = Image::make($image_file)->encode('jpg');
        //$image = Image::make($image_file);
        //$student->simg = Response::make($image->encode('jpeg'));

        $image_file = $request->file('simg');
        $image_resize = Image::make($image_file)->resize(150, 150)->encode('jpg');
        $student->simg = $image_resize;

        //$img = Image::make($request->file('simg')->getRealPath());
        //echo($img);
        //$student->simg = $img;

//        if ($request->file('simg')->isValid()) {
//                $simg = $request->file('simg');
//                $filename = time() . '.' . $simg->getClientOriginalExtension();
//                $student->simg = Image::make($simg)->resize(300, 300)->save(url('resources/'.$filename));
//        }

        //$file = Input::file('simg');
        //$img = Image::make($file)
        //    ->resize(320, 240)
        //    ->save('public/uploads/', $file->getClientOriginalName());
        //$student->simg = $img;

        $student->s_school_id = $request->s_school_id;
        $student->s_bform_id = $request->s_bform_id;
        $student->sname = $request->sname;
        $student->fname = $request->fname;
        $student->class = $request->class;
        $student->phno = $request->phno;
        $student->email = $request->email;
        $student->save();
        return redirect ('studentregistrationform');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
      $students = student::paginate(5);
      return view ('showstudents')->with('students', $students);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
      $student = student::find($id);
      return view ('editingstudent')->with('student', $student);
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     **/

     public function update (Request $request, $id)
     {
        $student = student::find($id);
        if($request->file('simg')) {
          $image_file = $request->file('simg');
          $image_resize = Image::make($image_file)->resize(150, 150)->encode('jpg');
          $student->simg = $image_resize;
        }
        $student->s_school_id = $request->s_school_id;
        $student->s_bform_id = $request->s_bform_id;
        $student->sname = $request->sname;
        $student->fname = $request->fname;
        $student->class = $request->class;
        $student->phno = $request->phno;
        $student->email = $request->email;
        $student->save();
        return redirect('showstudents');
     }

    /**
     * Remove the specified resource from storage.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete($id)
    {
        $student = student::find($id);
        $student->delete();
        return redirect('showstudents');
    }
}
