<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>FacultyMS</title>
  <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ asset('adminlte/bootstrap/css/bootstrap.min.css') }}">

  <!-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{asset('fontawesome/css/fontawesome.min.css')}}">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('adminlte/css/AdminLTE.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="{{ asset('adminlte/css/skins/skin-green.min.css') }}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

@yield('styles')

</head>
<!-- /resources/views/admin/layout.blade.php   -->
<body class="hold-transition skin-green sidebar-mini ">
<div class="wrapper">

<!-- Main Header -->
@include('admin.includes.header')
<!-- End Main Header -->



<!-- Left side column. contains the logo and sidebar -->

  @include('admin.includes.sidebar')


<!-- /.sidebar-menu -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <!-- Main content -->
    <section class="content">
      <!-- Your Page Content Here -->
        @yield('content')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Main Footer -->
  @include('admin.includes.footer')
  <!--  Main footer end -->


  <!-- Control Sidebar -->
  @include('admin.includes.control')
  <!-- /.control-sidebar -->


  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg  "></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<!-- <script src="{{ asset('adminlte/plugins/jQuery/jquery-2.2.3.min.js') }}"></script> -->
 <script src="//code.jquery.com/jquery-3.2.1.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('adminlte/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- AdminLTE App -->
<script src="{{ asset('adminlte/js/app.min.js') }}"></script>

<script src="{{ asset('js/toastr.min.js') }}"></script>

<script>
    @if( Session::has('success') )
        toastr.success("{{ Session::get('success') }}")
    @endif

    @if( Session::has('info') )
        toastr.info("{{ Session::get('info') }}")
    @endif

    @if( Session::has('error') )

            toastr.error("{{ Session::get('error') }}")

    @endif

</script>

@yield('scripts')

</body>
</html>
