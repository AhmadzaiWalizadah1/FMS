@extends('admin.layout')
<link rel="stylesheet" href="{{asset('./css/attendence_style.css')}}">
@section('content')
<!--  the overal container  -->
<div class="container-fluid">
	<!-- row for the heading  -->
	<!-- the first column -->
	<div class="row">
		<div class="col-md-4 col-sm-12">
			<div class="col-md-12">
				<p dir="ltr" class="animated bounceInLeft">  <img src="{{asset('images/balkh.jpg')}}"alt="Mohe" class="img mohe-logo"></p>
				<p dir="rtl">مضمون()</p>
				<p dir="rtl">تعداد ()</p>
				<p dir="rtl">سال()</p>
			</div>
		</div>
		<!-- the second column -->
		<div class="col-md-4 col-sm-12">
			<h3 class="text-center">وزارت تحصیلات عالی <br>
				پوهنځی کمپیوتر ساینس <br>
				مدیریت تدریسی </h3>
				<h4 class="text-center">انجینری نرم افزار</h4>
				<h4 class="text-center">() حاضری ماهوار برج</h4>
			</div>
			<!-- the third column -->
			<div class="col-md-4 col-sm-12">
				<div class="col-md-12">
					<p class="text-right"><img src="{{asset('images/mohe.jpg')}}"alt="Mohe" class="img mohe-logo"></p>
					<p dir="rtl">صنف: </p>
					<p dir="rtl">سمستر: </p>
					<p dir="rtl">استاد مضمون: </p>
				</div>
			</div>
		</div>
		<!-- end of the heading row -->
		<!-- ======================TABLE=========================== -->
		<!-- second row  -->
		<div class="row">
			<!--table  -->
		<hr>
			<table class="table table-responsive-sm" style="background:white;color:black;">
				<thead>
			<!-- the first row of the table -->
				<tr class="first-row">
					<td class="text-center"><span>ملاحظات</span></td>
					<td colspan="2" class="text-center">مجموعه</td>
					<td colspan="4" rowspan="2" class="text-center">هفته پنجم</td>
					<td colspan="5" rowspan="2" class="text-center">هفته چهارم</td>
					<td colspan="5" rowspan="2" class="text-center">هفته سوم</td>
					<td colspan="5" rowspan="2" class="text-center">هفته دوم</td>
					<td colspan="5" rowspan="2" class="text-center">هفته اول</td>
					<td colspan="3" class="text-center">شهرت</td>
					<td rowspan="2"><span >شماره</span></td>
				</tr>
      <!-- second row of the table header -->
				<tr class="second-row">
		      <td class="text-center"><span>باقی دار مضمون</span></td>
					<td class="absent text-center"><span>غیرحاضری</span></td>
					<td class="present text-center"><span>حاضری</span></td>
					<td class="text-center">کود نمبر</td>
					<td class="text-center">ولد</td>
					<td class="text-center">اسم</td>
				</tr>
			</thead>

			<tbody>
<!-- the first row of the table -->

<!-- second row of the table header -->
    <tr class="text-right">
			<td></td>
			<td>12</td>
			<td>345</td>
	    <td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		  <td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		  <td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		  <td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		  <td></td>
			<td></td>
			<td></td>
			<td></td>
			<td>12</td>
	    <td>ولی محمد</td>
			<td>احمدزی</td>
			<td>1</td>
    </tr>
			</tbody>
		</table>
    <div class="row signature" dir="rtl">
    	<div class="col-md-6">
    		 	<p>امضای آمر دیپارتمنت</p>
    	</div>
      <div class="col-md-6 signature">
					<p>امضای استاد مضمون</p>
      </div>
    </div>
    <!-- convert to Excel button -->
 <button type="submit" name="export_phpexcel" class="btn btn-primary text-right">ایجاد حاضری در اکسیل</button>
		<!-- end of the table -->
	</div>
	<!-- end of the second row -->























	<!-- ===================END OF THE TABLE=================== -->





















</div>
@stop
