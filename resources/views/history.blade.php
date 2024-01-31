@extends('layouts.app')
@section('title', 'History')
@section('head')
    <style>
        table {
            width: 100% !important;
        }

        tbody>tr {
            height: 60px !important;
        }
        tbody>tr td {
            vertical-align: text-top;
        }

        tbody>tr td:first-child {
            width: 30% !important;
        }

        tbody>tr td:nth-child(2)::before {
            content: '——';
            margin-right: .5rem;
        }

        @media screen and (max-width: 480px) {
            tbody>tr td:first-child {
                width: 40% !important;
            }

            tbody>tr td {
                padding: 15px 0 !important;
            }
        }
    </style>
@endsection
@section('main')
    <div class="about_bg3" style="background: url(/assets/images/history2.png) center top no-repeat;background-size:cover;">
        <div class="about_t3  anim anim-1">History</div>
        <div class="about_con anim anim-1">
            {!! $global['history'] ?? '' !!}
        </div>
    </div>
@endsection
