<?php

namespace App\Http\Controllers;

use App\Department;
use App\Instructor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InstructorController extends Controller
{
    /**
     * Fetch all instructors
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(){
        $department = Department::all();
        $instructor = Instructor::all();

        $data = array('instructor' =>$instructor,'department'=>$department );
        // return response()->json($data);

        return view('pages.instructor', compact('data'));
    }

    /**
     * Add Instructor
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function store(Request $request)
    {
        $instructor = new Instructor;
        $instructor->name= $request->input('title');
        $instructor->department_id = $request->input('department');
        $instructor->instructor_id = $request->input('instructoer_id');
        $instructor->user_id=$request->input('user_id');
        $instructor->timestamps = time();
        $instructor->save();
        //return response()->json($instructor);
        return redirect('instructor')->with('alert_success', 'Instructor was successful added!');

    }

    /**
     * Delete instructor
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id){
        $instructor=Instructor::findorFail($id);
        $instructor->delete();

        //$program = Program::findOrFail($id);
        //$program->delete();

        return redirect('instructor')->with('alert_danger', 'Instructor was successful deleted!');
    }




}
