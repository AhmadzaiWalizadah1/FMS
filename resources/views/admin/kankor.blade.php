@extends('admin.layout')

@section('content')
<!-- include the style sheet -->
<link rel="stylesheet" href="{{ asset('css/custom.css') }}">
<div class="container-fluid">
  <h2 class="text-center">لیست نتایج کانکور</h2>
  <br>
  <!-- the first row -->
  <div class="row" >
    <!-- the create new  button in here -->
    <div  class="col-sm-4 col-md-4 col-xs-3">

      <form  action="#" method="GET">
        <button type="submit" name="button" class="btn btn-primary"  data-toggle="modal" data-target="#exampleModalLong">ایجاد جدید</button>
      </div>
      <!-- end of the create new button -->

      <!-- Start the Modal code -->
      <!-- Modal -->
      <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <!-- the header -->
            <div class="modal-header">
              <h4 class="modal-title text-center" id="exampleModalLongTitle">فورمه ایجاد نتایج کانکور</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <!-- The body of the Modal -->
            <div class="modal-body">
              <!-- Content goes here. -->
              <!-- I divide the modal body into tow columns the first column and second column -->


              <!-- the second column -->
              <div class="col-md-6 col-sm-6 col-xs-12">
                <!-- Second column content start from here. -->

                <div dir="rtl">
                  <label for="englishSchool">مکتب به انګلیسی</label>
                  <input type="text" id="englishSchool" value="" class="form-control" placeholder="مکتب به انګلیسی">
                </div>

                <div dir="rtl">
                  <label for="GraduationDate">سال فراغت</label>
                  <input type="text" id="GraduationDate" value="" class="form-control" placeholder="سال فراغت">
                </div>

                <div dir="rtl">
                  <label for="yearOfKankor">سال اخذ کانکور</label>
                  <input type="text" id="yearOfKankor" value="" class="form-control" placeholder="سال اخذ کانکور">
                </div>

                <div dir="rtl">
                  <label for="kankorGrade">نمره کانکور</label>
                  <input type="text" id="kankorGrade" value="" class="form-control" placeholder="نمره کانکور">
                </div>

                <div dir="rtl">
                  <label for="Provence">ولایت</label>
                    <!-- Provence are here in select list -->
                    <select class="form-control" if="Provence">
                      <option value="کابل">کابل</option>
                      <option value="میدان وردک">میدان وردک</option>
                      <option value="بادغیس">بادغیس</option>
                      <option value="سمنگان">سمنگان</option>
                      <option value="هرات">هرات</option>
                      <option value="پروان">پروان</option>
                      <option value="بامیان">بامیان</option>
                      <option value="پکتیا">پکتیا</option>
                      <option value="پکتیکا">پکتیکا</option>
                      <option value="خوست">خوست</option>
                      <option value="بلخ">بلخ</option>
                      <option value="قندز">قندز</option>
                      <option value="کاپیسا">کاپیسا</option>
                      <option value="سرپل">سرپل</option>
                      <option value="جوزجان">جوزجان</option>
                      <option value="فاریاب">فاریاب</option>
                      <option value="ننگرهار">ننگرهار</option>
                    </select>

                </div>

                <div dir="rtl">
                  <label for="gender">جنسیت</label>
                  <!-- select option goes here. -->

                  <select class="form-control" id="gender">
                    <option value="مذگر">مذکر </option>
                    <option value="مونث">مونث</option>
                  </select>
                </div>


              </div>
              <!-- end of the second column -->

              <!-- the first column -->
              <div class="col-md-6 col-sm-6 col-xs-12" dir="rtl">

                <div dir="rtl">
                  <label for="id">آی دی کانکور</label>
                  <input type="text" id="id" value="" class="form-control" placeholder="آی دی کانکور">
                 </div>

                 <div dir="rtl">
                   <label for="name">نام</label>
                   <input type="text" id="name" value="" class="form-control" placeholder="نام">
                 </div>

                 <div dir="rtl">
                   <label for="fname">نام پدر</label>
                   <input type="text" id="fname" value="" class="form-control" placeholder="نام پدر">
                 </div>

                 <div dir="rtl">
                   <label for="gfname">نام پدر کلان</label>
                   <input type="text" id="gfname" value="" class="form-control" placeholder="نام پدر کلان">
                 </div>

                 <div dir="rtl">
                   <label for="surename">تخلص</label>
                   <input type="text" id="surename" value="" class="form-control" placeholder="تخلص">
                 </div>

                 <div dir="rtl">
                   <label for="school">مکتب</label>
                   <input type="text" id="school" value="" class="form-control" placeholder="مکتب">
                 </div>
                 <!-- end of the first column -->
              </div>
				<br/>
            </div>
            <!-- End of the Modal body. -->


            <!-- the Footer of the Modal -->
			
           <div class="modal-footer">
		  
			<button type="button" class="btn btn-secondary" data-dismiss="modal">بازگشت</button>
			<button type="submit" class="btn btn-primary">ذخیره</button>
	</div>
          </div>
        </div>
      </div>
      <!-- end the modal code -->


      <!-- The search box -->
      <div class="col-md-4  col-sm-4 col-xs-5" >
        <input type="text" name="search" placeholder="  را وارد نماید ID " class="form-control" >
      </form>
    </div>
    <!-- enf of the search box -->

     <!-- The button for Creating new results -->
    <div  >
      <a href="" class="btn btn-primary">جستجو</a>
    </div>
    <!-- end of the create new result -->
  </div>
  <!-- end of the row -->
  <!-- take a break line for better layout-->
  <hr>
  <br>
  <!-- make the table fully responsive -->
  <div class="table table-responsive">
  <!-- These are for better layout -->
  <div class="table table-bordered">
    <table class="table">
      <thead >
        <tr >
          <th>سوانح</th>
          <th >جنسیت</th>
          <th>ولایت</th>
          <th>نتیجه</th>
          <th>نمره کانکور</th>
          <th>سال اخذ کانکور</th>
          <th>سال فراغت</th>
          <th>مکتب</th>
          <th>تخلص</th>
          <th>نام پدر کلان</th>
          <th>نام پدر</th>
          <th>نام</th>
          <th>Kankor ID</t>
          </tr>
        </thead>
          <!-- table body -->
        <tbody>
        </tbody>
          <!-- end of the table body -->
          </table>
        </div>
</div>
  <!-- end of the container-fluid box -->
<br><br>
  @stop
