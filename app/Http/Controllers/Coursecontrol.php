<?php

namespace App\Http\Controllers;

use App\Models\branch;
use App\Models\course;
use Illuminate\Http\Request;

class Coursecontrol extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $branches= branch::all();
        return view('courseadd',compact('branches'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $course = new course;
        $course->branchid = $request->branchid;
        $course->cname=$request->cname;
        $course->save();
        return redirect('addcourse');

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $courses=course::select('branches.bfull','courses.cname')
                ->join('branches','courses.branchid','branches.id')
                ->get();
                return view('courseshow',compact('courses'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
