<?php

namespace App\Http\Controllers;

use App\Program;
use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{


    /**
     * Fetch all student
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(){
        $student = Student::all();
        $program = Program::all();

        $data = array('student' =>$student,'program'=>$program );
        // return response()->json($data);

        return view('pages.student', compact('data'));
    }
}
