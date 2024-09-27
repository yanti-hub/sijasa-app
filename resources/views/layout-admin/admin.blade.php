<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/template/dist/assets/css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{ asset('/template/dist/assets/vendors/iconly/bold.css')}}">

    <link rel="stylesheet" href="{{ asset('/template/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{ asset('/template/dist/assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/app.css')}}"> --}}
    <link rel="stylesheet" href="{{ asset('/template/dist/assets/css/app.css')}}">
    <link rel="shortcut icon" href="{{ asset('/template/dist/assets/images/favicon.svg')}}" type="image/x-icon">
</head>

<body>
    <div id="app">
       @include('layout-admin.sidebar')
        <div id="main">
            @include('layout-admin.header')

            @include('layout-admin.content')
            @include('layout-admin.footer')
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>