<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('') }}lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ asset('') }}lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('') }}css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('') }}css/style.css" rel="stylesheet">

    <link href="{{ asset('') }}lib/datatables/datatables.min.css" rel="stylesheet">
    <link href="{{ asset('lib/select2/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/kartik-v-bootstrap-fileinput-9022178/css/fileinput.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/dropzone/dropzone.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/fontawesome-free-6.5.1-web/css/all.min.css') }}">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">

        @include('layout.loading')


        @include('layout.sidebar')


        <!-- Content Start -->
        <div class="content">
            @include('layout.navbar')

            @yield('container')

            @include('layout.footer')
        </div>
        <!-- Content End -->

    </div>

    <!-- JavaScript Libraries -->

    <script src="{{ asset('lib/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('lib/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('') }}lib/datatables/datatables.min.js"></script>
    <script src="{{ asset('') }}lib/select2/select2.min.js"></script>
    <script src="{{ asset('') }}lib/daterangepicker/moment.min.js"></script>
    <script src="{{ asset('lib/datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('') }}lib/kartik-v-bootstrap-fileinput-9022178/js/fileinput.min.js"></script>
    <script src="{{ asset('') }}lib/daterangepicker/daterangepicker.min.js"></script>
    <script src="{{ asset('lib/dropzone/dropzone.min.js') }}"></script>
    <script src="{{ asset('') }}lib/chart/chart.min.js"></script>
    <script src="{{ asset('') }}lib/easing/easing.min.js"></script>
    <script src="{{ asset('') }}lib/waypoints/waypoints.min.js"></script>
    <script src="{{ asset('') }}lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{ asset('') }}lib/tempusdominus/js/moment.min.js"></script>
    <script src="{{ asset('') }}lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="{{ asset('') }}lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>


    <!-- Template Javascript -->
    <script src="{{ asset('') }}js/main.js"></script>

</body>

</html>
