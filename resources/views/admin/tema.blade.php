<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title')</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('yonetim')}}/images/favicon.png">
    <!-- Pignose Calender -->
    <link href="{{asset('yonetim')}}/plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    @yield('css')
    <!-- Custom Stylesheet -->
    <link href="{{asset('yonetim')}}/css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    
   
    
    
    <div id="main-wrapper">

        @include('admin.sabitler.header')
        @include('admin.sabitler.menu')
        @yield('orta')
        @include('admin.sabitler.footer')  
      
       
       
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="{{asset('yonetim')}}/plugins/common/common.min.js"></script>
    <script src="{{asset('yonetim')}}/js/custom.min.js"></script>
    <script src="{{asset('yonetim')}}/js/settings.js"></script>
    <script src="{{asset('yonetim')}}/js/gleek.js"></script>
    <script src="{{asset('yonetim')}}/js/styleSwitcher.js"></script>

    <!-- Chartjs -->
    <script src="{{asset('yonetim')}}/plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Circle progress -->
    <script src="{{asset('yonetim')}}/plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="{{asset('yonetim')}}/plugins/d3v3/index.js"></script>
    <script src="{{asset('yonetim')}}/plugins/topojson/topojson.min.js"></script>
    <script src="{{asset('yonetim')}}/plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Morrisjs -->
    <script src="{{asset('yonetim')}}/plugins/raphael/raphael.min.js"></script>
    <script src="{{asset('yonetim')}}/plugins/morris/morris.min.js"></script>
    @yield('js')
    



    <script src="{{asset('yonetim')}}/js/dashboard/dashboard-1.js"></script>

</body>

</html>