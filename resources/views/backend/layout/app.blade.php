<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - Garments</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('public/backend/garments/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('public/backend/garments/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('public/backend/garments/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/backend/garments/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('public/backend/garments/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/backend/garments/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('public/backend/garments/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('public/backend/garments/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <!--<link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('public/backend/garments/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  @include('backend.layout.header')
  @include('backend.layout.sidebar')

  @include('backend.layout.c_messages')
  @yield('content')

  @include('backend.layout.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>

  <!-- Vendor JS Files -->
  <script src="{{asset('public/backend/garments/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('public/backend/garments/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('public/backend/garments/assets/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{asset('public/backend/garments/assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('public/backend/garments/assets/vendor/quill/quill.min.js')}}"></script>
  <!--<script src="{{asset('public/backend/garments/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>-->
  <script src="{{asset('public/backend/garments/assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('public/backend/garments/assets/vendor/php-email-form/validate.js')}}"></script>

  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js" />
  <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js" />

  <!-- Template Main JS File -->
  <script src="{{asset('public/backend/garments/assets/js/main.js')}}"></script>
  <script type="text/javascript">
    new DataTable('#example');
  </script>


</body>

</html>