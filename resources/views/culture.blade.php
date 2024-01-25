@extends('layouts.app')
@section('title', 'Culture')
@section('main')
    <div class="about_bg3" style="background: url(/assets/images/culture.png) center center no-repeat;background-size:cover;">
        <div class="about_t3  anim anim-1">Culture</div>
        <div class="about_con anim anim-1">
            {!! $global['culture'] ?? '' !!}
        </div>
    </div>
@endsection
