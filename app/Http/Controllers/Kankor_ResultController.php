<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\models\KankorList;



class Kankor_ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $students =  KankorList::all();



      return view('admin.kankor')->with('students', $students);

    }

// search students
public function student_search() {
    $value = Input::get('search');
    $students = KankorList::where('k_id', 'LIKE', '%' . $value . '%')->limit(25)->get();

    return view('admin.kankor') ->with('students', $students);
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



      $kankor_result = KankorList::create([
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



      return redirect()->route('kankorForm') ;
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
