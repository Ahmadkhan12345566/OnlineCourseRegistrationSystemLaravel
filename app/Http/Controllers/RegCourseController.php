<?php

namespace App\Http\Controllers;

use App\RegCourse;
use App\Statuse;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
Session::start();
class RegCourseController extends Controller
{
    //


    public function show(){
      //  return response()->json( Session::get('u_id'));

        $user = Session::get('u_id');


    //    var_dump();



        $student=Student::all()->where('user_id','=',$user)->first();
        $regcourses=RegCourse::all()->where('student_id','=',$student->id);

        $data= $regcourses;
        $test=Statuse::all();


        //return response()->json($test);

        return view('pages.regcourses', compact('data'));


    }





}
