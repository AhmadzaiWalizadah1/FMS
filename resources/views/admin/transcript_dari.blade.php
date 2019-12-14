<!--inherate  from super class -->
@extends('admin.layout')

@section('content')

<div id="main_section" class="col-xs-12 col-sm-12 col-md-12">
	<div   class="container-fluid">
		<div  class="row">
			<div class="col-xs-12 col-sm-12 col-md-12" id="line" ></div>
		</div>
		<div  class="row">

			<div class="col-xs-4 col-sm-4 col-md-4"

			<br>
			<form method="post" action="Export_transcript_dari.blade.php">
				<!--                             return button-->

				<a href="{{route('transcript')}}"><button class="btn btn-info" type="button" class="form-control">برگشت</button></a>
				<!--              				export to excal-->
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

<div class="col-xs-12 col-sm-12 col-md-12">
	<div class="container-fluid">
		<br>
		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4">
				<div class="table-responsive">
					<table class="table table-bordered  border_thin_all bold11">

					</table>
				</div>
			</div>
			<!--                    university and minisrty logo-->
			<div class="col-xs-5 col-sm-5 col-md-5">
				<img src="photos/Afg.jpg" style="margin-top:50px ; margin-left:10px ; float:left ; height:110px; width:110px; "id="logo"/>
				<img src="photos/Ministery2.jpg" style="margin-top:50px ; float:right ; height:110px; width:110px;" id="logo"/>
				<!--						center title-->
				<h3 class="text-center bold12"> جمهوری اسلامی افغانستان </h3>
				<h4 class="text-center bold12"> وزارت تحصیلات عالی </h4>
				<h4 class="text-center bold12">پوهنتون بلخ</h4>
				<h4 class="text-center bold12">&nbsp; &nbsp;معاونیت امور محصلان</h4>
				<h4 class="text-center bold12">پوهنحی کمپیوتر ساینس</h4>
				<h3 class="text-center bold16u">&nbsp;&nbsp;ترانسکرپت نمرات محصلان</h3>
			</div>

			<div class="col-xs-3 col-sm-3 col-md-3 ">
				<div class="table-responsive">
					<table class="table table-bordered border_thin_all bold11">
						<?php

						if (!empty($_GET['dari-id'])){basic_info(); }
						?>
					</table>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="table-responsive">



				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="table-responsive">


				</div>
			</div>
		</div>
		<div>
			<p class="bold11 text-right">. نمرات هشت سمستر موصوف بدون قلم خورده گی ترتیب و ارسال است</p>
		</div>


		<div class="row">
			<div class="col-xs-3 col-sm-3 col-md-3">

				<p class="bold12 text-center">  ریس پوهنتون بلخ</p>
			</div>


			<div class="col-xs-3 col-sm-3 col-md-3">

				<p class="bold12 text-center"> معاون امور محصلان</p>
			</div>


			<div class="col-xs-3 col-sm-3 col-md-3">

				<p class="bold12 text-center"> ریس پوهنحی کمپیوتر ساینس</p>
			</div>


			<div class="col-xs-3 col-sm-3 col-md-3">


				<p class="bold12">مدیرتدریسی پوهنحی کمپیوتر ساینس</p>
			</div>
		</div>
	</div>
</div>
@stop
