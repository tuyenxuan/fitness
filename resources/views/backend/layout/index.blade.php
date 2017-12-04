<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thể hình 24h - Quản lý luyện tập</title>
    <base href="{{ asset('') }}">
    <link rel="stylesheet" type="text/css" href="lib/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="lib/font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="backend/css/main.css">
    <script src="lib/jQuery/jquery-3.2.1.min.js"></script>
    <script src="lib/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
    <script src="lib/ckeditor/ckeditor.js"></script>
</head>
<body>
<div class="container">
    @include('backend.layout.header')
    @include('backend.layout.left-menu')
    <div class="main-content col-md-9">
        @yield('content')
    </div>
</div>
@include('backend.layout.footer')
</body>
</html>