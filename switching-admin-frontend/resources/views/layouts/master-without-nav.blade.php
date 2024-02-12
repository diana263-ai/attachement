<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-topbar="light" data-sidebar-image="none">

<head>
    <meta charset="utf-8" />
    <title>@yield('title') | DGT PAY ADMIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="poscloud" name="poscloud" />
    <meta content="cm" name="author" />
    <!-- Zuva icon -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/nmbz/logo-1.png')}}">
    @include('layouts.head-css')
</head>

<style>
    body {
        background-color:#1a3561;
    }

    .button-custom {
        background-color: #1a3561;
        color: white;
    }

    .button-custom:hover {
        background-color:#1a3561;
        color: white;
    }

    .form-check-input:checked {
        background-color:#1a3561;
        border-color:#1a3561;
    }
</style>

<!-- @yield('body') -->

<body>

    @yield('content')

    @include('layouts.vendor-scripts')
</body>

</html>
