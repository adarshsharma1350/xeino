<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

        <meta charset="utf-8" />
        <title> @yield('auth-title') | {{ config('app.name') }} </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured portfolio which can provide you your breif or vast       information about your carrer.." />
        <meta name="author" content="Xeino" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

        <!-- App css -->
        <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

        <!-- Icons -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body class="bg-white">

        <!-- Begin page -->
            @yield('auth-content')
        <!-- END wrapper -->

        <!-- Vendor -->
        <script src="{{asset("assets/libs/jquery/jquery.min.js") }}"></script>
        <script src="{{asset("assets/libs/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
        <script src="{{asset("assets/libs/simplebar/simplebar.min.js") }}"></script>
        <script src="{{asset("assets/libs/node-waves/waves.min.js") }}"></script>
        <script src="{{asset("assets/libs/waypoints/lib/jquery.waypoints.min.js") }}"></script>
        <script src="{{asset("assets/libs/jquery.counterup/jquery.counterup.min.js") }}"></script>
        <script src="{{asset("assets/libs/feather-icons/feather.min.js") }}"></script>

        <!-- App j2s-->
        <script src="{{asset('assets/js/app.js')}}"></script>

    </body>

</html>
