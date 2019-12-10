@extends('admin.layout')

@section('content')
</script>
</head>
<div id="main_section" style= "float:right" class="col-xs-12 col-sm-10 col-md-10">
	<div class="container-fluid">
		<div  class="row">
			<div class="col-xs-12 col-sm-12 col-md-12" id="line" ></div>
		</div>
			<div id="page-title" class="row subheader hline">
				<div class="col-xs-12 text-center" >
					<h2 id="page-name">&nbsp;&nbsp;حاضری<small>&nbsp;&nbsp;</small></h2>
				</div>
			</div>
			<div id="welcome" class="row subheader">


			</div>
			<div id="welcome" class="row subheader">
			</div>
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-2 col-md-offset-10"  style= " margin-top:3%;">
						<button type="button" class="btn btn-info  btn-block " data-toggle="modal" data-target="#new-attendence">ایجاد حاضری جدید</button>
						<!-- Modal -->
						<div id="new-attendence" class="modal fade" role="dialog">
							<div class="modal-dialog">

							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title" style="text-align:center;"> فورم ایجاد حاضری جدید</h4>
								</div>
							 <div class="modal-body">
								<form action="" method="post" >
									<table style="width: 550px; text-align:right; ">
										<tr>
											<td>
												<label for="exampleInputEmail1">آی دی محصل</label>
											</td>
										</tr>
										<tr>
											<td>
												<input type="text" name="S_ID" class="form-control text-right" id="exampleInputEmail1" placeholder="   آی دی محصل را وارد کنید" />
											</td>
										</tr>
										<tr>
											<td>
											</td>
										</tr>
										<tr>
											<td>
												<br>
												<label for="exampleInputEmail1">نام مضمون</label>
											</td>
										</tr>
										<tr>
											<td>

											</td>
										</tr>
										<tr>
											<td>

											</td>
										</tr>
										<tr>
											<td>
												<br />
												<label for="exampleInputEmail1">برج</label>
											</td>
										</tr>
										<tr>
											<td>
												<input type="number" name="Month" class="form-control text-right" id="exampleInputEmail1" placeholder="ماه را وارد کنید" />
											</td>
										</tr>
										<tr>
											<td>
											</td>
										</tr>
										<tr>
											<td>
												<br />
												<label for="exampleInputEmail1">سال</label>
											</td>
										</tr>
										<tr>
											<td>
												<input type="number" name="Year" class="form-control text-right" id="exampleInputEmail1" placeholder="سال را وارد کنید" />
											</td>
										</tr>
										<tr>
											<td>
											</td>
										</tr>
										<tr>
											<td>
												<br />

												<label for="exampleInputEmail1">حاضری</label>
											</td>
										</tr>
										<tr>
											<td>
												<input type="number" name="Present" class="form-control text-right" id="exampleInputEmail1" placeholder="تعداد روزهای حاضر را وارد کنید" />
											</td>
										</tr>
										<tr>
											<td>
											</td>
										</tr>
										<tr>
											<td>
												<br />

												<label for="exampleInputEmail1">غیر حاضری</label>
											</td>
										</tr>
										<tr>
											<td>
												<input type="number" name="Absent" class="form-control text-right" id="exampleInputEmail1" placeholder="تعداد روزهای غیر حاضر را وارد کنید" />
											</td>
										</tr>
										<tr>
											<td>

											</td>
										</tr>
                                    </table>
                                    <br />

									 <input type="submit" name="save_atten" class="btn btn-info btn-md" value="ذخیره"></input>

								</form>
							  </div>
							  <div class="modal-footer">
								<button type="button" class="btn btn-info btn-lg" data-dismiss="modal">خروج</button>
							  </div>
							</div>

						  </div>
						</div>
						<!--fancy page code ends here-->
					</div>
				</div>
				<div class="row">
					<div class="col-md-5 col-md-offset-1" style="margin-top: -3%;">
						<form method="post" action="attenTest.php" class="form-inline" name="foryear">
							<div class="form-group">
							   <input type="number" class="form-control" placeholder="برای نمایش حاضری سال را وارد نمایید" style="width:250px; text-align: center;" name="chooseyear">
								<input type="submit" name="submityear" value="جستجو" class="btn btn-info"></input>

							</div>
						</form>

					</div>
				</div>

				<div class='row'>
					<div class='col-md-12'>
						<form method='post' action='attendenceResult.php' class='form-inline' name='myform'>
							<div class='row'>

								<div class='col-xs-3 col-sm-3 col-md-3 col-xs-offset-1 col-sm-offset-1 col-md-offset-1' style='margin-top: 3%;' >
									<input type='number' class='form-control' value='$submitedyear'  style='width:100px; text-align: center;' name='years'>

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

								<div class='col-xs-5 col-sm-5 col-md-2 col-xs-offset-3 col-sm-offset-3 col-md-offset-10'  style= ' margin-top:-3%;'>
									<input type='checkbox' name='Check_ctr' value='yes'
								 onClick='Check(document.myform)'><b>انتخاب همه مضامین</b>


								</div>
							</div>
							<div class='row'>
								<div class='col-md-2 col-md-offset-1 ' style= 'border:1px solid gray; border-radius:3%; margin-top:3%; text-align:right;'>
									<div>
										<h4>صنف چهارم</h4>
									</div>
</div>
								<div class='col-md-2 col-md-offset-1' style= 'border:1px solid gray;
						border-radius:3%; margin-top:3%; text-align:right;'>
									<div>
										<h4>صنف سوم</h4>
									</div>
								</div>
								<div class='col-md-2 col-md-offset-1' style= 'border:1px solid gray;
						border-radius:3%; margin-top:3%; text-align:right;'>
									<div>
										<h4>صنف دوم</h4>
									</div>
												<label >
													<input type='checkbox' name='$checkboxes' value='$checkboxes'>
												</label>
												</br>
											</div>
								<div class='col-md-2 col-md-offset-1 ' style= 'border:1px solid gray;
						border-radius:3%; margin-top:3%; text-align:right;'>
									<div>
										<h4>صنف اول</h4>
									</div></div>
							</div>
							<div class='row'>
								<div class='col-xs-6 col-sm-6 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-1' style='margin-top:7%'>
									<a href='home.php' class='btn btn-info btn-lg'> خروج</a>
									<input type='submit' name='submit1' value='نمایش و چاپ' class='btn btn-info btn-lg'></input>

								</div>
							</div>

						</form>
					</div>
				</div>





			</div>
		</div>
	</div>
</div>

@stop
