@extends('admin.layout')

@section('content')
<link rel="stylesheet" href="{{ asset('css/custom.css') }}">
<div class="container-fluid">
  <h2 style="text-align:right"> سوانح محصلین</h2>
  <br>
  <!--The first row -->
  <div class="row" >

    <!-- Creating new Sawanih -->
    <div class="col-sm-3 col-xs-3">
      <form  action="" method="post">
        <a href="{{route('sawanehForm')}}" class="btn btn-primary"> ایجاد سوانح تبدیلی</a>
      </div>
      <!-- The Search bar for this page -->
      <div class="col-md-4 col-sm-7 col-xs-7 " >
        <input type="text" name="number" placeholder="  را وارد نماید ID " class="form-control" >
      </form>
    </div>

    <!-- The Search button for this page -->
    <div class="col-sm-2 col-xs-2" >
      <input type="submit" name="submit" value="جستجو" class="btn btn-primary">
    </div>

  </div>
  <!-- End of the first row -->
  <br>
  <hr>
  <!-- Horizontoal line for better layout -->

  <!-- The Table of the student informations...-->
  <div class="table table-bordered">
    <table class="table table-hover table-bordered" >
      <thead>

        <tr>
          <th>جزییات</th>
          <th>تخلص</th>
          <th>نام پدر</th>
          <th>نام</th>
          <th>Kankor ID</th>
        </tr>

      </thead>
      <tbody>
        <!-- Table body Started from here. -->
         @foreach $students as student
          <td>{{$student ->last_name}}</td>

          @endforeach
      </tbody>
    </table>
    <!-- end of the table div -->
  </div>

  <!-- end of the container -->
</div>

@stop
