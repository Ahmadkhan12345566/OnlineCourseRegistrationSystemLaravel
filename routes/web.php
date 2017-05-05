<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Department;

/*
 * Operational Functions
 * Ready for work
 * */

### Welcome Section
Route::get('/', function () {
    return view('home.index');
});

Route::get('/home', function(){
    return view('home.index');
});
Route::get('/user', function(){
    return view('user.login');
});

Route::get('/user', function(){
    return view('pages.user');
});

Route::get('/status', function(){
    return view('pages.status');
});

Route::get('/remaks', function(){
    return view('pages.remaks');
});

Route::get('/roles', function(){
    return view('pages.roles');
});
Route::get('/regcourses', function(){
    return view('pages.regcourses');
});

Route::get('/offerdcourses', function(){
    return view('pages.offerdcourses');
});

### Regcourses Section
Route::get('regcourses', 'RegCourseController@show');


### Departments Section
Route::get('department', 'DepartmentController@show');
Route::post('department/create', 'DepartmentController@store');
Route::get('department/{id}', 'DepartmentController@showById');
Route::get('department/delete/{id}', 'DepartmentController@destroy');
Route::post('department/edit', function (\Illuminate\Http\Request $request){

    $id = $request->input('id');
    $title = $request->input('title');
    DB::table('departments')->where('id', $id)->update(array('title' => $title));
    return redirect('department')->with('alert_info', 'Department was successful Update!');

})->name('department/edit');


### Programs Section
Route::get('program', 'ProgramController@show');
Route::post('program/create', 'ProgramController@store');
Route::get('program/delete/{id}', 'ProgramController@destroy');
Route::get('program/{id}', 'ProgramController@showByDepartment');


## Course section
Route::get('course', 'CourseController@show');
Route::post('course/create', 'CourseController@store');
Route::get('course/delete/{id}', 'CourseController@destroy');
## Instructor section

Route::get('instructor', 'InstructorController@show');
Route::post('instructor/create', 'InstructorController@store');
Route::get('instructor/delete/{id}', 'InstructorController@destroy');



### SemestersessionController Section
Route::get('semestersession', 'SemestersessionController@show');
Route::post('semestersession/create', 'SemestersessionController@store');
Route::get('semestersession/delete/{id}', 'SemestersessionController@destroy');
//Route::get('semestersession', function (){
  //  return view('pages.semestersession');
//});


##StudentController
Route::get('student', 'StudentController@show');

Route::get('unset', function (){
   session_destroy();
   return "Destroy successfully";
});

Route::get('vs', function (){
    return view('pages.vs');
});






##login
Route::post('login/valid', 'LoginController@validatee');



/*
 * Testing Functions
 * Not for production
 * */





Route::get('datatest/{id}', 'DepartmentController@showById');




Route::get('datatest', function (){
    return view('datatest');
});

Route::get('getRequest', function (){
    if(Request::ajax()){
        return "success ajax request";
    }
});

