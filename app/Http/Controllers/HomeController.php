<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Course;
use App\Attendent;
use App\Language;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data=Course::count();
        $data1=Attendent::count();
        $data4=Language::count();
        $data3=Language::count();
        return view('/courses/admin/index',[
            'courses'=>$data],
            ['attendents'=>$data],
            ['abc'=>$data4],
            ['language'=>$data]);}
}
