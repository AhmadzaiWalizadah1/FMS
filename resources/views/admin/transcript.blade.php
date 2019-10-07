<!--inherate  from super class -->
@extends('admin.layout')
@section('content')

<!--for makeing a perfact view -->
<div class="container-fluid">


			<div  class="row">
				<div class="col-xs-12 col-sm-12 col-md-12" id="line" >
				</div>
			</div>


           <div  class="row">


				<!--header name-->
            	<div class="col-xs-10 col-sm-10 col-md-10">
                	<div id="page-title" class="row subheader hline">
                        <h2 id="page-name" class="text-center"> مدیریت ترانسکرپت</h2>
                	</div>
            	</div>
				<!--/header name-->

			</div>

	<div class="col-xs-12 col-sm-10 col-md-12">

			<!-- all about language type -->
			<div class="row">
				<br>
				<div class="col-xs-12 col-sm-12 col-md-12">
					<!--A form to represent in which launguage do you want to represent trascript -->
				    <form class="form-inline">
                            <div class="form-group" style="max-width:150px;">

                               <select onchange="onclickedOption(this.value)" class="form-control">
                                   <option disabled selected>از اینجا انتخاب کنید</option>
																	 <option value="1" >دری</option>

                                  <option value="2" >انگلیسی</option>
                                </select>
                            </div>
														<script>
															function onclickedOption(src){
																if (src==1)
																	window.location="{{route('transcript_dari')}}";
																else {
																	window.location="{{route('transcript_english')}}";
																}
															}
														</script>
                         <label>: ارائه ترانسکرپت به زبان</label>

                    </form>
					<!--/A form to represent in which launguage do you want to represent trascript-->
                    <br>
					<!--type of working in A form to represent in which launguage do you want to represent trascript -->
                    <form method="get" action="transcript_dar0i.blade.php" class="form-inline" id="searchOption" style="display:none;">
                        <button name="dari-tr" class="btn btn-info" type="submit" class="form-control"> نمایش ترانسکرپت</button>
                        <input name="dari-id" type="text" class="form-control" placeholder="ID"/>
                    </form>
                    <form method="get" action="transcript_english.blade.php" class="form-inline" id="searchOption2" style="display:none;">
                        <button name="eng-tr" class="btn btn-info" type="submit" class="form-control"> نمایش ترانسکرپت</button>
                        <input name="eng-id" type="text" class="form-control" placeholder="ID"/>
                    </form>
					<!--/type of working in A form to represent in which launguage do you want to represent trascript-->
                </div>
            </div>
			<!--/all about type of language -->
				<br>
			<!-- all about pre studant detils  -->
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-4">

<!--                           table of student more info-->
                            <table class="table table-bordered" style="background-color: white;">
                                <tr>
                                    <td rowspan="5"><img src="{{asset('images/afghan_logo.png')}}" id="ali" style="height:70px; width=60px;"/></td>
                                    <td  class="text-center">۲۳۴۲۳۲۳۴</td>
                                    <td  class="text-center">نمبر تذکره</td>

                                </tr>
                                <tr>
                                    <td class="text-center">کاپیسا</td>
                                    <td class="text-center">محل تولد</td>
                                </tr>
                                <tr>
                                    <td class="text-center"></td>
                                    <td class="text-center">تاریخ تولد</td>
                                </tr>
                                <tr>
                                    <td class="text-center">تجزیه و تحلیل وضعیت فعلی استفاده ازشبه های ادهاک و دور نمای آن در افغانستان</td>
                                    <td class="text-center">موضوع مونوگراف</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>تاریخ دفاع مونوگراف</td>
                                </tr>
                            </table>
<!--                        /table of student more info-->
					</div>
<!--						university name, and it info in center of page -->
					<div class="col-xs-12 col-sm-12 col-md-5 ">
						<img src="{{asset('images/afghan_logo.png')}}" style="margin-top:100px ; margin-left:50px ; float:left ; height:70px; width=60px;" id="logo"/>
						<img src="{{asset('images/afghan_logo.png')}}" style="margin-top:100px ; float:right ;height:70px; width=60px;" id="logo"/>

						<h3 class="text-center"> جمهوری اسلامی افغانستان </h3>
						<h4 class="text-center"> وزارت تحصیلات عالی </h4>

						<h4 class="text-center">پوهنتون بلخ</h4>
						<h4 class="text-center">&nbsp; &nbsp;معاونیت امور محصلان</h4>
						<h4 class="text-center " style="text-align: center; padding-left: 13.1%;">پوهنحی کمپیوتر ساینس</h4>
						<h3 class="text-center" style="text-align: center; padding-left: 10%">&nbsp;&nbsp;ترانسکرپت نمرات محصلان</h3>
					</div>

<!--						/university name, and it info in center of page-->

<!-- 							student  info -->
					<div class="col-xs-12 col-sm-12 col-md-3 " >
						  <div class="table-responsive">
<!--                            student table -->
                             <table class="table table-bordered " style="background-color: white;">
                                <tr>

                                    <td class="text-right">ذبیح</td>
                                    <td class="text-right">اسم</td>

                                </tr>
                                <tr>
                                    <td class="text-right">حاجی کبیر</td>
                                    <td class="text-right">ولد</td>
                                </tr>
                                <tr>
                                    <td class="text-right">کمپیوتر ساینس</td>
                                    <td class="text-right">پوهنحی</td>
                                </tr>
                                <tr>
                                    <td class="text-right">انجنیری نرم افزار</td>
                                    <td class="text-right">دیپارتمنت ورشته</td>
                                </tr>
                                <tr>
                                    <td class="text-right">۰۱-۰۱-۱۳۹۵</td>
                                    <td class="text-right">تاریخ شمول</td>
                                </tr>
                                <tr>
                                    <td class="text-right">۰۱-۰۱-۱۳۹۹</td>
                                    <td class="text-right">تاریخ فراغت</td>
                                </tr>
                                <tr>
                                    <td class="text-right">۶۴۶۴۲۲</td>
                                    <td class="text-right">نمبر دیپلوم</td>
                                </tr>
                            </table>
<!--                            /student table -->
                        </div>
					</div>
<!--					/student  info-->
				</div>
            <div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="table-responsive">
<!--                 		table of student semester details -->
						<table class="table table-bordered" style="background-color: white;">
<!--							column of semester year -->
							<tr>
								<td colspan="5" class='text-center'>(1392) : سمستر چهارم سال</td>
								<td colspan="5" class='text-center'>(1392) : سمستر سوم سال  </td>
								<td colspan="5" class='text-center'>(1392) : سمستر دوم سال</td>
								<td colspan="5" class='text-center'>(1392) : سمستر اول سال</td>
							</tr>
<!--							/column of semester year-->
<!--							subject details-->
							<tr class="vertlabels">
								<td rowspan="2"><span class="text-center">کتگوری</span></td>
								<td rowspan="2"><span class="text-center">تعداد کریدت</span></td>
								<td colspan='2' class="text-center">نمرات</td>
								<td rowspan="2"><span class="text-center">مضامین</span></td>
								<td rowspan="2"><span class="text-center">کتگوری</span></td>
								<td rowspan="2"><span class="text-center">تعداد کریدت</span></td>
								<td colspan='2' class="text-center">نمرات</td>
								<td rowspan="2"><span class="text-center">مضامین</span></td>
								<td rowspan="2"><span class="text-center">کتگوری</span></td>
								<td rowspan="2"><span class="text-center">تعداد کریدت</span></td>
								<td colspan='2' class="text-center">نمرات</td>
								<td rowspan="2"><span class="text-center">مضامین</span></td>
								<td rowspan="2"><span class="text-center">کتگوری</span></td>
								<td rowspan="2"><span class="text-center">تعداد کریدت</span></td>
								<td colspan='2' class="text-center">نمرات</td>
								<td rowspan="2"><span class="text-center">مضامین</span></td>
							</tr>
<!--							/subject details-->
<!--							chance details-->
							<tr class="vertlabels">
								<td><span class="text-center">چانس دوم</span></td>
								<td><span class="text-center">چانس اول</span></td>
								<td><span class="text-center">چانس دوم</span></td>
								<td><span class="text-center">چانس اول</span></td>
								<td><span class="text-center">چانس دوم</span></td>
								<td><span class="text-center">چانس اول</span></td>
								<td><span class="text-center">چانس دوم</span></td>
								<td><span class="text-center">چانس اول</span></td>
							</tr>
<!--							/chance details-->
<!--							grading -->
							<tr>
								<td>C</td>
								<td>4</td>
								<td></td>
								<td>57</td>
								<td>اساسات</td>

								<td>D</td>
								<td>5</td>
								<td></td>
								<td>55</td>
								<td>Java</td>

								<td>B</td>
								<td>5</td>
								<td></td>
								<td>89</td>
								<td>Java 2</td>

								<td>D</td>
								<td>3</td>
								<td></td>
								<td>55</td>
								<td>C++</td>
							</tr>

							<tr>
								<td>A</td>
								<td>4</td>
								<td></td>
								<td>98</td>
								<td>Swift</td>

								<td>A</td>
								<td>4</td>
								<td></td>
								<td>98</td>
								<td>Swift</td>

								<td>A</td>
								<td>4</td>
								<td></td>
								<td>98</td>
								<td>Swift</td>

                                <td>A</td>
								<td>4</td>
								<td></td>
								<td>98</td>
								<td>Swift</td>
							</tr>
                            <tr>
								<td>C</td>
								<td>4</td>
								<td></td>
								<td>57</td>
								<td>اساسات</td>

								<td>D</td>
								<td>5</td>
								<td></td>
								<td>55</td>
								<td>Java</td>

								<td>B</td>
								<td>5</td>
								<td></td>
								<td>89</td>
								<td>Java 2</td>

								<td>D</td>
								<td>3</td>
								<td></td>
								<td>55</td>
								<td>C++</td>
							</tr>

							<tr>
								<td>A</td>
								<td>4</td>
								<td></td>
								<td>98</td>
								<td>Swift</td>

								<td>A</td>
								<td>4</td>
								<td></td>
								<td>98</td>
								<td>Swift</td>

								<td>A</td>
								<td>4</td>
								<td></td>
								<td>98</td>
								<td>Swift</td>

                                <td>A</td>
								<td>4</td>
								<td></td>
								<td>98</td>
								<td>Swift</td>
							</tr>
                            <tr>
								<td>C</td>
								<td>4</td>
								<td></td>
								<td>57</td>
								<td>اساسات</td>

								<td>D</td>
								<td>5</td>
								<td></td>
								<td>55</td>
								<td>Java</td>

								<td>B</td>
								<td>5</td>
								<td></td>
								<td>89</td>
								<td>Java 2</td>

								<td>D</td>
								<td>3</td>
								<td></td>
								<td>55</td>
								<td>C++</td>
							</tr>

							<tr>
								<td>A</td>
								<td>4</td>
								<td></td>
								<td>98</td>
								<td>Swift</td>

								<td>A</td>
								<td>4</td>
								<td></td>
								<td>98</td>
								<td>Swift</td>

								<td>A</td>
								<td>4</td>
								<td></td>
								<td>98</td>
								<td>Swift</td>

                                <td>A</td>
								<td>4</td>
								<td></td>
								<td>98</td>
								<td>Swift</td>
							</tr>
<!--							/grading-->
<!--							total -->
							<tr>
								<td colspan="4" class="text-center"></td>
								<td  class="text-center">مجموع کریدت</td>

                                <td colspan="4" class="text-center"></td>
								<td  class="text-center">مجموع کریدت</td>

                                <td colspan="4" class="text-center"></td>
								<td  class="text-center">مجموع کریدت</td>

                                <td colspan="4" class="text-center"></td>
								<td  class="text-center">مجموع کریدت</td>
							</tr>
							<tr>
								<td colspan="4" class="text-center"></td>
								<td class="text-center">مجموع نمرات</td>

                                <td colspan="4" class="text-center"></td>
								<td class="text-center">مجموع نمرات</td>

                                <td colspan="4" class="text-center"></td>
								<td class="text-center">مجموع نمرات</td>

                                <td colspan="4" class="text-center"></td>
								<td class="text-center">مجموع نمرات</td>
							</tr>
							<tr>
								<td colspan="4" class="text-center"></td>
								<td class="text-center">اوسط نمرات</td>

                                <td colspan="4" class="text-center"></td>
								<td class="text-center">اوسط نمرات</td>

                                <td colspan="4" class="text-center"></td>
								<td class="text-center">اوسط نمرات</td>

                                <td colspan="4" class="text-center"></td>
								<td class="text-center">اوسط نمرات</td>
							</tr>

							<tr>
								<td colspan="4" class="text-center"></td>
								<td class="text-center">نتیجه</td>

                                <td colspan="4" class="text-center"></td>
								<td class="text-center">نتیجه</td>

                                <td colspan="4" class="text-center"></td>
								<td class="text-center">نتیجه</td>

                                <td colspan="4" class="text-center"></td>
								<td class="text-center">نتیجه</td>
							</tr>
<!--							/total-->
						</table>
<!--                    	/table of student semester details-->
				</div>
			</div>

		</div>
    </div>
</div>
@stop
