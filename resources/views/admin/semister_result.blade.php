@extends('admin.layout')
<!--custom.css -->
<link rel="stylesheet" href="{{asset('css/semesterCSS.css')}}">
@section('content')

<!--adding the other table for the semiste_result -->

<div class="container-fluid" >

  <!-- second  -->
  <div class="row">
    <br><br><br>
    <span class="col-md-4">
      <div class="table table-bordered">
        <table  id="t1" class="table table-bordered clean">

          <tr >
             <td class='text-center' colspan='2'>خلص نتایج</td>
          </tr>
          <tr class="vertlabels decrease_height">
            <td class='text-center'>70 نفر</td>
            <td class='text-right'>تعداد داخله</td>
          </tr>
          <tr class="vertlabels decrease_height">
            <td class='text-right'></td>
            <td class='text-right'>محروم</td>
          </tr>
          <tr class="vertlabels decrease_height">
            <td class='text-center'> نفر</td>
            <td class='text-right'>شامل امتحان</td>
          </tr>

          <tr class="vertlabels decrease_height">
            <td class='text-center'> نفر</td>
            <td class='text-right'>کامیاب</td>
          </tr>

          <tr class="vertlabels decrease_height" >
            <td class='text-center'>نفر</td>
            <td class='text-right'>ناکام</td>
          </tr>

          <tr class="vertlabels decrease_height">
            <td class='text-center'>نفر</td>
            <td class='text-right'>اخطار</td>
          </tr>
          <!-- end of the summary of result table -->
        </table>
        <!-- end of the container -->
      </div>
    </span>

    <!-- the beginning of the second row  -->
    <div class="col-md-6" >

      <br>
      <h3 class="text-center" >وزارت تحصیلات عالی جمهوری اسلامی افغانستان</h3>
      <h3 class="text-center">پوهنتون بلخ</h3>
      <h4 class="text-center">پوهنځی کمپیوتر ساینس</h4>

      <br><br><br><br>
      <h4 class="text-center">()   جدول نتایج سمستر ( خزانی  "بهاری  }  ) صنف )</h4>
    </div>
    <!-- end of the column -->
  </div>
  <!-- end of natayeg sawaneh -->
  <!-- end of the first row that contain all the primary contents -->
  <!-- in here we are going to add the second row the large table that contain  -->
  <!-- the result of the students,Grade,Score, chances and many more -->


<!-- the second row -->
<div class="row">
  <div class="col-md-12">
        <div class="table table-bordered table-responsive">

          <!-- responsive table -->
          <div>

          <table class="table table-bordered">
            <thead>
            <tr >
              <th rowspan="4" dir="rtl"><span class="text-center">ملاحضات</span></th>
              <th rowspan="4"><span class="rotation">نتیجه</span></th>
              <th rowspan="4"><span class="rotation">اوسط نمرات</span></th>
              <th rowspan="4"><span class="rotation"> نمرات یا ضریب کریدت</span></th>
              <th rowspan="4"><span class="rotation">مجموع کریدت های کامیاب شده</span></th>
              <th rowspan="4"><span class="rotation">مجموع کریدت ها</span></th>
              <th colspan="21" class="text-center"><span>تعداد مضامین و کریدت ها</span></th>
              <th colspan="4"class="text-center"><span>شهرت</span></th>
              <th rowspan="4"><span class="rotation text-center">شماره</span></th>
           </tr>

            <tr >
              <th colspan="2"</th>
              <th colspan="2"</th>
              <th colspan="2"</th>
              <th colspan="2"</th>
              <th colspan="2"</th>
              <th colspan="2"</th>
              <th colspan="2"</th>
              <th colspan="2"</th>
              <th colspan="2"</th>
              <th colspan="2"</th>
              <th class="text-center">مضامین</th>
              <th rowspan="4"><span class="name_lastName text-center">ولد</span></th>
              <th rowspan="4"><span class="name_lastName text-center">اسم</span> </th>
            </tr>

            <tr class="">
              <th><span></span></th>
              <th><span></span></th>
              <th><span></span></th>
              <th><span></span></th>
              <th><span></span></th>
              <th><span></span></th>
              <th><span></span></th>
              <th><span></span></th>
              <th><span></span></th>
              <th><span></span></th>
              <th><span></span></th>
              <th><span></span></th>
              <th><span></span></th>
              <th><span></span></th>
              <th><span></span></th>
              <th><span></span></th>
              <th><span></span></th>
              <th><span></span></th>
              <th><span></span></th>
              <th><span></span></th>
              <th class="text-center">کریدت مضامین</th>
            </tr>

            <tr >
                <th ><span class="rotation">ضریب کریدت</span></th>
                <th><span class="rotation">نمره مضمون</span></th>
                <th><span class="rotation">ضریب کریدت</span></th>
                <th><span class="rotation">نمره مضمون</span></th>
                <th><span class="rotation">ضریب کریدت</span></th>
                <th><span class="rotation">نمره مضمون</span></th>
                <th><span class="rotation">ضریب کریدت</span></th>
                <th><span class="rotation">نمره مضمون</span></th>
                <th><span class="rotation">ضریب کریدت</span></th>
                <th><span class="rotation">نمره مضمون</span></th>
                <th><span class="rotation">ضریب کریدت</span></th>
                <th><span class="rotation">نمره مضمون</span></th>
                <th><span class="rotation">ضریب کریدت</span></th>
                <th><span class="rotation">نمره مضمون</span></th>
                <th><span class="rotation">ضریب کریدت</span></th>
                <th><span class="rotation">نمره مضمون</span></th>
                <th><span class="rotation">ضریب کریدت</span></th>
                <th><span class="rotation">نمره مضمون</span></th>
                <th><span class="rotation">ضریب کریدت</span></th>
                <th><span class="rotation">نمره مضمون</span></th>
                <th class="text-center">کود نمبر</th>

              </tr>
              </thead>

              <tbody>

              </tbody>

            </table>
            <!-- end of table responsive -->

          </div>

        </div>
      </div>
</div>
  </div>

      @stop
