<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Models\Staff;
use DB;
class staffController extends Controller
{
    public function well(){
      $staff = Staff::all();
      return view('admin.staff')->with('staff',$staff);
    }
    public function index()
    {
        $staff = Staff:: all();
        return view('admin.staff')->with('staff', $staff);

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
      $staff = new Staff;
      $staff->Staff_ID = request('Staff_ID');
      $staff->Name = request('Name');
      $staff->E_Name = request('E_Name');
      $staff->Last_name = request('Last_name');
      $staff->E_last_name = request('E_last_name');
      $staff->F_Name = request('F_Name');
      $staff->Degree = request('Degree');
      $staff->E_degree = request('E_degree');
      $staff->Position = request('Position');
      $staff->E_position = request('E_position');
      $staff->Contact = request('Contact');
      $staff->save();
      return redirect('admin/staff');
    }
  // adding search method
  public function staff_search() {
<<<<<<< HEAD
      $value = Input::get('search');
      dd($value);
      // $staff = Staff::where('Staff_ID', 'LIKE', '%' . $value . '%')->limit(25)->get();
      // return view('admin.staff')->with('staff', $staff);
  }

=======
    $value = Input::get('search');
    $staff = Staff::where('Staff_ID', 'LIKE', '%' . $value . '%')->limit(25)->get();
>>>>>>> staff-branch

    return view('admin.staff') ->with('staffs', $staff);
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
