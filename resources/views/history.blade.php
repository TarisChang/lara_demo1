@extends('layouts.app')
@section('title', 'History')
@section('main')
    <style>
    </style>
    <div class="about_bg2" style="background: url(/assets/images/history.png) center top no-repeat;background-size:cover;">
        <div class="about_con anim anim-1">
            {!! $global['history'] ?? '' !!}
        </div>
    </div>
@endsection
