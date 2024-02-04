<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="@yield('description', 'Rail Work Ltd., A Global Supplier for Railway Rail Grinding. Expert in Rail Grinding, Rail Grinder Overhaul & Rail Measurement. We are dedicated to setting new standards in rail maintenance. Experience the difference with our professional services designed to elevate the performance and safety of metro systems and high-speed rail networks.')">
    <meta name="keywords" content="@yield('keywords', 'rail grinding, track grinding, rail measurement, grinder overhaul, hasrco grinder, rail work, rail profile, rail corrugation, 鋼軌研磨車, 磨軌車, 打磨車, 磨軌, 鋼軌量測, 波狀磨耗')">

    <title>@yield('title')｜{{ $global['name'] ?? '' }}</title>
    
    <link rel="stylesheet" href="/assets/css/style.css?v={{ env('VERSION') }}">
    <link rel="stylesheet" href="/assets/css/anim.css?v={{ env('VERSION') }}">
    <link rel="stylesheet" href="/assets/css/css.css?v={{ env('VERSION') }}">
    <link rel="stylesheet" href="/assets/css/index.css?v={{ env('VERSION') }}">

    <script src="/assets/js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="/assets/js/jquery.superslide.2.1.1.js"></script>
    <script src="/assets/js/jquery.caroufredsel.js?v={{ env('VERSION') }}"></script>
    <script src="/assets/js/jquery.touchswipe.min.js?v={{ env('VERSION') }}"></script>
    <script src="/assets/js/public.js?v={{ env('VERSION') }}"></script>
    <script src="/assets/js/anim.js?v={{ env('VERSION') }}"></script>
    
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

    <script language="javascript" src="/assets/js/foot.js?v={{ env('VERSION') }}"></script>
    @yield('js')
</body>

</html>
