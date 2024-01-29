<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">

    <title>@yield('title')｜{{ $global['name'] ?? '' }}</title>
    
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/anim.css">
    <link rel="stylesheet" href="/assets/css/css.css">
    <link rel="stylesheet" href="/assets/css/index.css">

    <script src="/assets/js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="/assets/js/jquery.superslide.2.1.1.js"></script>
    <script src="/assets/js/jquery.caroufredsel.js"></script>
    <script src="/assets/js/jquery.touchswipe.min.js"></script>
    <script src="/assets/js/public.js"></script>
    <script src="/assets/js/anim.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    @yield('head')
</head>

<body>
    {{ $global['fb_messenger'] ?? '' }}
    @include('layouts.header')
    @yield('main')
    @include('layouts.footer')

    <script language="javascript" src="/assets/js/foot.js"></script>
    @yield('js')
</body>

</html>
