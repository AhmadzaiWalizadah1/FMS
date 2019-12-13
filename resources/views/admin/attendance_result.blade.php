@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div id="main_section" style= "float:right" class="col-xs-12 col-sm-10 col-md-12">
		<div   class="container-fluid">
			<div  class="row">
				<div class="col-xs-12 col-sm-12 col-md-12" id="line" ></div>
			</div>
			<div id="page-title" class="row subheader hline">
				<div class="col-xs-12 text-center" >
					<h2 id="page-name">&nbsp;&nbsp;حاضری محصلین<small>&nbsp;&nbsp;</small></h2>
				</div>

			</div>
			<div id="welcome" class="row subheader">
			</div>

    <div class="row">
        <div class="col-md-2 col-md-offset-10" style="margin-top:3%;">
            <form method="post" action="export_attendance.php">
                <input type="hidden" value="" name="year">
                <input type="hidden" value="" name="month">
                <input type="hidden" value="" name="sub">

                 <button type="submit" name="export_phpexcel" class="btn btn-info btn-lg" style="margin-top:3%; ">ایجاد حاضری در اکسیل</button>
            </form>
        </div>
    </div>

                      <div class='row' style='margin-top:3%;' >
				 <div class='col-xs-6 col-sm-3 col-md-1 col-md-offset-2'>
				  <img src='photos/Recovered_JPEG Digital Camera_4404.jpg' style='width:95px; hieght:95px;'>

					</div>

				 <div class='col-xs-6 col-sm-6 col-md-6'>


                        <h4 class='text-center'> وزارت تحصیلات عالی جمهوری اسلامی افغانستان</h4>
                        <h4 class='text-center'>ریاست دانشگاه بلخ</h4>
                        <h4 class='text-center'>دانشکده کمپیوترساینس</h4>
												<h4 class='text-center'>مدیریت عمومی تدریسی</h4>



				</div>
					<div class='col-xs-6 col-sm-3 col-md-3'>
					<img src='photos/Recovered_JPEG Digital Camera_4415.jpg' style='width:85px; hieght:85px;'>

				</div>

			</div>
			<div class='row' style='margin-top:2%;' id='div1'>
				<div class='col-xs-12 col-sm-12 col-md-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1'>
					<table class='table table-bordered' >
					   <thead>
							<tr>


								<td class='text-center' colspan='31'>

						<div class='row'>
							<div class='col-md-2'>

							<span dir='RtL'>تعداد کریدیت :</span>

						</div>
						<div class='col-md-2'>
						<span dir='RtL'>برج :</span>

						</div>
						<div class='col-md-2'>
							<span dir='RtL'>صنف : </span>

						</div>
						<div class='col-md-2'>

						   <span dir='RtL'>سمستر : </span>
						</div>
						<div class='col-md-2'>

							<span dir='RtL'>استاد :</span>

						</div>


						<div class='col-md-2'>

						   <span dir='RtL'> مضمون: </span>
						</div>

						</div>

						</td>
					</tr>
					  <tr class='vertlabels'>
					    <td rowspan='2'><span style='margin-left:20%;'><font size='3.5'>ملاحظات</font></span></td>
						<td colspan='2'  class='text-center'>مجموعه</td>
						<td colspan='4' rowspan='2' class='text-center'>هفته پنجم</td>
						<td colspan='5' rowspan='2' class='text-center'>هفته چهارم</td>
						<td colspan='5' rowspan='2' class='text-center'>هفته سوم</td>
						<td colspan='5' rowspan='2' class='text-center'>هفته دوم</td>
						<td colspan='5' rowspan='2' class='text-center'>هفته اول</td>
						<td colspan='3'  class='text-center'>شهرت</td>

						<td rowspan='2'><span style='margin-left:5%;'><font size='3.5'>شماره</font></span></td>
					</tr>
					<tr class='vertlabels'>
							<td ><span style='margin-left:5%;'>غیرحاضری</span></td>
							<td ><span style='margin-left:5%;'>حاضری</span></td>
							<td  style='text-align:center;'>کود نمبر</td>
							<td style='text-align:center;'>ولد</td>
							<td  style='text-align:center;'>اسم</td>


					</tr>
				</thead>
				 <tbody><tr>
							 <td  style='text-align:center;' width='3.5%'></td>
							<td  style='text-align:center;' width='1%'></td>
							<td  style='text-align:center;' width='1%'></td>
							<td  style='text-align:center;' width='1%'></td>
							<td  style='text-align:center;' width='1%'></td>
							<td  style='text-align:center;' width='1%'></td>
							<td  style='text-align:center;' width='1%'></td>
							<td  style='text-align:center;' width='1%'></td>
							<td  style='text-align:center;' width='1%'></td>
							<td  style='text-align:center;' width='1%'></td>
							<td  style='text-align:center;' width='1%'></td>
							<td  style='text-align:center;' width='1%'></td>
							<td  style='text-align:center;' width='1%'></td>
							<td  style='text-align:center;' width='1%'></td>
							<td  style='text-align:center;' width='1%'></td>
							<td  style='text-align:center;' width='1%'></td>
							<td  style='text-align:center;' width='1%'></td>
							<td  style='text-align:center;' width='1%'></td>
							<td  style='text-align:center;' width='1%'></td>
							<td  style='text-align:center;' width='1%'></td>
							<td  style='text-align:center;' width='1%'></td>
							<td  style='text-align:center;' width='1%'></td>
							<td  style='text-align:center;' width='1%'></td>
							<td  style='text-align:center;' width='1%'></td>
							<td  style='text-align:center;' width='1%'></td>
							<td  style='text-align:center;' width='1%'></td>
							<td  style='text-align:center;' width='1%'></td>
							<td  style='text-align:center;' width='3%'></td>
							<td  style='text-align:center;' width='3%'></td>
							<td  style='text-align:center;' width='3%'></td>
							<td  style='text-align:center;' width='1%'></td>
							<tr>

					   </tbody>
					  </table>
					  </div>
					  </div>
					  <br>
					  <br>
					  <br>

			<div class="row" >

			<div class="col-xs-6 col-sm-6 col-md-6 col-xs-offset-0 col-sm-offset-1 col-md-offset-1"  style="margin-top:150px;">
			<a href="attenTest.php" class="btn btn-info btn-lg">خروج</a>



			</div>
			</div>
		</div>
		</div>
