<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/x-icon" href="{{ asset("homeassets/img/favicon.png") }}">

    <!-- Custom CSS -->
    <link href="{{ asset("homeassets/css/styles.css") }}" rel="stylesheet">

    <!-- Colors CSS -->
    <link href="{{ asset("homeassets/css/colors.css") }}" rel="stylesheet">

    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> --}}

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    @vite("resources/js/app.js")
    @inertiaHead()
    @routes

</head>

<body class="blue-theme">
    @inertia()


    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->








    <script src="{{ asset("homeassets/js/jquery.min.js") }}"></script>
    <script src="{{ asset("homeassets/js/popper.min.js") }}"></script>
    <script src="{{ asset("homeassets/js/bootstrap.min.js") }}"></script>
    <script src="{{ asset("homeassets/js/rangeslider.js") }}"></script>
    {{-- <script src="{{ asset("homeassets/js/jquery.nice-select.min.js") }}"></script> --}}
    <script src="{{ asset("homeassets/js/slick.js") }}"></script>
    <script src="{{ asset("homeassets/js/counterup.min.js") }}"></script>



    <script src="{{ asset("homeassets/js/custom.js") }}"></script>

    <script src="{{ asset("homeassets/js/raphael/raphael.min.js") }}"></script>
    <script src="{{ asset("homeassets/js/morris.js/morris.min.js") }}"></script>
    <script src="{{ asset("homeassets/js/custom/dashboard.js") }}"></script>

</body>

</html>
