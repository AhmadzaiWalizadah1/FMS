<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\models\StudentInfo;



class Sawaneh_ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $students =  StudentInfo::all();
        return view('admin.sawaneh',compact("students"))

      //
      // return view('admin.sawaneh',compact($students));

    }

// search students
public function student_search() {
    // $value = Input::get('search');
    // $students = StudentInfo::where('S_ID', 'LIKE', '%' . $value . '%')->limit(25)->get();

    return view('admin.sawaneh');
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



      $kankor_result = StudentInfo::create([
          'S_ID' => $request->S_ID,
          'E_name'    => $request->E_name,
          'E_f_name ' => $request->E_f_name,
          'E_faculty'       => $request->E_faculty,
          'Birth_date '   => $request->Birth_date,
          'E_Birth_place '    => $request->E_Birth_place,
          'Native_language'  =>  $request->Native_language ,
          'NID_page_number '  =>  $request->NID_page_number,
          'NID_Volume_number'  =>  $request->NID_Volume_number ,
          'NID_sabt_number '  =>  $request->NID_sabt_number ,
          'NID_general_number'  =>  $request->NID_general_number ,
          'Marital_status '  =>  $request->Marital_status   ,
          'Contact '  =>  $request->Contact ,
          'Comments '  =>  $request->Comments ,
          'S_image_name  '  =>  $request->S_image_name ,
          'Native_village '  =>  $request->Native_village ,
          'Native_district  '  =>  $request->Native_district   ,
          'Native_province  '  =>  $request->Native_province ,
          'e_native_province '  =>  $request->e_native_province ,
          'Currect_village  '  =>  $request->Currect_village   ,
          'Current_district  '  =>  $request->Current_district ,
          'Current_province  '  =>  $request->Current_province ,
          'Admission_year   '  =>  $request->Admission_year ,
          'Father_job  '  =>  $request->Father_job ,
          'Father_work_location   '  =>  $request->Father_work_location    ,
          'Uncle_name   '  =>  $request->Uncle_name  ,
          'Uncle_job  '  =>  $request->Uncle_job  ,
          'Uncle_work_location  '  =>  $request->Uncle_work_location  ,
          'm_name   '  =>  $request->m_name  ,
          'm_work  '  =>  $request->m_work  ,
          'm_work_location   '  =>  $request->m_work_location    ,
          'b_name   '  =>  $request->b_name  ,

          'b_work  '  =>  $request->b_work  ,
          'b_work_location   '  =>  $request->b_work_location    ,
          'Semester   '  =>  $request->Semester ,
      ]);



      return redirect()->route('sawanehForm') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
