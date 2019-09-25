@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('./css/ap.css')}}">
<!-- Making a Jumbotron here for better style -->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h2 class="display-3"><b>C</b>omputer <b>S</b>cience</h2>
    <p class="lead">Faculty Management System</p>
  </div>
</div>

<!-- creating the parallax part-->
<div class="container-fluid carousel-fluid">
  <!-- create a carousel-->
  <div id="myCarousel" class="carousel slide carousel-fixed-top">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>
    <!-- making the slide-->
    <div class="carousel-inner">
      <!-- include the items-->

      <!-- the first item-->
      <div class="item active">
        <img src="images/1.jpg" alt="first picture" class="img">
        <!-- making the captions of slider-->
        <div class="carousel-caption">
          <h2 class="animated bounceInLeft" style="animation-delay: 1s;">We Are Realiable</h2>
          <h3 class="animated bounceInRight" style="animation-delay:2s;" >IT center of balkh is the best it center</h3>
        </div>
      </div>
      <!-- the second item-->
      <div class="item">
        <img src="images/2.jpg" alt="second picture" class="img img-responsive">
        <!-- making the captions of slider-->
        <div class="carousel-caption">
          <h2 class="animated slideInDown" style="animation-delay: 1s;">We Are Realiable</h2>
          <h3 class="animated slideInUp" style="animation-delay:2s;">IT center of balkh is the best it center</h3>
        </div>
      </div>
      <!-- the third item-->
      <div class="item">
        <img src="images/3.jpg" alt="third picture" class="img img-responsive">
        <!-- making the captions of slider-->
        <div class="carousel-caption">
          <h2 class="animated zoomIn" style="animation-delay: 1s;" >We Are Realiable</h2>
          <h3 class="animated zoomIn"  style="animation-delay:2s;">IT center of balkh is the best it center</h3>

        </div>
      </div>

      <!-- the fourth item-->
      <div class="item">
        <img src="images/4.jpg" alt="fourth picture" class="img img-responsive">
        <!-- making the captions of slider-->
        <div class="carousel-caption">
          <h2 class="animated zoomIn" style="animation-delay: 1s;" >We Are Realiable</h2>
          <h3 class="animated zoomIn"  style="animation-delay:2s;">IT center of balkh is the best it center</h3>

        </div>
      </div>

      <!-- the fifth item-->
      <div class="item">
        <img src="images/5.jpg" alt="fifth picture" class="img img-responsive">
        <!-- making the captions of slider-->
        <div class="carousel-caption">
          <h2 class="animated zoomIn" style="animation-delay: 1s;" >We Are Realiable</h2>
          <h3 class="animated zoomIn"  style="animation-delay:2s;">IT center of balkh is the best it center</h3>

        </div>
      </div>
    </div>
    <!-- making a slide control button at the left-->
    <a href="#myCarousel" class="carousel-control left" data-slide = "prev">
      <span class="icon-prev"></span>
    </a>
    <!-- making a slide control button at the left-->
    <a href="#myCarousel" class="carousel-control right" data-slide = "next">
      <span class="icon-next"></span>
    </a>

  </div>
  <!-- end of the parallax section-->
  <!-- the second row -->
  <div class="row">
    <section>
      <h1 class="text-center">About Computer Science faculty</h1>
     <p>Video a  provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document.
To make your document look professionally produced, Word provides header, footer, cover page, and text box designs that complement each other. For example, you can add a matching cover page, header, and sidebar. Click Insert and then choose the elements you want from the different galleries.
Themes and styles also help keep your document coordinated. When you click Design and choose a new Theme, the pictures, charts, and SmartArt graphics change to match your new theme. When you apply styles, your headings change to match the new theme.
Save time in Word with new buttons that show up where you need them. To change the way a picture fits in your document, click it and a button for layout options appears next to it. When you work on a table, click where you want to add a row or a column, and then click the plus sign.
Reading is easier, too, in the new Reading view. You can collapse parts of the document and focus on the text you want. If you need to stop reading before you reach the end, Word remembers where you left off - even on another device.
</p>
<p>
Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document.
To make your document look professionally produced, Word provides header, footer, cover page, and text box designs that complement each other. For example, you can add a matching cover page, header, and sidebar. Click Insert and then choose the elements you want from the different galleries.
Themes and styles also help keep your document coordinated. When you click Design and choose a new Theme, the pictures, charts, and SmartArt graphics change to match your new theme. When you apply styles, your headings change to match the new theme.
</p>

    </section>
  </div>

  <!-- footer section -->
  <footer>

    <p class="text-center"> &copy; All Right Reserved </p>

  </footer>

</div>

@endsection
