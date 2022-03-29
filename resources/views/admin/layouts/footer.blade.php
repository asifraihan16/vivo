</div>
        <!-- end page-wrapper -->

        


        <!-- jQuery  -->
        <script src="{{ URL::asset('admin/assets/js/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('admin/assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ URL::asset('admin/assets/js/metismenu.min.js') }}"></script>
        <script src="{{ URL::asset('admin/assets/js/waves.js') }}"></script>
        <script src="{{ URL::asset('admin/assets/js/feather.min.js') }}"></script>
        <script src="{{ URL::asset('admin/assets/js/simplebar.min.js') }}"></script>
        <script src="{{ URL::asset('admin/assets/js/moment.js') }}"></script>
        <script src="{{ URL::asset('admin/assets/plugins/daterangepicker/daterangepicker.js') }}"></script>

        {{-- <script src="{{ URL::asset('admin/assets/plugins/apex-charts/apexcharts.min.js') }}"></script>
        <script src="{{ URL::asset('admin/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
        <script src="{{ URL::asset('admin/assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js') }}"></script>
        <script src="{{ URL::asset('admin/assets/pages/jquery.analytics_dashboard.init.js') }}"></script> --}}

        @yield('content-js')

        <!-- App js -->
        <script src="{{ URL::asset('admin/assets/js/app.js') }}"></script>
        
    </body>

</html>