@extends('layouts.app')
@section('title', '發展歷程')
@section('main')
    <style>
    </style>
    <!--正文begin-->
    <div class="about_bg2" style="background: url(/assets/images/history.png) center top no-repeat;">
        <div class="about_con anim anim-1">
            {!! $global['history'] ?? '' !!}
        </div>
    </div>
    <!--正文end-->
@endsection
