<?php

namespace App\Http\Controllers;

use App\Course;
use App\Department;
use App\RegCourse;
use App\Student;
use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{

    public function validatee(Request $request)
    {
        //  var_dump( $request->user_id);
        $data = Users::all()->where('user_id', $request->user_id);
        //var_dump($data);
        if ($data->isEmpty()) {
            return redirect('/')->with('invalid','Incorrect username and password!');
        }
        else
        {

            //$dataa = null;
            //  var_dump($data);
            foreach ($data as $user) {


                if ($user->password == $request->pasword) {

                    //  $dataa = $user;
                    Session::put('id', $user->user_role);
                    Session::put('u_id', $user->id);

                     if($user->user_role==1) {
                         $data= Department::all();
                       //  return redirect('department');
                        return view('pages.department', compact('data'));
                     }
                     elseif ($user->user_role==2){


                         return view('pages.offerdcourses', compact('data'));

                     }
                     elseif ($user->user_role==3){
                           $student=Student::all()->where('user_id','=',$user->id)->first();
                            $regcourses=RegCourse::all()->where('student_id','=',$student->id);
                            //regcours find of a student

                         $data= $regcourses;


                         //$cours=Course::all();
                      //  var_dump($cours);
                         //return response()->json($data);
                         $students=Student::all();

                         //return redirect('regcourses');
                         return view('pages.regcourses', compact('data'));
                         //redirect()
                         //return view('pages.regcourses', compact('data'));
                     }
                }
                else
                    return view('Home.index', compact('data'));

            }        //$dataa=\\$data->where('password ',$request->pasword);


            //var_dump($dataa);
        }
    }
}
