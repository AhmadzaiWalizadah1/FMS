<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Models\Attendance;
use DB;
class Attendance_Controller extends Controller
{
    public function well(){
      $attendance = Attendance::all();
      return view('admin.attendance')->with('attendance',$attendance);
    }
    public function index()
    {

      $attendance = Attendance::all();
        return view('admin.attendance')->with('attendance', $attendance);

    }
  // CREATE METHOD
    public function create()
    {
        //
    }
    // STORE METHOD
    public function store(Request $request)
    {

      // getting the data from the form and store it into database
      $attendance = new Attendance;
      $attendance->S_ID = request('S_ID');
      $attendance->C_ID = request('C_ID');
      $attendance->Month = request('Month');
      $attendance->Year = request('Year');
      $attendance->Present = request('Present');
      $attendance->Absent = request('Absent');
      $attendance->comment = request('comment');

      $attendance->save();
      return redirect('admin/attendance');
    }
  // adding search method
  public function attendance_search() {
    $value = Input::get('search');

    $attendance = Attendance::where('Year', '=', $value )->where('Semester', '=', '[7,8]' )->limit(25)->get();
   
    return view('admin.attendance') ->with('attendance', $attendance);

  }

//    SHOW METHOD
    public function show($id)
    {

    }
    // ACTION EMTHOD FOR AJAX SEARCH
    public function action(){



    }
//  EDIT METHOD
    public function edit($id)
    {
        //
    }
//  UPDATE METHOD
    public function update(Request $request, $id)
    {
        //
    }

//  DESTROY METHOD
    public function destroy($id)
    {

    }
  }
?>
