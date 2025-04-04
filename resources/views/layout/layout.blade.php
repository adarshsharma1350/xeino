<!DOCTYPE html>
<html lang="en">

    @include('layout.header')

    <body data-menu-color="light" data-sidebar="default">

    <div id="app-layout">

        @include('layout.navbar')
        @include('layout.sidebar')

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-xxl">
                    @yield('content')
                </div> <!-- container-fluid -->
            </div> <!-- content -->

            @include('layout.footer')

        </div>

    </div>
    <!-- END wrapper -->

    <!-- Vendor -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>

    <!-- Apexcharts JS -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- for basic area chart -->
    <script src="../../../apexcharts.com/samples/assets/stock-prices.js"></script>

    <!-- Widgets Init Js -->
    <script src="assets/js/pages/analytics-dashboard.init.js"></script>

    <!-- App js-->
    <script src="assets/js/app.js"></script>

</body>

<!-- Mirrored from zoyothemes.com/tapeli/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Nov 2024 12:42:48 GMT -->

</html>
