@extends('layouts.app')

@section('content')
<!-- <link rel="stylesheet" href="{{asset('./css/app.css')}}"> -->
<link rel="stylesheet" href="{{asset('./css/slider.css')}}">
<link rel="stylesheet" href="{{asset('./css/animate.css')}}">
<link rel="stylesheet" href="{{asset('./css/welcome.css')}}">
<!-- row for jumbotron -->
<div class="row">
  <!-- we divide the row into three equal columns -->
  <div class="col-md-3">
    <p class="animated bounceInLeft">  <img src="images/mohe.jpg" alt="Mohe" class="img mohe-logo"></p>
  </div>
  <!-- the second column for header  -->
  <div class="col-md-6">
    <h2 class="header bounceOut text-center" dir="rtl" style="animation-delay: 1s;"> پوهنځی کمپیوتر ساینس</h2>
    <br>
    <h4 dir="rtl" class="text-center">پوهنحی کمپیوتر ساینس پوهنتون بلخ از جمله دهمین پوهنحی تشکیل شده در پوهنتون بلخ میباشد.</h4>
    <h4 dir="rtl" class="text-center">البته  این پوهنحی در سال 1390 ایجاد و شروع به جذب محصلین نموده  تحت ریاست محترم پوهندوی انجنیر محمد شریف " امین" </h4>
  </div>
  <!-- the third colum for CS logo -->
  <div class="col-md-3">
    <p class="animated bounceInRight" style="animation-delay: 1s;"> <img src="images/balkh.jpg" alt="Mohe" class="img balkh-logo"></p>
  </div>
</div>
<!-- the overall fluid container -->
<div class="container-fluid">
  <!-- first row -->
  <div class="row">
  <div class="col-md-12">
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
        <img src="images/2.jpg" alt="second picture" class="img">
        <!-- making the captions of slider-->
        <div class="carousel-caption">
          <h2 class="animated slideInDown" style="animation-delay: 1s;">We Are Realiable</h2>
          <h3 class="animated slideInUp" style="animation-delay:2s;">IT center of balkh is the best it center</h3>
        </div>
      </div>
      <!-- the third item-->
      <div class="item">
        <img src="images/3.jpg" alt="third picture" class="img">
        <!-- making the captions of slider-->
        <div class="carousel-caption">
          <h2 class="animated zoomIn" style="animation-delay: 1s;" >We Are Realiable</h2>
          <h3 class="animated zoomIn"  style="animation-delay:2s;">IT center of balkh is the best it center</h3>

        </div>
      </div>

      <!-- the fourth item-->
      <div class="item">
        <img src="images/4.jpg" alt="fourth picture" class="img ">
        <!-- making the captions of slider-->
        <div class="carousel-caption">
          <h2 class="animated zoomIn" style="animation-delay: 1s;" >We Are Realiable</h2>
          <h3 class="animated zoomIn"  style="animation-delay:2s;">IT center of balkh is the best it center</h3>

        </div>
      </div>

      <!-- the fifth item-->
      <div class="item">
        <img src="images/5.jpg" alt="fifth picture" class="img">
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
  </div>
    </div>
  <!-- end of the parallax section-->
  <!-- end of the first row -->

  <!-- the second row -->
  <div class="row">
    <!-- inner container for contents -->
    <div class="col-md-12">
      <!-- actual contents -->
    <div class="col-md-11 overall-container">
      <section>
        <h1 class="text-center" dir="rtl">معلومات عمومی در باره پوهنحی کمپیوتر ساینس پوهنتون بلخ</h1>
        <p dir="rtl">پوهنحی کمپیوتر ساینس پوهنتون بلخ از جمله دهمین پوهنحی تشکیل شده در پوهنتون بلخ میباشد. البته  این پوهنحی در سال 1390 ایجاد و شروع به جذب محصلین نموده  تحت ریاست محترم پوهندوی انجنیر محمد شریف " امین"
          مکان اولی این پوهنحی در پوهنتون مرکزی پوهنتون بلخ بود بعد از دوسال فعالیت با ایجاد تعمیر های جدید در پوهنتون جدید بلخ پوهنحی کمپیوتر ساینس از مکان اولی خود در سال 1392 به پوهنتون جدید نقل مکان نمود از بنیاد گزاران اصلی این پوهنحی میتوان نامبرد:
        </p>
        <!-- Creating list for Teachers -->
        <ul dir="rtl">
          <li>رئیس صاحب پوهنتون پوهندوی مکمل " الکوزی "</li>
          <li>پوهندوی دیپلوم انجنیر محمد شریف " امین "</li>
          <li>پوهنیار دیپلوم انجنیر نوید " رحمانی"</li>
          <li>پوهنیار دیپلوم انجنیر سید جاهد " حسینی"</li>
        </ul>
        <p dir="rtl">همچنان این پوهنحی دارای سه دیپارتمنت بوده که عبارت از :</p>
        <ul dir="rtl">
          <li>	سیستم های پایگاه های اطلاعاتی (Database and information system)</li>
          <li>	انجنیری نرم افزار ( Software engineering)</li>
          <li>سیستم های عامل و ارتباطات (    ) که هنوز فارغ دهی نمی باشد.</li>
        </ul>
        <br>
        <p dir="rtl">دیپارتمنت شمار اول و دوم فعال و فارغ دهنده میباشد. اما دیپارتمنت سوم تا هنوز فعال نیست بعد از برگشت اساتید این پوهنحی از مقطع ماستری و دوکتورا فعال خواهد شد.
          تا اکنون که سال 1396 است چهار دوره این پوهنحی فارغ داده محصلین را تقدیم جامعه نموده که خوشبختانه اکثریت محصلین فارغ این پوهنحی شامل وظیفه بوده و در ادارات دولتی ، سکتور خصوصی ، پوهنتون های خصوصی در داخل و خارج از کشور مصروف خدمات میباشند.
        </p>
      </section>
      <!-- Start new article -->
      <article dir="rtl" class="Graduation">
        <h3 dir="rtl">تعداد محصلین در سال های فارغ شده</h3>
        <ul dir="rtl">
          <li>  دور اول 55 محصل در سال 1393 از این پوهنحی فارغ گردیده</li>
          <li>دور دوم80 محصل در سال 1394  محصل فارغ گردیده اند.</li>
          <li>دور سوم 59 محصل در سال 1395 فارغ گردیده اند.</li>
          <li>دور چهارم 59 محصل در سال 1396 فارغ گردیده اند.</li>
        </ul>
      </article>
      <!-- end of article -->
      <article class="Software" dir="rtl">
        <h2>دیپارتمنت انجنیری نرم افزار (Software Engineering) </h2>
        <p dir="rtl">این دیپارتمنت دارای پنج عضو کادر علمی میباشد که هریک :</p>
        <ul dir="rtl">
          <li>	پوهیالی رحیم داد فیصل " صافی" آمر دیپارتمنت </li>
          <li>	پوهیالی محمد اسلم همت " قاچمس"</li>
          <li>پوهیالی بی بی وجیهه " نصرت"</li>
          <li>	نامزد پوهیالی روح الله " ایوبی"</li>
          <li>	نامزد پوهیالی ام فروه " حسینی"</li>
        </ul>
        <p dir="rtl">ازجمله نامزد پوهیالی روح الله " ایوبی " و نامزد پوهیالی ام فروه " حسینی " مصروف تحصیل مقطع ماستری در پوهنتون تخنیکی برلین کشور آلمان میباشند.
          محترمه پوهیالی بی بی وجیهه " نصرت" و پوهیالی محمد اسلم همت " قاچمس" هریک 18 کردیدیت در این دیپارتمنت تدریس می نمایند.
        </p>
        <p dir="rtl">دیپارتمنت انجنیری نرم افزار قابلیت و ظرفیت درامد زایی را دارد. مشخصا در صورت مجودیت چارچوب قانونی این دیپارتمنت قادر است تا از طریق ایجاد نرم افزار ها و برگزاری دوره های آموزشی برای ارگان های دولتی و شرکت های سرمایه گذاری خصوصی کوچک و بزرگ تولید پول و درامد نماید.نیارمندی های مبرم این دیپارتمنت فراهم نموده شرایط تحصیل در مقطع ماستری و دکتورا برای اساتید این دیپار
          تمنت میباشد.</p>
        </article>
        <!-- end of article -->
        <article class="Database" dir="rtl">
          <h2>دیپارتمنت سیستم های پایگاه اطلاعاتی (Database and Information Systems)</h2>
          <p dir="rtl">این دیپارتمنت نیز دارای چهار استاد میباشد که هریک :</p>
          <ul>
            <li>پوهنیار سحر " حلیم" آمر دیپارتمنت </li>
            <li>پوهنیار ولیده " سرداری " </li>
            <li>	پوهنیار نوید " رحمانی " </li>
            <li>پوهنیار رحیم داد فیصل " صافی " </li>
          </ul>
          <p>قابل ذکر است که هر یک از اساتید این دیپارتمنت 22 ساعت در هفته تدریسی میکنند.
            این دیپارتمنت فعال و فارغ دهی میباشد اما دارای کدام منبع عایداتی ندارد.
          </p>
        </article>
        <!-- end of article -->
      </div>
      <!--end of contents container -->
    </div>
    <!-- end of the actual content contaienr -->
    </div>
    <!-- end of 12 column div -->

    <!-- footer section -->
    <footer>

      <p class="text-center"> &copy; All Right Reserved </p>

    </footer>

  </div>

  @endsection
