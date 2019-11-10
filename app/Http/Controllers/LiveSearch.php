<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LiveSearch extends Controller
{
  function index()
  {
    return view('admin.staff');
  }

  function action(Request $request)
  {
    if($request->ajax())
    {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
        $data = DB::table('staffs')
        ->where('Staff_ID', 'like', '%'.$query.'%')
        ->orWhere('Name', 'like', '%'.$query.'%')
        ->orWhere('F_Name', 'like', '%'.$query.'%')
        ->orWhere('Last_name', 'like', '%'.$query.'%')
        ->orWhere('Position', 'like', '%'.$query.'%')
        ->orWhere('Degree', 'like', '%'.$query.'%')
        ->orderBy('Staff_ID', 'desc')
        ->get();

      }
      else
      {
        $data = DB::table('staffs')
        ->orderBy('Staff_ID', 'desc')
        ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
        foreach($data as $row)
        {
          $output .= '
          <tr>
          <td>'.$row->Staff_ID.'</td>
          <td>'.$row->Name.'</td>
          <td>'.$row->F_Name.'</td>
          <td>'.$row->Last_name.'</td>
          <td>'.$row->Position.'</td>
          <td>'.$row->E_degree.'</td>
          </tr>
          ';
        }
      }
      else
      {
        $output = '
        <tr>
        <td align="center" colspan="5">No Data Found</td>
        </tr>
        ';
      }
      $data = array(
        'table_data'  => $output,
        'total_data'  => $total_row
      );

      echo json_encode($data);
    }
  }
}
