@extends('layouts.app')
@section('title', '關於我們')
@section('main')
    <!--正文begin-->
    <div class="about_bg" style="background: url(/assets/images/world.png) center top no-repeat;">
        <div class="about_con anim anim-1" >
            {!! $global['about'] ?? '' !!}
        </div>
    </div>
    <!--正文end-->
@endsection
