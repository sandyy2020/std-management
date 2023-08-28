<?php

use App\Http\Controllers\Admincontrol;
use App\Http\Controllers\Branchcontrol;
use App\Http\Controllers\Coursecontrol;
use App\Http\Controllers\Studentcontrol;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('loginpage',[Admincontrol::class,'adminlogin']);
Route::post('islogin',[Admincontrol::class,'adminloged']);
Route::get('dashboard',[Admincontrol::class,'dashboard']);
Route::get('studentregister',[Studentcontrol::class,'create']);
Route::post('studentstore',[Studentcontrol::class,'store']);
Route::get('studentdetails',[Studentcontrol::class,'show']);
Route::get('studentdetails-ajax',[Studentcontrol::class,'ajax_show']);
Route::get('/studentedit/{id}',[Studentcontrol::class,'edit']);
Route::post('/studentupdate/{id}',[Studentcontrol::class,'update']);
Route::get('/studentdelete/{id}',[Studentcontrol::class,'destroy']);
Route::get('/singlestudent/{id}',[Studentcontrol::class,'single_student']);
Route::get('/studentfee/{id}',[Studentcontrol::class,'fee_form']);
Route::post('fee-add',[Studentcontrol::class,'feeadd']);


Route::post('student/courses',[Studentcontrol::class,'courses']);
Route::get('addbranch',[Branchcontrol::class,'create']);
Route::post('branchstore',[Branchcontrol::class,'store']);
Route::get('branchshow',[Branchcontrol::class,'show']);
Route::get('/branchedit/{id}',[Branchcontrol::class,'edit']);
Route::post('/branchupdate/{id}',[Branchcontrol::class,'update']);
Route::get('/branchdelete/{id}',[Branchcontrol::class,'destroy']);

Route::get('addcourse',[Coursecontrol::class,'create']);
Route::post('coursestore',[Coursecontrol::class,'store']);
Route::get('courseshow',[Coursecontrol::class,'show']);
Route::get('/courseedit/{id}',[Coursecontrol::class,'edit']);
Route::post('/courseupdate/{id}',[Coursecontrol::class,'update']);
Route::get('/coursedelete/{id}',[Coursecontrol::class,'destroy']);