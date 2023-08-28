<?php

namespace App\Http\Controllers;

use App\Models\branch;
use Illuminate\Http\Request;

class Branchcontrol extends Controller
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
        return view('addbranch');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $branch= new branch;
        $branch->bsort=$request->bsort;
        $branch->bfull=$request->bfull;
        $branch->save();
        return redirect('addbranch');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $branches=branch::paginate(2);
        return view('branchdetails',compact('branches'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $branches=branch::find($id);
        return view('branchedit',compact('branches'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $branch=branch::find($id);
        $branch->bsort=$request->bsort;
        $branch->bfull=$request->bfull;
        $branch->save();
        return redirect('branchshow');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $branch=branch::find($id);
        $branch->delete();
        return redirect('branchshow');
    }
}
