<?php

namespace App\Http\Controllers;
use App\Models\ExamResult;
use DB;
use Illuminate\Http\Request;

class examResultController extends Controller
{
     // index function
    public function index()
    {
       return veiw('admin.exam_result');
    }
    // create function
    public function create()
    {
        //
    }
    // store function
    public function store(Request $request)
    {

    }

    // show function
    public function show($id)
    {
        //
    }
    // edit function
    public function edit($id)
    {
        //
    }

    // update function
    public function update(Request $request, $id)
    {
        //
    }
    // destroy function
    public function destroy($id)
    {
        //
    }
}
