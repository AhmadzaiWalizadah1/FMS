@extends('admin.layout')

@section('content')
<link rel="stylesheet" href="{{ asset('css/custom.css') }}">
<div class="container-fluid">
  <!-- the header of the page -->
  <h2 id="page-name" class="text-center">مدیریت کارمندان</h2>

  <!-- The first row start from here. -->
  <div class="row" >

    <!-- Creating new staff -->
    <div class="col-sm-4 col-xs-4">
      <form  action="" method="post">
        <a class="btn btn-primary"  data-toggle="modal" data-target="#new-staf"> ایجاد کارمند جدید</a>
      </div>
      <!-- end of the process -->

      <!-- Search box for searching staffs -->
      <div class="col-md-4 col-sm-6 col-xs-6" >
        <input type="text" name="number" placeholder="  را وارد نماید ID " class="form-control">
      </form>
    </div>
    <!-- end of the search box code -->

    <!-- The search button for searching purpose -->
    <div class="col-sm-2 col-xs-2" >
      <input type="submit" name="submit" value="جستجو" class="btn btn-primary">
    </div>

  </div>
  <!--end of the first row-->
  <br>
  <hr>
  <br>
  <!-- for the better layout purpose -->


  <!-- Second row start from here.. -->
  <div class="row">

    <!-- container for the table  -->
    <div class="col-xs-12 col-sm-12 col-md-12">
      <!-- the table  -->
      <div class="table-responsive">
        <br>
        <div class="table table-bordered">
          <table class="table table-hover table-bordered btn-in-table">
            <thead >
              <th class="left">شماره تلیفون</th>
              <th class="left">درجه تحصیلی</th>
              <th class="left">وظیفه</th>
              <th class="left">تخلص</th>
              <th class="left">نام پدر</th>
              <th class="left">نام</th>
              <th class="left">آی دی نمبر</th>
            </thead>
            <tbody>
              <tr>
                <td>026846273</td>
                <td>master</td>
                <td>student</td>
                <td>erkin</td>
                <td>abdul khalil</td>
                <td>muqadas</td>
                <td>95-10-16</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- end of the second row -->
  </div>

  <!-- Modal start from here.... -->
  <!-- Modal button  -->
  <div class="modal fade" id="new-staf" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <!-- the Modal div that contain all content of the Modal -->
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <!-- the Modal headaer part -->
        <div class="modal-header">

          <div class="text-center">
            <h4 class="modal-title" id="exampleModalLabel">فورمه ایجاد شقه امتحانات</h4>
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

        <div dir="rtl">
          <label for="name"> آی دی کارمند</label>
          <input type="text" id="name" value="" class="form-control" placeholder="آی دی کارمند">
        </div>

        <div dir="rtl">
          <label for="subjectname">نام</label>
          <input type="text" id="subjectname" value="" class="form-control" placeholder="نام">
        </div>

        <div dir="rtl">
          <label for="classActivity"> نام به انگلیسی</label>
          <input type="text" id="classActivity" value="" class="form-control" placeholder="نام به انگلیسی ">
        </div>

        <div dir="rtl">
          <label for="homework">تخلص</label>
          <input type="text" id="homework" value="" class="form-control" placeholder="تخلص">
        </div>

        <div dir="rtl">
          <label for="project"> تخلص به انگلیسی</label>
          <input type="text" id="project" value="" class="form-control" placeholder=" تخلص به انگلیسی ">
        </div>

        <div dir="rtl">
          <label for="midTermExam">نام پدر</label>
          <input type="text" id="midTermExam" value="" class="form-control" placeholder=" نام پدر ">
        </div>

        <div dir="rtl">
          <label for="finalExam"> درجه علمی  </label>
          <input type="text" id="finalExam" value="" class="form-control" placeholder=" درجه علمی ">
        </div>

        <div dir="rtl">
          <label for="finalExam"> درجه علمی به انگلیسی</label>
          <input type="text" id="finalExam" value="" class="form-control" placeholder=" درجه علمی به انگلیسی">
        </div>

        <div dir="rtl">
          <label for="finalExam"> وظیفه  </label>
          <input type="text" id="finalExam" value="" class="form-control" placeholder=" وظیفه">
        </div>

        <div dir="rtl">
          <label for="finalExam"> وظیفه به انگلیسی </label>
          <input type="text" id="finalExam" value="" class="form-control" placeholder=" وظیفه به اننگلیسی ">
        </div>

        <div dir="rtl">
          <label for="finalExam">شماره تماس </label>
          <input type="text" id="finalExam" value="" class="form-control" placeholder="شماره تماس ">
        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">بازگشت</button>
        <button type="submit" class="btn btn-primary">ذخیره</button>
      </div>
    </div>
  </div>
</div>
<!-- end of the Modal container -->



  <!-- Modal end in here.... -->

    </div>
  </div>  <!-- end of content row -->
</div><!-- end of content -->
</div><!-- end of main section -->






@stop
