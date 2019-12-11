

<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\models\StudentInfo;
use DB;


class Sawaneh_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function well(){
       $students =  StudentInfo::all();
       return view('admin.sawaneh')->with('sawaneh',$students);
     }

    public function index()
    {
      $students =  StudentInfo::all();
      // return view('admin.sawaneh', compact('students'));
      return view('admin.sawaneh',with('sawaneh', $students));
    }
// search students
public function sawaneh_search() {
    $value = Input::get('search');
    $students = StudentInfo::where('S_ID', 'LIKE', '%' . $value . '%')->limit(25)->get();

    return view('admin.sawaneh') ->with('sawaneh',$students);
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











    // STORE METHOD
    public function store(Request $request)
    {



      $kankor_result = StudentInfo::create([
          'k_id' => $request->k_id,
          'name'    => $request->name,
          'f_name' => $request->f_name,
          'gf_name'       => $request->gf_name,
          'last_name'   => $request->last_name,
          'school'    => $request->school,
          'e_school'  =>  $request->e_school ,
          'g_year'  =>  $request->g_year,
          'k_exam_year'  =>  $request->k_exam_year ,
          'kankor_score'  =>  $request->kankor_score ,
          'faculty'  =>  $request->faculty ,
          'province'  =>  $request->province  ,
          'gender'  =>  $request->gender ,
      ]);



      return redirect()->route('sawanehForm') ;
    }













    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $std = new StudentInf;
      $std ->K_ID = $request('k_id');
      $std ->save();
        return redirect('admin/sawaneh');
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
