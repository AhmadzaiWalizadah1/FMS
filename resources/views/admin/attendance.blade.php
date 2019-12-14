@extends('admin.layout')

@section('content')
<div class="container-fluid">
  <div  class="col-xs-12 col-sm-12 col-md-12">
    <!-- the header of the attendence page -->
    <h2 class="text-center">حاضری محصلین</h2>
    <br>

    <!-- first row start from here.... -->
    <div class="row " >
      <form  action="{{route('attendance_result')}}" method="post">
          <div class="col-sm-4 col-xs-4">
          <!-- The search button -->
            <button type="button" class="btn btn-primary   " data-toggle="modal" data-target="#new-staf">ایجاد حاضری جدید</button>
          </div>

        <!-- The search box -->
          <div class="col-md-4 col-sm-6 col-xs-6" >
            <input type="text" class="form-control" placeholder="برای نمایش حاضری سال را وارد نمایید">
          </div>
      <!-- end of the search box -->

          <div class=" col-sm-2 col-xs-2" >
        <!-- <button type="button" class="btn btn-primary   " data-toggle="modal" data-target="#new-attendence">ایجاد حاضری جدید</button> -->
            <input type="submit" name="submityear" value="جستجو" class="btn btn-primary"></input>
          </div>
      </form>

      </div>

    </div>
    <!-- end fo the first row of the this page-->
    <!-- here we are going to start new ssesson  -->
    <br>
    <hr>

    <!-- the second row start here.... -->
    <!-- here we are going add some more staff -->
    <!-- attendence Modal code is here -->

    <!-- Modal button  -->
    <div class="modal fade" id="new-staf" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <!-- the Modal div that contain all content of the Modal -->
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <!-- the Modal headaer part -->
          <div class="modal-header">

            <div class="text-center">
              <h4 class="modal-title" id="exampleModalLabel">فورمه ایجاد حاضری امتحانات</h4>
            </div>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- this is the body of the Modal in here we are going to put the
            necessery containt about student, student score, Home Work of studnt
            and many more usefull information
          -->

          <!-- name of student -->
          <div dir="rtl">
            <label for="name"> آی دی محصل</label>
            <input type="text" id="name" value="" class="form-control" placeholder=" آی دی محصل ">
          </div>
          <!-- subject name -->
          <div dir="rtl">
            <label for="subjectname">نام مضمون</label>
            <select class="form-control" name="subject">
                <option value="none">انتخاب</option>
               
                    {{-- @foreach($subjects as $subject)
                        <option value="{{$subject}}" > {{$subject}}</option>
                    @endforeach     --}}
                </select>
            {{-- <input type="text" id="subjectname" value="" class="form-control" placeholder="نام مضمون"> --}}
          </div>

            <!-- Month of the year -->
          <div dir="rtl">
            <label for="homework">برج</label>
            <input type="number" id="homework" value="" class="form-control" placeholder="تخلص">
          </div>
          <!-- The year -->
          <div dir="rtl">
            <label for="project"> سال </label>
            <input type="text" id="project" value="" class="form-control" placeholder=" سال را وارد کنید ">
          </div>

            <!-- The presence -->
          <div dir="rtl">
            <label for="midTermExam"> حاضری</label>
            <input type="text" id="midTermExam" value="" class="form-control" placeholder=" حاضری  ">
          </div>
          <!-- The presence -->
          <div dir="rtl">
            <label for="finalExam">  غیر حاضری  </label>
            <input type="text" id="finalExam" value="" class="form-control" placeholder="  غیر حاضری ">
          </div>


          <!-- The Footer of the Modal -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">بازگشت</button>
          <button type="submit" class="btn btn-primary">ذخیره</button>
        </div>
      </div>
    </div>
  </div>
  <!-- end of the Modal container -->
  <!-- End of the Modal code -->


      <!-- The other row starts from here... -->
        <div class='row'>
          <div class='col-md-12'>
            <form method='post' action='' class='form-inline' name='myform'>
              <div class='row'>
                <div class='col-xs-3 col-sm-3 col-md-3 col-xs-offset-1 col-sm-offset-1 col-md-offset-1' style='margin-top: 3%;' >
                  <input type='number' class='form-control' style='width:100px; text-align: center;' name='years'>

                  <div class='form-group'>
                    <select class='form-control' name='months' >

                      <option value='حمل' dir='RtL'>حمل</option>
                      <option value='ثور' dir='RtL'>ثور</option>
                      <option value='جوزا' dir='RtL'>جوزا</option>
                      <option value='سرطان' dir='RtL'>سرطان</option>
                      <option value='اسد' dir='RtL'>اسد</option>
                      <option value='سنبله' dir='RtL'>سنبله</option>
                      <option value='میزان' dir='RtL'>میزان</option>
                      <option value='عقرب' dir='RtL'>عقرب</option>
                      <option value='قوس' dir='RtL'>قوس</option>
                      <option value='جدی' dir='RtL'>جدی</option>
                      <option value='دلو' dir='RtL'>دلو</option>
                      <option value='حوت' dir='RtL'>حوت</option>

                    </select>

                  </div>
                </div>


              </div>
              <div class='row'>
                <div class='col-md-2 col-md-offset-1 ' style= 'border:1px solid rgb(39, 115, 202);
                border-radius:3%; margin-top:3%; text-align:right;'>
                <div>
                  <h4>صنف چهارم</h4>
                </div>
              </div>
              <div class='col-md-2 col-md-offset-1' style= 'border:1px solid rgb(39, 115, 202);
              border-radius:3%; margin-top:3%; text-align:right;'>
              <div>
                <h4>صنف سوم</h4>
              </div>

            </div>
            <div class='col-md-2 col-md-offset-1' style= 'border:1px solid rgb(39, 115, 202);
            border-radius:3%; margin-top:3%; text-align:right;'>
            <div>
              <h4>صنف دوم</h4>
            </div>

          </div>
          <div class='col-md-2 col-md-offset-1 ' style= 'border:1px solid rgb(39, 115, 202);
          border-radius:3%; margin-top:3%; text-align:right;'>
          <div>
            <h4>صنف اول</h4>
          </div>

        </div>
      </div>
      <div class='row'>
        <div class='col-xs-6 col-sm-6 col-md-11 col-xs-offset-1 col-sm-offset-1 col-md-offset-1' style='margin-top:7%'>

          <input type='submit' name='submit1' value='نمایش و چاپ' class='btn btn-primary '></input>
          <button type="submit" name="export_phpexcel" class="btn btn-primary " style="float: right;">ایجاد حاضری در اکسیل</button>
        </div>


      </div>
    </form>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
@stop
