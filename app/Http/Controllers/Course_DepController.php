<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Models\Department;
use App\Models\Course;
use DB;

class Course_DepController extends Controller
{
    // index method
    public function index()
     {
        $dept = Department::all();
        return view('admin.subject')->with('dept', $dept);
    }

    public function create()
    {
        //
    }
    // store method
    public function store(Request $request)
    {
      // getting the data from the form and store it into database
      $course = new Course;
      $course->Title = request('Title');
      $course->E_title = request('E_title');
      $course->Credits = request('Credits');
      $course->Semester = request('Semester');
      $course->D_ID = request('D_ID');
      $course->save();
      return redirect('admin/subject');
    }
    // department 
    public function departmentDetials(Request $request){
        $department = new Department;
        $department->Title = request('dTtitle');
        $department ->E_title = request('dE_title');
        $department ->save();
        return redirect('admin/subject');
    }


    public function show($id)
    {
        $dept = Department::all();
        dd($dept);   
     }

    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
