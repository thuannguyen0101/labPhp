<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Library Assets | Kiaalap - Kiaalap Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="/adminLTE/img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="/adminLTE/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="/adminLTE/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="/adminLTE/css/owl.carousel.css">
    <link rel="stylesheet" href="/adminLTE/css/owl.theme.css">
    <link rel="stylesheet" href="/adminLTE/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="/adminLTE/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="/adminLTE/css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="/adminLTE/css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="/adminLTE/css/main.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="/adminLTE/css/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="/adminLTE/css/morris/adminLTE/js/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="/adminLTE/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="/adminLTE/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="/adminLTE/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="/adminLTE/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="/adminLTE/css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="/adminLTE/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="/adminLTE/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="/adminLTE/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
@include('admin/partial.sidebar')
<div class="all-content-wrapper">
    @include('admin/partial.header')

    @yield('content')
    @include('admin/partial.footer')
    @include('admin/partial.js')
</div>
</body>
</html>
