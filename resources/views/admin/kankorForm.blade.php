@extends('admin.layout')

@section('content')

<div class="container-fluid">
  <h2 style="text-align:right">معلومات محصلین  </h2>
  <br>


  <form action="{{route('store_kankor_form')}}" method="POST">

    {{ csrf_field() }}

    <div class="col-xs-6 col-sm-6 col-md-4" style="text-align: right;float: right;">

      <div class="form-group">
        <label for="exampleInputEmail1" class="control-label rig textRight">kankor ID</label>

        <!-- <input type="text" class="textRight form-control  " name="k_id" id="exampleInputEmail1"  required="required" placeholder="آی دی کانکور محصل را وارد  کنید  " style="text-align:right;"> -->
        <input type="text" class="form-control  textRight" name="k_id" id="exampleInputEmail1"  required="required" placeholder="نام محصل را وارد کنید  " style="text-align:right;">
      </div>
      <div class="form-group">
        <label  for="exampleInputEmail1 " class="control-label   rig textRight">نام</label>

        <input type="text" class="form-control  textRight" name="name" id="exampleInputEmail1"  required="required" placeholder="نام محصل را وارد کنید  " style="text-align:right;">

      </div>
      <div class="form-group">
        <label for="inputEmail3" class=" control-label rig textLeft">نام پدر</label>

        <input type="text" class="form-control  textRight" name="f_name" id="inputEmail3"  required="required" placeholder="نام پدر محصل را وارد کنید  " style="text-align:right;">

      </div>
      <div class="form-group">
        <label for="inputEmail3" class=" control-label rig textLeft">نام پدر کلان</label>

        <input type="text" class="form-control textRight" name="gf_name" id="inputEmail3" placeholder="نام پدر کلان محصل را وارد کنید " style="text-align:right;">

      </div>
      <div class="form-group">
        <label for="inputEmail3" class=" control-label rig textLeft" >تخلص</label>

        <input type="text" id="datepicker5" name="last_name" value="" class="form-control textRight" placeholder=" تخلص محصل را وارد کنید " style="text-align:right;" />

      </div>
      <div class="form-group">
        <label for="inputEmail3" class="control-label rig textLeft">مکتب</label>

        <input type="text" class="form-control  textRight" name="school" id="inputEmail3" value=""  required="required" placeholder="  نام مکتب محصل را وارد کنید" style="text-align:right;">

      </div>
      <div class="modal-footer">
        <a href="{{route('kankor')}}" class="btn btn-primary">بازگشت</a>
        <!-- <a href="" class="btn btn-primary" type="submit">ذخیره</a> -->
        <button type="submit" name="button" class="btn btn-primary">ذخیره</button>
      </div>



    </div>
    <div class="col-xs-6 col-sm-6 col-md-4" style="text-align: right;  float: right;">



      <div class="form-group">
        <label for="inputEmail3" class="control-label rig textLeft">مکتب به انگلیسی</label>

        <input type="text" class="form-control  textRight" name="e_school" id="inputEmail3"  required="required" placeholder=" نام مکت را به انگلیسی وارد نمایید " style="text-align:right;">

      </div>
      <div class="form-group">
        <label for="inputEmail3" class=" control-label rig textLeft">سال فراغت</label>

        <input type="text" class="form-control  textRight" name="g_year" id="inputEmail3"  required="required" placeholder=" سال فراغت را وارد نمایید " style="text-align:right;">

      </div>
      <div class="form-group">
        <label for="inputEmail3" class=" control-label rig textLeft">سال اخذ کانکور</label>

        <input type="text" class="form-control  textRight" name="k_exam_year" id="inputEmail3"  required="required" placeholder="سال اخذ کانکور را وارد نمایید " style="text-align:right;">
      </div>
      <div class="form-group">
        <label for="inputEmail3" class=" control-label rig textLeft">نمره کانکور</label>

        <input type="text" class="form-control textRight" name="kankor_score" id="inputEmail3"  required="required" placeholder=" نمره کانکور را وارد نمایید " style="text-align:right;">

      </div>
      <div class="form-group">


        <input type="hidden" class="form-control  textRight" value="کمپیوتر ساینس بلخ" name="faculty" id="inputEmail3"  required="required" placeholder="  " style="text-align:right;">

      </div>
      <div class="form-group">
        <label for="inputEmail3" class=" control-label rig textLeft">ولایت</label>


        <select name="province" class="form-control textRight"  style="text-align:right;">
          <option value='ارزگان'>ارزگان</option>
          <option value='بادغیس'>بادغیس</option>
          <option value='بامیان'>بامیان</option>
          <option value='بدخشان'>بدخشان</option>
          <option value='بغلان'>بغلان</option>
          <option value='بلخ'>بلخ</option>
          <option value='پروان'>پروان</option>
          <option value='پکتیا'>پکتیا</option>
          <option value='پکتیکا'>پکتیکا</option>
          <option value='پنجشیر'>پنجشیر</option>
          <option value='تخار'>تخار</option>
          <option value='چوزجان'>چوزجان</option>
          <option value='خوست'>خوست</option>
          <option value='دایکندی'>دایکندی</option>
          <option value='زابل'>زابل</option>
          <option value='سرپل'>سرپل</option>
          <option value='سمنگان'>سمنگان</option>
          <option value='غزنی'>غزنی</option>
          <option value='غور'>غور</option>
          <option value='فاریاب'>فاریاب</option>
          <option value='فراه'>فراه</option>
          <option value='قندهار'>قندهار</option>
          <option value='کابل'>کابل</option>
          <option value='کاپیسا'>کاپیسا</option>
          <option value='قندوز'>قندوز</option>
          <option value='کنر'>کنر</option>
          <option value='لغمان'>لغمان</option>
          <option value='لوگر'>لوگر</option>
          <option value='ننگرهار'>ننگرهار</option>
          <option value='نورستان'>نورستان</option>
          <option value='نیمروز'>نیمروز</option>
          <option value='وردگ'>وردک</option>
          <option value='هرات'>هرات</option>
          <option value='هلمند'>هلمند</option>
        </select>

      </div>
      <div class="form-group">
        <label for="inputEmail3" class=" control-label rig textLeft">جنسیت</label>

        <select name="gender" class="form-control textRight"  style="text-align:right;">
          <option value='مذکر' >مذکر</option>
          <option value='مونث'>مونث</option>
        </select>

      </div>


    </div>

  </form>


</div>

@stop
