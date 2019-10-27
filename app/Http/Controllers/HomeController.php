<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function kankor(){

      return View('admin.kankor');
    }

    public function exam_result(){
      return view('admin.exam_result');
    }
    public function kankorForm(){
      return view('admin.kankorForm');
    }
    public function sawaneh(){
      return view('admin.sawaneh');
    }
    public function sawanehForm(){
      return view('admin.sawanehForm');
    }
    public function subject(){
      return view('admin.subject');
    }
    public function semister_result(){
      return view('admin.semister_result');
    }

    public function transcript(){
      return view('admin.transcript');
    }
    public function transcript_dari(){
      return view('admin.transcript_dari');
    }
    public function transcript_english(){
      return view('admin.transcript_english');
    }
    public function attendance(){
      return view('admin.attendance');
    }
}
