<!--inherate  from super class -->
@extends('admin.layout')
@section('content')

	<div id="main_section" class="col-xs-12 col-sm-12 col-md-12">
		<div   class="container-fluid">
			<div  class="row">
				<div class="col-xs-12 col-sm-12 col-md-12" id="line" ></div>
			</div>
            <div  class="row">
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div>
                    <br>
                     <form method="post" action="Export_transcript_dari.blade.php">
<!--                          return button      -->
                         <a href="{{route('transcript')}}"><button class="btn btn-info" type="button" class="form-control">برگشت</button></a>
<!--  					export to excal  -->
                        <button type="submit" class="btn btn-info" type="button" class="form-control"  name="export_transcript">صادر ترانسکرپت به اکسیل</button>



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
                </div>
            </div>
		 </div>
     </div>
</div>

	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="container-fluid">
			<br>
				<div class="row">
					<div class="col-xs-3 col-sm-3 col-md-3">
						  <div class="table-responsive">
                             <table class="table table-bordered bold9 border_thick_3sides  border_thin_all">


                            </table>
                        </div>
                        <p class="bold9"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Faculty Reg No: <u> </u></p>
					</div>
<!--                    ministry and university logo-->
					<div class="col-xs-5 col-sm-5 col-md-5 ">
						<img src="photos/Afg.jpg" style="margin-top:40px ; margin-left:-25px ; margin-right:10px; float:left; height:90px;  width:90px;" id="logo"/>
						<img src="photos/Ministery2.jpg" style="margin-top:40px; margin-right:-20px; float:right; height:90px; width:90px;" id="logo"/>
<!--						center title -->
						<h5 class="text-center bold13">Islamic Republic of Afghanistan</h5>
						<h5 class="text-center bold13">Ministry of Higher Education</h5>
						<h5 class="text-center bold13">Balkh University</h5>
						<h5 class="text-center bold11">Official transcript </h5>
					</div>


                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="">
                            <table class="table table-bordered bold9 border_thick_left border_thick_top border_thin_all">

                            </table>
                        </div>
                        <p class="bold9"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Student Reg No:</p>
					</div>
				</div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="" >

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="table-responsive" >

                        </div>
                    </div>
                </div>

            <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <p class="bold11">

                       Grading Point System: A=(90 - 100), B=(80 - 89), C=(70 - 79), F=(F is not indicated on the transcript) not calculated in the GPA. SGAP stands for Semester Grade Point Average. CGPA <br> stands for Cumulative Grade Point Average. A: Distinguished, B: Good, C: Satisfaction, D: Poor

                        </p>
                    </div>
                </div>
<!--            	place for signatures -->
                <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-4">

                        <p class="text-center bold11">Academic Register</p>
                        <p class="text-center">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</p>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <p class="text-center bold11">Dean of Faculty</p>
                           <p class="text-center">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</p>


                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">

                                  <p class="text-center bold11">Vice-Chancellor of students Affairs</p>
                                      <p class="text-center">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</p>
                    </div>

                </div>

			</div>


    </div>
@stop
