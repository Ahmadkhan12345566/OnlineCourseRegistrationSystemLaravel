<?php

namespace App\Http\Controllers;

use App\Course;
use App\Instructor;
use App\Program;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{

    /**
     * Fetch all Courses
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(){
        $course = Course::all();
        $instructor =Instructor::all();
        $program = Program::all();
        $data = array('course' =>  $course,'program' =>  $program, 'instructor' =>$instructor );
       // return response()->json($data);

        return view('pages.course', compact('data'));
    }

    /**
     * Add the course
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $course = new Course();
        $course->title = $request->input('title');
        $course->code = $request->input('code');
        $course->credit_hours = $request->input('credit_hours');
        $course->program_id = $request->input('program');
        $course->semester_id= $request->input('semester_id');
        $course->timestamps = time();
       $course->save();
        //return response()->json($course);
        return redirect('course')->with('alert_success', 'Course was successful added!');

    }

    /**
     *  Delete the Course
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id){
        $course=Course::findorFail($id);
        $course->delete();

        //$program = Program::findOrFail($id);
        //$program->delete();

        return redirect('course')->with('alert_danger', 'Course was successful deleted!');
    }


}
