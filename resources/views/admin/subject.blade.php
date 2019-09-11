  @extends('admin.layout')

  @section('content')
  <!-- The overal container for layout -->
  <div class="container-fluid">

    <!-- The Header of the page -->
     <h2 class="text-center"> مضامین </h2>

     <!-- The first row that cotain the contents of the page -->
  <div class="row">

    <div class="col-md-12">
      <div class="row">
        <!-- The cards for departments that show the details of departments -->
        <div class="col-md-3 col-md-offset-1" style= " margin-top:3%; border: 1px solid rgb(39, 115, 202); text-align:right;">

          <label>
            <h4 >لیست دیپارتمنت ها</h4>
          </label>
          <br>
          <label>
            <h4 > سافت ویر </h4>
          </label>
          <br>
          <label>
            <h4 >  دیتابیس</h4>
          </label>
          <br>
          <label>
            <h4 >شبکه  </h4>
          </label>
          <br>

          <button type="button" class="btn btn-primary  btn-block " data-toggle="modal" data-target="#new-department">اضافه نمودن دیپارتمنت</button>
          <br>
          <!-- department Modal -->
          <div id="new-department" class="modal fade " role="dialog">
            <div class="modal-dialog">

              <!-- Departement Modal contents-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title" style="text-align:center;">فورم اضافه نمودن دیپارتمنت</h4>
                </div>
                <div class="modal-body">
                  <!-- The form for deptartment contents -->
                  <form action="" method="post" >

                      <tr>
                        <td>
                          <label for="exampleInputEmail1">آی دی دیپارتمنت</label>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <input type="text" name="D_ID" class="form-control text-right" id="exampleInputEmail1" placeholder="آی دی دیپارتمنت را وارد کنید" value=""/>
                        </td>
                      </tr>
                      <tr>
                        <td>

                        </td>
                      </tr>
                      <tr>
                        <td>
                          <br />
                          <label for="exampleInputEmail1">نام دیپارتمنت</label>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <input type="text" name="dTitle" class="form-control text-right" id="exampleInputEmail1" placeholder="نام دیپارتمنت را وارد کنید" value=""/>
                        </td>
                      </tr>
                      <tr>
                        <td>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <br />
                        <label for="exampleInputEmail1">نام انگلیسی دیپارتمنت را وارد کنید</label>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="text" name="dE_title" class="form-control text-right" id="exampleInputEmail1" placeholder="نام انگلیسی دیپارتمنت را وارد کنید" value=""/>
                      </td>
                    </tr>
                    <tr>
                      <td>
                    </td>
                  </tr>



                <br />
                  <!-- The footer part of the Modal
                      That contain two buttons for accepting and destroying contents -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary " data-dismiss="modal">بازگشت</button>
                  <input type="submit" name="save_department" class="btn btn-primary

                   btn-md" value="ذخیره"></input>
                </div>

              </form>

            </div>

          </div>

        </div>
      </div>

    </div>
    <!-- End of the Modal  -->


    <div class="col-md-2 col-md-offset-6"  style= " margin-top:3%;">
      <button type="button" class="btn btn-primary  btn-block " data-toggle="modal" data-target="#new-course">اضافه نمودن مضمون</button>
      <!-- subjects Modal -->
      <div id="new-course" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Subject Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title" style="text-align:center;">فورم اضافه نمودن مضمون</h4>
            </div>
            <div class="modal-body text-right">

              <!-- The form for Subjects that collect info -->
              <form action="" method="post" >

                  <tr>
                    <td>
                      <label for="exampleInputEmail1">آی دی مضمون</label>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <input type="text" name="C_ID" class="form-control text-right" id="exampleInputEmail1" placeholder="آی دی مضمون را وارد کنید" value=""/>
                    </td>
                  </tr>
                  <tr>
                    <td>

                    </td>
                  </tr>
                  <tr>
                    <td>
                      <br />
                      <label for="exampleInputEmail1">نام مضمون</label>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <input type="text" name="Title" class="form-control text-right" id="exampleInputEmail1" placeholder="نام مضمون را بنویسید" value=""/>
                    </td>
                  </tr>
                  <tr>
                    <td>
                  </td>
                </tr>
                <tr>
                  <td>
                    <br />
                    <label for="exampleInputEmail1">نام انگلیسی مضمون را بنویسید</label>
                  </td>
                </tr>
                <tr>
                  <td>
                    <input type="text" name="E_title" class="form-control text-right" id="exampleInputEmail1" placeholder="نام انگلیسی مضمون را بنویسید" value=""/>
                  </td>
                </tr>
                <tr>
                  <td>
                </td>
              </tr>
              <tr>
                <td>
                  <label for="exampleInputEmail1">تعداد کریدت مضمون</label>
                </td>
              </tr>
              <tr>
                <td>
                  <input type="text" name="Credits" class="form-control text-right" id="exampleInputEmail1" placeholder="تعداد کریدت مضمون را وارد کنید" value=""/>
                </td>
              </tr>
              <tr>
                <td>


                </td>
              </tr>
              <tr>
                <td>
                  <br />
                  <label for="exampleInputEmail1">سمستر </label>
                </td>
              </tr>
              <tr>
                <td>
                  <select class="form-control" name="Semester" dir="rtl">
                    <option value="1">سمستر اول</option>
                    <option value="2">سمستر دوم</option>
                    <option value="3">سمستر سوم</option>
                    <option value="4">سمستر چهارم</option>
                    <option value="5">سمستر پنجم</option>
                    <option value="6">سمستر ششم</option>
                    <option value="7">سمستر هفتم</option>
                    <option value="8">سمستر هشتم</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>
              </td>
            </tr>
            <tr>
              <td>
                <br />
                <label for="exampleInputEmail1">دیپارتمنت</label>
              </td>
            </tr>
            <tr>
              <td>

                <select name="tD_ID"  class="form-control " dir="rtl">


                </select>
              </td>
            </tr>
            <tr>
              <td>
            </td>
          </tr>



        <br />
        <!-- the footer of subject Modal -->
        <div class="modal-footer">
          <button type="button" class="btn btn-primary " data-dismiss="modal">بازگشت</button>
            <input type="submit" name="save_course" class="btn btn-primary btn-md" value="ذخیره"></input>
        </div>
        <!-- End of the subject Modal -->
      </form>
      <!-- End of the form -->
    </div>

  </div>

  </div>
  </div>
  <!--fancy page code ends here-->
  </div>

  </div>
  <div class="row">
    <div class="col-md-12">

      <!-- Second row for list of subject for  classes -->
      <div class="row">
        <div class="col-md-2 col-md-offset-1 " style= "border:1px solid rgb(39, 115, 202);
        border-radius:3%; margin-top:3%; text-align:right;">
        <!-- The fourt one -->
        <div>
          <h4>صنف چهارم</h4>
          <h6>پایان نامه لیسانس</h6>
          <h6>پایان نامه لیسانس</h6>
          <h6>پایان نامه لیسانس</h6>
          <h6>پایان نامه لیسانس</h6>
        </div>


      </div>
      <!-- The third one -->
      <div class="col-md-2 col-md-offset-1" style= "border:1px solid rgb(39, 115, 202);
      border-radius:3%; margin-top:3%; text-align:right;">
      <div>
        <h4>صنف سوم</h4>
        <h6>نگارش علمی1</h6>
        <h6>نگارش علمی1</h6>
        <h6>نگارش علمی1</h6>
        <h6>نگارش علمی1</h6>

      </div>
    </div>

    <!-- The second one -->
    <div class="col-md-2 col-md-offset-1" style= "border:1px solid rgb(39, 115, 202);
    border-radius:3%; margin-top:3%; text-align:right;">
    <div>
      <h4>صنف دوم</h4>
      <h6>اساسات علمی و میتودیک </h6>
      <h6>اساسات علمی و میتودیک </h6>
      <h6>اساسات علمی و میتودیک </h6>
      <h6>اساسات علمی و میتودیک </h6>

    </div>


  </div>
  <!-- The first one -->
  <div class="col-md-2 col-md-offset-1 " style= "border:1px solid rgb(39, 115, 202);
  border-radius:3%; margin-top:3%; text-align:right;">
  <div>
    <h4>صنف اول</h4>
    <h6>آشنایی با انجنیری کمپیوتر1</h6>
    <h6>آشنایی با انجنیری کمپیوتر2</h6>
    <h6>آشنایی با انجنیری کمپیوتر3</h6>
    <h6>آشنایی با انجنیری کمپیوتر4</h6>
  </div>
  </div>
  </div>

  </div>
  </div>
  <!-- End of the Modal -->
  </div>
  <!-- End of the row -->
  </div>
  <!-- End of the overall container -->
  </div>
  <!-- End of the coding ....  -->
  @stop
