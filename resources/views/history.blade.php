@extends('layouts.app')
@section('title', 'History')
@section('main')
    <div class="about_bg3" style="background: url(/assets/images/history2.png) center top no-repeat;background-size:cover;">
        <div class="about_t3  anim anim-1">History</div>
        <div class="about_con anim anim-1">
            {!! $global['history'] ?? '' !!}
        </div>
    </div>
@endsection
