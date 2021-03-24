<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Usuluna
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/paper-dashboard.css?v=2.0.1') }}" rel="stylesheet" />

</head>

<body class="">
<div class="wrapper ">
    @include('layouts.sidebar')
    <div class="main-panel">
        <!-- Navbar -->
        @include('layouts.navbar')
        <!-- End Navbar -->
        <div class="content">
            <div class="row">
                <div class="col-12">
                    @include('flash::message')
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h4>@yield('title')</h4>
                </div>
            </div>
            @yield('content')
        </div>
    </div>
</div>
<!--   Core JS Files   -->
<script src="{{ asset('assets/js/core/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>

<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('assets/js/paper-dashboard.min.js?v=2.0.1') }}" type="text/javascript"></script>
</body>

</html>
