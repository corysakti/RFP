<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CoreUI CSS -->
    <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css" crossorigin="anonymous">

    <title>{{ config('app.name', 'RFP')}}</title>
</head>

<body class="c-app flex-row align-items-center">
    @yield('content')
    <script src="vendors/@coreui/coreui-pro/js/coreui.bundle.min.js"></script>
    <script src="vendors/@coreui/icons/js/svgxuse.min.js"></script>
</body>

</html>