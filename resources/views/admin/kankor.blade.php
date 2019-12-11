@extends('admin.layout')

@section('content')

  <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
  
<div class="container-fluid">
<h2 style="text-align:right">لیست نتایج کانکور</h2>
<br>

<div class="row " >
  <div class="dleft">
    <form  action="{{route('student_search')}}" method="GET">

      <button type="submit" name="button" class="btn btn-primary">جستجو</button>

    </div>
    <div class="col-md-4 dleft" >

      <input type="text" name="search" placeholder="  را وارد نماید ID " class="form-control" style="text-align:right">

    </form>

  </div>

  <div class="dright" >
    <a href="{{route('kankorForm')}}" class="btn btn-primary">ایجاد جدید</a>
  </div>

</div>
  <!-- Create a form to input data-->
<!--  END OF THE SEARCH FIELD -->

</div>


<hr>
<br><br>
<!-- <hr style="border:1px solid blue;"> -->
<div class="table table-bordered" style="float:right;">
   <table class="table table-hover table-bordered">
 						<thead >
 							<tr >
                                 <th>سوانح</th>
 								<th >جنسیت</th>
 								<th>ولایت</th>
 								<th>نتیجه</th>
 								<th>نمره کانکور</th>
                                 <th>سال اخذ کانکور</th>
                                 <th>سال فراغت</th>
 								<th>مکتب</th>
 								<th>تخلص</th>
                                 <th>نام پدر کلان</th>
 								<th>نام پدر</th>
 								<th>نام</th>
 								<th>Kankor ID</t>

 							</tr>
 						</thead>

             <tbody>



                 @foreach( $students as $student)

                  <tr>
                    <td></td>
                    <td>{{$student->gender}}</td>
                    <td>{{$student->province}}</td>
                    <td>{{$student->faculty}}</td>
                    <td>{{$student->kankor_score}}</td>
                    <td>{{$student->k_exam_year}}</td>
                    <td>{{$student->g_year}}</td>
                    <td>{{$student->school}}</td>
                    <td>{{$student->last_name}}</td>
                    <td>{{$student->gf_name}}</td>
                    <td>{{$student->f_name}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->k_id}}</td>

                     <tr>
                 @endforeach








             </tbody>
 					</table>
        </div>
</div>


</div>
@stop
