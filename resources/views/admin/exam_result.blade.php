@extends('admin.layout')

@section('content')
<link rel="stylesheet" href="{{asset('css/custom.css')}}">
<!--The overall Container-->
<div class="container-fluid">
  <!--create the title of the exam_result page-->
  <h1 class="text-center">شقه امتحانات</h1>
  <hr>

  <div class="col-md-4 col-sm-12 col-xs-12">

    <!-- Create a form to input data-->
    <form class="" action="#" method="post">
      <!-- the first column -->
      <div class="col-md-10 col-sm-10 col-xs-10">
        <input type="text" name="search" placeholder="برای نمایش شقه سال را وارد کنید" class="form-control">
      </div>
      <!-- the second column -->
      <div class="col-md-2 col-sm-2 col-xs-2">
        <input type="submit" name="submit" value="جستجو" class="btn btn-primary">
      </div>
    </form>
</div>
<!-- the Modal code is here -->
<!-- the modal contains information about students, exam, homework and etc. -->
<!-- Button trigger modal -->
<!-- Modal -->

<!-- form -->
<form class="" action="index.html" method="post">

  <!-- Modal button  -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
          <label for="name">آی دی محصل</label>
          <input type="text" id="name" value="" class="form-control" placeholder="آی دی محصل را وارد کنید">
        </div>

        <div dir="rtl">
          <label for="name">نام مضمون</label>
          <input type="text" id="name" value="" class="form-control" placeholder="آی دی محصل را وارد کنید">
        </div>

        <div dir="rtl">
          <label for="subjectname">سال</label>
          <input type="text" id="subjectname" value="" class="form-control" placeholder="سال را وارد کنید">
        </div>

        <div dir="rtl">
          <label for="classActivity">فعالیت صنفی</label>
          <input type="text" id="classActivity" value="" class="form-control" placeholder="فعالیت صنفی محصل">
        </div>

        <div dir="rtl">
          <label for="homework">کارخانگی</label>
          <input type="text" id="homework" value="" class="form-control" placeholder="نمرات کار خانگی">
        </div>

        <div dir="rtl">
          <label for="project"> پروژه</label>
          <input type="text" id="project" value="" class="form-control" placeholder=" نمرات ّّپروژه">
        </div>

        <div dir="rtl">
          <label for="midTermExam">امتحان وسط سمستر</label>
          <input type="text" id="midTermExam" value="" class="form-control" placeholder=" نمرات وسط سمستر">
        </div>

        <div dir="rtl">
          <label for="finalExam"> امتاحان ختم سمستر</label>
          <input type="text" id="finalExam" value="" class="form-control" placeholder=" نمرات ختم سمستر">
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
</form>
<!-- this is used for the seperation purpose -->
<div class="col-md-4">

</div>
  <!-- space between buttons for better layout and understanding..... -->
<br><br><br><br>

<!-- end of seperation -->
<div class="col-md-4 col-sm-12 col-xs-12">
  <input type="button" name="create" class="btn btn-primary" value="وارد نمودن فایل اکسل شقه">
  <input type="button" name="create" class="btn btn-primary" value="ایجاد شقه جدید" data-toggle="modal" data-target="#exampleModal">
</div>
</div>
@stop
