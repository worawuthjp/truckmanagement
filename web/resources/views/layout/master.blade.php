<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('partials.header')
</head>
<body class="hold-transition sidebar-mini layout-fixed fixed">
<div class="wrapper">
    @include('partials.navbar')
    @include('partials.sidebar')
    @yield('body')
</div>{{--/wrapper--}}
@include('partials.footer')
</body>
</html>
