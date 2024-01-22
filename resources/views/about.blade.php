@extends('layouts.app')
@section('title', 'About Us')
@section('main')
    <div class="about_bg" style="background: url(/assets/images/world2.png) center top no-repeat;background-size:cover;">
        <div class="about_con anim anim-1" >
            {!! $global['about'] ?? '' !!}
        </div>
    </div>
@endsection
