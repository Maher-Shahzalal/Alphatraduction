<!DOCTYPE html>
<html lang="{{ app()->getLocale() != 'ar' ? 'ltr' : 'rtl' }}">
<head>
    <meta charset="utf-8">
    <title> @yield('title') </title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/roboto-font.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-5/css/fontawesome-all.min.css') }}">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="{{ asset('css/styleeee.css') }}"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="form-v5" dir="{{ app()->getLocale() != 'ar' ? 'ltr' : 'rtl' }}">
<div class="page-content">
    <div class="form-v5-content">
            @yield('content')
    </div>
</div>
</body>
</html>

