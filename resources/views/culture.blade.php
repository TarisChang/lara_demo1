@extends('layouts.app')
@section('title', 'Culture')
@section('main')
    <div class="about_bg3">
        <div class="about_t3  anim anim-1">Culture</div>
        <div class="about_con2 anim anim-2">
            {!! $global['culture'] ?? '' !!}
        </div>
    </div>
@endsection
