<?php

namespace App\Http\Controllers;

use App\Semestersession;
use Illuminate\Http\Request;

class SemestersessionController extends Controller
{


    //

    public function show(){
        $data = Semestersession::all();

        return view('pages.semestersession', compact('data'));
    }



    public function store(Request  $request)
    {
        $semestersession = new Semestersession();
        $semestersession->title = $request->input('name');


        $semestersession->timestamps = time();
      //  return response()->json($semestersession);
        $semestersession->save();

        return redirect('semestersession')->with('alert_success', 'Semestersession was successful added!');

    }



    public function destroy($id){
        $semestersession = Semestersession::findOrFail($id);
        //$programs = Program::destroy($id);
        $semestersession->delete();

        return redirect('semestersession')->with('alert_danger', 'Semestersession was successful deleted!');
    }
}
