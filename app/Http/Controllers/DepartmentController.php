<?php

namespace App\Http\Controllers;

use App\Course;
use App\Department;
use App\Http\Requests\StoreDepartmentPostRequest;
use App\Program;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Fetch all Departments
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(){
        $data = Department::all();

        return view('pages.department', compact('data'));
    }


    public function showById($id){
        $data = Department::findOrFail($id);

        return response()->json($data);
    }



    /**
     * Store a new department
     * @param StoreDepartmentPostRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreDepartmentPostRequest $request)
    {
        $department = new Department;
        $department->title = $request->input('title');
        $department->timestamps = time();
        $department->save();

        return redirect('department')->with('alert_success', 'Department was successful added!');

    }


    /**
     * Update a Department
     * @param StoreDepartmentPostRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function edit(StoreDepartmentPostRequest $request){

    }

    /**
     * Delete a department
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id){
        Program::where('department_id', '=', $id)->delete();
        //Course::where('department_id', '=', $id)->delete();
        $department = Department::findOrFail($id);
        $department->delete();


        return redirect('department')->with('alert_danger', 'Department was successful deleted!');
    }
}
