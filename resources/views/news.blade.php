@extends('layouts.app')
@section('title', 'News')
@section('main')
    <!--正文begin-->
    <div class="about_bg3">
        <div class="about_t3  anim anim-1">News</div>
        <div class="news_ul anim anim-2">
            <ul>
                @foreach ($data as $item)
                    <li>
                        <a href="{{ route('news.detail', $item->title) }}" title="">
                            <div class="imgs {{ $loop->iteration % 2 == 0 ? 'r' : 'l' }}"><img src="/uploads/{{ $item->image }}" /></div>
                            <div class="news_box">
                                <div class="news_txt">
                                    <em>{{ $item->news_at }}</em>
                                    <h2>{{ $item->title }}</h2>
                                    {!! mb_substr(strip_tags($item->content), 0, 120) !!}...
                                    <label>查看詳情</label>
                                </div>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        @include('layouts.paginate', ['paginator' => $data])
    </div>
    <!--正文end-->
@endsection
