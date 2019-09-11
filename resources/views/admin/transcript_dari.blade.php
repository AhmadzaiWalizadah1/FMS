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
                             <a href="transcript.php"><button class="btn btn-info" type="button" class="form-control">برگشت</button></a>
<!--              				export to excal-->
                            <button type="submit" class="btn btn-info" type="button" class="form-control"  name="export_transcript">صادر ترانسکرپت به اکسیل</button>
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
                              <?php   if (empty($_GET['dari-id'])){echo "صفحه به شکل نادرست به دسترسی قرار گرفته شده";}
                                
                                       else {additional_info(); }
                                ?>
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

                                        <?php
                                            if (!empty($_GET['dari-id'])){
                                                 check_full_partial($par_trans); 
                                                    marks_first_page();
                                            }
                                        ?>
                               
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="table-responsive">

                                        <?php
                                            
                                                    marks_second_page();
                                            
                                        ?>
                               
                            </div>
                        </div>
                    </div>	
                    <div>
                        <p class="bold11 text-right">. نمرات هشت سمستر موصوف بدون قلم خورده گی ترتیب و ارسال است</p>
                    </div>
            
            
                    <div class="row">
                        <div class="col-xs-3 col-sm-3 col-md-3">
                            <?php 
                                    $query="select degree, name, Last_name from staffs where Position='ریس پوهنتون بلخ';";
                                    $result=mysqli_query($connect,$query);
                                    while($row=mysqli_fetch_row($result)){
                                       echo'<p class="bold12 text-center">'.$row[0].' '.$row[1].' "'.$row[2].'"</p>'; 
                                    }
                            ?>
                            <p class="bold12 text-center">  ریس پوهنتون بلخ</p>
                        </div>
                        
                        
                        <div class="col-xs-3 col-sm-3 col-md-3">
                            <?php 
                                    $query="select degree, name, Last_name from staffs where Position=' معاون امور محصلان';";
                                    $result=mysqli_query($connect,$query);
                                    while($row=mysqli_fetch_row($result)){
                                       echo'<p class="bold12 text-center">'.$row[0].' '.$row[1].' "'.$row[2].'"</p>';  
                                    }
                            ?>
                            <p class="bold12 text-center"> معاون امور محصلان</p>
                        </div>
                        
                        
                        <div class="col-xs-3 col-sm-3 col-md-3">
                            <?php 
                                    $query="select degree, name, Last_name from staffs where position='رییس دانشکده کمپیوتر ساینس'";
                                    $result=mysqli_query($connect,$query);
                                    while($row=mysqli_fetch_row($result)){
                                        echo'<p class="bold12 text-center">'.$row[0].' '.$row[1].' "'.$row[2].'"</p>';  
                                    }
                            ?>
                            <p class="bold12 text-center"> ریس پوهنحی کمپیوتر ساینس</p>
                        </div>
                        
                        
                        <div class="col-xs-3 col-sm-3 col-md-3">
                            <?php 
                                    $query="select name, Last_name from staffs where Position='مدیر تدریسی دانشکده ';";
                                    $result=mysqli_query($connect,$query);
                                    while($row=mysqli_fetch_row($result)){
                                        echo'<p class="bold12 text-center">'.$row[0].' "'.$row[1].'"</p>';
                                    }
                            ?>
                           
                            <p class="bold12">مدیرتدریسی پوهنحی کمپیوتر ساینس</p>
                        </div>
                    </div>
			</div>		
    </div>
