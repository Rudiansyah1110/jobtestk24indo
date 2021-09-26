<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('css/style_temp.css') }}">

<title>JobTest Apps</title>
</head>

<body>
<!-- NavBar Header -->

<nav class="navbar navbar-expand-lg bg-success fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">Job-Test</a>
    </div>
</nav>

@yield('container')

<!-- Optional JavaScript -->
<script src="{{ asset('js/jquery-3.6.0.js') }}" ></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@if(Session::has('success_update_info'))
    <script>
        swal("Great Jobs!", "{!! Session::get('success_update_info') !!}", "success");
    </script>
@endif

@if(Session::has('error_update_info'))
    <script>
        swal("Upps Sorry Something Wrong !", "{!! Session::get('error_update_info') !!}", "error");
    </script>
@endif


@if(Session::has('success_create_info'))
    <script>
        swal("Great Jobs!", "{!! Session::get('success_create_info') !!}", "success");
    </script>
@endif


@if(Session::has('success_delete'))
    <script>
        swal("Great Jobs!", "{!! Session::get('success_delete') !!}", "success");
    </script>
@endif

  </body>
</html>