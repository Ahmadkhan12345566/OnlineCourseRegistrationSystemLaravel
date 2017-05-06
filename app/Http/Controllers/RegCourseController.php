<?php

namespace App\Http\Controllers;

use App\Course;
use App\Offercourse;
use App\RegCourse;
use App\Semestersession;
use App\SemsterScourseslimit;
use App\Statuse;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
Session::start();
class RegCourseController extends Controller
{
    //
public $student;
public $regcourses;
public $offerdcourses;
public $last_session;
public $last_session_offerd_course;
public $course_limit_in_semester;
public $reg_semester_course;
public $offer_semster_course;
    public function show(){
      //  return response()->json( Session::get('u_id'));

        $user = Session::get('u_id');


    //    var_dump();



        $this->student=Student::all()->where('user_id','=',$user)->first();
        $this->regcourses=RegCourse::all()->where('student_id','=',$this->student->id);

        $data= $this->regcourses;
        $test=Statuse::all();

        $this->Find_offerd_courses();
        return response()->json($this->course_limit_in_semester);

        //return view('pages.regcourses', compact('data'));


    }

    public function Find_offerd_courses(){
        $this->Check_Fail_Courses();
        $this->Find_last_Session();
        $this->GenrateCoursesFromOfferd();
    }

    public function Check_Fail_Courses(){

        $this->offerdcourses=RegCourse::all()->where('student_id', '=', $this->student->id)->where('status_id' , '=', 2);

    }
    public function Find_last_Session(){
       $this->last_session=Semestersession::all()->last();
        $this->Find_Offers_Courses_last_Session();

    }
    public function Find_Offers_Courses_last_Session(){

       $this->last_session_offerd_course=Offercourse::all()->where('semestersessions_id', '=', $this->last_session->id)->where('program_id' , '=', 1);


    }
    public function Get_All_From_Course(){

    $this->course_limit_in_semester=SemsterScourseslimit::all();
    }
    public function GenrateCoursesFromOfferd(){

        //$this->last_session_offerd_course=Offercourse::all()->where('semestersessions_id', '=', $this->last_session->id)->where('program_id' , '=', 1);
        $this->Get_All_From_Course();
        foreach ($this->course_limit_in_semester as $course_limit_value) {
            $conutre=0;
            //$id = $key->offer_course->course_id;
            //echo \App\Course::all()->where('id', '=', $id)->first()->code;
           foreach ($this->regcourses as $regcrs) {

               $id = $regcrs->offer_course->course_id;
               $semester=Course::all()->where('id', '=', $id)->first()->semester_id;
               if ($semester==$course_limit_value->semseter_num) {
                   $conutre=$conutre+1;
               }
               var_dump($conutre);
           }
           if($conutre<=$course_limit_value->semster_c_L){
             //
               offer_remning_crs_semester($course_limit_value->semseter_num);

           }
        }

    }
    public function offer_remning_crs_semester($semester){

  //      semser_course_from_regcourses($semester);
       semser_course_from_offercourses($semester);
    }

    public function semser_course_from_regcourses($semester){
      //  $this->reg_semester_course=RegCourse::all()->where('semestersessions_id', '=', $this->last_session->id)->where('program_id' , '=', 1);
        // $this->regcourses
        $id = $this->regcourses->offer_course->course_id;
//        $semester=Course::all()->where('id', '=', $id)->semester_id;

    }
    public function semser_course_from_offercourses($semester){

        foreach ($this->last_session_offerd_course as $offercrs) {

            $id = $offercrs->course_id;
            $semesterr=Course::all()->where('id', '=', $id)->first()->semester_id;
            if ($semesterr==$semester) {
               $this->offer_semster_course=$this->offer_semster_course+ $offercrs;
            }
        }
    }

}
