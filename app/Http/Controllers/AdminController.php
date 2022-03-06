<?php

namespace App\Http\Controllers;
use App\Course;
use App\Language;
use App\Attendent;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function showcourses(){
   	 $data=Course::orderBy('id')->paginate(5);
   	 $data1=Course::count();
   	 return view('/courses/admin/showcourses',[
   	 	'courses'=>$data],
   	 	['count'=>$data1]);
   }
   public function courseAdd(){
   	$data=Language::All();
   	return view('/courses/admin/courseAdd',[
   		'languages'=>$data]);
   }
   public function addCourses(){
   	$course=new Course;
   	$course->name=request()->name;
   	$course->group=request()->group;
   	$course->lecturer=request()->Lecturer;
   	$course->language_id=request()->language_id;
   	$course->start_date=request()->start_date;
   	$course->remark=request()->remark;
   	$course->user_id=rand(1,2);
   	$course->save();
   	return redirect('/courses/admin/showcourses');

   }
   public function courseEdit($id){
   	$data=Course::find($id);
   	$data1=Language::all();
   	return view('/courses/admin/courseUpdate',
   		['courses'=>$data],
   	 	['languages'=>$data1]);
   		
   }
   public function editCourses($id){
   	$course=Course::find($id);
   	$course->name=request()->name;
   	$course->group=request()->group;
   	$course->lecturer=request()->Lecturer;
   	$course->language_id=request()->language_id;
   	$course->start_date=request()->start_date;
   	$course->remark=request()->remark;
   	$course->user_id=rand(1,2);
   	$course->save();
    return redirect('/courses/admin/showcourses');

   }
   public function courseDelete($id){
   	$course=Course::find($id);
   	$course->delete();
   	return redirect('/courses/admin/showcourses');
   }
   public function showAttendents(){
   	$attendent=Attendent::orderBy('id')->paginate(9);
   	return view('/courses/admin/showAttendents',[
   		'attendents'=>$attendent]);
   }
   public function addAttendent(){
   	$data=Course::all();
   	return view('/courses/admin/attendentAdd',[
   		'courses'=>$data]);
   }
   public function attendentAdd(){
  
   		$attendent=new Attendent;
		$attendent->name=request()->name;
		$attendent->phone_no=request()->phone_no;
		$attendent->email=request()->email;
		$attendent->address=request()->address;
		$attendent->course_id=request()->course_id;
		$attendent->save();
		return redirect('/courses/admin/showattendents');
   }
   public function attendentEdit($id){
   	$data=Attendent::find($id);
   	$data1=Course::all();
   	return view('/courses/admin/attendentUpdate',[
   		'attendents'=>$data],
   		['courses'=>$data1]);
   }
   public function editAttendents($id){
   	$attendent=Attendent::find($id);
   	$attendent->name=request()->name;
		$attendent->phone_no=request()->phone_no;
		$attendent->email=request()->email;
		$attendent->address=request()->address;
		$attendent->course_id=request()->course_id;
		$attendent->save();
		return redirect('/courses/admin/showattendents');
   }
   public function attendentDelete($id){
   	$attendent=Attendent::find($id);
   	$attendent->delete();
   	return redirect('/courses/admin/showattendents');
   }
   public function showlanguages(){
   	$data=Language::orderBy('id')->paginate(10);
   	return view('/courses/admin/showlanguages',[
   		'languages'=>$data]);
   }
   public function languageAdd(){
   	return view('/courses/admin/languageAdd');
   }
   public function addLanguages(){
   	$language=new Language;
   	$language->name=request()->name;
   	$language->save();
   	return redirect('/courses/admin/showlanguages');
   }
   public function languageEdit($id){
   	$data=Language::find($id);
   	return view('/courses/admin/languageEdit',[
   		'languages'=>$data]);
   }
   public function editLanguage($id){
   	$language=Language::find($id);
   	$language->name=request()->name;
   	$language->save();
   	return redirect('/courses/admin/showlanguages');
   }
   public function languageDelete($id){
   	$language=Language::find($id);
   	$language->delete();
   	return redirect('/courses/admin/showlanguages');
   }
}
