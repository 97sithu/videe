<?php

namespace App\Http\Controllers;
use App\Course;
use App\Language;
use Illuminate\Http\Request;

class CourseController extends Controller
{
   public function index(){
   	 $data=Course::orderBy('id')->paginate(9);
   	 $data1=Language::all();
   	 return view('courses.index',
   	 	['courses'=>$data],
   	 	['languages'=>$data1]);
   }
   public function select($id){
   	$data12=Course::orderBy('id')->where('language_id',$id)->paginate(9);
   	$data13=Language::all();
   	return view('courses.index',[
   		'courses'=>$data12],
   		['languages'=>$data13]);
   }
   public function detail($id){
   	$data=Course::find($id);
   	return view('courses.detail',[
   		'course'=>$data]);
   }
   public function register($id){
   	$data=$id;
   	return view('courses.add',[
   		'course_id'=>$data]);
   }
}
