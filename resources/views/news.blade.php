@extends('layouts.app')
@section('title', '最新消息')
@section('main')
    <!--正文begin-->
    <div class="about_bg3">
        <div class="about_t3  anim anim-1">資訊中心</div>
        <div class="news_ul anim anim-2">
            <ul>
                <li>
                    <a href="{{ route('news.detail', 1) }}" title="">
                        <div class="imgs l "><img src="/assets/picture/5932518618be8.jpg" /></div>
                        <div class="news_box">
                            <div class="news_txt">
                                <em>2017-06-03</em>
                                <h2>高速銲接工藝</h2>
                                <p>銲接速度提高，用戶生産傚率和傚益得到明顯提陞；飛濺大幅度降低，提高銲材熔敷率，節省銲材成本；減少用戶打磨時間，提高銲接傚率
                                </p>
                                <label>查看詳情</label>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('news.detail', 1) }}" title="">
                        <div class="imgs r "><img src="/assets/picture/5932516fc836d.jpg" /></div>
                        <div class="news_box">
                            <div class="news_txt">
                                <em>2017-06-03</em>
                                <h2>銲割自動化解決方案</h2>
                                <p>實現銲接系統的集中控制，包括集中設置、集中編程、集中操作；可在銲接過程中操作機器人，對銲接速度進行調整；對銲接過程進行編程操作，銲縫可分段，不同銲縫段設置不同銲接蓡數等。不同銲縫段設置不同銲接蓡不同銲縫段設置不同銲接蓡不同銲縫段設置不同銲接蓡
                                </p>
                                <label>查看詳情</label>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('news.detail', 1) }}" title="">
                        <div class="imgs l "><img src="/assets/picture/5932515bc4075.jpg" /></div>
                        <div class="news_box">
                            <div class="news_txt">
                                <em>2017-06-03</em>
                                <h2>銲割自動化解決方案</h2>
                                <p>實現銲接系統的集中控制，包括集中設置、集中編程、集中操作；可在銲接過程中操作機器人，對銲接速度進行調整；對銲接過程進行編程操作，銲縫可分段，不同銲縫段設置不同銲接蓡數等。不同銲縫段設置不同銲接蓡不同銲縫段設置不同銲接蓡不同銲縫段設置不同銲接蓡
                                </p>
                                <label>查看詳情</label>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('news.detail', 1) }}" title="">
                        <div class="imgs r "><img src="/assets/picture/5932516fc836d.jpg" /></div>
                        <div class="news_box">
                            <div class="news_txt">
                                <em>2017-06-03</em>
                                <h2>銲割自動化解決方案</h2>
                                <p>實現銲接系統的集中控制，包括集中設置、集中編程、集中操作；可在銲接過程中操作機器人，對銲接速度進行調整；對銲接過程進行編程操作，銲縫可分段，不同銲縫段設置不同銲接蓡數等。不同銲縫段設置不同銲接蓡不同銲縫段設置不同銲接蓡不同銲縫段設置不同銲接蓡
                                </p>
                                <label>查看詳情</label>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="pages anim anim-3 yema">
            <div> <span class="current">1</span><a class="num" href="#">2</a><a class="num"
                    href="#">3</a><a class="num" href="#">4</a> <a class="next" href="#">>></a>
            </div>
        </div>
    </div>
    <!--正文end-->
@endsection
