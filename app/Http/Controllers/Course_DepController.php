<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Models\Departement;
use App\Models\Course;
use DB;

class Course_DepController extends Controller
{
    // index method
    public function index()
     {
        return view('admin.subject');
    }

    public function create()
    {
        //
    }
// STORE METHOD
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
    public function show($id)
    {
        //
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
