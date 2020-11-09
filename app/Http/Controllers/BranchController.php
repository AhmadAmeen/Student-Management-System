<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\branch;

class BranchController extends Controller
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

    public function add(Request $request)
    {
      $branch = new branch;
      $branch->bname = $request->bname;
      $branch->baddress = $request->baddress;
      $branch->brevenue = $request->brevenue;
      $branch->save();
        return redirect('addbranch');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addbranch');
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
    public function show()
    {
      $branches = branch::paginate(5);
      return view('showbranch')->with('branches', $branches);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $branch = branch::find($id);
      return view ('editbranch')->with('branch', $branch);
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
        $branch = branch::find($id);
        $branch->bname = $request->bname;
        $branch->baddress = $request->baddress;
        $branch->brevenue = $request->brevenue;
        $branch->update();
        return redirect('showbranch');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $branch = branch::find($id);
        $branch->delete();
        return redirect('showbranch');
    }
}
