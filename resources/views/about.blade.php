@extends('layouts.app')
@section('title', '關於我們')
@section('main')
    <div class="about_bg" style="background: url(/assets/images/world.png) center top no-repeat;background-size:cover;">
        <div class="about_con anim anim-1" >
            {!! $global['about'] ?? '' !!}
        </div>
    </div>
@endsection
