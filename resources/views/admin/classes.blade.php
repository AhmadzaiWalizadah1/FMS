@extends('admin.layout')

@section('content')
<link rel="stylesheet" href="{{asset('css/custom.css')}}">
<!--The overall Container-->
  <div class="container">
 <!--create the title of the exam_result page-->
    <h1 class="text-center">شقه امتحانات</h1>
    <hr>
   <div class="col-md-4">

     <!-- Create a form to input data-->
  <form  action="" method="post">
    <input type="submit" name="submit" value="جستجو" class="btn btn-primary">
    <div class="col-md-10">
      <input type="number" name="number" placeholder="برای نمایش شقه سال را وارد کنید" class="form-control">
      <br><br>
      <!-- the year field -->
      <div class="col-md-8">
        <input type="number" name="number" value="1345" class="form-control">
      </div>
    </div>
  </form>

   </div>
   <!-- this is used for the seperation purpose -->
   <div class="col-md-4">

   </div>
   <!-- end of seperation -->
    <div class="col-md-4">
      <input type="button" name="create" class="btn btn-primary" value="وارد نمودن فایل اکسل شقه">
      <input type="button" name="create" class="btn btn-primary" value="ایجاد شقه جدید" data-toggle="modal" data-target="#exampleModal">
        <br>
        <br>
         <input type="checkbox" aria-label="Checkbox for following text input"> انتخاب همه مضامین
    </div>
  </div>

  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title text-center" id="exampleModalLabel">فورم ایجاد شقه محصل</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form  action="#" method="post">
           <!-- student id -->
           <label for="id" class="">آی دی محصل</label>
          <input type="text" name="id" placeholder="آی دی محصل را وارد کنید"  class="form-control text_align">
          <br>
          <!-- subject name -->
          <label for="id">نام مضمون</label>
        <br>
         <select class="form-control" name="name" >
           <option value="IPCS" class="form-control">IPCS</option>
           <option value="IPCS">ICE</option>
           <option value="IPCS">MATH</option>
         </select>
         <br>
         <!-- Year -->
         <label for="id">سال</label>
        <input type="number" name="" placeholder="سال را وارد کنید"  class="form-control">
        <br>

         <label for="id">فعالیت صنفی</label>
         <input type="text" name="id" placeholder="فعالیت صنفی را وارد کیند"  class="form-control">

         <label for="id">کار خانگی</label>
         <input type="text" name="id" placeholder="فعالیت صنفی را وارد کیند"  class="form-control">

      <label for="id">پروژه</label>
     <input type="text" name="id" placeholder="فعالیت صنفی را وارد کیند"  class="form-control">

     <label for="id">امتحان ختم سمستر</label>
    <input type="text" name="id" placeholder="فعالیت صنفی را وارد کیند"  class="form-control">

    <label for="id">امتحان وسط سمستر</label>
   <input type="text" name="id" placeholder="فعالیت صنفی را وارد کیند"  class="form-control">
   <br>
      <!-- the footer part -->
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-primary">Save changes</button>

         </form>
      </div>

    </div>
  </div>
</div>
<!-- end of the Modal -->
<!--
| in here we are trying to add the
| cards to display a short description about the
| classes that are in this faculty
-->
<br><br><br>
<div class="row">
  <!--first card -->
  <div class="col-md-3">
    <div class="card" style="width: 20rem;">
      <div class="card-body">
        <h4 class="card-title text-center">صنف اول</h4>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <br><br><br>
        <div class="text-center">
          <a href="#" class="btn btn-primary ">معلومات بیشتر</a>
        </div>
      </div>
    </div>
    <!--end of card -->
  </div>

  <!--second card -->
  <div class="col-md-3">
    <div class="card" style="width: 20rem;">
      <div class="card-body">
        <h4 class="card-title text-center">صنف دوم</h4>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <br><br><br>
        <div class="text-center">
          <a href="#" class="btn btn-primary ">معلومات بیشتر</a>
        </div>
      </div>
    </div>
  <!-- end of card -->
  </div>

  <!--third card -->
  <div class="col-md-3">
    <div class="card" style="width: 20rem;">
      <div class="card-body">
        <h4 class="card-title text-center">صنف سوم</h4>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <br><br><br>
        <div class="text-center">
          <a href="#" class="btn btn-primary ">معلومات بیشتر</a>
        </div>
      </div>
    </div>
    <!--end of card -->
  </div>

  <!--fourth card -->
  <div class="col-md-3">
    <div class="card" style="width: 20rem;">
      <div class="card-body">
        <h4 class="card-title text-center">صنف چهارم</h4>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <br><br><br>
        <div class="text-center">
          <a href="#" class="btn btn-primary ">معلومات بیشتر</a>
        </div>
      </div>
    </div>
    <!--end of card-->
  </div>
<!-- end of the cards container -->
</div>
<br><br>
 <!--adding the buttons -->
 <input type="button" name="display" value="خروج" class="btn btn-primary" >
 <input type="button" name="display" value="نمایش و چاپ" class="btn btn-primary" >

<!-- end of the container -->
</div>

@stop
