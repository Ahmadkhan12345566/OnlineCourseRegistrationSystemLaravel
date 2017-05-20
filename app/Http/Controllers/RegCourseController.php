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
public $reg_semester_course=array();
public $genrated_offerd_courses=array();
public $offer_semster_course = array();

public function show(){
      //  return response()->json( Session::get('u_id'));

        $user = Session::get('u_id');


    //    var_dump();



        $this->student=Student::all()->where('user_id','=',$user)->first();
        $this->regcourses=RegCourse::all()->where('student_id','=',$this->student->id);

        $data= $this->regcourses;
        //$dataa=$this->offerdcourses;


//      var_dump("sadad");
        $this->Find_offerd_courses();
        //return response()->json($test);
//        $this->Check_Fail_Courses();
  //      return view('pages.regcourses', compact('data'),compact('$dataa'));

        //$json =  json_encode($this->genrated_offerd_courses);
        //var_dump($json);
    }

    public function Find_offerd_courses(){

    //var_dump("i m offered_course");
      //  $this->Check_Fail_Courses();
       $this->Find_last_Session();
       $this->Find_Offers_Courses_last_Session();
       $this->GenrateCoursesFromOfferd();
    }

    public function Check_Fail_Courses(){
      //  echo "i m check_failcourse";

        $this->offerdcourses=RegCourse::all()->where('student_id', '=', $this->student->id)->where('status_id' , '=', 2);

    }
    public function Find_last_Session(){
       $this->last_session=Semestersession::all()->last();


    }
    public function Find_Offers_Courses_last_Session(){

       $this->last_session_offerd_course=Offercourse::all()->where('semestersessions_id', '=', $this->last_session->id)->where('program_id' , '=', 1);


    }
    public function Get_All_From_Course(){

    $this->course_limit_in_semester=SemsterScourseslimit::all();
    }
    public function GenrateCoursesFromOfferd(){


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


           }


           if($conutre<$course_limit_value->semster_c_L){

               $this->offer_semster_course = null;
               $this->offer_semster_course = array();
               $this->reg_semester_course = null;
               $this->reg_semester_course = array();


               $this->offer_remning_crs_semester($course_limit_value->semseter_num);


           }
        }

    }
    public function offer_remning_crs_semester($semester){

       $this->semser_course_from_regcourses($semester);



       $this->semser_course_from_offercourses($semester);
echo " &nbsp; &nbsp;  &nbsp; &nbsp;ffercourses  <br> <br>";
$json = json_encode($this->offer_semster_course);
        var_dump($json);
echo "<br> <br>  ";
        echo " &nbsp; &nbsp;  &nbsp; &nbsp;Pre of courses ";
        foreach ($this->offer_semster_course as $offercrs) {
            $iid = $offercrs->course_id;
            $offer_code=Course::all()->where('id', '=', $iid)->first()->code;



            $check=1;

            foreach ($this->reg_semester_course as $regcrs) {
                $id = $regcrs->offer_course->course_id;
                $reg_code=Course::all()->where('id', '=', $id)->first()->code;



                if( $offer_code==$reg_code){
                    $check=$check+1;
                  break;
                }


            }

            if($check==1){
                $iid = $offercrs->course_id;
                $chekprerak=Course::all()->where('id', '=', $iid)->first()->prereq_id;





                if($chekprerak== ""){
                    // echo " i am in no prerack ";
                     array_push($this->genrated_offerd_courses, $offercrs);

                 }
                 else {
                     //echo "in else";

                     foreach ($this->regcourses as $regcrss) {
                         $id = $regcrss->offer_course->course_id;
                         $regg_crs = Course::all()->where('id', '=', $id)->first()->id;

                         //=Course::all()->where('id', '=', $id)->first()->course_id;
//$regg_status=null;
                         $regg_status = RegCourse::all()->where('id', '=', $regcrss->id)->first()->status_id;



                         // var_dump(json_encode($regg_status[0]->status_id));


                         if( $chekprerak==$regg_crs&&$regg_status==1){
echo"i am hear";
                        array_push($this->genrated_offerd_courses, $offercrs);
                         }

                     }
                 }
                }

            }
        echo" <br> Checking this <br>";
        $json = json_encode($this->genrated_offerd_courses);
        var_dump($json);

        }




    public function semser_course_from_regcourses($semester){


        foreach ($this->regcourses as $regcrs) {

            $id = $regcrs->offer_course->course_id;
            $semesterr=Course::all()->where('id', '=', $id)->first()->semester_id;
            if ($semesterr==$semester) {
                array_push($this->reg_semester_course, $regcrs);
            }
            // var_dump($conutre);

        }






    }
    public function semser_course_from_offercourses($semester){

        foreach ($this->last_session_offerd_course as $offercrs) {

            $id = $offercrs->course_id;
            $semesterr=Course::all()->where('id', '=', $id)->first()->semester_id;

            if ($semesterr==$semester) {
                array_push($this->offer_semster_course, $offercrs);
            }



        }

    }

}
