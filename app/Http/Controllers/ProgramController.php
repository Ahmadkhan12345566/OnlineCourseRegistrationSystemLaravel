<?php

namespace App\Http\Controllers;

use App\Department;
use App\Http\Requests\StoreProgramPostRequest;
use App\Instructor;
use App\Program;

class ProgramController extends Controller
{
    /**
     * Fetch all Program
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(){
        $program = Program::all();
        $department = Department::all();
        $data = array('program' => $program, 'department' => $department);
        //$title = $data['department'];
        //$title = $title[0]['id'];
        return view('pages.program', compact('data'));
        //return response()->json($data);
    }

    public function showByDepartment($id){
        $program = Program::all()->where('department_id', $id);
        $department = Department::all();
        $data = array('program' => $program, 'department' => $department);
        //$title = $data['department'];
        //$title = $title[0]['id'];
        return view('pages.program', compact('data'));
        //return response()->json($data);
    }


    /**
     * Store a new Program
     * @param StoreProgramPostRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreProgramPostRequest $request)
    {
        $program = new Program;
        $program->title = $request->input('title');
        $program->department_id = $request->input('department');
        $program->timestamps = time();
        $program->save();
        //return response()->json($program);
        return redirect('program')->with('alert_success', 'Program was successful added!');

    }


    /**
     * Update a Program
     * @param StoreProgramPostRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function edit(StoreProgramPostRequest $request, $id){

        $program = Program::find($id);
        $program->title = $request->input('title');
        $program->department_id = $request->input('department');
        $program->save();

        return redirect('department');
    }

    /**
     * Delete a program
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id){
        $program = Program::findOrFail($id);
        $program->delete();

        return redirect('program')->with('alert_danger', 'Program was successful deleted!');
    }

    /**
     * Destroy many programs
     * @param $id
     */
    public function destroyMany($id){

    }
}
