@extends('admin.layout')

@section('content')
<link rel="stylesheet" href="{{ asset('css/custom.css') }}">
<!-- LINK OF AJAX SEARCH -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->

<div class="container-fluid">
  <!-- the header of the page -->
  <h2 id="page-name" class="text-center">مدیریت کارمندان</h2>

  <!-- The first row start from here. -->
  <div class="row" >

    <!-- Creating new staff -->
    <div class="col-sm-4 col-xs-4">
      <form  action="{{URL::to('/admin/staff/')}}" method="post" role="search">
      {{ csrf_field() }}
        <a class="btn btn-primary"  data-toggle="modal" data-target="#new-staf"> ایجاد کارمند جدید</a>
      </div>
      <!-- end of the process -->

      <!-- MAKE THE SEARCH BOX -->
      <form action="/search" method="POST" role="search">
        {{ csrf_field() }}
        <div class="input-group">
            <input type="text" class="form-control" name="q"
                placeholder="Search users"> <span class="input-group-btn">
                <button type="submit" class="btn btn-default">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
            </span>
        </div>
    </form>
      <!--END OF THE SEARCH BOX  -->

  <!-- SEARCH RESULT  -->

<div class="container">
    @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    <h2>Sample User details</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>آی دی</th>
                <th>نام</th>
                <th>نام پدر</th>
                <th>تخلص</th>
                <th>وظیفه</th>
                <th>درجه تحصیل</th>
                <th>شماره مبایل</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $user)
            <tr>
                <td>{{$user->Staff_ID}}</td>
                <td>{{$user->Name}}</td>
                <td>{{$user->F_Name}}</td>
                <td>{{$user->Last_name}}</td>
                <td>{{$user->Position}}</td>
                <td>{{$user->Degree}}</td>
                <td>{{$user->Contact}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
<!-- END OF THE SEARCH RESULT -->



    <!-- The search button for searching purpose -->
    <div class="col-sm-2 col-xs-2" >
      <input type="submit" name="submit" value="جستجو" class="btn btn-primary">
    </div>
    </form>
  </div>
  <!--end of the first row-->
  <br>
  <hr>
  <br>
  <!-- for the better layout purpose -->


  <!-- Second row start from here.. -->
  <div class="row">

    <!-- container for the table  -->
    <div class="col-xs-12 col-sm-12 col-md-12">
      <!-- the table  -->
      <div class="table-responsive">
        <br>
        <div class="table table-bordered">
          <table class="table table-hover table-bordered btn-in-table">
            <thead >
              <th class="left">شماره تلیفون</th>
              <th class="left">درجه تحصیلی</th>
              <th class="left">وظیفه</th>
              <th class="left">تخلص</th>
              <th class="left">نام پدر</th>
              <th class="left">نام</th>
              <th class="left">آی دی نمبر</th>
            </thead>
            <tbody>
              @foreach ($staff as $stafff)
              <tr>
                <td>{{$stafff ->Contact}}</td>
                <td>{{$stafff ->Degree}}</td>
                <td>{{$stafff ->Position}}</td>
                <td>{{$stafff ->Last_name}}</td>
                <td>{{$stafff ->F_Name}}</td>
                <td>{{$stafff ->Name}}</td>
                <td>{{$stafff ->Staff_ID}}</td>

              </tr>
              @endforeach

            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- end of the second row -->
  </div>

  <!-- Modal start from here.... -->
  <!-- Modal button  -->
  <form  action="{{action('staffController@store')}}" method="post">
    <!-- adding csrf token -->
    {{ csrf_field() }}

    <div class="modal fade" id="new-staf" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <!-- the Modal div that contain all content of the Modal -->
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <!-- the Modal headaer part -->
          <div class="modal-header">

            <div class="text-center">
              <h4 class="modal-title" id="exampleModalLabel">فورمه ایجاد شقه امتحانات</h4>
            </div>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- this is the body of the Modal in here we are going to put the
            necessery containt about student, student score, Home Work of studnt
            and many more usefull information
          -->

          <div dir="rtl">
            <label for="name"> آی دی کارمند</label>
            <input type="text" name="Staff_ID" id="name" value="" class="form-control" placeholder="آی دی کارمند">
          </div>

          <div dir="rtl">
            <label for="name">نام</label>
            <input type="text" name="Name"  id="name" value="" class="form-control" placeholder="نام">
          </div>

          <div dir="rtl">
            <label for="classActivity"> نام به انگلیسی</label>
            <input type="text" name="E_Name" id="classActivity" value="" class="form-control" placeholder="نام به انگلیسی ">
          </div>

          <div dir="rtl">
            <label for="homework">تخلص</label>
            <input type="text" name="Last_name" id="homework" value="" class="form-control" placeholder="تخلص">
          </div>

          <div dir="rtl">
            <label for="project"> تخلص به انگلیسی</label>
            <input type="text" name="E_last_name" id="project" value="" class="form-control" placeholder=" تخلص به انگلیسی ">
          </div>

          <div dir="rtl">
            <label for="midTermExam">نام پدر</label>
            <input type="text" name="F_Name" id="midTermExam" value="" class="form-control" placeholder=" نام پدر ">
          </div>

          <div dir="rtl">
            <label for="finalExam"> درجه علمی  </label>
            <input type="text" name="Degree" id="finalExam" value="" class="form-control" placeholder=" درجه علمی ">
          </div>

          <div dir="rtl">
            <label for="finalExam"> درجه علمی به انگلیسی</label>
            <input type="text" name="E_degree" id="finalExam" value="" class="form-control" placeholder=" درجه علمی به انگلیسی">
          </div>

          <div dir="rtl">
            <label for="finalExam"> وظیفه  </label>
            <input type="text" name="Position" id="finalExam" value="" class="form-control" placeholder=" وظیفه">
          </div>

          <div dir="rtl">
            <label for="finalExam"> وظیفه به انگلیسی </label>
            <input type="text" name="E_position" id="finalExam" value="" class="form-control" placeholder=" وظیفه به اننگلیسی ">
          </div>

          <div dir="rtl">
            <label for="finalExam">شماره تماس </label>
            <input type="text" name="Contact" id="finalExam" value="" class="form-control" placeholder="شماره تماس ">
          </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">بازگشت</button>
          <button type="submit" class="btn btn-primary">ذخیره</button>
        </div>
      </form>
      <!-- end of the form -->
    </div>
  </div>
</div>
<!-- end of the Modal container -->

<!-- Modal end in here.... -->

</div>
</div>  <!-- end of content row -->
</div><!-- end of content -->
</div><!-- end of main section -->

<!-- JQUERY CODE  -->

<script>
$(document).ready(function(){

 fetch_customer_data();

 function fetch_customer_data(query = '')
 {
  $.ajax({
   url:"{{ route('live_search.action') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('tbody').html(data.table_data);
    $('#total_records').text(data.total_data);
   }
  })
 }
 $(document).on('keyup', '#search', function(){
  var query = $(this).val();
  fetch_customer_data(query);
 });
});
</script>

<!-- END OF THE JQUERY CODE -->



















@stop
