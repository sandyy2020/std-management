<?php

namespace App\Http\Controllers;

use App\Models\branch;
use App\Models\course;
use App\Models\fee;
use App\Models\student;
use Illuminate\Http\Request;
use Termwind\Components\Raw;
use Illuminate\Support\Facades\DB;

class Studentcontrol extends Controller
{
    public function index(){

    }

    public function create(){
        $courses= course::all();
        $branches= branch::all();
        return view('studentregister',compact(['courses','branches']));
    }

     public function store(Request $request){
        $student=new student;
        $student->sname=$request->sname;
        $student->fname=$request->fname;
        $student->class=$request->class;
        $student->phnum=$request->phnum;
        $student->email=$request->email;
        $student->courseid=$request->courseid;
        $student->branchid=$request->branchid;
        $student->image=$request->file('image')->getClientOriginalName();
        $student->save();
        $request->image->move(public_path('posting'),$student->image);

        return redirect('studentregister');
     }
     public function show(){
        $students= student::paginate(2);
        return view('studentdetails',compact('students'));
     }
    
     public function ajax_show(Request $request)
     {
         if($request->ajax()){
             $sort_by = $request->get('sortby');
             $sort_type = $request->get('sorttype');
             $search = $request->get('search');
             $search = str_replace(" ", "%", $search);
 
             $students = student::where('sname', 'like', '%'.$search.'%')
                           ->orWhere('fname', 'like', '%'.$search.'%')
                           ->orderBy($sort_by, $sort_type)
                           ->paginate(2);
             return view('studentdetails_ajax', compact('students'));
         }
     }

     public function edit($id){
         $students= student::find($id);
         return view('studentedit',compact('students'));
     }

     public function update(Request $request, $id){
      $student=student::find($id);
      $student->sname=$request->sname;
      $student->fname=$request->fname;
      $student->class=$request->class;
      $student->phnum=$request->phnum;
      $student->email=$request->email;
      $student->save();
      return redirect('studentdetails');
     }

     public function destroy($id){
      $student=student::find($id);
      $student->delete();
      return redirect('studentdetails');
     }
     public function courses(Request $request){
        $id= $request->id;
        $data['courses']=Course::where('branchid',$id)->get();
      //   dd($data);
        return response()->json($data);
      //   echo json_encode($data);
     }
     public function single_student(Request $request){
        $id=$request->id;
        $student=student::where(['id'=>$id])->first();
       // print_r($student);exit();
       return view('student_show',compact('student'));
     } 
     public function fee_form(Request $request){
        $id=$request->id;
        $fee=fee::where(['student_id'=>$id])->get();
        return view('feeform',compact(['fee','id']));
     }
     public function feeadd(Request $request){
      $fee=new fee;
      $id=$request->id;
      $fee->student_id=$request->id;
      $fee->amount=$request->amount;
      $fee->save();
      return redirect(url('studentfee',['id'=>$id]));
     }
}
