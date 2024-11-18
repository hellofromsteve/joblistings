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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    @vite("resources/js/app.js")
    @inertiaHead()
    @routes

</head>

<body class="blue-theme">
    @inertia()


    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->


    <script src="{{ asset("homeassets/js/popper.min.js") }}"></script>
    <script src="{{ asset("homeassets/js/jquery.min.js") }}"></script>
    <script src="{{ asset("homeassets/js/bootstrap.min.js") }}"></script>



    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script> --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>




    <script src="{{ asset("homeassets/js/rangeslider.js") }}"></script>
    <script src="{{ asset("homeassets/js/jquery.nice-select.min.js") }}"></script>
    <script src="{{ asset("homeassets/js/slick.js") }}"></script>
    <script src="{{ asset("homeassets/js/counterup.min.js") }}"></script>


    <script src="{{ asset("homeassets/js/custom.js") }}"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->

    {{-- Candidate and Employer JS --}}

    <!-- Morris.js charts -->
    <script src="{{ asset("homeassets/js/raphael/raphael.min.js") }}"></script>
    <script src="{{ asset("homeassets/js/morris.js/morris.min.js") }}"></script>
    <!-- Custom Chart JavaScript -->
    <script src="{{ asset("homeassets/js/custom/dashboard.js") }}"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->

</body>

</html>
