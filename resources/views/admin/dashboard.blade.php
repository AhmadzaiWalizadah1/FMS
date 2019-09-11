@extends('admin.layout')

@section('content')
<!-- The header of the Dashboard -->
    <h1>Dashboard</h1>
    <br>

    <!-- the overall container for contents -->
  <div class="container-fluid">
    <!-- the first row of cards -->
    <div class="row">
      <!-- the first column of the row -->
   <div class="col-md-3 ">
     <!-- the first image -->
     <div class="thumbnail  border_radius ">
       <a href="{{route('kankor')}}">
         <img src="{{asset('images/icon/nataiej.jpg')}}" alt="Lights" style="width:50%" class="">

           <p class=" text-center">نتایج کانکور</p>

       </a>
     </div>
   </div>
   <!-- the second column of row -->
   <div class="col-md-3">

     <div class="thumbnail  border_radius ">
       <a href="{{route('sawaneh')}}">

         <!-- the second image -->
         <img src="{{asset('images/icon/sawaneh.jpg')}}" alt="Lights" style="width:50%">

           <p class=" text-center">سوانح</p>

       </a>
     </div>
   </div>
   <!-- the third column -->
   <div class="col-md-3">
     <div class="thumbnail  border_radius">
       <a href="{{route('subject')}}">
         <!-- The third image -->
         <img src="{{asset('images/icon/subjects.png')}}" alt="Lights" style="width:50%">

           <p class=" text-center"> مضامین</p>

       </a>
     </div>
   </div>
   <!-- the fourth column -->
   <div class="col-md-3">
     <div class="thumbnail  border_radius">
       <a href="#">
         <!-- the fourth image -->
         <img src="{{asset('images/icon/staff.png')}}" alt="Lights" style="width:50%">

           <p class=" text-center">کارمندان </p>

       </a>
     </div>
   </div>
  </div>
  <br>
  <!-- the second row  -->
  <div class="row">
  <div class="col-md-3">
   <div class="thumbnail  border_radius ">
     <a href="#">
       <!-- the first image -->
       <img src="{{asset('images/icon/hazery.png')}}" alt="Lights" style="width:50%">

         <p class=" text-center"> حاضری</p>

     </a>
   </div>
  </div>
  <!-- the second column -->
  <div class="col-md-3">
   <div class="thumbnail  border_radius">
     <a href="{{route('exam_result')}}">
       <!-- the second image -->
       <img src="{{asset('images/icon/shuqa.png')}}" alt="Lights" style="width:50%">

         <p class=" text-center">شفه</p>

     </a>
   </div>
  </div>
  <!-- the third column -->
  <div class="col-md-3">
   <div class="thumbnail  border_radius">
     <a href="{{route('semister_result')}}">
       <!-- the third image -->
       <img src="{{asset('images/icon/nataiej.jpg')}}" alt="Lights" style="width:50%">

         <p class=" text-center"> نتایج سمستر</p>

     </a>
   </div>
  </div>
  <!-- the fourth column -->
  <div class="col-md-3">
   <div class="thumbnail  border_radius">
     <a href="{{route('transcript')}}">
       <!-- the fouth image -->
       <img src="{{asset('images/icon/transcript.png')}}" alt="Lights" style="width:50%">

         <p class=" text-center">ترانسکرپت </p>

     </a>
   </div>
  </div>
  </div>
  <br>
  <!-- the fifth column -->
  <div class="row">
  <div class="col-md-3">
   <div class="thumbnail  border_radius">
     <a href="#">
       <!-- the fifth image -->
       <img src="{{asset('images/icon/hazery.png')}}" alt="Lights" style="width:50%">

     </a>
   </div>
   <!-- end of the image container -->
  </div>
  <!-- end of the row -->
  </div>
  </div>
  <!-- end of the overall container. -->

@stop
