<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title') | Bếu blog</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="/backend/dist/assets/vendor/bootstrap/css/bootstrap.min.css">
  <link href="/backend/dist/assets/vendor/fonts/montserrat/style.css" rel="stylesheet">
  <link rel="stylesheet" href="/backend/dist/assets/libs/css/style.css">
  <link rel="stylesheet" href="/backend/dist/assets/libs/css/app.css">
  <link rel="stylesheet" href="/backend/dist/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
  <link rel="stylesheet" href="/backend/dist/assets/vendor/charts/chartist-bundle/chartist.css">
  <link rel="stylesheet" href="/backend/dist/assets/vendor/charts/morris-bundle/morris.css">
  <link rel="stylesheet" href="/backend/dist/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="/backend/dist/assets/vendor/charts/c3charts/c3.css">
  <link rel="stylesheet" href="/backend/dist/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
  {{--  --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Ubuntu&display=swap" rel="stylesheet">
  
</head>
  <body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        @include('backend.includes.header')
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        @include('backend.includes.sidebar')
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
          
          
          <section class="dashboard-content">
            <div class="content-header">
              @yield('content-header')
              <!-- /.container-fluid -->
            </div>
            @yield('content')
          </section>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
        {{-- @include('backend.includes.footer') --}}
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="/backend/dist/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="/backend/dist/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="/backend/dist/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="/backend/dist/assets/libs/js/main-js.js"></script>
    <script src="/backend/dist/assets/libs/js/js.js"></script>
    <!-- chart chartist js -->
    <script src="/backend/dist/assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="/backend/dist/assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="/backend/dist/assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="/backend/dist/assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="/backend/dist/assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="/backend/dist/assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="/backend/dist/assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="/backend/dist/assets/libs/js/dashboard-ecommerce.js"></script>
  </body>
</html>