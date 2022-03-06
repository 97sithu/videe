<?php

namespace App\Http\Controllers;
use App\Language;
use App\Course;
use App\Attendent;
use Illuminate\Http\Request;

class AttendentController extends Controller
{
	public function save(){
		$attendent=new Attendent;
		$attendent->name=request()->name;
		$attendent->phone_no=request()->phone_no;
		$attendent->email=request()->email;
		$attendent->address=request()->address;
		$attendent->course_id=request()->course_id;
		$attendent->save();
		/*return redirect('/courses');*/
		$data=Course::orderBy('id')->paginate(9);
   	 	$data1=Language::all();
   	 	return view('courses.index',
   	 	['courses'=>$data],
   	 	['languages'=>$data1]);
	}
}
