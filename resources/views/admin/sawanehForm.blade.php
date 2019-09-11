@extends('admin.layout')

@section('content')

<!-- The overal container -->
<div class="container-fluid">

<!-- the header of the page -->
<h2 class="text-center">معلومات محصلین  </h2>
<br>

  <!-- The form for collecting information -->
<form action="" method="POST">
  <div class="col-xs-6 col-sm-6 col-md-4" style="text-align: right;float: right;">

    <!-- Kandor id input field -->
    <div class="form-group">
      <label for="exampleInputEmail1" class="control-label rig textRight">kankor ID</label>

      <input type="text" class="form-control  textRight" name="k_id" id="exampleInputEmail1"  required="required">
    </div>
    <!-- the name field -->
    <div class="form-group">
      <label  for="exampleInputEmail1 " class="control-label   rig textRight">نام</label>

      <input type="text" class="form-control  textRight" name="name" id="exampleInputEmail1"  required="required">

    </div>
    <!-- the fathername field -->
    <div class="form-group">
      <label for="inputEmail3" class=" control-label rig textLeft">نام پدر</label>

      <input type="text" class="form-control  textRight" name="f_name" id="inputEmail3"  required="required">
    </div>
    <!-- the Grandfathername field -->
    <div class="form-group">
      <label for="inputEmail3" class=" control-label rig textLeft">نام پدر کلان</label>

      <input type="text" class="form-control textRight" name="gf_name" id="inputEmail3">
    </div>
<!-- the sureName field of the contents -->
    <div class="form-group">
      <label for="inputEmail3" class=" control-label rig textLeft" >تخلص</label>
      <input type="text" id="datepicker5" name="last_name"  class="form-control textRight"  />
    </div>

    <!-- The school field  -->
    <div class="form-group">
      <label for="inputEmail3" class="control-label rig textLeft">مکتب</label>

      <input type="text" class="form-control  textRight" name="school" id="inputEmail3"  required="required">
    </div>

    <!-- the school name field in english -->
    <div class="form-group">
      <label for="inputEmail3" class="control-label rig textLeft">مکتب به انگلیسی</label>

      <input type="text" class="form-control  textRight" name="e_school" id="inputEmail3"  required="required">
    </div>

    <!-- the Date of certify -->
    <div class="form-group">
      <label for="inputEmail3" class=" control-label rig textLeft">سال فراغت</label>
      <input type="text" class="form-control  textRight" name="g_year" id="inputEmail3"  required="required">
    </div>
    <!-- kankor Grade -->
    <div class="form-group">
      <label for="inputEmail3" class=" control-label rig textLeft">نمره کانکور</label>
      <input type="text" class="form-control textRight" name="kankore_score" id="inputEmail3"  required="required">
    </div>

    <!-- result of kankor -->
    <div class="form-group">
      <label for="inputEmail3" class=" control-label rig textLeft">نتیجه کانکور</label>
      <input type="text" class="form-control textRight" name="faculty" id="inputEmail3"  required="required">
    </div>
      <!-- The province Field  -->
    <div class="form-group">
      <label for="inputEmail3" class=" control-label rig textLeft">ولایت</label>
      <!-- The select field -->
      <select name="province" class="form-control textRight">
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
      <!-- end of the select field -->

    </div>
    <!-- end of the form container -->
    <!-- the Gender Field -->
    <div class="form-group">
      <label for="inputEmail3" class=" control-label rig textLeft">جنسیت</label>
      <select name="gender" class="form-control textRight">
        <option value='m'>مذکر</option>
        <option value='f'>مونث</option>
      </select>
    </div>

      <!-- The ID field -->
    <div class="form-group">
      <label for="exampleInputEmail1" class="control-label rig textRight">شاگرد‌ ID</label>

      <input type="text" class="form-control  textRight" id="exampleInputEmail1" name="S_ID"  required="required">
    </div>
    <!-- father name in english field -->
    <div class="form-group">
      <label  for="exampleInputEmail1" class="control-label   rig textRight">نام به انگلیسی</label>
      <input type="text" class="form-control  textRight" id="exampleInputEmail1" name="e_name"  required="required">
    </div>

    <!-- father name in english -->
    <div class="form-group">
      <label for="inputEmail3" class=" control-label rig textLeft">نام پدر به انگلیسی</label>
      <input type="text" class="form-control  textRight" id="inputEmail3" name="e_f_name" required="required">
    </div>
      <!-- faculty in english -->
    <div class="form-group">
      <label for="inputEmail3" class=" control-label rig textLeft" >پوهنځی به انگلیسی</label>
      <input type="text" name="e_fculty" class="form-control textRight" value='Computer Science' />
    </div>

      <!-- date of birth -->
    <div class="form-group">
      <label for="inputEmail3" class="control-label rig textLeft">سال تولد</label>
      <input type="text" class="form-control  textRight" id="inputEmail3" name ="Bd"  required="required">
    </div>

    <!-- birth place of the student  -->
    <div class="form-group">
      <label for="inputEmail3" class=" control-label rig textLeft">محل تولد به انگلیسی</label>
      <input type="text" class="form-control  textRight" id="inputEmail3" name="Birth_place"  required="required">
    </div>
    <!-- native lagnuage -->
    <div class="form-group">
      <label for="inputEmail3" class=" control-label rig textLeft">زبان مادری</label>
      <input type="text" class="form-control textRight" id="inputEmail3" name="Native_language"  required="required">
    </div>
    <!-- page of IDcard -->
    <div class="form-group">
      <label for="inputEmail3" class=" control-label rig textLeft">صفحه تذکره</label>
      <input type="text" class="form-control  textRight" id="inputEmail3" name="NID_page_number"  required="required">
    </div>
    <!-- the page IDcard -->
    <div class="form-group">
      <label for="inputEmail3" class=" control-label rig textLeft">جلد تذکره</label>
      <input type="text" class="form-control textRight" id="inputEmail3" name="NID_Volume_number" >
    </div>
    <!-- the number of admision in ID card -->
    <div class="form-group">
      <label for="inputEmail3" class=" control-label rig textLeft">نمبر ثبت تذکره</label>
      <input type="text" class="form-control  textRight" id="inputEmail3" name="NID_sabt_number">
    </div>

    <!-- the General number -->
    <div class="form-group">
      <label for="inputEmail3" class=" control-label rig textLeft">نمبر عمومی</label>
      <input type="text" class="form-control  textRight" id="inputEmail3" name="NID_general_number">
    </div>
    <!-- The footer of Modal -->
    <div class="modal-footer">
     <a href="{{route('sawaneh')}}" class="btn btn-primary">بازگشت</a>
     <a href="#" class="btn btn-primary">ذخیره</a>
  </div>
  </div>

  <!-- the second container for information stored here.. -->
  <div class="col-xs-6 col-sm-6 col-md-4 " style="text-align: right;float: right;">
    <div class="form-group">
      <label for="inputEmail3" class="control-label rig textLeft">حالت مدنی</label>
        <!-- the select list -->
      <select name="Marital_status" class="form-control text-right">
        <option value='s'>مجرد</option>
        <option value='m'>متاهل</option>
      </select>
    </div>
    <!-- Phone number -->
    <div class="form-group">
      <label for="inputEmail3" class="control-label rig textLeft">نمبر تماس</label>
      <input type="text" class="form-control textRight" id="inputEmail3" name="Contact" required="required">
    </div>
    <!-- some other things -->
    <div class="form-group">
      <label for="inputEmail3" class=" control-label rig textLeft">ملاحظات</label>
      <input type="text" class="form-control  textRight" id="inputEmail3" name="Co">
    </div>

    native vilage
    <div class="form-group">
      <label for="inputEmail3" class=" control-label rig textLeft">قریه اصلی</label>
      <input type="text" class="form-control textRight" id="inputEmail3" name="Native_village">
    </div>
    <!-- native place -->
    <div class="form-group">
      <label for="inputEmail3" class=" control-label rig textLeft">ناحیه اصلی</label>
      <input type="text" class="form-control  textRight" id="inputEmail3" name="Native_district" required="required">
    </div>
    <!-- native province -->
    <div class="form-group">
      <label for="inputEmail3" class=" control-label rig textLeft" >ولایت اصلی</label>
      <select name="Native_province" class="form-control textRight">
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
    <!-- end of the province select list -->

     <!-- province name in english -->
    <div class="form-group">
      <label for="inputEmail3" class=" control-label rig textLeft" >نام ولایت اصلی به انگلیسی</label>
      <select name="e_Native_province" class="form-control textRight">
        <option value='Orozgan'>Orozgan </option>
        <option value='Badghez'>Badghez</option>
        <option value='Bamyan'>Bamyan</option>
        <option value='Badakhshan'>Badakhshan</option>
        <option value='Baghlan'>Baghlan</option>
        <option value='Balkh'>Balkh</option>
        <option value='Parwan'>Parwan</option>
        <option value='Paktia'>Paktia</option>
        <option value='Pakteka'>Pakteka</option>
        <option value='panjsher'>panjsher</option>
        <option value='Takhar'>Takhar</option>
        <option value='Jozjan'>Jozjan</option>
        <option value='Khost'>Khost</option>
        <option value='Daikonde'>Daikonde</option>
        <option value='Zabol'>Zabol</option>
        <option value='Sarpol'>Sarpol</option>
        <option value='Samangan'>Samangan</option>
        <option value='Ghazne'>Ghazne</option>
        <option value='Ghor'>Ghor</option>
        <option value='Faryab'>Faryab</option>
        <option value='Farah'>Farah</option>
        <option value='Kandahar'>Kandahar</option>
        <option value='Kabul'>Kabul</option>
        <option value='Kapesa'>Kapesa</option>
        <option value='Kandoz'>Kandoz</option>
        <option value='Konar'>Konar</option>
        <option value='Laghman'>Laghman</option>
        <option value='Loghar'>Loghar</option>
        <option value='Nengarhar'>Nengarhar</option>
        <option value='Norestan'>Norestan</option>
        <option value='Nemroz'>Nemroz</option>
        <option value='Wardak'>Wardak</option>
        <option value='Herat'>Herat</option>
        <option value='Helmand'>Helmand</option>
      </select>
      <!-- end of the selection -->
    </div>
    <!-- End of the overall div -->

    <!-- native vilage -->
    <div class="form-group">
      <label for="inputEmail3" class="control-label rig textLeft">قریه فعلی</label>
      <input type="text" class="form-control  textRight" id="inputEmail3" name="Currect_village"  required="required">
    </div>
    <!-- Your place -->
    <div class="form-group">
      <label for="inputEmail3" class=" control-label rig textLeft">ناحیه فعلی</label>
      <input type="text" class="form-control  textRight" id="inputEmail3" name="Current_district"  required="required">
    </div>
    <!-- current province -->
    <div class="form-group">
      <label for="inputEmail3" class=" control-label rig textLeft">ولایت فعلی</label>
      <select name="Current_province" class="form-control textRight">
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
      <!-- end of the select list -->
    </div>
    <!-- end of the container -->

    <!-- Acceptance year -->
    <div class="form-group">
      <label for="inputEmail3" class=" control-label rig textLeft">سال پذیرش</label>
      <input type="text" class="form-control  textRight" id="inputEmail3" name="Admission_year">
    </div>
    <!-- Father's job -->
    <div class="form-group">
      <label for="inputEmail3" class=" control-label rig textLeft">وظیفه پدر</label>
      <input type="text" class="form-control textRight" id="inputEmail3" name="Father_job" >
    </div>

    <!-- currreant Father's job place -->
    <div class="form-group">
      <label for="inputEmail3" class="control-label rig textLeft">محل وظیفه پدر</label>
      <input type="text" class="form-control textRight" id="inputEmail3" name="Father_work_location">
    </div>
    <!-- Ancle name -->
    <div class="form-group">
      <label for="inputEmail3" class="control-label rig textLeft">نام کاکا</label>
      <input type="text" class="form-control textRight" id="inputEmail3" name="Uncle_name" required="required">
    </div>
    <!-- ancle's job -->
    <div class="form-group">
      <label for="inputEmail3" class=" control-label rig textLeft">وظیفه کاکا</label>
      <input type="text" class="form-control  textRight" id="inputEmail3" name="Uncle_job">
    </div>
    <!-- ancle job place -->
    <div class="form-group">
      <label for="inputEmail3" class=" control-label rig textLeft"> محل وظیفه کاکا</label>
      <input type="text" class="form-control  textRight" id="inputEmail3" name="Uncle_work_location">
    </div>
    <!-- Ancle's name -->
    <div class="form-group">
      <label for="inputEmail3" class=" control-label rig textLeft">نام ماما</label>
      <input type="text" class="form-control  textRight" id="inputEmail3" name="m_name">
    </div>
     <!-- Ancle job -->
    <div class="form-group">
      <label for="inputEmail3" class=" control-label rig textLeft">وظیفه ماما</label>
      <input type="text" class="form-control  textRight" id="inputEmail3" name="m_work">
    </div>
    <!-- current ancle job place -->
    <div class="form-group">
      <label for="inputEmail3" class=" control-label rig textLeft">محل وظیفه ماما</label>
      <input type="text" class="form-control  textRight" id="inputEmail3" name="m_work_location">
    </div>
    <!-- Brother name -->
    <div class="form-group">
      <label for="inputEmail3" class=" control-label rig textLeft">نام برادر</label>
      <input type="text" class="form-control  textRight" id="inputEmail3" name="b_name">
    </div>
    <!-- Brother's job -->
    <div class="form-group">
      <label for="inputEmail3" class=" control-label rig textLeft">وظیفه برادر</label>
      <input type="text" class="form-control  textRight" id="inputEmail3" name="b_work">
    </div>
    <!-- Brother current job location -->
    <div class="form-group">
      <label for="inputEmail3" class=" control-label rig textLeft">محل وظیفه برادر</label>
      <input type="text" class="form-control  textRight" id="inputEmail3" name="b-work_location">
    </div>
    <!-- The place of pic -->
    <div class="form-group">
      <label for="inputEmail3" class=" control-label rig textLeft">عکس محصل</label>
      <input  type="file" name="fileToUpload" class="form-control" id="fileToUpload">
    </div>
<!-- end of the form -->
  </div>
  <!-- end of the container -->
  <div class="col-xs-6 col-sm-6 col-md-4 " style="text-align: right;float: right;">
  </div>
</form>
<!-- end oft -->
</div>
@stop
